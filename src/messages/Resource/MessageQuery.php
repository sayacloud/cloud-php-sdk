<?php

namespace SayaCloud\Messages\Resource;

use SayaCloud\Messages\Contract\AbstractMessagePackage;

class MessageQuery extends AbstractMessagePackage
{
    /**
     * 消息UUID
     *
     * @var string
     */
    protected $message_uuid;

    /**
     * @return string
     */
    public function getMessageUuid(): string
    {
        return $this->message_uuid;
    }

    /**
     * @param string $message_uuid
     */
    public function setMessageUuid(string $message_uuid)
    {
        $this->message_uuid = $message_uuid;
    }
}