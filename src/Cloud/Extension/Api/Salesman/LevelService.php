<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtLevelRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtLevelRulesResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtLevelChangeRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtLevelChangeResponseDTOOutParam;

interface LevelService {

    public function getCustomLevelRules(ExtLevelRequestDTO $extLevelRequest) : ExtLevelRulesResponseDTOOutParam;

    public function changeLevel(ExtLevelChangeRequestDTO $extLevelChangeRequest) : ExtLevelChangeResponseDTOOutParam;

}