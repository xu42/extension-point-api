<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 请求参数
 * @author Baymax
 * @create Tue Oct 16 19:37:48 CST 2018
 */
class BenefitExtQueryDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var integer
     */
    private $kdtId;

    /**
     * 账户
     * @var string
     */
    private $accountId;

    /**
     * 账户类型
     * @var string
     */
    private $accountType;



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

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     */
    public function setAccountId(string $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(string $accountType): void
    {
        $this->accountType = $accountType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}