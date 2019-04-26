<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create Thu Dec 06 16:09:38 CST 2018
 */
class FreezePointsResponse implements \JsonSerializable {

    /**
     * 是否成功
     * @var boolean
     */
    private $isSuccess;



    /**
     * @return boolean
     */
    public function getIsSuccess(): boolean
    {
        return $this->isSuccess;
    }

    /**
     * @param boolean $isSuccess
     */
    public function setIsSuccess(boolean $isSuccess): void
    {
        $this->isSuccess = $isSuccess;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}