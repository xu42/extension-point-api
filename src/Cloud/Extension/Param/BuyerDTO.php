<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 买家信息
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class BuyerDTO implements \JsonSerializable {

    /**
     * 粉丝类型
     * @var integer
     */
    private $fansType;

    /**
     * 粉丝id
     * @var integer
     */
    private $fansId;

    /**
     * 受益人
     * @var string
     */
    private $beneficiary;

    /**
     * 买家手机号码
     * @var string
     */
    private $buyerPhone;

    /**
     * 买家id
     * @var integer
     */
    private $buyerId;



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
     * @return integer
     */
    public function getFansId(): integer
    {
        return $this->fansId;
    }

    /**
     * @param integer $fansId
     */
    public function setFansId(integer $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return string
     */
    public function getBeneficiary(): string
    {
        return $this->beneficiary;
    }

    /**
     * @param string $beneficiary
     */
    public function setBeneficiary(string $beneficiary): void
    {
        $this->beneficiary = $beneficiary;
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