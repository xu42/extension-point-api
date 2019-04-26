<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 返回参数
 * @author Baymax
 * @create Tue Oct 16 19:37:48 CST 2018
 */
class BenefitExtInfoDTO implements \JsonSerializable {

    /**
     * 是否包邮
     * @var boolean
     */
    private $postageFreeFlag;

    /**
     * 等级别名
     * @var string
     */
    private $levelAlias;

    /**
     * 是否存在等级权益
     * @var boolean
     */
    private $levelBenefitFlag;



    /**
     * @return boolean
     */
    public function getPostageFreeFlag(): boolean
    {
        return $this->postageFreeFlag;
    }

    /**
     * @param boolean $postageFreeFlag
     */
    public function setPostageFreeFlag(boolean $postageFreeFlag): void
    {
        $this->postageFreeFlag = $postageFreeFlag;
    }

    /**
     * @return string
     */
    public function getLevelAlias(): string
    {
        return $this->levelAlias;
    }

    /**
     * @param string $levelAlias
     */
    public function setLevelAlias(string $levelAlias): void
    {
        $this->levelAlias = $levelAlias;
    }

    /**
     * @return boolean
     */
    public function getLevelBenefitFlag(): boolean
    {
        return $this->levelBenefitFlag;
    }

    /**
     * @param boolean $levelBenefitFlag
     */
    public function setLevelBenefitFlag(boolean $levelBenefitFlag): void
    {
        $this->levelBenefitFlag = $levelBenefitFlag;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}