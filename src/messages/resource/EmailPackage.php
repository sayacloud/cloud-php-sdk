<?php

namespace SayaCloud\Messages\Resource;

use SayaCloud\Messages\Contract\AbstractMessagePackage;

class EmailPackage extends AbstractMessagePackage
{
    /**
     * Package type
     *
     * @var string
     */
    protected $_package = 'email';

    /**
     * Recipients
     *
     * @var array [
     *   ['Recipient Name','name@email.com'],
     *   ['Jack','jack12@seagm.com']
     * ]
     */
    protected $recipients = [];

    /**
     * Email template code
     *
     * @var string
     */
    protected $template_code;

    /**
     * Template language
     * if the language of the template is inactive, the default language en will be used
     * format en, zh_CN, zh_TW, ms_MY, ja_JP
     *
     * @example zh_TW
     *
     * @var string
     */
    protected $language;

    /**
     * Template variables
     *
     * @var array
     */
    protected $template_vars = [];

    /**
     * @return array
     */
    public function getRecipients(): array
    {
        return $this->recipients;
    }

    /**
     * @param array $recipients
     */
    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;
    }

    /**
     * @return string
     */
    public function getTemplateCode(): string
    {
        return $this->template_code;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    /**
     * @param string $template_code
     */
    public function setTemplateCode(string $template_code)
    {
        $this->template_code = $template_code;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return array
     */
    public function getTemplateVars(): array
    {
        return $this->template_vars;
    }

    /**
     * @param array $template_vars
     */
    public function setTemplateVars(array $template_vars)
    {
        $this->template_vars = $template_vars;
    }


}