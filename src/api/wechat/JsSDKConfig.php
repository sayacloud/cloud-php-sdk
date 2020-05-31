<?php

namespace SayaCloud\Api\Wechat;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class JsSDKConfig extends RequestAbstract
{

    protected $apiUri = '/wechat-jssdk/config';

    protected $requestMethod = RequestMethod::POST;

    /**
     * 需要使用js sdk 的网页url
     * @var string
     */
    protected $url;

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param string $api_list
     */
    public function setApiList(string $api_list): void
    {
        $this->api_list = $api_list;
    }

    /**
     * js-sdk api list，多个之间用英文豆号分隔
     * @var string
     */
    protected $api_list = 'chooseImage,previewImage,onMenuShareQZone,onMenuShareWeibo,onMenuShareQQ,onMenuShareAppMessage,onMenuShareTimeline,updateTimelineShareData,openLocation,getLocation,hideOptionMenu,showOptionMenu,hideMenuItems,showMenuItems,closeWindow,scanQRCode,chooseWXPay,openProductSpecificView,addCard,chooseCard,openCard';

}