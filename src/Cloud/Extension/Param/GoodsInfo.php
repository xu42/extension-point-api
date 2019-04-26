<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 商品信息
 * @author Baymax
 * @create Tue Nov 20 11:25:33 CST 2018
 */
class GoodsInfo implements \JsonSerializable {

    /**
     * 商品编码
     * @var string
     */
    private $goodsNo;

    /**
     * 电子卡券有效期
     * @var integer
     */
    private $itemValidityStart;

    /**
     * 电子卡券有效期
     * @var integer
     */
    private $itemValidityEnd;

    /**
     * 电子卡券有效期类型
     * @var integer
     */
    private $validityType;

    /**
     * 电子卡券有效期天数
     * @var integer
     */
    private $itemValidityDay;



    /**
     * @return string
     */
    public function getGoodsNo(): string
    {
        return $this->goodsNo;
    }

    /**
     * @param string $goodsNo
     */
    public function setGoodsNo(string $goodsNo): void
    {
        $this->goodsNo = $goodsNo;
    }

    /**
     * @return integer
     */
    public function getItemValidityStart(): integer
    {
        return $this->itemValidityStart;
    }

    /**
     * @param integer $itemValidityStart
     */
    public function setItemValidityStart(integer $itemValidityStart): void
    {
        $this->itemValidityStart = $itemValidityStart;
    }

    /**
     * @return integer
     */
    public function getItemValidityEnd(): integer
    {
        return $this->itemValidityEnd;
    }

    /**
     * @param integer $itemValidityEnd
     */
    public function setItemValidityEnd(integer $itemValidityEnd): void
    {
        $this->itemValidityEnd = $itemValidityEnd;
    }

    /**
     * @return integer
     */
    public function getValidityType(): integer
    {
        return $this->validityType;
    }

    /**
     * @param integer $validityType
     */
    public function setValidityType(integer $validityType): void
    {
        $this->validityType = $validityType;
    }

    /**
     * @return integer
     */
    public function getItemValidityDay(): integer
    {
        return $this->itemValidityDay;
    }

    /**
     * @param integer $itemValidityDay
     */
    public function setItemValidityDay(integer $itemValidityDay): void
    {
        $this->itemValidityDay = $itemValidityDay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}