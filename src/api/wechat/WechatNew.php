<?php

namespace SayaCloud\Api\Wechat;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WechatNew extends RequestAbstract
{
    protected $apiUri = '/wechat/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $origin_id;

    /**
     * @var string
     */
    protected $appid;

    /**
     * @var string
     */
    protected $appsecret;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $service_type;

    /**
     * @var string
     */
    protected $verify_type;

    /**
     * @var string
     */
    protected $encoding_aes_key;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $mch_id;

    /**
     * @var string
     */
    protected $mch_key;

    /**
     * @var string
     */
    protected $head_img;

    /**
     * @var string
     */
    protected $qrcode_url;

    /**
     * @var string
     */
    protected $principal_name;

    /**
     * @var string
     */
    protected $signature;

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $origin_id
     */
    public function setOriginId(string $origin_id): void
    {
        $this->origin_id = $origin_id;
    }

    /**
     * @param string $appid
     */
    public function setAppid(string $appid): void
    {
        $this->appid = $appid;
    }

    /**
     * @param string $appsecret
     */
    public function setAppsecret(string $appsecret): void
    {
        $this->appsecret = $appsecret;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @param string $service_type
     */
    public function setServiceType(string $service_type): void
    {
        $this->service_type = $service_type;
    }

    /**
     * @param string $verify_type
     */
    public function setVerifyType(string $verify_type): void
    {
        $this->verify_type = $verify_type;
    }

    /**
     * @param string $encoding_aes_key
     */
    public function setEncodingAesKey(string $encoding_aes_key): void
    {
        $this->encoding_aes_key = $encoding_aes_key;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param string $mch_id
     */
    public function setMchId(string $mch_id): void
    {
        $this->mch_id = $mch_id;
    }

    /**
     * @param string $mch_key
     */
    public function setMchKey(string $mch_key): void
    {
        $this->mch_key = $mch_key;
    }

    /**
     * @param string $head_img
     */
    public function setHeadImg(string $head_img): void
    {
        $this->head_img = $head_img;
    }

    /**
     * @param string $qrcode_url
     */
    public function setQrcodeUrl(string $qrcode_url): void
    {
        $this->qrcode_url = $qrcode_url;
    }

    /**
     * @param string $principal_name
     */
    public function setPrincipalName(string $principal_name): void
    {
        $this->principal_name = $principal_name;
    }

    /**
     * @param string $signature
     */
    public function setSignature(string $signature): void
    {
        $this->signature = $signature;
    }


}