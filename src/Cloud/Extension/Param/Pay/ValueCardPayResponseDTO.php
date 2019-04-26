<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use StdClass;

/**
 * 
 * @author Baymax
 * @create Mon Apr 22 19:16:23 CST 2019
 */
class ValueCardPayResponseDTO implements \JsonSerializable {

    /**
     * 储值支付单据号
     * @var string
     */
    private $payOrderNo;

    /**
     * 外部订单号
     * @var string
     */
    private $outBizNo;

    /**
     * 店铺ID
     * @var integer
     */
    private $kdtId;

    /**
     * 有赞用户ID
     * @var integer
     */
    private $buyerId;

    /**
     * 收单号
     * @var string
     */
    private $acquireNo;

    /**
     * 支付渠道单据号。例如使用支付宝,则为支付宝返回的支付流水号
     * @var string
     */
    private $channelSettleNo;

    /**
     * 支付完成时间
     * @var date
     */
    private $paymentDt;

    /**
     * 实际支付金额
     * @var integer
     */
    private $payAmount;

    /**
     * 支付状态
     * @var string
     */
    private $payStatus;

    /**
     * 结果来源,如来源系统
     * @var string
     */
    private $src;

    /**
     * 业务上下文
     * @var stdClass
     */
    private $bizContext;



    /**
     * @return string
     */
    public function getPayOrderNo(): string
    {
        return $this->payOrderNo;
    }

    /**
     * @param string $payOrderNo
     */
    public function setPayOrderNo(string $payOrderNo): void
    {
        $this->payOrderNo = $payOrderNo;
    }

    /**
     * @return string
     */
    public function getOutBizNo(): string
    {
        return $this->outBizNo;
    }

    /**
     * @param string $outBizNo
     */
    public function setOutBizNo(string $outBizNo): void
    {
        $this->outBizNo = $outBizNo;
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
    public function getAcquireNo(): string
    {
        return $this->acquireNo;
    }

    /**
     * @param string $acquireNo
     */
    public function setAcquireNo(string $acquireNo): void
    {
        $this->acquireNo = $acquireNo;
    }

    /**
     * @return string
     */
    public function getChannelSettleNo(): string
    {
        return $this->channelSettleNo;
    }

    /**
     * @param string $channelSettleNo
     */
    public function setChannelSettleNo(string $channelSettleNo): void
    {
        $this->channelSettleNo = $channelSettleNo;
    }

    /**
     * @return date
     */
    public function getPaymentDt(): date
    {
        return $this->paymentDt;
    }

    /**
     * @param date $paymentDt
     */
    public function setPaymentDt(date $paymentDt): void
    {
        $this->paymentDt = $paymentDt;
    }

    /**
     * @return integer
     */
    public function getPayAmount(): integer
    {
        return $this->payAmount;
    }

    /**
     * @param integer $payAmount
     */
    public function setPayAmount(integer $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getPayStatus(): string
    {
        return $this->payStatus;
    }

    /**
     * @param string $payStatus
     */
    public function setPayStatus(string $payStatus): void
    {
        $this->payStatus = $payStatus;
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * @param string $src
     */
    public function setSrc(string $src): void
    {
        $this->src = $src;
    }

    /**
     * @return stdClass
     */
    public function getBizContext(): stdClass
    {
        return $this->bizContext;
    }

    /**
     * @param stdClass $bizContext
     */
    public function setBizContext(stdClass $bizContext): void
    {
        $this->bizContext = $bizContext;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}