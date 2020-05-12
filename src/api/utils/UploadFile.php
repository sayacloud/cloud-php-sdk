<?php

namespace SayaCloud\Api\Utils;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\ContentType;
use SayaCloud\Lib\RequestMethod;

class UploadFile extends RequestAbstract
{

    protected $apiUri = '/upload';

    protected $requestMethod = RequestMethod::POST;

    protected $contentType = ContentType::MULTIPART;

    /**
     * @var array
     */
    protected $multipart = [];

    /**
     * demo $multipart = ['name'=>'file','contents'=>fopen('path/to/file','r'),'filename'=>'path/to/file.png']
     * @param array $multipart
     */
    public function setMultipart(array $multipart)
    {
        $this->multipart[] = $multipart;
    }

    /**
     * @return array
     */
    public function getMultipart(): array
    {
        return $this->multipart;
    }

}