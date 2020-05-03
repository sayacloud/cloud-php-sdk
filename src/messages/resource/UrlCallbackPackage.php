<?php

namespace SayaCloud\Messages\Resource;

use SayaCloud\Messages\Contract\AbstractMessagePackage;
use SayaCloud\Lib\ContentType;

/**
 * Class UrlCallbackPackage
 * @package SayaCloud\Messages\Resource
 */
class UrlCallbackPackage extends AbstractMessagePackage
{
    /**
     * Package type
     *
     * @var string
     */
    protected $_package = 'url_callback';

    /**
     * Callback request method
     *
     * @var string
     */
    protected $request_method;

    /**
     * Callback request url
     *
     * @var string
     */
    protected $request_url;

    /**
     * Callback http headers
     *
     * @var array
     */
    protected $request_header;

    /**
     * Callback request data
     *
     * @var array
     */
    protected $request_body;

    /**
     * Callback content type
     *
     * @var string
     */
    protected $content_type = ContentType::URLENCODE;

    /**
     * Request timeout
     *
     * @var int
     */
    protected $request_timeout = 5;

    /**
     * Expected standard response for call success
     *
     * @var string
     */
    protected $success_response = 'success';

    /**
     * If the response content not match the success_response, then set retry after the setting delay time
     * The parameter is an array with seconds in integer
     * Default is empty, means no retry
     * @example [5,15,40]
     * Retry time point is the beginning time + the number in the array
     * eg. If the message package is create at 2020-05-01 10:00:00
     * and if the first time to callback response is failed,
     * then the system will retry send the same callback at 2020-05-01 10:00:05
     * and if the response is still failed at the second time
     * then the system will retry send the same callback at 2020-05-01 10:00:15
     * and if the response is still failed at the third time
     * the system will retry send the same callback at 2020-05-01 10:00:40
     * and if this is still failed, this message will be discarded
     *
     * @var array
     */
    protected $retry_delay = [];

    /**
     * @return string
     */
    public function getRequestMethod(): string
    {
        return $this->request_method;
    }

    /**
     * @param string $request_method
     */
    public function setRequestMethod(string $request_method)
    {
        $this->request_method = $request_method;
    }

    /**
     * @return string
     */
    public function getRequestUrl(): string
    {
        return $this->request_url;
    }

    /**
     * @param string $request_url
     */
    public function setRequestUrl(string $request_url)
    {
        $this->request_url = $request_url;
    }

    /**
     * @return array
     */
    public function getRequestHeader(): array
    {
        return $this->request_header;
    }

    /**
     * @param array $request_header
     */
    public function setRequestHeader(array $request_header)
    {
        $this->request_header = $request_header;
    }

    /**
     * @return array
     */
    public function getRequestBody(): array
    {
        return $this->request_body;
    }

    /**
     * @param array $request_body
     */
    public function setRequestBody(array $request_body)
    {
        $this->request_body = $request_body;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->content_type;
    }

    /**
     * @param string $content_type
     */
    public function setContentType(string $content_type)
    {
        $this->content_type = $content_type;
    }

    /**
     * @return int
     */
    public function getRequestTimeout(): int
    {
        return $this->request_timeout;
    }

    /**
     * @param int $request_timeout
     */
    public function setRequestTimeout(int $request_timeout)
    {
        $this->request_timeout = $request_timeout;
    }

    /**
     * @return string
     */
    public function getSuccessResponse(): string
    {
        return $this->success_response;
    }

    /**
     * @param string $success_response
     */
    public function setSuccessResponse(string $success_response)
    {
        $this->success_response = $success_response;
    }

    /**
     * @return array
     */
    public function getRetryDelay(): array
    {
        return $this->retry_delay;
    }

    /**
     * @param array $retry_delay
     */
    public function setRetryDelay(array $retry_delay)
    {
        $this->retry_delay = $retry_delay;
    }


}
