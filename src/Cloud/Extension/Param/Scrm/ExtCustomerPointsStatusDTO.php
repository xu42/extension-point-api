<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create Thu Oct 11 17:21:06 CST 2018
 */
class ExtCustomerPointsStatusDTO implements \JsonSerializable {

    /**
     * 累计获得的积分数(只增不减)
     * @var integer
     */
    private $totalPoints;

    /**
     * 当前积分
     * @var integer
     */
    private $currentPoints;



    /**
     * @return integer
     */
    public function getTotalPoints(): integer
    {
        return $this->totalPoints;
    }

    /**
     * @param integer $totalPoints
     */
    public function setTotalPoints(integer $totalPoints): void
    {
        $this->totalPoints = $totalPoints;
    }

    /**
     * @return integer
     */
    public function getCurrentPoints(): integer
    {
        return $this->currentPoints;
    }

    /**
     * @param integer $currentPoints
     */
    public function setCurrentPoints(integer $currentPoints): void
    {
        $this->currentPoints = $currentPoints;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}