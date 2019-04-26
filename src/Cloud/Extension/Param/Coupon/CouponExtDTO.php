<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponUsedInfoExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 卡券信息
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class CouponExtDTO implements \JsonSerializable {

    /**
     * 
     * @var CouponGroupExtDTO
     */
    private $couponGroupExtDTO;

    /**
     * 
     * @var CouponUsedInfoExtDTO
     */
    private $couponUsedInfoExtDTO;

    /**
     * 
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;

    /**
     * 
     * @var integer
     */
    private $id;

    /**
     * 核销码
     * @var integer
     */
    private $verifyCode;

    /**
     * 核销码:0. 未使用;1. 冻结中; 2. 已使用
     * @var integer
     */
    private $status;

    /**
     * 
     * @var date
     */
    private $takeAt;



    /**
     * @return CouponGroupExtDTO
     */
    public function getCouponGroupExtDTO(): CouponGroupExtDTO
    {
        return $this->couponGroupExtDTO;
    }

    /**
     * @param CouponGroupExtDTO $couponGroupExtDTO
     */
    public function setCouponGroupExtDTO(CouponGroupExtDTO $couponGroupExtDTO): void
    {
        $this->couponGroupExtDTO = $couponGroupExtDTO;
    }

    /**
     * @return CouponUsedInfoExtDTO
     */
    public function getCouponUsedInfoExtDTO(): CouponUsedInfoExtDTO
    {
        return $this->couponUsedInfoExtDTO;
    }

    /**
     * @param CouponUsedInfoExtDTO $couponUsedInfoExtDTO
     */
    public function setCouponUsedInfoExtDTO(CouponUsedInfoExtDTO $couponUsedInfoExtDTO): void
    {
        $this->couponUsedInfoExtDTO = $couponUsedInfoExtDTO;
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

    /**
     * @return integer
     */
    public function getId(): integer
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId(integer $id): void
    {
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getVerifyCode(): integer
    {
        return $this->verifyCode;
    }

    /**
     * @param integer $verifyCode
     */
    public function setVerifyCode(integer $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
    }

    /**
     * @return integer
     */
    public function getStatus(): integer
    {
        return $this->status;
    }

    /**
     * @param integer $status
     */
    public function setStatus(integer $status): void
    {
        $this->status = $status;
    }

    /**
     * @return date
     */
    public function getTakeAt(): date
    {
        return $this->takeAt;
    }

    /**
     * @param date $takeAt
     */
    public function setTakeAt(date $takeAt): void
    {
        $this->takeAt = $takeAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}