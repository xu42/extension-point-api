<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create Mon Oct 08 10:51:46 CST 2018
 */
class BuyerBlacklistValidateResultDTO implements \JsonSerializable {

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}