<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Fri Sep 28 19:54:55 CST 2018
 */
class UserCouponsFindRequestExtDTO implements \JsonSerializable {

    /**
     * 用户标识信息
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;

    /**
     * 1. 生效2. 已使用3. 已过期4. 已失效
     * @var integer
     */
    private $status;

    /**
     * 券类型 0：优惠券 1：优惠码
     * @var integer
     */
    private $couponType;

    /**
     * 页数
     * @var integer
     */
    private $pageNo;

    /**
     * 单页大小
     * @var integer
     */
    private $pageSize;



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
     * @return integer
     */
    public function getCouponType(): integer
    {
        return $this->couponType;
    }

    /**
     * @param integer $couponType
     */
    public function setCouponType(integer $couponType): void
    {
        $this->couponType = $couponType;
    }

    /**
     * @return integer
     */
    public function getPageNo(): integer
    {
        return $this->pageNo;
    }

    /**
     * @param integer $pageNo
     */
    public function setPageNo(integer $pageNo): void
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return integer
     */
    public function getPageSize(): integer
    {
        return $this->pageSize;
    }

    /**
     * @param integer $pageSize
     */
    public function setPageSize(integer $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}