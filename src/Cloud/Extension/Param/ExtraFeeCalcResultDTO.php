<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 
 * @author Baymax
 * @create Mon Oct 08 11:32:37 CST 2018
 */
class ExtraFeeCalcResultDTO implements \JsonSerializable {

    /**
     * 附加费用列表
     * @var stdClass
     */
    private $extraFeeDetail;

    /**
     * 附加费用总额
     * @var integer
     */
    private $totalExtraFeeAmount;

    /**
     * 订单号(回传)
     * @var string
     */
    private $orderNo;



    /**
     * @return stdClass
     */
    public function getExtraFeeDetail(): stdClass
    {
        return $this->extraFeeDetail;
    }

    /**
     * @param stdClass $extraFeeDetail
     */
    public function setExtraFeeDetail(stdClass $extraFeeDetail): void
    {
        $this->extraFeeDetail = $extraFeeDetail;
    }

    /**
     * @return integer
     */
    public function getTotalExtraFeeAmount(): integer
    {
        return $this->totalExtraFeeAmount;
    }

    /**
     * @param integer $totalExtraFeeAmount
     */
    public function setTotalExtraFeeAmount(integer $totalExtraFeeAmount): void
    {
        $this->totalExtraFeeAmount = $totalExtraFeeAmount;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}