<?php

namespace SayaCloud\Contract;
/**
 * Interface ParameterInterface
 * @package SayaCloud\Contract
 */
interface ParameterInterface
{

    /**
     * get api request parameters from api request instance
     *
     * @return array
     */
    public function getApiParameters();

    /**
     * make data signature
     *
     * @param array $apiParameters
     * @param string $appSecret
     *
     * @return string signature
     */
    public function makeSignature(array $apiParameters, string $appSecret);

    /**
     * create http headers for api request
     * Get apiParameters and makeSignature
     *
     * @param string $appKey
     * @param string $appSecret
     * @param string|null $contentType
     * @return array
     * eg. [
     *      'Content-Type'=>'application/x-www-form-urlencoded',
     *      'App-Key'=>'Alxi123Io9',
     *      'Sign'=>'signatureStringHere',
     * ]
     */
    public function createRequestHeaders(string $appKey, string $appSecret,string $contentType = '');

    /**
     * Get Api Uri, eg. '/v1/items'
     *
     * @return string
     */
    public function getApiUri();

    /**
     * Get request method, eg. 'POST'
     *
     * @return string
     */
    public function getRequestMethod();

    /**
     * Get Post request type
     *
     * @return mixed
     */
    public function getContentType();

}