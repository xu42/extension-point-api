<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 优惠信息
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class PromotionDTO implements \JsonSerializable {

    /**
     * 不参与优惠金额
     * @var integer
     */
    private $canNotUsePromotionAmount;

    /**
     * 参与优惠的商品
     * @var array
     */
    private $joinedGoodsId;

    /**
     * 优惠名称
     * @var string
     */
    private $promotionName;

    /**
     * 优惠券,码类型 优惠券:7; 优惠码:9,10
     * @var integer
     */
    private $couponType;

    /**
     * 是否外部优惠券,0 内部优惠券,1 外部优惠券
     * @var integer
     */
    private $outerCoupon;

    /**
     * 
     * @var string
     */
    private $promotionAlias;

    /**
     * 
     * @var integer
     */
    private $promotionTypeId;

    /**
     * 
     * @var string
     */
    private $promotionTypeName;

    /**
     * 优惠类型
     * @var string
     */
    private $promotionType;

    /**
     * 优惠ID
     * @var integer
     */
    private $promotionId;

    /**
     * 优惠级别
     * @var string
     */
    private $changeType;

    /**
     * 使用优惠之后的价格
     * @var integer
     */
    private $newValue;

    /**
     * 使用优惠之前的价格
     * @var integer
     */
    private $oldValue;

    /**
     * 不可用原因
     * @var string
     */
    private $reason;

    /**
     * 券失效日期
     * @var string
     */
    private $endAt;

    /**
     * 券有效开始时间
     * @var string
     */
    private $startAt;

    /**
     * 优惠券面额, 单位为分
     * @var integer
     */
    private $value;

    /**
     * 满减条件（0为无门槛，满XX元可用）
     * @var string
     */
    private $condition;

    /**
     * 满减条件（0为无门槛，满XX元可用中的数字）
     * @var string
     */
    private $originCondition;

    /**
     * 面值
     * @var integer
     */
    private $denominations;

    /**
     * 折扣
     * @var integer
     */
    private $discount;

    /**
     * 是否可用{
     * @var boolean
     */
    private $isAvailable;

    /**
     * 优惠码(券)名称
     * @var string
     */
    private $activityAlias;

    /**
     * 优惠id
     * @var integer
     */
    private $activityId;

    /**
     * 活动类型
     * @var string
     */
    private $activityType;

    /**
     * 优惠码
     * @var string
     */
    private $code;



    /**
     * @return integer
     */
    public function getCanNotUsePromotionAmount(): integer
    {
        return $this->canNotUsePromotionAmount;
    }

    /**
     * @param integer $canNotUsePromotionAmount
     */
    public function setCanNotUsePromotionAmount(integer $canNotUsePromotionAmount): void
    {
        $this->canNotUsePromotionAmount = $canNotUsePromotionAmount;
    }

    /**
     * @return array
     */
    public function getJoinedGoodsId(): array
    {
        return $this->joinedGoodsId;
    }

    /**
     * @param array $joinedGoodsId
     */
    public function setJoinedGoodsId(array $joinedGoodsId): void
    {
        $this->joinedGoodsId = $joinedGoodsId;
    }

    /**
     * @return string
     */
    public function getPromotionName(): string
    {
        return $this->promotionName;
    }

    /**
     * @param string $promotionName
     */
    public function setPromotionName(string $promotionName): void
    {
        $this->promotionName = $promotionName;
    }

    /**
     * @return integer
     */
    public function getCouponType(): integer
    {
        return $this->couponType;
    }

    /**
     * @param integer $couponType
     */
    public function setCouponType(integer $couponType): void
    {
        $this->couponType = $couponType;
    }

    /**
     * @return integer
     */
    public function getOuterCoupon(): integer
    {
        return $this->outerCoupon;
    }

    /**
     * @param integer $outerCoupon
     */
    public function setOuterCoupon(integer $outerCoupon): void
    {
        $this->outerCoupon = $outerCoupon;
    }

    /**
     * @return string
     */
    public function getPromotionAlias(): string
    {
        return $this->promotionAlias;
    }

    /**
     * @param string $promotionAlias
     */
    public function setPromotionAlias(string $promotionAlias): void
    {
        $this->promotionAlias = $promotionAlias;
    }

    /**
     * @return integer
     */
    public function getPromotionTypeId(): integer
    {
        return $this->promotionTypeId;
    }

    /**
     * @param integer $promotionTypeId
     */
    public function setPromotionTypeId(integer $promotionTypeId): void
    {
        $this->promotionTypeId = $promotionTypeId;
    }

    /**
     * @return string
     */
    public function getPromotionTypeName(): string
    {
        return $this->promotionTypeName;
    }

    /**
     * @param string $promotionTypeName
     */
    public function setPromotionTypeName(string $promotionTypeName): void
    {
        $this->promotionTypeName = $promotionTypeName;
    }

    /**
     * @return string
     */
    public function getPromotionType(): string
    {
        return $this->promotionType;
    }

    /**
     * @param string $promotionType
     */
    public function setPromotionType(string $promotionType): void
    {
        $this->promotionType = $promotionType;
    }

    /**
     * @return integer
     */
    public function getPromotionId(): integer
    {
        return $this->promotionId;
    }

    /**
     * @param integer $promotionId
     */
    public function setPromotionId(integer $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    /**
     * @return string
     */
    public function getChangeType(): string
    {
        return $this->changeType;
    }

    /**
     * @param string $changeType
     */
    public function setChangeType(string $changeType): void
    {
        $this->changeType = $changeType;
    }

    /**
     * @return integer
     */
    public function getNewValue(): integer
    {
        return $this->newValue;
    }

    /**
     * @param integer $newValue
     */
    public function setNewValue(integer $newValue): void
    {
        $this->newValue = $newValue;
    }

    /**
     * @return integer
     */
    public function getOldValue(): integer
    {
        return $this->oldValue;
    }

    /**
     * @param integer $oldValue
     */
    public function setOldValue(integer $oldValue): void
    {
        $this->oldValue = $oldValue;
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

    /**
     * @return string
     */
    public function getEndAt(): string
    {
        return $this->endAt;
    }

    /**
     * @param string $endAt
     */
    public function setEndAt(string $endAt): void
    {
        $this->endAt = $endAt;
    }

    /**
     * @return string
     */
    public function getStartAt(): string
    {
        return $this->startAt;
    }

    /**
     * @param string $startAt
     */
    public function setStartAt(string $startAt): void
    {
        $this->startAt = $startAt;
    }

    /**
     * @return integer
     */
    public function getValue(): integer
    {
        return $this->value;
    }

    /**
     * @param integer $value
     */
    public function setValue(integer $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCondition(): string
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     */
    public function setCondition(string $condition): void
    {
        $this->condition = $condition;
    }

    /**
     * @return string
     */
    public function getOriginCondition(): string
    {
        return $this->originCondition;
    }

    /**
     * @param string $originCondition
     */
    public function setOriginCondition(string $originCondition): void
    {
        $this->originCondition = $originCondition;
    }

    /**
     * @return integer
     */
    public function getDenominations(): integer
    {
        return $this->denominations;
    }

    /**
     * @param integer $denominations
     */
    public function setDenominations(integer $denominations): void
    {
        $this->denominations = $denominations;
    }

    /**
     * @return integer
     */
    public function getDiscount(): integer
    {
        return $this->discount;
    }

    /**
     * @param integer $discount
     */
    public function setDiscount(integer $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return boolean
     */
    public function getIsAvailable(): boolean
    {
        return $this->isAvailable;
    }

    /**
     * @param boolean $isAvailable
     */
    public function setIsAvailable(boolean $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return string
     */
    public function getActivityAlias(): string
    {
        return $this->activityAlias;
    }

    /**
     * @param string $activityAlias
     */
    public function setActivityAlias(string $activityAlias): void
    {
        $this->activityAlias = $activityAlias;
    }

    /**
     * @return integer
     */
    public function getActivityId(): integer
    {
        return $this->activityId;
    }

    /**
     * @param integer $activityId
     */
    public function setActivityId(integer $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return string
     */
    public function getActivityType(): string
    {
        return $this->activityType;
    }

    /**
     * @param string $activityType
     */
    public function setActivityType(string $activityType): void
    {
        $this->activityType = $activityType;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}