<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 卖家信息
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class SellerDTO implements \JsonSerializable {

    /**
     * 店铺类型
     * @var string
     */
    private $teamType;

    /**
     * 网点类型
     * @var string
     */
    private $shopType;

    /**
     * 店铺名字
     * @var string
     */
    private $shopName;

    /**
     * 店铺联系方式
     * @var string
     */
    private $shopTel;

    /**
     * 店铺id
     * @var integer
     */
    private $shopId;

    /**
     * 卖家id
     * @var integer
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getTeamType(): string
    {
        return $this->teamType;
    }

    /**
     * @param string $teamType
     */
    public function setTeamType(string $teamType): void
    {
        $this->teamType = $teamType;
    }

    /**
     * @return string
     */
    public function getShopType(): string
    {
        return $this->shopType;
    }

    /**
     * @param string $shopType
     */
    public function setShopType(string $shopType): void
    {
        $this->shopType = $shopType;
    }

    /**
     * @return string
     */
    public function getShopName(): string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     */
    public function setShopName(string $shopName): void
    {
        $this->shopName = $shopName;
    }

    /**
     * @return string
     */
    public function getShopTel(): string
    {
        return $this->shopTel;
    }

    /**
     * @param string $shopTel
     */
    public function setShopTel(string $shopTel): void
    {
        $this->shopTel = $shopTel;
    }

    /**
     * @return integer
     */
    public function getShopId(): integer
    {
        return $this->shopId;
    }

    /**
     * @param integer $shopId
     */
    public function setShopId(integer $shopId): void
    {
        $this->shopId = $shopId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}