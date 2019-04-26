<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create Sat Sep 29 21:39:22 CST 2018
 */
class ModifyMemberResponse implements \JsonSerializable {

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