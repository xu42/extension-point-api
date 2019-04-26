<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 请求参数
 * @author Baymax
 * @create Fri Sep 28 19:44:50 CST 2018
 */
class CouponGroupDetailRequestExtDTO implements \JsonSerializable {

    /**
     * 券组id
     * @var integer
     */
    private $couponGroupId;



    /**
     * @return integer
     */
    public function getCouponGroupId(): integer
    {
        return $this->couponGroupId;
    }

    /**
     * @param integer $couponGroupId
     */
    public function setCouponGroupId(integer $couponGroupId): void
    {
        $this->couponGroupId = $couponGroupId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}