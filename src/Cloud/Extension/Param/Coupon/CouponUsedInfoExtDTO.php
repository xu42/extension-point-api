<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class CouponUsedInfoExtDTO implements \JsonSerializable {

    /**
     * 卡券使用信息id
     * @var integer
     */
    private $id;

    /**
     * 使用时间
     * @var date
     */
    private $usedAt;

    /**
     * 实际优惠金额
     * @var integer
     */
    private $realPreferentialValue;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;



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
     * @return date
     */
    public function getUsedAt(): date
    {
        return $this->usedAt;
    }

    /**
     * @param date $usedAt
     */
    public function setUsedAt(date $usedAt): void
    {
        $this->usedAt = $usedAt;
    }

    /**
     * @return integer
     */
    public function getRealPreferentialValue(): integer
    {
        return $this->realPreferentialValue;
    }

    /**
     * @param integer $realPreferentialValue
     */
    public function setRealPreferentialValue(integer $realPreferentialValue): void
    {
        $this->realPreferentialValue = $realPreferentialValue;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
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