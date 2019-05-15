<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardBalanceDTO;

/**
 * 
 * @author Baymax
 * @create Tue Apr 30 10:55:07 CST 2019
 */
class QueryValueCardBalanceResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $valueCardBalanceList;



    /**
     * @return array
     */
    public function getValueCardBalanceList(): array
    {
        return $this->valueCardBalanceList;
    }

    /**
     * @param array $valueCardBalanceList
     */
    public function setValueCardBalanceList(array $valueCardBalanceList): void
    {
        $this->valueCardBalanceList = $valueCardBalanceList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}