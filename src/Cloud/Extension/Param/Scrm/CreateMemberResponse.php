<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create Sat Sep 29 21:29:50 CST 2018
 */
class CreateMemberResponse implements \JsonSerializable {

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