<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use StdClass;

/**
 * 
 * @author Baymax
 * @create Mon Apr 22 18:07:50 CST 2019
 */
class ValueCardRefundRequestDTO implements \JsonSerializable {

    /**
     * 支付渠道单据号,渠道返回的单号
     * @var string
     */
    private $payChannelNo;

    /**
     * 退款对应的支付明细号
     * @var string
     */
    private $payOrderNo;

    /**
     * 退款明细号
     * @var string
     */
    private $refundOrderNo;

    /**
     * 订单总金额，单位为分，只能为整数
     * @var integer
     */
    private $totalAmount;

    /**
     * 退款总金额，单位为分，只能为整数，可部分退款
     * @var integer
     */
    private $refundAmount;

    /**
     * 退款发起时间
     * @var date
     */
    private $tradeTime;

    /**
     * 业务透传上下文
     * @var stdClass
     */
    private $outBizContext;



    /**
     * @return string
     */
    public function getPayChannelNo(): string
    {
        return $this->payChannelNo;
    }

    /**
     * @param string $payChannelNo
     */
    public function setPayChannelNo(string $payChannelNo): void
    {
        $this->payChannelNo = $payChannelNo;
    }

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
    public function getRefundOrderNo(): string
    {
        return $this->refundOrderNo;
    }

    /**
     * @param string $refundOrderNo
     */
    public function setRefundOrderNo(string $refundOrderNo): void
    {
        $this->refundOrderNo = $refundOrderNo;
    }

    /**
     * @return integer
     */
    public function getTotalAmount(): integer
    {
        return $this->totalAmount;
    }

    /**
     * @param integer $totalAmount
     */
    public function setTotalAmount(integer $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return integer
     */
    public function getRefundAmount(): integer
    {
        return $this->refundAmount;
    }

    /**
     * @param integer $refundAmount
     */
    public function setRefundAmount(integer $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return date
     */
    public function getTradeTime(): date
    {
        return $this->tradeTime;
    }

    /**
     * @param date $tradeTime
     */
    public function setTradeTime(date $tradeTime): void
    {
        $this->tradeTime = $tradeTime;
    }

    /**
     * @return stdClass
     */
    public function getOutBizContext(): stdClass
    {
        return $this->outBizContext;
    }

    /**
     * @param stdClass $outBizContext
     */
    public function setOutBizContext(stdClass $outBizContext): void
    {
        $this->outBizContext = $outBizContext;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}