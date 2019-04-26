<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\AssetsGoodsPromotionExtDTO;

/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class CouponFreezeRequestExtDTO implements \JsonSerializable {

    /**
     * 卡券id
     * @var integer
     */
    private $couponId;

    /**
     * 是否可叠加优惠资产
     * @var boolean
     */
    private $overlayAssets;

    /**
     * 
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
     * @var integer
     */
    private $channelType;

    /**
     * 
     * @var array
     */
    private $goods;



    /**
     * @return integer
     */
    public function getCouponId(): integer
    {
        return $this->couponId;
    }

    /**
     * @param integer $couponId
     */
    public function setCouponId(integer $couponId): void
    {
        $this->couponId = $couponId;
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
     * @return integer
     */
    public function getChannelType(): integer
    {
        return $this->channelType;
    }

    /**
     * @param integer $channelType
     */
    public function setChannelType(integer $channelType): void
    {
        $this->channelType = $channelType;
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