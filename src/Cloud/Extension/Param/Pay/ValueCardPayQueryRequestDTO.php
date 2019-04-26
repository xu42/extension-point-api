<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create Mon Apr 22 19:25:06 CST 2019
 */
class ValueCardPayQueryRequestDTO implements \JsonSerializable {

    /**
     * 储值支付单据号
     * @var string
     */
    private $payOrderNo;

    /**
     * 店铺ID
     * @var integer
     */
    private $kdtId;



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