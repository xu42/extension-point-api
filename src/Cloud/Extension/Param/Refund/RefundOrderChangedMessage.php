<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;

use Com\Youzan\Cloud\Extension\Param\Refund\RefundOrderItemDTO;

/**
 * refundOrder发生创建，修改等变更  消息体
 * @author Baymax
 * @create Wed Apr 24 21:27:35 CST 2019
 */
class RefundOrderChangedMessage implements \JsonSerializable {

    /**
     * 纠纷Id, 预留字段
     * @var integer
     */
    private $disputeId;

    /**
     * 款单号，业务幂等字段
     * @var string
     */
    private $refundId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 口袋通id
     * @var integer
     */
    private $kdtId;

    /**
     * 是总的订单退款金额
     * @var integer
     */
    private $refundFee;

    /**
     * 邮费
     * @var integer
     */
    private $postage;

    /**
     * 退款阶段。1&quot;售中&quot;，2&quot;售后&quot;
     * @var integer
     */
    private $phase;

    /**
     * 退款流程类型
     * @var integer
     */
    private $type;

    /**
     * 退款流程类型。60表示成功
     * @var integer
     */
    private $status;

    /**
     * 支付方式。
     * @var integer
     */
    private $payType;

    /**
     * 支付系统的payWay。
     * @var integer
     */
    private $payWay;

    /**
     * 支付收单号-对应老系统的内部交易单号
     * @var string
     */
    private $payId;

    /**
     * 退款诉求。1&quot;仅退款&quot;，2&quot;退货退款&quot;
     * @var integer
     */
    private $demand;

    /**
     * 退款原因
     * @var integer
     */
    private $reason;

    /**
     * 客满介入状态
     * @var integer
     */
    private $csStatus;

    /**
     * 买家ID
     * @var integer
     */
    private $buyerId;

    /**
     * 买家手机号
     * @var string
     */
    private $buyerPhone;

    /**
     * 买家备注信息
     * @var string
     */
    private $remark;

    /**
     * 扩展信息
     * @var string
     */
    private $extension;

    /**
     * 添加时间
     * @var date
     */
    private $createTime;

    /**
     * 更新时间
     * @var date
     */
    private $updateTime;

    /**
     * 是否为无效的退款单。true为有效，false为无效
     * @var boolean
     */
    private $invalid;

    /**
     * 退款单明细
     * @var array
     */
    private $refundOrderItems;



    /**
     * @return integer
     */
    public function getDisputeId(): integer
    {
        return $this->disputeId;
    }

    /**
     * @param integer $disputeId
     */
    public function setDisputeId(integer $disputeId): void
    {
        $this->disputeId = $disputeId;
    }

    /**
     * @return string
     */
    public function getRefundId(): string
    {
        return $this->refundId;
    }

    /**
     * @param string $refundId
     */
    public function setRefundId(string $refundId): void
    {
        $this->refundId = $refundId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

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
    public function getRefundFee(): integer
    {
        return $this->refundFee;
    }

    /**
     * @param integer $refundFee
     */
    public function setRefundFee(integer $refundFee): void
    {
        $this->refundFee = $refundFee;
    }

    /**
     * @return integer
     */
    public function getPostage(): integer
    {
        return $this->postage;
    }

    /**
     * @param integer $postage
     */
    public function setPostage(integer $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return integer
     */
    public function getPhase(): integer
    {
        return $this->phase;
    }

    /**
     * @param integer $phase
     */
    public function setPhase(integer $phase): void
    {
        $this->phase = $phase;
    }

    /**
     * @return integer
     */
    public function getType(): integer
    {
        return $this->type;
    }

    /**
     * @param integer $type
     */
    public function setType(integer $type): void
    {
        $this->type = $type;
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
     * @return integer
     */
    public function getPayType(): integer
    {
        return $this->payType;
    }

    /**
     * @param integer $payType
     */
    public function setPayType(integer $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @return integer
     */
    public function getPayWay(): integer
    {
        return $this->payWay;
    }

    /**
     * @param integer $payWay
     */
    public function setPayWay(integer $payWay): void
    {
        $this->payWay = $payWay;
    }

    /**
     * @return string
     */
    public function getPayId(): string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(string $payId): void
    {
        $this->payId = $payId;
    }

    /**
     * @return integer
     */
    public function getDemand(): integer
    {
        return $this->demand;
    }

    /**
     * @param integer $demand
     */
    public function setDemand(integer $demand): void
    {
        $this->demand = $demand;
    }

    /**
     * @return integer
     */
    public function getReason(): integer
    {
        return $this->reason;
    }

    /**
     * @param integer $reason
     */
    public function setReason(integer $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return integer
     */
    public function getCsStatus(): integer
    {
        return $this->csStatus;
    }

    /**
     * @param integer $csStatus
     */
    public function setCsStatus(integer $csStatus): void
    {
        $this->csStatus = $csStatus;
    }

    /**
     * @return integer
     */
    public function getBuyerId(): integer
    {
        return $this->buyerId;
    }

    /**
     * @param integer $buyerId
     */
    public function setBuyerId(integer $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getBuyerPhone(): string
    {
        return $this->buyerPhone;
    }

    /**
     * @param string $buyerPhone
     */
    public function setBuyerPhone(string $buyerPhone): void
    {
        $this->buyerPhone = $buyerPhone;
    }

    /**
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     */
    public function setExtension(string $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return date
     */
    public function getCreateTime(): date
    {
        return $this->createTime;
    }

    /**
     * @param date $createTime
     */
    public function setCreateTime(date $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return date
     */
    public function getUpdateTime(): date
    {
        return $this->updateTime;
    }

    /**
     * @param date $updateTime
     */
    public function setUpdateTime(date $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return boolean
     */
    public function getInvalid(): boolean
    {
        return $this->invalid;
    }

    /**
     * @param boolean $invalid
     */
    public function setInvalid(boolean $invalid): void
    {
        $this->invalid = $invalid;
    }

    /**
     * @return array
     */
    public function getRefundOrderItems(): array
    {
        return $this->refundOrderItems;
    }

    /**
     * @param array $refundOrderItems
     */
    public function setRefundOrderItems(array $refundOrderItems): void
    {
        $this->refundOrderItems = $refundOrderItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}