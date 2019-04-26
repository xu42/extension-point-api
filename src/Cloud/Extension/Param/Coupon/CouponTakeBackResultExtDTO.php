<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 响应参数
 * @author Baymax
 * @create Fri Sep 28 19:26:29 CST 2018
 */
class CouponTakeBackResultExtDTO implements \JsonSerializable {

    /**
     * 是否收回成功
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