<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create Fri Apr 12 20:40:48 CST 2019
 */
class ExtAccountResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var boolean
     */
    private $salesman;



    /**
     * @return boolean
     */
    public function getSalesman(): boolean
    {
        return $this->salesman;
    }

    /**
     * @param boolean $salesman
     */
    public function setSalesman(boolean $salesman): void
    {
        $this->salesman = $salesman;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}