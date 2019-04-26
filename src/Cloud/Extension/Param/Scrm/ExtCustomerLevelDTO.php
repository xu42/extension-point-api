<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 用户等级列表
 * @author Baymax
 * @create Fri Oct 12 14:13:44 CST 2018
 */
class ExtCustomerLevelDTO implements \JsonSerializable {

    /**
     * 等级别名
     * @var string
     */
    private $levelAlias;

    /**
     * identityNo
     * @var string
     */
    private $identityNo;

    /**
     * 等级有效期开始时间
     * @var date
     */
    private $termBeginAt;

    /**
     * 等级有效期结束时间
     * @var date
     */
    private $termEndAt;



    /**
     * @return string
     */
    public function getLevelAlias(): string
    {
        return $this->levelAlias;
    }

    /**
     * @param string $levelAlias
     */
    public function setLevelAlias(string $levelAlias): void
    {
        $this->levelAlias = $levelAlias;
    }

    /**
     * @return string
     */
    public function getIdentityNo(): string
    {
        return $this->identityNo;
    }

    /**
     * @param string $identityNo
     */
    public function setIdentityNo(string $identityNo): void
    {
        $this->identityNo = $identityNo;
    }

    /**
     * @return date
     */
    public function getTermBeginAt(): date
    {
        return $this->termBeginAt;
    }

    /**
     * @param date $termBeginAt
     */
    public function setTermBeginAt(date $termBeginAt): void
    {
        $this->termBeginAt = $termBeginAt;
    }

    /**
     * @return date
     */
    public function getTermEndAt(): date
    {
        return $this->termEndAt;
    }

    /**
     * @param date $termEndAt
     */
    public function setTermEndAt(date $termEndAt): void
    {
        $this->termEndAt = $termEndAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}