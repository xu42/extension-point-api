<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\CustomerExtValueCardsQueryRequest;
use Com\Youzan\Cloud\Extension\Param\Response\CustomerExtValueCardsQueryResponseOutParam;
use Com\Youzan\Cloud\Extension\Param\Pay\QueryValueCardBalanceRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\QueryValueCardBalanceResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Pay\CustomerPayCardsQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\QueryCustomerPayCardResponseDTOOutParam;

interface CustomerValueCardQueryExtPoint {

    public function queryCustomerValueCards(CustomerExtValueCardsQueryRequest $request) : CustomerExtValueCardsQueryResponseOutParam;

    public function queryCardByCardNos(QueryValueCardBalanceRequestDTO $request) : QueryValueCardBalanceResponseDTOOutParam;

    public function queryCustomerPayCards(CustomerPayCardsQueryRequestDTO $request) : QueryCustomerPayCardResponseDTOOutParam;

}