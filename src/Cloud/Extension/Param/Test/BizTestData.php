<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;



/**
 * 数据
 * @author Baymax
 * @create Mon Sep 17 21:46:05 CST 2018
 */
class BizTestData implements \JsonSerializable {

    /**
     * 数据整型值
     * @var integer
     */
    private $number;

    /**
     * 数据字符串值
     * @var string
     */
    private $content;



    /**
     * @return integer
     */
    public function getNumber(): integer
    {
        return $this->number;
    }

    /**
     * @param integer $number
     */
    public function setNumber(integer $number): void
    {
        $this->number = $number;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}