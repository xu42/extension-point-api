<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create Fri Apr 12 16:17:48 CST 2019
 */
class ExtLevelChangeRequestDTO implements \JsonSerializable {

    /**
     * 分销员buyerId
     * @var integer
     */
    private $buyerId;

    /**
     * 当前等级
     * @var integer
     */
    private $level;

    /**
     * 累计成交订单数（发生退款不扣减)
     * @var integer
     */
    private $orderNum;

    /**
     * 累计成交金额（结算前退款会扣除相应金额）
     * @var integer
     */
    private $money;

    /**
     * 商品佣金（待结算+已结算）
     * @var integer
     */
    private $cpsMoney;

    /**
     * 邀请奖励（待结算+已结算）
     * @var integer
     */
    private $bonusMoney;

    /**
     * 累计收益(已结算订单+邀请)
     * @var integer
     */
    private $profit;

    /**
     * 累计推广金
     * @var integer
     */
    private $totalRecommendMoney;

    /**
     * 支付成功节点下的累计消费金
     * @var integer
     */
    private $totalPayConsumeMoney;

    /**
     * 交易完成节点下的累计消费金
     * @var integer
     */
    private $totalSuccessConsumeMoney;

    /**
     * 维权期结束节点下消费金
     * @var integer
     */
    private $totalFinishConsumeMoney;

    /**
     * 累计客户数
     * @var integer
     */
    private $totalCustomerNum;

    /**
     * 累计邀请人数
     * @var integer
     */
    private $totalInviteNum;

    /**
     * 当前等级累计推广金
     * @var integer
     */
    private $recommendMoney;

    /**
     * 当前等级 支付成功节点下的累计消费金
     * @var integer
     */
    private $payConsumeMoney;

    /**
     * 当前等级 交易完成节点下的累计消费金
     * @var integer
     */
    private $successConsumeMoney;

    /**
     * 当前等级 维权期结束节点下的累计消费金
     * @var integer
     */
    private $finishConsumeMoney;

    /**
     * 当前等级累计客户数
     * @var integer
     */
    private $customerNum;

    /**
     * 当前等级累计邀请人数
     * @var integer
     */
    private $inviteNum;



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
    public function getLevel(): integer
    {
        return $this->level;
    }

    /**
     * @param integer $level
     */
    public function setLevel(integer $level): void
    {
        $this->level = $level;
    }

    /**
     * @return integer
     */
    public function getOrderNum(): integer
    {
        return $this->orderNum;
    }

    /**
     * @param integer $orderNum
     */
    public function setOrderNum(integer $orderNum): void
    {
        $this->orderNum = $orderNum;
    }

    /**
     * @return integer
     */
    public function getMoney(): integer
    {
        return $this->money;
    }

    /**
     * @param integer $money
     */
    public function setMoney(integer $money): void
    {
        $this->money = $money;
    }

    /**
     * @return integer
     */
    public function getCpsMoney(): integer
    {
        return $this->cpsMoney;
    }

    /**
     * @param integer $cpsMoney
     */
    public function setCpsMoney(integer $cpsMoney): void
    {
        $this->cpsMoney = $cpsMoney;
    }

    /**
     * @return integer
     */
    public function getBonusMoney(): integer
    {
        return $this->bonusMoney;
    }

    /**
     * @param integer $bonusMoney
     */
    public function setBonusMoney(integer $bonusMoney): void
    {
        $this->bonusMoney = $bonusMoney;
    }

    /**
     * @return integer
     */
    public function getProfit(): integer
    {
        return $this->profit;
    }

    /**
     * @param integer $profit
     */
    public function setProfit(integer $profit): void
    {
        $this->profit = $profit;
    }

    /**
     * @return integer
     */
    public function getTotalRecommendMoney(): integer
    {
        return $this->totalRecommendMoney;
    }

