<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class CouponGroupExtDTO implements \JsonSerializable {

    /**
     * 卡券ID
     * @var integer
     */
    private $id;

    /**
     * 卡券组别名
     * @var string
     */
    private $alias;

    /**
     * 卡券标题
     * @var string
     */
    private $title;

    /**
     * 卡券说明
     * @var string
     */
    private $description;

    /**
     * 优惠金额门槛
     * @var integer
     */
    private $priceCondition;

    /**
     * 优惠金额门槛文字描述
     * @var string
     */
    private $conditionDesc;

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
     * 开始有效日期 时间戳
     * @var date
     */
    private $beginAt;

    /**
     * 到期时间 时间戳
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
     * 领取数
     * @var integer
     */
    private $totalTake;

    /**
     * 使用数
     * @var integer
     */
    private $totalUsed;

    /**
     * 券组类型 0：优惠券 1：优惠码
     * @var integer
     */
    private $groupType;

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
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(string $alias): void
    {
        $this->alias = $alias;
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
     * @return string
     */
    public function getConditionDesc(): string
    {
        return $this->conditionDesc;
    }

    /**
     * @param string $conditionDesc
     */
    public function setConditionDesc(string $conditionDesc): void
    {
        $this->conditionDesc = $conditionDesc;
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
    public function getTotalTake(): integer
    {
        return $this->totalTake;
    }

    /**
     * @param integer $totalTake
     */
    public function setTotalTake(integer $totalTake): void
    {
        $this->totalTake = $totalTake;
    }

    /**
     * @return integer
     */
    public function getTotalUsed(): integer
    {
        return $this->totalUsed;
    }

    /**
     * @param integer $totalUsed
     */
    public function setTotalUsed(integer $totalUsed): void
    {
        $this->totalUsed = $totalUsed;
    }

    /**
     * @return integer
     */
    public function getGroupType(): integer
    {
        return $this->groupType;
    }

    /**
     * @param integer $groupType
     */
    public function setGroupType(integer $groupType): void
    {
        $this->groupType = $groupType;
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