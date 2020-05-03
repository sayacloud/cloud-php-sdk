<?php

namespace SayaCloud\Contract;

use GuzzleHttp\Client;
use SayaCloud\Exception\ApiClientException;
use SayaCloud\Exception\ApiException;
use SayaCloud\Lib\ApiSignatureTrait;
use SayaCloud\Lib\RequestMethod;

/**
 * Class ClientAbstract
 * @package SayaCloud\Contract
 */
abstract class ClientAbstract implements ApiInterface
{
    use ApiSignatureTrait;

    protected $appKey;
    protected $appSecret;
    protected $apiUrlBase;

    protected $apiStatusCode;
    protected $apiResponseBody;
    protected $apiResponseHeaders = [];

    /**
     * ApiHandler constructor.
     * @param array $options
     * @throws ApiClientException
     */
    public function __construct(array $options)
    {
        $this->appKey = isset($options['app_key']) ? $options['app_key'] : '';
        $this->appSecret = isset($options['app_secret']) ? $options['app_secret'] : '';
        $this->apiUrlBase = isset($options['api_base']) ? $options['api_base'] : '';
        if (!$this->appKey || !$this->appSecret || !$this->apiUrlBase) {
            throw new ApiClientException('API Client config error, please check config parameters');
        }
    }

    /**
     * @param ParameterInterface $requestData
     * @return mixed
     * @throws ApiClientException
     * @throws ApiException
     */
    public function request(ParameterInterface $requestData)
    {
        $apiParameters = $requestData->getApiParameters();
        $headers = $requestData->createRequestHeaders($this->getAppKey(), $this->getAppSecret());
        $requestMethod = $requestData->getRequestMethod();
        $apiUri = $requestData->getApiUri();
        $httpClient = new Client(['timeout' => 15, 'base_uri' => $this->getApiUrlBase()]);
        try {
            switch ($requestMethod) {
                case RequestMethod::POST:
                    $response = $httpClient->request(RequestMethod::POST, $apiUri, [
                        'form_params' => $apiParameters,
                        'headers' => $headers
                    ]);
                    break;
                case RequestMethod::GET:
                    $response = $httpClient->request(RequestMethod::GET, $apiUri, [
                        'query' => $apiParameters,
                        'headers' => $headers
                    ]);
                    break;
                default:
                    throw new ApiClientException('invalid request method');
            }
            $this->apiStatusCode = $response->getStatusCode();
            if ($this->apiStatusCode !== 200) {
                throw new ApiException('Invalid http response status');
            }
            $this->apiResponseBody = $response->getBody()->getContents();
            $this->apiResponseHeaders = $response->getHeaders();
            return $this->parseResponse();
        } catch (ApiClientException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new ApiException($e->getMessage());
        }
    }

    /**
     * @return mixed
     * @throws ApiException
     * @throws ApiClientException
     */
    private function parseResponse()
    {
        if (!$this->apiResponseBody) {
            throw new ApiException('Api error,response body');
        }
        $data = json_decode($this->apiResponseBody, true);
        if (!$data) {
            throw new ApiException('Api error,response body decode fail');
        }
        if (!isset($data['errcode'])) {
            throw new ApiException('Api error, response missing code parameter');
        }
        if ($data['errcode'] !== 0) {
            if (isset($data['message'])) {
                $apiErrorMessage = $data['message'];
            } elseif (isset($data['msg'])) {
                $apiErrorMessage = $data['msg'];
            } else {
                $apiErrorMessage = 'Api error, no message response';
            }
            throw new ApiException($apiErrorMessage);
        }
        return $data;
    }

    /**
     * @return mixed|string
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @return mixed|string
     */
    public function getAppSecret()
    {
        return $this->appSecret;
    }

    /**
     * @return mixed|string
     */
    public function getApiUrlBase()
    {
        return $this->apiUrlBase;
    }

    /**
     * @return mixed
     */
    public function getApiStatusCode()
    {
        return $this->apiStatusCode;
    }

    /**
     * @return mixed
     */
    public function getApiResponseBody()
    {
        return $this->apiResponseBody;
    }

    /**
     * @return array
     */
    public function getApiResponseHeaders()
    {
        return $this->apiResponseHeaders;
    }
}