<?php

namespace SayaCloud;

use SayaCloud\Exception\MessageException;
use SayaCloud\Exception\ProjectClientException;

class SayaCloud
{
    private static $_client;

    /**
     * @param array $options
     * @return CloudClient
     * @throws Exception\ApiClientException
     */
    public static function client(array $options): CloudClient
    {
        if (!self::$_client) {
            self::$_client = new CloudClient($options);
        }

        return self::$_client;
    }

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws MessageException
     * @throws ProjectClientException
     */
    public static function __callStatic($method, $arguments)
    {
        if (!self::$_client) {
            throw new ProjectClientException('saya cloud client not initialized');
        }

        return self::$_client->{$method}(...$arguments);
    }
}