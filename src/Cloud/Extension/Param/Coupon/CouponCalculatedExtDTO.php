<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 
 * @author Baymax
 * @create Fri Nov 02 09:45:30 CST 2018
 */
class CouponCalculatedExtDTO implements \JsonSerializable {

    /**
     * 
     * @var boolean
     */
    private $isAvailable;

    /**
     * 
     * @var integer
     */
    private $discountAmount;

    /**
     * 
     * @var string
     */
    private $unavailableReason;



    /**
     * @return boolean
     */
    public function getIsAvailable(): boolean
    {
        return $this->isAvailable;
    }

    /**
     * @param boolean $isAvailable
     */
    public function setIsAvailable(boolean $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return integer
     */
    public function getDiscountAmount(): integer
    {
        return $this->discountAmount;
    }

    /**
     * @param integer $discountAmount
     */
    public function setDiscountAmount(integer $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * @return string
     */
    public function getUnavailableReason(): string
    {
        return $this->unavailableReason;
    }

    /**
     * @param string $unavailableReason
     */
    public function setUnavailableReason(string $unavailableReason): void
    {
        $this->unavailableReason = $unavailableReason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}