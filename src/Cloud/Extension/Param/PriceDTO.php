<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 价格信息
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class PriceDTO implements \JsonSerializable {

    /**
     * 优惠金额
     * @var integer
     */
    private $promotionAmount;

    /**
     * 总价
     * @var integer
     */
    private $totalPrice;

    /**
     * 运费
     * @var integer
     */
    private $postage;

    /**
     * 现价
     * @var integer
     */
    private $currentPrice;

    /**
     * 原价
     * @var integer
     */
    private $originPrice;



    /**
     * @return integer
     */
    public function getPromotionAmount(): integer
    {
        return $this->promotionAmount;
    }

    /**
     * @param integer $promotionAmount
     */
    public function setPromotionAmount(integer $promotionAmount): void
    {
        $this->promotionAmount = $promotionAmount;
    }

    /**
     * @return integer
     */
    public function getTotalPrice(): integer
    {
        return $this->totalPrice;
    }

    /**
     * @param integer $totalPrice
     */
    public function setTotalPrice(integer $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return integer
     */
    public function getPostage(): integer
    {
        return $this->postage;
    }

    /**
     * @param integer $postage
     */
    public function setPostage(integer $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return integer
     */
    public function getCurrentPrice(): integer
    {
        return $this->currentPrice;
    }

    /**
     * @param integer $currentPrice
     */
    public function setCurrentPrice(integer $currentPrice): void
    {
        $this->currentPrice = $currentPrice;
    }

    /**
     * @return integer
     */
    public function getOriginPrice(): integer
    {
        return $this->originPrice;
    }

    /**
     * @param integer $originPrice
     */
    public function setOriginPrice(integer $originPrice): void
    {
        $this->originPrice = $originPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}