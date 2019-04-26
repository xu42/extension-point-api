<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\PromotionInfoExtDTO;

/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class AssetsGoodsPromotionExtDTO implements \JsonSerializable {

    /**
     * 商品SPU级别id
     * @var integer
     */
    private $goodsId;

    /**
     * 商品SKU级别id
     * @var integer
     */
    private $skuId;

    /**
     * 商品级价格（商品原价：10，限时折扣后：6，商品级价格：6）
     * @var integer
     */
    private $price;

    /**
     * 商品实付
     * @var integer
     */
    private $realPay;

    /**
     * 数量
     * @var integer
     */
    private $num;

    /**
     * 商品类型
     * @var integer
     */
    private $type;

    /**
     * 优惠活动信息
     * @var array
     */
    private $applyPromotions;



    /**
     * @return integer
     */
    public function getGoodsId(): integer
    {
        return $this->goodsId;
    }

    /**
     * @param integer $goodsId
     */
    public function setGoodsId(integer $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return integer
     */
    public function getSkuId(): integer
    {
        return $this->skuId;
    }

    /**
     * @param integer $skuId
     */
    public function setSkuId(integer $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return integer
     */
    public function getPrice(): integer
    {
        return $this->price;
    }

    /**
     * @param integer $price
     */
    public function setPrice(integer $price): void
    {
        $this->price = $price;
    }

    /**
     * @return integer
     */
    public function getRealPay(): integer
    {
        return $this->realPay;
    }

    /**
     * @param integer $realPay
     */
    public function setRealPay(integer $realPay): void
    {
        $this->realPay = $realPay;
    }

    /**
     * @return integer
     */
    public function getNum(): integer
    {
        return $this->num;
    }

    /**
     * @param integer $num
     */
    public function setNum(integer $num): void
    {
        $this->num = $num;
    }

    /**
     * @return integer
     */
    public function getType(): integer
    {
        return $this->type;
    }

    /**
     * @param integer $type
     */
    public function setType(integer $type): void
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getApplyPromotions(): array
    {
        return $this->applyPromotions;
    }

    /**
     * @param array $applyPromotions
     */
    public function setApplyPromotions(array $applyPromotions): void
    {
        $this->applyPromotions = $applyPromotions;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}