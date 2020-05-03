<?php

namespace SayaCloud\Messages\Resource;

use SayaCloud\Messages\Contract\AbstractMessagePackage;

/**
 * Class SmsPackage
 * @package SayaCloud\Messages\Resource
 */
class SmsPackage extends AbstractMessagePackage
{
    /**
     * Package type
     *
     * @var string
     */
    protected $_package = 'sms';

    /**
     * Mobile Region code
     *
     * China=86, Malaysia=60
     *
     * @example 86
     *
     * @var string
     */
    protected $region_code;

    /**
     * Mobile number
     *
     * @var string
     */
    protected $mobile_number;

    /**
     * SMS template code
     *
     * @var string
     */
    protected $sms_template_code;

    /**
     * The associate array of template variables and values
     *
     * @var array
     */
    protected $sms_vars = [];

    /**
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->region_code;
    }

    /**
     * @param string $region_code
     */
    public function setRegionCode(string $region_code)
    {
        $this->region_code = $region_code;
    }

    /**
     * @return string
     */
    public function getMobileNumber(): string
    {
        return $this->mobile_number;
    }

    /**
     * @param string $mobile_number
     */
    public function setMobileNumber(string $mobile_number)
    {
        $this->mobile_number = $mobile_number;
    }

    /**
     * @return string
     */
    public function getSmsTemplateCode(): string
    {
        return $this->sms_template_code;
    }

    /**
     * @param string $sms_template_code
     */
    public function setSmsTemplateCode(string $sms_template_code)
    {
        $this->sms_template_code = $sms_template_code;
    }

    /**
     * @return array
     */
    public function getSmsVars(): array
    {
        return $this->sms_vars;
    }

    /**
     * @param array $sms_vars
     */
    public function setSmsVars(array $sms_vars)
    {
        $this->sms_vars = $sms_vars;
    }


}