<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create Fri Apr 12 20:40:48 CST 2019
 */
class ExtAccountRequestDTO implements \JsonSerializable {

    /**
     * 分销员uid
     * @var integer
     */
    private $buyerId;

    /**
     * 邀请方buyerid
     * @var integer
     */
    private $fromBuyerId;

    /**
     * 店铺id 上云用于判断业务身份
     * @var integer
     */
    private $kdtId;



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
     * @return integer
     */
    public function getFromBuyerId(): integer
    {
        return $this->fromBuyerId;
    }

    /**
     * @param integer $fromBuyerId
     */
    public function setFromBuyerId(integer $fromBuyerId): void
    {
        $this->fromBuyerId = $fromBuyerId;
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