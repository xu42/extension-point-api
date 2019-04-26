<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;

use Com\Youzan\Cloud\Extension\Param\Refund\ItemDTO;

/**
 * 退款资金变更消息体
 * @author Baymax
 * @create Wed Dec 19 21:16:28 CST 2018
 */
class RefundFundChangedMessageDTO implements \JsonSerializable {

    /**
     * 退款单号（目前只有微信支付退款才有）
     * @var string
     */
    private $refundId;

    /**
     * 退款流水号
     * @var string
     */
    private $refundNo;

    /**
     * 订单商品
     * @var ItemDTO
     */
    private $items;

    /**
     * 退款金额
     * @var integer
     */
    private $refundFee;

    /**
     * 支付渠道
     * @var integer
     */
    private $payWay;

    /**
     * 退款资金状态（0.退款中 1.退款失败 2.退款成功）
     * @var integer
     */
    private $status;

    /**
     * 错误码
     * @var string
     */
    private $errorCode;

    /**
     * 错误信息
     * @var string
     */
    private $errorMsg;

    /**
     * 创建时间
     * @var integer
     */
    private $createTime;

    /**
     * 更新时间
     * @var integer
     */
    private $updateTime;

    /**
     * 退款资金流类型（1.标记退款 2.店铺余额转账退款 3.支付渠道退款）
     * @var integer
     */
    private $type;

    /**
     * 代付订单号，如果是代付此订单号是P开头订单号
     * @var string
     */
    private $payNo;

    /**
     * 退款阶段（1.售中 2.售后）
     * @var integer
     */
    private $phaseId;

    /**
     * 买家id
     * @var integer
     */
    private $buyerId;



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
    public function getRefundNo(): string
    {
        return $this->refundNo;
    }

    /**
     * @param string $refundNo
     */
    public function setRefundNo(string $refundNo): void
    {
        $this->refundNo = $refundNo;
    }

    /**
     * @return ItemDTO
     */
    public function getItems(): ItemDTO
    {
        return $this->items;
    }

    /**
     * @param ItemDTO $items
     */
    public function setItems(ItemDTO $items): void
    {
        $this->items = $items;
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
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode(string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): string
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return integer
     */
    public function getCreateTime(): integer
    {
        return $this->createTime;
    }

    /**
     * @param integer $createTime
     */
    public function setCreateTime(integer $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return integer
     */
    public function getUpdateTime(): integer
    {
        return $this->updateTime;
    }

    /**
     * @param integer $updateTime
     */
    public function setUpdateTime(integer $updateTime): void
    {
        $this->updateTime = $updateTime;
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
     * @return string
     */
    public function getPayNo(): string
    {
        return $this->payNo;
    }

    /**
     * @param string $payNo
     */
    public function setPayNo(string $payNo): void
    {
        $this->payNo = $payNo;
    }

    /**
     * @return integer
     */
    public function getPhaseId(): integer
    {
        return $this->phaseId;
    }

    /**
     * @param integer $phaseId
     */
    public function setPhaseId(integer $phaseId): void
    {
        $this->phaseId = $phaseId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}