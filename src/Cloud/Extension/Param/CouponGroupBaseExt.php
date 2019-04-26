<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 优惠券组信息
 * @author Baymax
 * @create Wed Sep 26 19:40:59 CST 2018
 */
class CouponGroupBaseExt implements \JsonSerializable {

    /**
     * 券组id
     * @var integer
     */
    private $id;

    /**
     * 优惠券标题
     * @var string
     */
    private $title;

    /**
     * 优惠券说明
     * @var string
     */
    private $description;

    /**
     * 优惠金额门槛
     * @var integer
     */
    private $priceCondition;

    /**
     * 优惠类型：1.金额 2.折扣
     * @var integer
     */
    private $preferentialType;

    /**
     * 优惠金额或折扣值
     * @var integer
     */
    private $preferentialValue;

    /**
     * 有效开始时间
     * @var date
     */
    private $beginAt;

    /**
     * 有效结束时间
     * @var date
     */
    private $endAt;

    /**
     * 参与的商品类型限制: 1: 不限制 2: 限制
     * @var integer
     */
    private $participateGoodsType;

    /**
     * 券组大小
     * @var integer
     */
    private $size;

    /**
     * 券组库存
     * @var integer
     */
    private $stockSize;

    /**
     * 状态 0: 创建成功 1: 已停止
     * @var integer
     */
    private $status;

    /**
     * 创建时间
     * @var date
     */
    private $createdAt;



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

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return integer
     */
    public function getPriceCondition(): integer
    {
        return $this->priceCondition;
    }

    /**
     * @param integer $priceCondition
     */
    public function setPriceCondition(integer $priceCondition): void
    {
        $this->priceCondition = $priceCondition;
    }

    /**
     * @return integer
     */
    public function getPreferentialType(): integer
    {
        return $this->preferentialType;
    }

    /**
     * @param integer $preferentialType
     */
    public function setPreferentialType(integer $preferentialType): void
    {
        $this->preferentialType = $preferentialType;
    }

    /**
     * @return integer
     */
    public function getPreferentialValue(): integer
    {
        return $this->preferentialValue;
    }

    /**
     * @param integer $preferentialValue
     */
    public function setPreferentialValue(integer $preferentialValue): void
    {
        $this->preferentialValue = $preferentialValue;
    }

    /**
     * @return date
     */
    public function getBeginAt(): date
    {
        return $this->beginAt;
    }

    /**
     * @param date $beginAt
     */
    public function setBeginAt(date $beginAt): void
    {
        $this->beginAt = $beginAt;
    }

    /**
     * @return date
     */
    public function getEndAt(): date
    {
        return $this->endAt;
    }

    /**
     * @param date $endAt
     */
    public function setEndAt(date $endAt): void
    {
        $this->endAt = $endAt;
    }

    /**
     * @return integer
     */
    public function getParticipateGoodsType(): integer
    {
        return $this->participateGoodsType;
    }

    /**
     * @param integer $participateGoodsType
     */
    public function setParticipateGoodsType(integer $participateGoodsType): void
    {
        $this->participateGoodsType = $participateGoodsType;
    }

    /**
     * @return integer
     */
    public function getSize(): integer
    {
        return $this->size;
    }

    /**
     * @param integer $size
     */
    public function setSize(integer $size): void
    {
        $this->size = $size;
    }

    /**
     * @return integer
     */
    public function getStockSize(): integer
    {
        return $this->stockSize;
    }

    /**
     * @param integer $stockSize
     */
    public function setStockSize(integer $stockSize): void
    {
        $this->stockSize = $stockSize;
    }

    /**
     * @return integer
     */
    public function getStatus(): integer
    {
        return $this->status;
    }

    /**
     * @param integer $status
     */
    public function setStatus(integer $status): void
    {
        $this->status = $status;
    }

    /**
     * @return date
     */
    public function getCreatedAt(): date
    {
        return $this->createdAt;
    }

    /**
     * @param date $createdAt
     */
    public function setCreatedAt(date $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}