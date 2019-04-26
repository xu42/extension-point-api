<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 
 * @author Baymax
 * @create Sun Sep 30 15:25:27 CST 2018
 */
class CouponUnFreezeResultExtDTO implements \JsonSerializable {

    /**
     * 
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