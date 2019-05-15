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
     * @var int
     */
    private $orderItemId;

    /**
     * 重量(非标品,单位克)
     * @var int
     */
    private $weight;

    /**
     * 购买数量
     * @var int
     */
    private $num;

    /**
     * 原始单价(单位分)
     * @var int
     */
    private $originUnitPrice;

    /**
     * skuId信息
     * @var int
     */
    private $skuId;

    /**
     * 商品id
     * @var int
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
     * @return int
     */
    public function getOrderItemId(): int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getOriginUnitPrice(): int
    {
        return $this->originUnitPrice;
    }

    /**
     * @param int $originUnitPrice
     */
    public function setOriginUnitPrice(int $originUnitPrice): void
    {
        $this->originUnitPrice = $originUnitPrice;
    }

    /**
     * @return int
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getGoodsId(): int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}