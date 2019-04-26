<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\UnavailableItemMsgDTO;

/**
 * 
 * @author Baymax
 * @create Sun Sep 30 17:35:52 CST 2018
 */
class OrderCreateSelfValidateResultDTO implements \JsonSerializable {

    /**
     * 校验结果信息
     * @var string
     */
    private $message;

    /**
     * 校验结果
     * @var boolean
     */
    private $validateResult;

    /**
     * 不可购买商品
     * @var array
     */
    private $unavailableItemList;



    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return boolean
     */
    public function getValidateResult(): boolean
    {
        return $this->validateResult;
    }

    /**
     * @param boolean $validateResult
     */
    public function setValidateResult(boolean $validateResult): void
    {
        $this->validateResult = $validateResult;
    }

    /**
     * @return array
     */
    public function getUnavailableItemList(): array
    {
        return $this->unavailableItemList;
    }

    /**
     * @param array $unavailableItemList
     */
    public function setUnavailableItemList(array $unavailableItemList): void
    {
        $this->unavailableItemList = $unavailableItemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}