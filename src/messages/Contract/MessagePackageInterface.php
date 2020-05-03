<?php

namespace SayaCloud\Messages\Contract;
/**
 * Interface MessagePackageInterface
 * @package SayaCloud\Messages\Contract
 */
interface MessagePackageInterface
{
    /**
     * Assemble message data with signature to json
     *
     * @return string
     */
    public function toJson(): string;

    /**
     * Assemble message data with signature to array
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * Make data signature
     *
     * @param array $data
     * @return string signature
     */
    public function makeSignature(array $data): string;

}