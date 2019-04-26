<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupExtDTO;

/**
 * 返回参数
 * @author Baymax
 * @create Sat Sep 29 21:40:57 CST 2018
 */
class CouponGroupListResultExtDTO implements \JsonSerializable {

    /**
     * 券组信息列表
     * @var array
     */
    private $couponGroupExtDTOList;

    /**
     * 总数
     * @var integer
     */
    private $total;



    /**
     * @return array
     */
    public function getCouponGroupExtDTOList(): array
    {
        return $this->couponGroupExtDTOList;
    }

    /**
     * @param array $couponGroupExtDTOList
     */
    public function setCouponGroupExtDTOList(array $couponGroupExtDTOList): void
    {
        $this->couponGroupExtDTOList = $couponGroupExtDTOList;
    }

    /**
     * @return integer
     */
    public function getTotal(): integer
    {
        return $this->total;
    }

    /**
     * @param integer $total
     */
    public function setTotal(integer $total): void
    {
        $this->total = $total;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}