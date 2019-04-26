<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Sun Oct 07 16:20:47 CST 2018
 */
class CouponTakeBackRequestExtDTO implements \JsonSerializable {

    /**
     * 券组id
     * @var integer
     */
    private $couponGroupId;

    /**
     * 优惠券id
     * @var integer
     */
    private $couponId;

    /**
     * 卡券收回请求
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;



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

    /**
     * @return CustomerIdentityDTO
     */
    public function getCustomerIdentityDTO(): CustomerIdentityDTO
    {
        return $this->customerIdentityDTO;
    }

    /**
     * @param CustomerIdentityDTO $customerIdentityDTO
     */
    public function setCustomerIdentityDTO(CustomerIdentityDTO $customerIdentityDTO): void
    {
        $this->customerIdentityDTO = $customerIdentityDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}