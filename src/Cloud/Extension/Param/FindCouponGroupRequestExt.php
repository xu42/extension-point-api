<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 请求参数
 * @author Baymax
 * @create Wed Sep 26 19:40:59 CST 2018
 */
class FindCouponGroupRequestExt implements \JsonSerializable {

    /**
     * 活动状态：0.全部 1.未开始 2.进行中 3.已结束
     * @var integer
     */
    private $status;

    /**
     * 页码
     * @var integer
     */
    private $pageNo;

    /**
     * 每页数量
     * @var integer
     */
    private $pageSize;



    /**
     * @return integer
     */
    public function getStatus(): integer
    {
        return $this->status;
    }

    /**
     * @param integer $status
     */
    public function setStatus(integer $status): void
    {
        $this->status = $status;
    }

    /**
     * @return integer
     */
    public function getPageNo(): integer
    {
        return $this->pageNo;
    }

    /**
     * @param integer $pageNo
     */
    public function setPageNo(integer $pageNo): void
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return integer
     */
    public function getPageSize(): integer
    {
        return $this->pageSize;
    }

    /**
     * @param integer $pageSize
     */
    public function setPageSize(integer $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}