<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 复合id
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class SkuCompositeId implements \JsonSerializable {

    /**
     * 
     * @var integer
     */
    private $goodsId;

    /**
     * 
     * @var integer
     */
    private $skuId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}