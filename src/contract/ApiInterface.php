<?php

namespace SayaCloud\Contract;

/**
 * Interface ApiInterface
 * @package SayaCloud\Contract
 */
interface ApiInterface
{
    /**
     * @param ParameterInterface $requestData
     */
    public function request(ParameterInterface $requestData);
}