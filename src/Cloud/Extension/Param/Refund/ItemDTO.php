<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;



/**
 * 订单商品
 * @author Baymax
 * @create Wed Dec 19 21:16:28 CST 2018
 */
class ItemDTO implements \JsonSerializable {

    /**
     * id
     * @var integer
     */
    private $id;

    /**
     * 纠纷id，预留字段
     * @var integer
     */
    private $disputeId;

    /**
     * 退款单号
     * @var string
     */
    private $refundId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 商品id
     * @var integer
     */
    private $itemId;

    /**
     * 退款金额
     * @var integer
     */
    private $refundFee;

    /**
     * 邮费
     * @var integer
     */
    private $postage;

    /**
     * 退款单个商品数量
     * @var integer
     */
    private $num;

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
    public function getItemId(): integer
    {
        return $this->itemId;
    }

    /**
     * @param integer $itemId
     */
    public function setItemId(integer $itemId): void
    {
        $this->itemId = $itemId;
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
    public function getNum(): integer
    {
        return $this->num;
    }

    /**
     * @param integer $num
     */
    public function setNum(integer $num): void
    {
        $this->num = $num;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}