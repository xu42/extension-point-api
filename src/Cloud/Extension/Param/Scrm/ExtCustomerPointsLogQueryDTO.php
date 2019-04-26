<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Sun Nov 04 21:41:34 CST 2018
 */
class ExtCustomerPointsLogQueryDTO implements \JsonSerializable {

    /**
     * 单页条数
     * @var integer
     */
    private $pageSize;

    /**
     * 页码
     * @var integer
     */
    private $page;

    /**
     * 账号信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;



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

    /**
     * @return integer
     */
    public function getPage(): integer
    {
        return $this->page;
    }

    /**
     * @param integer $page
     */
    public function setPage(integer $page): void
    {
        $this->page = $page;
    }

    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}