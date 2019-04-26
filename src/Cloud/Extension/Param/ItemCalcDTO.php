<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 商品信息
 * @author Baymax
 * @create Mon Oct 08 11:32:37 CST 2018
 */
class ItemCalcDTO implements \JsonSerializable {

    /**
     * 自定义带入数据
     * @var stdClass
     */
    private $selfDefineData;

    /**
     * 订单id
     * @var integer
     */
    private $orderItemId;

    /**
     * 重量(非标品,单位克)
     * @var integer
     */
    private $weight;

    /**
     * 购买数量
     * @var integer
     */
    private $num;

    /**
     * 原始单价(单位分)
     * @var integer
     */
    private $originUnitPrice;

    /**
     * skuId信息
     * @var integer
     */
    private $skuId;

    /**
     * 商品id
     * @var integer
     */
    private $goodsId;



    /**
     * @return stdClass
     */
    public function getSelfDefineData(): stdClass
    {
        return $this->selfDefineData;
    }

    /**
     * @param stdClass $selfDefineData
     */
    public function setSelfDefineData(stdClass $selfDefineData): void
    {
        $this->selfDefineData = $selfDefineData;
    }

    /**
     * @return integer
     */
    public function getOrderItemId(): integer
    {
        return $this->orderItemId;
    }

    /**
     * @param integer $orderItemId
     */
    public function setOrderItemId(integer $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return integer
     */
    public function getWeight(): integer
    {
        return $this->weight;
    }

    /**
     * @param integer $weight
     */
    public function setWeight(integer $weight): void
    {
        $this->weight = $weight;
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
    public function getOriginUnitPrice(): integer
    {
        return $this->originUnitPrice;
    }

    /**
     * @param integer $originUnitPrice
     */
    public function setOriginUnitPrice(integer $originUnitPrice): void
    {
        $this->originUnitPrice = $originUnitPrice;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}