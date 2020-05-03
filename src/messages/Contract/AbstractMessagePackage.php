<?php

namespace SayaCloud\Messages\Contract;

use Ramsey\Uuid\Uuid;
use SayaCloud\Messages\Messages;

/**
 * Class AbstractMessagePackage
 * @package SayaCloud\Messages\Contract
 */
abstract class AbstractMessagePackage implements MessagePackageInterface
{
    /**
     * Message uuid
     *
     * @var string
     */
    protected $_uuid;

    /**
     * Message process valid time
     *
     * @var int
     */
    protected $_valid_time;

    /**
     * Execute result feedback url
     *
     * @var string|null
     */
    protected $_feedback_url;

    public function __construct()
    {
        $this->_uuid = Uuid::uuid1()->toString();
    }

    /**
     * Assemble message data with signature to array
     *
     * @return array
     */
    final public function toArray(): array
    {
        $data = get_object_vars($this);
        $data['_app'] = Messages::getAppKey();
        $data['_time'] = microtime(true);
        $data['_signature'] = $this->makeSignature($data);
        return $data;
    }

    /**
     * Assemble message data with signature to json
     *
     * @return string
     */
    final public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    /**
     * Make params signature
     *
     * @param array $data
     * @return string
     */
    final public function makeSignature(array $data): string
    {
        $string = $this->convertToString($data);
        $appSecret = Messages::getAppSecret();
        if ($string) {
            return sha1($string . $appSecret);
        }
        return '';
    }

    /**
     * @param array $params
     * @return string
     */
    private function convertToString(array $params): string
    {
        if (!is_array($params) || empty($params)) {
            return '';
        }
        $signArray = [];
        if (is_array($params) && $this->_isArrayIndexContinuous($params)) {
            foreach ($params as $k => $v) {
                if (is_array($v)) {
                    $signArray[] = $this->convertToString($v);
                } else {
                    $signArray[] = (string)$v;
                }
            }
            asort($signArray);
        } else {
            ksort($params);
            foreach ($params as $k => $v) {
                if (is_array($v)) {
                    $signArray[] = $this->convertToString($v);
                } else {
                    $signArray[] = (string)$v;
                }
            }
        }
        return implode('', $signArray);
    }

    /**
     * Check if array indexes is continuous
     * @param array $arr
     * @return bool
     */
    private function _isArrayIndexContinuous(array $arr): bool
    {
        $keys = array_keys($arr);
        return $keys === array_keys($keys);
    }

    /**
     * @return string
     */
    public function getMessageUuid(): string
    {
        return $this->_uuid;
    }

    /**
     * @param int $valid_time
     */
    public function setValidTime(int $valid_time)
    {
        $this->_valid_time = $valid_time;
    }

    /**
     * @param string|null $feedback_url
     */
    public function setFeedbackUrl(string $feedback_url)
    {
        $this->_feedback_url = $feedback_url;
    }

}