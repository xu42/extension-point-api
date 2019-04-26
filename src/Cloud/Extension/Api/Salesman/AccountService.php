<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtAccountVerifyRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtAccountVerifyResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtAccountRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtAccountResponseDTOOutParam;

interface AccountService {

    public function verify(ExtAccountVerifyRequestDTO $extAccountVerifyRequest) : ExtAccountVerifyResponseDTOOutParam;

    public function becomeSalesman(ExtAccountRequestDTO $extAccountRequest) : ExtAccountResponseDTOOutParam;

}