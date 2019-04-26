<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Sun Sep 30 14:59:23 CST 2018
 */
class ExtPointsFreezeDTO implements \JsonSerializable {

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 积分消耗来源
     * @var integer
     */
    private $consumeSource;

    /**
     * 积分冻结值
     * @var integer
     */
    private $amount;

    /**
     * 积分冻结描述
     * @var string
     */
    private $description;

    /**
     * 业务唯一标识
     * @var string
     */
    private $bizValue;

    /**
     * 账号信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;



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
    public function getConsumeSource(): integer
    {
        return $this->consumeSource;
    }

    /**
     * @param integer $consumeSource
     */
    public function setConsumeSource(integer $consumeSource): void
    {
        $this->consumeSource = $consumeSource;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}