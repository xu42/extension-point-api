<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\GoodsInfo;
use StdClass;
use Com\Youzan\Cloud\Extension\Param\SkuDTO;

/**
 * 子订单信息
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class OrderItemMsgDTO implements \JsonSerializable {

    /**
     * 商品信息
     * @var GoodsInfo
     */
    private $goodsInfo;

    /**
     * 商品的额外信息
     * @var stdClass
     */
    private $extra;

    /**
     * 实付金额
     * @var integer
     */
    private $realPay;

    /**
     * 标
     * @var stdClass
     */
    private $tags;

    /**
     * 限购数
     * @var integer
     */
    private $quotaNum;

    /**
     * 购买数量
     * @var integer
     */
    private $num;

    /**
     * 商品留言
     * @var string
     */
    private $memo;

    /**
     * 商品快照
     * @var string
     */
    private $snapShot;

    /**
     * sku信息
     * @var SkuDTO
     */
    private $skuDTO;

    /**
     * 子订单id
     * @var integer
     */
    private $id;



    /**
     * @return GoodsInfo
     */
    public function getGoodsInfo(): GoodsInfo
    {
        return $this->goodsInfo;
    }

    /**
     * @param GoodsInfo $goodsInfo
     */
    public function setGoodsInfo(GoodsInfo $goodsInfo): void
    {
        $this->goodsInfo = $goodsInfo;
    }

    /**
     * @return stdClass
     */
    public function getExtra(): stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(stdClass $extra): void
    {
        $this->extra = $extra;
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
     * @return stdClass
     */
    public function getTags(): stdClass
    {
        return $this->tags;
    }

    /**
     * @param stdClass $tags
     */
    public function setTags(stdClass $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return integer
     */
    public function getQuotaNum(): integer
    {
        return $this->quotaNum;
    }

    /**
     * @param integer $quotaNum
     */
    public function setQuotaNum(integer $quotaNum): void
    {
        $this->quotaNum = $quotaNum;
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

    /**
     * @return string
     */
    public function getSnapShot(): string
    {
        return $this->snapShot;
    }

    /**
     * @param string $snapShot
     */
    public function setSnapShot(string $snapShot): void
    {
        $this->snapShot = $snapShot;
    }

    /**
     * @return SkuDTO
     */
    public function getSkuDTO(): SkuDTO
    {
        return $this->skuDTO;
    }

    /**
     * @param SkuDTO $skuDTO
     */
    public function setSkuDTO(SkuDTO $skuDTO): void
    {
        $this->skuDTO = $skuDTO;
    }

    /**
     * @return integer
     */
    public function getId(): integer
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId(integer $id): void
    {
        $this->id = $id;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}