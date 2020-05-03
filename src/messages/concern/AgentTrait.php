<?php

namespace SayaCloud\Messages\Concern;

use SayaCloud\Exception\MessageException;

/**
 * Trait AgentTrait
 * @package SayaCloud\Messages\Concern
 */
trait AgentTrait
{
    /**
     * @param array $options
     * @return int
     * @throws MessageException
     */
    private function setGetSender(array $options): int
    {
        if (!isset($options['message_sender']) || !in_array($options['message_sender'], [self::USE_AMQP, self::USE_DiRECT_API, self::USE_BOTH])) {
            throw new MessageException('options.message_sender invalid');
        }

        return $this->options['sender'] = (int)$options['message_sender'];
    }

    /**
     * @param array $options
     * @return int
     * @throws MessageException
     */
    private function setGetSequence(array $options): int
    {
        if (!isset($options['message_sequence']) || !in_array($options['message_sequence'], [self::SEQUENCE_AMQP, self::SEQUENCE_API])) {
            throw new MessageException('options.sequence invalid');
        }

        return $this->options['sequence'] = (int)$options['message_sequence'];
    }

    /**
     * @param array $options
     * @return string
     * @throws MessageException
     */
    private function setGetAppKey(array $options): string
    {
        if (!isset($options['app_key']) || !$options['app_key']) {
            throw new MessageException('options.app_key is empty');
        }

        return $this->options['app_key'] = (string)$options['app_key'];
    }

    /**
     * @param array $options
     * @return string
     * @throws MessageException
     */
    private function setGetAppSecret(array $options): string
    {
        if (!isset($options['app_secret']) || !$options['app_secret']) {
            throw new MessageException('options.app_secret is empty');
        }

        return $this->options['app_secret'] = (string)$options['app_secret'];
    }

    /**
     * @param array $options
     */
    private function configAmqp(array $options)
    {
        $this->options['amqp_host'] = $options['message_amqp_host'] ?? '';
        $this->options['amqp_exchange'] = $options['message_amqp_exchange'] ?? '';
        $this->options['amqp_user'] = $options['message_amqp_user'] ?? '';
        $this->options['amqp_password'] = $options['message_amqp_password'];
        $this->options['amqp_port'] = $options['message_amqp_port'];
        $this->options['amqp_route_key'] = $options['message_amqp_route'];
        $this->options['amqp_queue'] = $options['message_amqp_queue'];
    }

    /**
     * @param array $options
     * @return array|mixed
     */
    private function setGetApiBase(array $options)
    {
        if (!isset($options['message_api_base'])) {
            return $this->options['api_base'];
        }

        return $this->options['api_base'] = $options['message_api_base'];
    }

    /**
     * @return mixed
     * @throws MessageException
     */
    public function getAppKey()
    {
        if (!$this->options['app_key']) {
            throw new MessageException('options.app_key is empty');
        }

        return $this->options['app_key'];
    }

    /**
     * @return mixed
     * @throws MessageException
     */
    public function getAppSecret()
    {
        if (!$this->options['app_secret']) {
            throw new MessageException('options.app_secret is empty');
        }

        return $this->options['app_secret'];
    }

    /**
     * @return string
     * @throws MessageException
     */
    public function getApiUrl()
    {
        if (!isset($this->options['api_base']) || !$this->options['api_base']) {
            throw new MessageException('options.api_base is not defined');
        }

        return (string)$this->options['api_base'];
    }
}