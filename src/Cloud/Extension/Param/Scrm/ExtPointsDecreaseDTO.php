<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Mon Oct 08 17:30:15 CST 2018
 */
class ExtPointsDecreaseDTO implements \JsonSerializable {

    /**
     * 操作人名称
     * @var string
     */
    private $operatorName;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 积分扣减事件
     * @var integer
     */
    private $eventType;

    /**
     * 账号信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;

    /**
     * 积分扣减值
     * @var integer
     */
    private $amount;

    /**
     * 积分扣减描述
     * @var string
     */
    private $description;

    /**
     * 业务唯一标识
     * @var string
     */
    private $bizValue;



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
     * @return stdClass
     */
    public function getExtraInfo(): stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

    /**
     * @return integer
     */
    public function getEventType(): integer
    {
        return $this->eventType;
    }

    /**
     * @param integer $eventType
     */
    public function setEventType(integer $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
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
    public function getBizValue(): string
    {
        return $this->bizValue;
    }

    /**
     * @param string $bizValue
     */
    public function setBizValue(string $bizValue): void
    {
        $this->bizValue = $bizValue;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}