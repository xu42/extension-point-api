<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\SkuCompositeId;

/**
 * 失败订单信息
 * @author Baymax
 * @create Thu Mar 14 15:34:50 CST 2019
 */
class InvalidOrderItemMsgDTO implements \JsonSerializable {

    /**
     * 商品类型
     * @var integer
     */
    private $goodsType;

    /**
     * 数量
     * @var integer
     */
    private $num;

    /**
     * 订单项id
     * @var integer
     */
    private $orderItemId;

    /**
     * sku信息
     * @var SkuCompositeId
     */
    private $skuCompositeId;



    /**
     * @return integer
     */
    public function getGoodsType(): integer
    {
        return $this->goodsType;
    }

    /**
     * @param integer $goodsType
     */
    public function setGoodsType(integer $goodsType): void
    {
        $this->goodsType = $goodsType;
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
     * @return SkuCompositeId
     */
    public function getSkuCompositeId(): SkuCompositeId
    {
        return $this->skuCompositeId;
    }

    /**
     * @param SkuCompositeId $skuCompositeId
     */
    public function setSkuCompositeId(SkuCompositeId $skuCompositeId): void
    {
        $this->skuCompositeId = $skuCompositeId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}