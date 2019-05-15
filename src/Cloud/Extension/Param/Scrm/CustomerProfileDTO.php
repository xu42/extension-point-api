<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ContactAddressDTO;

/**
 * 
 * @author Baymax
 * @create Tue Oct 09 16:05:49 CST 2018
 */
class CustomerProfileDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var int
     */
    private $gender;

    /**
     * 
     * @var string
     */
    private $birthday;

    /**
     * 是否为会员
     * @var bool
     */
    private $isMember;

    /**
     * 
     * @var ContactAddressDTO
     */
    private $contactAddressDTO;

    /**
     * 邮箱
     * @var string
     */
    private $email;



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
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     */
    public function setGender(int $gender): void
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
     * @return bool
     */
    public function getIsMember(): bool
    {
        return $this->isMember;
    }

    /**
     * @param bool $isMember
     */
    public function setIsMember(bool $isMember): void
    {
        $this->isMember = $isMember;
    }

    /**
     * @return ContactAddressDTO
     */
    public function getContactAddressDTO(): ContactAddressDTO
    {
        return $this->contactAddressDTO;
    }

    /**
     * @param ContactAddressDTO $contactAddressDTO
     */
    public function setContactAddressDTO(ContactAddressDTO $contactAddressDTO): void
    {
        $this->contactAddressDTO = $contactAddressDTO;
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