<?php

namespace SayaCloud\Messages;

use SayaCloud\Messages\Concern\AgentTrait;
use SayaCloud\Messages\Contract\AbstractMessagePackage;
use SayaCloud\Messages\Contract\MessageSendInterface;
use SayaCloud\Messages\Exception\MessageException;
use SayaCloud\Messages\Resource\EmailPackage;
use SayaCloud\Messages\Resource\MessageQuery;
use SayaCloud\Messages\Resource\SmsPackage;
use SayaCloud\Messages\Resource\UrlCallbackPackage;

/**
 * Class MscAgent
 * @package SayaCloud\Messages
 */
class MscAgent implements MessageSendInterface
{
    use AgentTrait;

    /**
     * Send message to amqp only
     *
     */
    const USE_AMQP = 1;

    /**
     * Send message to http api only
     */
    const USE_DiRECT_API = 2;

    /**
     * Send message to amqp or api
     * if one fail then try another, throw exception is both fail
     * and if the first method succeeded, the second method will be ignored
     *
     * The SEQUENCE parameter defined which try first
     */
    const USE_BOTH = 3;

    /**
     * If USE_BOTH, then amqp try first
     */
    const SEQUENCE_AMQP = 1;

    /**
     * If USE_BOTH, then api try first
     */
    const SEQUENCE_API = 2;

    /**
     * @var array
     *
     */
    protected $options = [
        'app_key' => '',
        'app_secret' => '',
        'sender' => self::USE_BOTH,
        'sequence' => self::SEQUENCE_API,
        'api_base' => '',
        'amqp_host' => '',
        'amqp_port' => 5672,
        'amqp_user' => '',
        'amqp_password' => '',
        'amqp_exchange' => '',
        'amqp_route_key' => '',
        'amqp_queue' => '',
    ];

    /**
     * @param array $options
     * @throws MessageException
     */
    public function __construct(array $options = [])
    {
        $this->setGetSender($options);
        $this->setGetSequence($options);
        $this->setGetApiBase($options);
        $this->setGetAppKey($options);
        $this->setGetAppSecret($options);
        $this->configAmqp($options);
    }

    /**
     * @return EmailPackage
     */
    final public function newEmailPackage(): EmailPackage
    {
        return new EmailPackage();
    }

    /**
     * @return SmsPackage
     */
    final public function newSmsPackage(): SmsPackage
    {
        return new SmsPackage();
    }

    /**
     * @return UrlCallbackPackage
     */
    final public function newUrlCallback(): UrlCallbackPackage
    {
        return new UrlCallbackPackage();
    }

    /**
     * @return MessageQuery
     */
    final public function newMessageQuery(): MessageQuery
    {
        return new MessageQuery();
    }

    /**
     * @param AbstractMessagePackage $messagePackage
     * @return bool
     * @throws Exception\ApiException
     * @throws MessageException
     * @throws Exception\MQException
     */
    final public function sendMessage(AbstractMessagePackage $messagePackage): bool
    {
        if ($this->options['sender'] === self::USE_BOTH) {
            if ($this->options['sequence'] === self::SEQUENCE_API) {
                try {
                    DirectApi::request($messagePackage->toArray());
                } catch (\Exception $e) {
                    // Call HttpAPI fail, then try send AMQP
                    AMQP::push($messagePackage->toJson());
                }
                return true;
            }

            try {
                AMQP::push($messagePackage->toJson());
            } catch (\Exception $e) {
                // Push AMQP fail, then try call Http API
                DirectApi::request($messagePackage->toArray());
            }
            return true;
        }

        if ($this->options['sender'] === self::USE_DiRECT_API) {
            return DirectApi::request($messagePackage->toArray());
        }

        if ($this->options['sender'] === self::USE_AMQP) {
            return AMQP::push($messagePackage->toJson());
        }

        throw new MessageException('options.sender unmatched');
    }

    /**
     * @param MessageQuery $query
     * @return array
     * @throws Exception\ApiException
     */
    final public function sendQuery(MessageQuery $query): array
    {
        return DirectApi::query($query->toArray());
    }

}