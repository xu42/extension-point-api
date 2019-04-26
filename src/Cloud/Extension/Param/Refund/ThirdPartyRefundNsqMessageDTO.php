<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;

use Com\Youzan\Cloud\Extension\Param\Refund\ThirdPartyRefundNsqMessageHeadersDTO;

/**
 * 退款失败消息体
 * @author Baymax
 * @create Fri Jan 11 14:15:59 CST 2019
 */
class ThirdPartyRefundNsqMessageDTO implements \JsonSerializable {

    /**
     * 头消息
     * @var ThirdPartyRefundNsqMessageHeadersDTO
     */
    private $headers;

    /**
     * kdtId
     * @var integer
     */
    private $kdtId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 外部业务号
     * @var string
     */
    private $outBizNo;

    /**
     * 退款单号
     * @var string
     */
    private $refundId;

    /**
     * 订单支付的收单号
     * @var string
     */
    private $payId;

    /**
     * 退款返回编号
     * @var integer
     */
    private $refundResultCode;

    /**
     * 退款失败的原因
     * @var string
     */
    private $failDesc;

    /**
     * 退款金额（分）
     * @var integer
     */
    private $refundFee;

    /**
     * 扩展信息
     * @var string
     */
    private $extensionInfo;



    /**
     * @return ThirdPartyRefundNsqMessageHeadersDTO
     */
    public function getHeaders(): ThirdPartyRefundNsqMessageHeadersDTO
    {
        return $this->headers;
    }

    /**
     * @param ThirdPartyRefundNsqMessageHeadersDTO $headers
     */
    public function setHeaders(ThirdPartyRefundNsqMessageHeadersDTO $headers): void
    {
        $this->headers = $headers;
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
    public function getRefundResultCode(): integer
    {
        return $this->refundResultCode;
    }

    /**
     * @param integer $refundResultCode
     */
    public function setRefundResultCode(integer $refundResultCode): void
    {
        $this->refundResultCode = $refundResultCode;
    }

    /**
     * @return string
     */
    public function getFailDesc(): string
    {
        return $this->failDesc;
    }

    /**
     * @param string $failDesc
     */
    public function setFailDesc(string $failDesc): void
    {
        $this->failDesc = $failDesc;
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
     * @return string
     */
    public function getExtensionInfo(): string
    {
        return $this->extensionInfo;
    }

    /**
     * @param string $extensionInfo
     */
    public function setExtensionInfo(string $extensionInfo): void
    {
        $this->extensionInfo = $extensionInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}