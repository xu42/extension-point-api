<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 积分变动日志列表
 * @author Baymax
 * @create Sun Nov 04 21:41:34 CST 2018
 */
class ExtCustomerPointsLogDTO implements \JsonSerializable {

    /**
     * 操作人名称
     * @var string
     */
    private $operatorName;

    /**
     * 积分变动时间
     * @var integer
     */
    private $createdAt;

    /**
     * 积分变动描述
     * @var string
     */
    private $description;

    /**
     * 积分变动类型(increase/decrease)
     * @var string
     */
    private $type;

    /**
     * 积分变动值
     * @var integer
     */
    private $amount;



    /**
     * @return string
     */
    public function getOperatorName(): string
    {
        return $this->operatorName;
    }

    /**
     * @param string $operatorName
     */
    public function setOperatorName(string $operatorName): void
    {
        $this->operatorName = $operatorName;
    }

    /**
     * @return integer
     */
    public function getCreatedAt(): integer
    {
        return $this->createdAt;
    }

    /**
     * @param integer $createdAt
     */
    public function setCreatedAt(integer $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return integer
     */
    public function getAmount(): integer
    {
        return $this->amount;
    }

    /**
     * @param integer $amount
     */
    public function setAmount(integer $amount): void
    {
        $this->amount = $amount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}