<?php

namespace SayaCloud\Messages;

use SayaCloud\Messages\Contract\AbstractMessagePackage;
use SayaCloud\Messages\Exception\MessageException;
use SayaCloud\Messages\Resource\EmailPackage;
use SayaCloud\Messages\Resource\MessageQuery;
use SayaCloud\Messages\Resource\SmsPackage;

/**
 * Class Messages
 * @package SayaCloud\Messages
 * @method static EmailPackage newEmailPackage()
 * @method static SmsPackage newSmsPackage()
 * @method static sendMessage(AbstractMessagePackage $messagePackage)
 * @method static sendQuery(MessageQuery $query)
 * @method static string getApiUrl()
 * @method static string getAppSecret()
 * @method static string getAppKey()
 */
class Messages
{
    private static $agentInstance;

    /**
     * @param array $options
     * @return MscAgent
     * @throws MessageException
     */
    public static function agent(array $options): MscAgent
    {
        if (!self::$agentInstance) {
            self::$agentInstance = new MscAgent($options);
        }
        return self::$agentInstance;
    }

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws MessageException
     */
    public static function __callStatic($method, $arguments)
    {
        if (!self::$agentInstance) {
            throw new MessageException('agent not initialized');
        }
        return self::$agentInstance->{$method}(...$arguments);
    }
}
