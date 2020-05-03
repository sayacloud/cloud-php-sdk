<?php

namespace SayaCloud\Lib;

trait ApiSignatureTrait
{
    /**
     * Make params signature
     *
     * @param array $data
     * @param string $appSecret
     * @return string
     */
    final public function makeSignature(array $data, string $appSecret): string
    {
        $string = $this->convertToString($data);
        if ($string) {
            return sha1($string . $appSecret);
        }
        return '';
    }

    /**
     * @param array $params
     * @return string
     */
    private function convertToString(array $params): string
    {
        if (!is_array($params) || empty($params)) {
            return '';
        }
        $signArray = [];
        if (is_array($params) && $this->_isArrayIndexContinuous($params)) {
            foreach ($params as $k => $v) {
                if (is_array($v)) {
                    $signArray[] = $this->convertToString($v);
                } else {
                    $signArray[] = (string)$v;
                }
            }
            asort($signArray);
        } else {
            ksort($params);
            foreach ($params as $k => $v) {
                if (is_array($v)) {
                    $signArray[] = $this->convertToString($v);
                } else {
                    $signArray[] = (string)$v;
                }
            }
        }
        return implode('', $signArray);
    }

    /**
     * Check if array indexes is continuous
     * @param array $arr
     * @return bool
     */
    private function _isArrayIndexContinuous(array $arr): bool
    {
        $keys = array_keys($arr);
        return $keys === array_keys($keys);
    }
}