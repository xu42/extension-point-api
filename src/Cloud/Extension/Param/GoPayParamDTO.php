<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\OrderDTO;

/**
 * 去支付扩展入参
 * @author Baymax
 * @create Tue Sep 25 17:50:17 CST 2018
 */
class GoPayParamDTO implements \JsonSerializable {

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * 粉丝类型
     * @var integer
     */
    private $fansType;

    /**
     * 粉丝id
     * @var string
     */
    private $fansId;

    /**
     * 订单数据
     * @var OrderDTO
     */
    private $orderDTO;

    /**
     * 支付结果返回页面
     * @var string
     */
    private $payResultPage;

    /**
     * 付款总金额
     * @var integer
     */
    private $payAmount;

    /**
     * 用户标识
     * @var string
     */
    private $userId;

    /**
     * 卖家标识
     * @var integer
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getUserPhone(): string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return integer
     */
    public function getFansType(): integer
    {
        return $this->fansType;
    }

    /**
     * @param integer $fansType
     */
    public function setFansType(integer $fansType): void
    {
        $this->fansType = $fansType;
    }

    /**
     * @return string
     */
    public function getFansId(): string
    {
        return $this->fansId;
    }

    /**
     * @param string $fansId
     */
    public function setFansId(string $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return OrderDTO
     */
    public function getOrderDTO(): OrderDTO
    {
        return $this->orderDTO;
    }

    /**
     * @param OrderDTO $orderDTO
     */
    public function setOrderDTO(OrderDTO $orderDTO): void
    {
        $this->orderDTO = $orderDTO;
    }

    /**
     * @return string
     */
    public function getPayResultPage(): string
    {
        return $this->payResultPage;
    }

    /**
     * @param string $payResultPage
     */
    public function setPayResultPage(string $payResultPage): void
    {
        $this->payResultPage = $payResultPage;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}