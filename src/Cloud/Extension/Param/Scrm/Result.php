<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create Sat Sep 29 21:13:57 CST 2018
 */
class Result implements \JsonSerializable {

    /**
     * 是否成功
     * @var boolean
     */
    private $data;



    /**
     * @return boolean
     */
    public function getData(): boolean
    {
        return $this->data;
    }

    /**
     * @param boolean $data
     */
    public function setData(boolean $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}