<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Fri Sep 28 19:20:48 CST 2018
 */
class CouponTakeRequestExtDTO implements \JsonSerializable {

    /**
     * 券组id
     * @var integer
     */
    private $groupId;

    /**
     * 用户标识信息
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;



    /**
     * @return integer
     */
    public function getGroupId(): integer
    {
        return $this->groupId;
    }

    /**
     * @param integer $groupId
     */
    public function setGroupId(integer $groupId): void
    {
        $this->groupId = $groupId;
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