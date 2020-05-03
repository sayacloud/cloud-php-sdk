<?php

namespace SayaCloud\Messages;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use SayaCloud\Messages\Exception\ApiException;

/**
 * Class DirectApi
 * @package SayaCloud\Messages
 */
class DirectApi
{
    /**
     * @param array $request_data
     * @return bool
     * @throws ApiException
     */
    public static function request(array $request_data)
    {
        $client = new Client(['timeout' => 1.5]);
        try {
            $response = $client->request('POST', Messages::getApiUrl(), [
                'form_params' => $request_data,
                'headers' => ['App-Key' => Messages::getAppKey()]
            ]);
        } catch (ConnectException $e) {
            // Catch connection Exception then try again
            $response = $client->request('POST', Messages::getApiUrl(), [
                'form_params' => $request_data,
                'headers' => ['App-Key' => Messages::getAppKey()]
            ]);
        }

        $statusCode = $response->getStatusCode();
        $result = $response->getBody()->getContents();

        if ($statusCode !== 200) {
            throw new ApiException('Unexpected response status, perhaps network or service down');
        }
        $result = \GuzzleHttp\json_decode($result, true);
        if (isset($result['errcode']) && $result['errcode'] === 0) {
            return true;
        }
        throw new ApiException($result['msg'] ?? 'Api error');
    }

    /**
     * @param array $query_data
     * @return mixed|string
     * @throws ApiException
     */
    public static function query(array $query_data)
    {
        $client = new Client(['timeout' => 1.5]);
        $url = Messages::getApiUrl();
        $url.='/query?'.http_build_query($query_data);
        try {
            $response = $client->request('GET', $url, [
                'headers' => ['App-Key' => Messages::getAppKey()]
            ]);
        } catch (ConnectException $e) {
            // Catch connection Exception then try again
            $response = $client->request('GET', $url, [
                'headers' => ['App-Key' => Messages::getAppKey()]
            ]);
        }

        $statusCode = $response->getStatusCode();
        $result = $response->getBody()->getContents();

        if ($statusCode !== 200) {
            throw new ApiException('Unexpected response status, perhaps network or service down');
        }
        $result = \GuzzleHttp\json_decode($result, true);
        if (isset($result['errcode']) && $result['errcode'] === 0) {
            return $result;
        }
        throw new ApiException($result['msg'] ?? 'Api error');
    }

}