<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create Mon Oct 08 16:18:50 CST 2018
 */
class RefundSelfValidateParamDTO implements \JsonSerializable {

    /**
     * 买家标识
     * @var string
     */
    private $userId;

    /**
     * 卖家标识
     * @var integer
     */
    private $kdtId;

    /**
     * 退款原因
     * @var integer
     */
    private $reason;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 用户退款类型
     * @var string
     */
    private $disputeFlowType;



    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
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
    public function getDisputeFlowType(): string
    {
        return $this->disputeFlowType;
    }

    /**
     * @param string $disputeFlowType
     */
    public function setDisputeFlowType(string $disputeFlowType): void
    {
        $this->disputeFlowType = $disputeFlowType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}