    /**
     * @param integer $totalRecommendMoney
     */
    public function setTotalRecommendMoney(integer $totalRecommendMoney): void
    {
        $this->totalRecommendMoney = $totalRecommendMoney;
    }

    /**
     * @return integer
     */
    public function getTotalPayConsumeMoney(): integer
    {
        return $this->totalPayConsumeMoney;
    }

    /**
     * @param integer $totalPayConsumeMoney
     */
    public function setTotalPayConsumeMoney(integer $totalPayConsumeMoney): void
    {
        $this->totalPayConsumeMoney = $totalPayConsumeMoney;
    }

    /**
     * @return integer
     */
    public function getTotalSuccessConsumeMoney(): integer
    {
        return $this->totalSuccessConsumeMoney;
    }

    /**
     * @param integer $totalSuccessConsumeMoney
     */
    public function setTotalSuccessConsumeMoney(integer $totalSuccessConsumeMoney): void
    {
        $this->totalSuccessConsumeMoney = $totalSuccessConsumeMoney;
    }

    /**
     * @return integer
     */
    public function getTotalFinishConsumeMoney(): integer
    {
        return $this->totalFinishConsumeMoney;
    }

    /**
     * @param integer $totalFinishConsumeMoney
     */
    public function setTotalFinishConsumeMoney(integer $totalFinishConsumeMoney): void
    {
        $this->totalFinishConsumeMoney = $totalFinishConsumeMoney;
    }

    /**
     * @return integer
     */
    public function getTotalCustomerNum(): integer
    {
        return $this->totalCustomerNum;
    }

    /**
     * @param integer $totalCustomerNum
     */
    public function setTotalCustomerNum(integer $totalCustomerNum): void
    {
        $this->totalCustomerNum = $totalCustomerNum;
    }

    /**
     * @return integer
     */
    public function getTotalInviteNum(): integer
    {
        return $this->totalInviteNum;
    }

    /**
     * @param integer $totalInviteNum
     */
    public function setTotalInviteNum(integer $totalInviteNum): void
    {
        $this->totalInviteNum = $totalInviteNum;
    }

    /**
     * @return integer
     */
    public function getRecommendMoney(): integer
    {
        return $this->recommendMoney;
    }

    /**
     * @param integer $recommendMoney
     */
    public function setRecommendMoney(integer $recommendMoney): void
    {
        $this->recommendMoney = $recommendMoney;
    }

    /**
     * @return integer
     */
    public function getPayConsumeMoney(): integer
    {
        return $this->payConsumeMoney;
    }

    /**
     * @param integer $payConsumeMoney
     */
    public function setPayConsumeMoney(integer $payConsumeMoney): void
    {
        $this->payConsumeMoney = $payConsumeMoney;
    }

    /**
     * @return integer
     */
    public function getSuccessConsumeMoney(): integer
    {
        return $this->successConsumeMoney;
    }

    /**
     * @param integer $successConsumeMoney
     */
    public function setSuccessConsumeMoney(integer $successConsumeMoney): void
    {
        $this->successConsumeMoney = $successConsumeMoney;
    }

    /**
     * @return integer
     */
    public function getFinishConsumeMoney(): integer
    {
        return $this->finishConsumeMoney;
    }

    /**
     * @param integer $finishConsumeMoney
     */
    public function setFinishConsumeMoney(integer $finishConsumeMoney): void
    {
        $this->finishConsumeMoney = $finishConsumeMoney;
    }

    /**
     * @return integer
     */
    public function getCustomerNum(): integer
    {
        return $this->customerNum;
    }

    /**
     * @param integer $customerNum
     */
    public function setCustomerNum(integer $customerNum): void
    {
        $this->customerNum = $customerNum;
    }

    /**
     * @return integer
     */
    public function getInviteNum(): integer
    {
        return $this->inviteNum;
    }

    /**
     * @param integer $inviteNum
     */
    public function setInviteNum(integer $inviteNum): void
    {
        $this->inviteNum = $inviteNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}