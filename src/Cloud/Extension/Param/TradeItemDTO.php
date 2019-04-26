<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\SkuCompositeId;

/**
 * 交易条目
 * @author Baymax
 * @create Tue Mar 26 13:18:47 CST 2019
 */
class TradeItemDTO implements \JsonSerializable {

    /**
     * sku复合Id
     * @var SkuCompositeId
     */
    private $skuCompositeId;

    /**
     * 数量
     * @var integer
     */
    private $num;

    /**
     * 商品类型
     * @var integer
     */
    private $goodsType;

    /**
     * 商品留言
     * @var string
     */
    private $memo;



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
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}