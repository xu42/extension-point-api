<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\AssetsGoodsPromotionExtDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Sat Sep 29 10:43:38 CST 2018
 */
class CalculatedCouponsRequestExtDTO implements \JsonSerializable {

    /**
     * 用户标识信息
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;

    /**
     * 订单邮费
     * @var integer
     */
    private $postage;

    /**
     * 订单商品金额
     * @var integer
     */
    private $pay;

    /**
     * 渠道类型
     * @var string
     */
    private $channelType;

    /**
     * 是否可叠加优惠资产
     * @var boolean
     */
    private $overlayAssets;

    /**
     * 商品信息
     * @var array
     */
    private $goods;



    /**
     * @return CustomerIdentityDTO
     */
    public function getCustomerIdentityDTO(): CustomerIdentityDTO
    {
        return $this->customerIdentityDTO;
    }

    /**
     * @param CustomerIdentityDTO $customerIdentityDTO
     */
    public function setCustomerIdentityDTO(CustomerIdentityDTO $customerIdentityDTO): void
    {
        $this->customerIdentityDTO = $customerIdentityDTO;
    }

    /**
     * @return integer
     */
    public function getPostage(): integer
    {
        return $this->postage;
    }

    /**
     * @param integer $postage
     */
    public function setPostage(integer $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return integer
     */
    public function getPay(): integer
    {
        return $this->pay;
    }

    /**
     * @param integer $pay
     */
    public function setPay(integer $pay): void
    {
        $this->pay = $pay;
    }

    /**
     * @return string
     */
    public function getChannelType(): string
    {
        return $this->channelType;
    }

    /**
     * @param string $channelType
     */
    public function setChannelType(string $channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * @return boolean
     */
    public function getOverlayAssets(): boolean
    {
        return $this->overlayAssets;
    }

    /**
     * @param boolean $overlayAssets
     */
    public function setOverlayAssets(boolean $overlayAssets): void
    {
        $this->overlayAssets = $overlayAssets;
    }

    /**
     * @return array
     */
    public function getGoods(): array
    {
        return $this->goods;
    }

    /**
     * @param array $goods
     */
    public function setGoods(array $goods): void
    {
        $this->goods = $goods;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}