<?php

namespace SayaCloud\Contract;

use Ramsey\Uuid\Uuid;
use ReflectionClass;
use SayaCloud\Lib\ApiSignatureTrait;
use SayaCloud\Lib\ContentType;
use SayaCloud\Lib\RequestMethod;
use Swoft\Stdlib\Helper\ObjectHelper;

/**
 * Class RequestAbstract
 * @package SayaCloud\Contract
 */
abstract class RequestAbstract implements ParameterInterface
{
    use ApiSignatureTrait;

    /**
     * Api request method, make it override in entity class
     *
     * @var string
     */
    protected $requestMethod = RequestMethod::GET;

    /**
     * Api request uri, make it override in entity class
     *
     * @var string
     */
    protected $apiUri = '';

    /**
     * Random string
     *
     * @var string
     */
    protected $random_key;

    /**
     * @var string
     */
    protected $contentType = ContentType::URLENCODE;


    public function __construct(array $arguments = [])
    {
        if (!empty($arguments)) {
            $reflectionClass = new ReflectionClass($this);
            foreach ($arguments as $property => $argument) {
                if (property_exists($this, $property)) {
                    if ($type = ObjectHelper::getPropertyBaseType($reflectionClass->getProperty($property))) {
                        $argument = ObjectHelper::parseParamType($type, $argument);
                    }
                }
                $this->{$property} = $argument;
            }
        }
    }

    /**
     * get api request parameters from api request instance
     *
     * @return array
     * @throws \Exception
     */
    public function getApiParameters()
    {
        if (!$this->random_key) {
            $this->random_key = Uuid::uuid4()->toString();
        }
        $params = get_object_vars($this);
        unset($params['apiUri'], $params['requestMethod'], $params['contentType']);
        return $params;
    }

    /**
     * create http headers for api request
     * Get apiParameters and makeSignature
     *
     * @param string $appKey
     * @param string $appSecret
     * @param string $contentType
     * @return array
     * eg. [
     *      'Content-Type'=>'application/x-www-form-urlencoded',
     *      'APPID'=>'Alxi123Io9',
     *      'Sign'=>'signatureStringHere',
     *      'Date-GMT'=>'Wed, 04 Sep 2019 02:50:59 GMT'
     * ]
     * @throws \Exception
     */
    public function createRequestHeaders(string $appKey, string $appSecret, string $contentType = ContentType::URLENCODE)
    {
        $headers['Content-Type'] = $contentType;
        $headers['App-Key'] = $appKey;

        $apiParameters = $this->getApiParameters();
        $signature = $this->makeSignature($apiParameters, $appSecret);

        $headers['Sign'] = $signature;
        return $headers;
    }

    /**
     * @return mixed
     */
    public function getApiUri()
    {
        return $this->apiUri;
    }

    /**
     * @return mixed
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * @param string $contentType
     */
    public function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

}