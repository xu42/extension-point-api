<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create Wed Sep 12 17:04:23 CST 2018
 */
class FansUnionidCreateDTO implements \JsonSerializable {

    /**
     * 获取时间
     * @var string
     */
    private $dataTime;

    /**
     * 店铺id
     * @var integer
     */
    private $kdtId;

    /**
     * 公众号或小程序id
     * @var integer
     */
    private $mpId;

    /**
     * 粉丝标识
     * @var integer
     */
    private $fansId;

    /**
     * 微信全局标识
     * @var string
     */
    private $unionId;



    /**
     * @return string
     */
    public function getDataTime(): string
    {
        return $this->dataTime;
    }

    /**
     * @param string $dataTime
     */
    public function setDataTime(string $dataTime): void
    {
        $this->dataTime = $dataTime;
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

    /**
     * @return integer
     */
    public function getMpId(): integer
    {
        return $this->mpId;
    }

    /**
     * @param integer $mpId
     */
    public function setMpId(integer $mpId): void
    {
        $this->mpId = $mpId;
    }

    /**
     * @return integer
     */
    public function getFansId(): integer
    {
        return $this->fansId;
    }

    /**
     * @param integer $fansId
     */
    public function setFansId(integer $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return string
     */
    public function getUnionId(): string
    {
        return $this->unionId;
    }

    /**
     * @param string $unionId
     */
    public function setUnionId(string $unionId): void
    {
        $this->unionId = $unionId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}