<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 
 * @author Baymax
 * @create Tue Oct 30 20:08:00 CST 2018
 */
class CouponTakeResultExtDTO implements \JsonSerializable {

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