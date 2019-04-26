<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 不可购买商品
 * @author Baymax
 * @create Wed Mar 27 19:28:21 CST 2019
 */
class UnavailableItemMsgDTO implements \JsonSerializable {

    /**
     * 卖家标识
     * @var integer
     */
    private $kdtId;

    /**
     * 店铺标识
     * @var integer
     */
    private $shopId;

    /**
     * 商品标识
     * @var integer
     */
    private $goodsId;

    /**
     * 商品sku标识
     * @var integer
     */
    private $skuId;

    /**
     * 商品数量
     * @var integer
     */
    private $num;

    /**
     * 商品类型
     * @var integer
     */
    private $goodsType;

    /**
     * 不可购买原因
     * @var string
     */
    private $reason;



    /**
     * @return integer
     */
    public function getKdtId(): integer
    {
        return $this->kdtId;
    }

    /**
     * @param integer $kdtId
     */
    public function setKdtId(integer $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return integer
     */
    public function getShopId(): integer
    {
        return $this->shopId;
    }

    /**
     * @param integer $shopId
     */
    public function setShopId(integer $shopId): void
    {
        $this->shopId = $shopId;
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
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}