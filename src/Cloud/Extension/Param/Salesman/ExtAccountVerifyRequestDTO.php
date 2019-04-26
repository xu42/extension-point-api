<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create Fri Apr 12 20:34:00 CST 2019
 */
class ExtAccountVerifyRequestDTO implements \JsonSerializable {

    /**
     * 每个分销员的用户id
     * @var array
     */
    private $buyerIds;

    /**
     * 店铺id 上云用于判断业务身份
     * @var integer
     */
    private $kdtId;



    /**
     * @return array
     */
    public function getBuyerIds(): array
    {
        return $this->buyerIds;
    }

    /**
     * @param array $buyerIds
     */
    public function setBuyerIds(array $buyerIds): void
    {
        $this->buyerIds = $buyerIds;
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