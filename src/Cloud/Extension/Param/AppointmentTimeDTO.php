<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 预约时间
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class AppointmentTimeDTO implements \JsonSerializable {

    /**
     * 结束时间
     * @var date
     */
    private $endTime;

    /**
     * 开始时间
     * @var date
     */
    private $startTime;



    /**
     * @return date
     */
    public function getEndTime(): date
    {
        return $this->endTime;
    }

    /**
     * @param date $endTime
     */
    public function setEndTime(date $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return date
     */
    public function getStartTime(): date
    {
        return $this->startTime;
    }

    /**
     * @param date $startTime
     */
    public function setStartTime(date $startTime): void
    {
        $this->startTime = $startTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}