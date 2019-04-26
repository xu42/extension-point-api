<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create Mon Apr 22 19:16:23 CST 2019
 */
class ValueCardPayRequestDTO implements \JsonSerializable {

    /**
     * 储值支付单据号
     * @var string
     */
    private $payOrderNo;

    /**
     * 收单号
     * @var string
     */
    private $acquireNo;

    /**
     * 外部业务号,收单系统上层业务系统单据号
     * @var string
     */
    private $outBizNo;

    /**
     * 支付总金额
     * @var integer
     */
    private $payAmount;

    /**
     * 商品信息
     * @var string
     */
    private $goodDesc;

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
     * 卡号
     * @var array
     */
    private $cardNoList;

    /**
     * 支付发起时间
     * @var date
     */
    private $tradeTime;



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
    public function getGoodDesc(): string
    {
        return $this->goodDesc;
    }

    /**
     * @param string $goodDesc
     */
    public function setGoodDesc(string $goodDesc): void
    {
        $this->goodDesc = $goodDesc;
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
     * @return array
     */
    public function getCardNoList(): array
    {
        return $this->cardNoList;
    }

    /**
     * @param array $cardNoList
     */
    public function setCardNoList(array $cardNoList): void
    {
        $this->cardNoList = $cardNoList;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}