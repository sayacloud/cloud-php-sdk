<?php

namespace SayaCloud\Messages\Lib;

/**
 * Class ContentType
 * @package SayaCloud\Messages\Lib
 */
class ContentType
{
    const TXT = 'text/plain';
    const HTML = 'text/html';
    const XML = 'application/xml';
    const JSON = 'application/json';
    const CSS = 'text/css';
    const JS = 'text/javascript';
    const URLENCODE = 'application/x-www-form-urlencoded';
    const QUERY = self::URLENCODE;
    const MULTIPART = 'multipart/form-data';
    const BINARY = 'application/octet-stream';
}