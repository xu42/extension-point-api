<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 买家信息
 * @author Baymax
 * @create Wed Mar 27 11:42:10 CST 2019
 */
class ExtPointUserMsgDTO implements \JsonSerializable {

    /**
     * 买家标识
     * @var integer
     */
    private $buyerId;

    /**
     * 粉丝类型
     * @var integer
     */
    private $fansType;

    /**
     * 粉丝标识
     * @var integer
     */
    private $fansId;

    /**
     * 客户ip
     * @var string
     */
    private $clientIp;

    /**
     * 外部用户id
     * @var string
     */
    private $outUserId;



    /**
     * @return integer
     */
    public function getBuyerId(): integer
    {
        return $this->buyerId;
    }

    /**
     * @param integer $buyerId
     */
    public function setBuyerId(integer $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return integer
     */
    public function getFansType(): integer
    {
        return $this->fansType;
    }

    /**
     * @param integer $fansType
     */
    public function setFansType(integer $fansType): void
    {
        $this->fansType = $fansType;
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
    public function getClientIp(): string
    {
        return $this->clientIp;
    }

    /**
     * @param string $clientIp
     */
    public function setClientIp(string $clientIp): void
    {
        $this->clientIp = $clientIp;
    }

    /**
     * @return string
     */
    public function getOutUserId(): string
    {
        return $this->outUserId;
    }

    /**
     * @param string $outUserId
     */
    public function setOutUserId(string $outUserId): void
    {
        $this->outUserId = $outUserId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}