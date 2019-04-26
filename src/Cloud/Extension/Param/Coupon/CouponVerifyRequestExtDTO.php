<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 
 * @author Baymax
 * @create Sun Sep 30 14:43:11 CST 2018
 */
class CouponVerifyRequestExtDTO implements \JsonSerializable {

    /**
     * 卡券id
     * @var integer
     */
    private $couponId;



    /**
     * @return integer
     */
    public function getCouponId(): integer
    {
        return $this->couponId;
    }

    /**
     * @param integer $couponId
     */
    public function setCouponId(integer $couponId): void
    {
        $this->couponId = $couponId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}