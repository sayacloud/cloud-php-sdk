<?php

namespace SayaCloud\Messages;

use SayaCloud\Messages\Contract\AbstractMessagePackage;
use SayaCloud\Messages\Contract\MessageSendInterface;
use SayaCloud\Exception\MQException;

class AMQP
{
    protected $host = '';

    protected $port = 5672;

    protected $user = '';

    protected $password = '';

    public static function push(string $messageJson):bool
    {
        // TODO: Implement sendMessage() method.
        throw new MQException('Amqp not configured');
    }


}