<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 
 * @author Baymax
 * @create Tue Nov 06 20:20:56 CST 2018
 */
class PluginNotifyResultDTO implements \JsonSerializable {

    /**
     * 
     * @var boolean
     */
    private $success;



    /**
     * @return boolean
     */
    public function getSuccess(): boolean
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     */
    public function setSuccess(boolean $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}