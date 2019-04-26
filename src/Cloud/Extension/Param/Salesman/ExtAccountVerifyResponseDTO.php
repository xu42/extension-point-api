<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create Fri Apr 12 20:34:00 CST 2019
 */
class ExtAccountVerifyResponseDTO implements \JsonSerializable {

    /**
     * 审核结果
     * @var integer
     */
    private $status;

    /**
     * 审核备注 非必填
     * @var string
     */
    private $remark;



    /**
     * @return integer
     */
    public function getStatus(): integer
    {
        return $this->status;
    }

    /**
     * @param integer $status
     */
    public function setStatus(integer $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}