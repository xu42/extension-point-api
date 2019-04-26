<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 优惠活动信息
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class PromotionInfoExtDTO implements \JsonSerializable {

    /**
     * 活动类型
     * @var string
     */
    private $promotionType;

    /**
     * 促销活动id
     * @var integer
     */
    private $promotionId;

    /**
     * 应用这项活动之前的应付金额，单位分
     * @var integer
     */
    private $prePay;

    /**
     * 应用这项活动之后的应付金额，单位分
     * @var integer
     */
    private $newPay;

    /**
     * 活动的优惠金额，单位分
     * @var integer
     */
    private $decrease;



    /**
     * @return string
     */
    public function getPromotionType(): string
    {
        return $this->promotionType;
    }

    /**
     * @param string $promotionType
     */
    public function setPromotionType(string $promotionType): void
    {
        $this->promotionType = $promotionType;
    }

    /**
     * @return integer
     */
    public function getPromotionId(): integer
    {
        return $this->promotionId;
    }

    /**
     * @param integer $promotionId
     */
    public function setPromotionId(integer $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    /**
     * @return integer
     */
    public function getPrePay(): integer
    {
        return $this->prePay;
    }

    /**
     * @param integer $prePay
     */
    public function setPrePay(integer $prePay): void
    {
        $this->prePay = $prePay;
    }

    /**
     * @return integer
     */
    public function getNewPay(): integer
    {
        return $this->newPay;
    }

    /**
     * @param integer $newPay
     */
    public function setNewPay(integer $newPay): void
    {
        $this->newPay = $newPay;
    }

    /**
     * @return integer
     */
    public function getDecrease(): integer
    {
        return $this->decrease;
    }

    /**
     * @param integer $decrease
     */
    public function setDecrease(integer $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}