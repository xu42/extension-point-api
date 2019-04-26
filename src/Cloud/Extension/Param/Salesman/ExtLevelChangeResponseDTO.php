<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create Fri Apr 12 16:17:48 CST 2019
 */
class ExtLevelChangeResponseDTO implements \JsonSerializable {

    /**
     * 需要变更为的等级值
     * @var integer
     */
    private $level;

    /**
     * 变更类型
     * @var integer
     */
    private $changeType;

    /**
     * 等级调整时的备注，可填写升降级理由
     * @var string
     */
    private $remark;



    /**
     * @return integer
     */
    public function getLevel(): integer
    {
        return $this->level;
    }

    /**
     * @param integer $level
     */
    public function setLevel(integer $level): void
    {
        $this->level = $level;
    }

    /**
     * @return integer
     */
    public function getChangeType(): integer
    {
        return $this->changeType;
    }

    /**
     * @param integer $changeType
     */
    public function setChangeType(integer $changeType): void
    {
        $this->changeType = $changeType;
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