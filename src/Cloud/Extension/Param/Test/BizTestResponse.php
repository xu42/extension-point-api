<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;



/**
 * 执行结果
 * @author Baymax
 * @create Mon Sep 17 21:46:05 CST 2018
 */
class BizTestResponse implements \JsonSerializable {

    /**
     * 执行字符串结果
     * @var string
     */
    private $content;

    /**
     * 请求id
     * @var integer
     */
    private $requestId;



    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return integer
     */
    public function getRequestId(): integer
    {
        return $this->requestId;
    }

    /**
     * @param integer $requestId
     */
    public function setRequestId(integer $requestId): void
    {
        $this->requestId = $requestId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}