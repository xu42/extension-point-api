<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ContactAddressCreateDTO;

/**
 * 
 * @author Baymax
 * @create Sat Sep 29 21:29:50 CST 2018
 */
class MemberProfileCreateDTO implements \JsonSerializable {

    /**
     * 注册手机号
     * @var string
     */
    private $registerMobile;

    /**
     * 姓名
     * @var string
     */
    private $name;

    /**
     * 性别,0:未知;1:男;2:女
     * @var integer
     */
    private $gender;

    /**
     * 生日
     * @var string
     */
    private $birthday;

    /**
     * 
     * @var ContactAddressCreateDTO
     */
    private $contactAddressCreateDTO;

    /**
     * 邮箱
     * @var string
     */
    private $email;



    /**
     * @return string
     */
    public function getRegisterMobile(): string
    {
        return $this->registerMobile;
    }

    /**
     * @param string $registerMobile
     */
    public function setRegisterMobile(string $registerMobile): void
    {
        $this->registerMobile = $registerMobile;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getGender(): integer
    {
        return $this->gender;
    }

    /**
     * @param integer $gender
     */
    public function setGender(integer $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return ContactAddressCreateDTO
     */
    public function getContactAddressCreateDTO(): ContactAddressCreateDTO
    {
        return $this->contactAddressCreateDTO;
    }

    /**
     * @param ContactAddressCreateDTO $contactAddressCreateDTO
     */
    public function setContactAddressCreateDTO(ContactAddressCreateDTO $contactAddressCreateDTO): void
    {
        $this->contactAddressCreateDTO = $contactAddressCreateDTO;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}