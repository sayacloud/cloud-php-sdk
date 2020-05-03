<?php

namespace SayaCloud\Messages\Contract;

/**
 * Interface MessageSendInterface
 * @package SayaCloud\Messages\Contract
 */
interface MessageSendInterface
{
    /**
     * @param AbstractMessagePackage $messagePackage
     */
    public function sendMessage(AbstractMessagePackage $messagePackage);
}