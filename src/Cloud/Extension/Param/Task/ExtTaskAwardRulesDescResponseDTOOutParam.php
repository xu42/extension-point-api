<?php

namespace Com\Youzan\Cloud\Extension\Param\Task;

use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardRulesDescResponseDTO;

/**
 *  返回类
 * @author Baymax
 * @create Mon Mar 14 16:50:32 CST 2022
 */
class ExtTaskAwardRulesDescResponseDTOOutParam implements \JsonSerializable {

    /**
     *
     * @var bool
     */
    private $success;

    /**
     *
     * @var string
     */
    private $code;

    /**
     *
     * @var string
     */
    private $message;

    /**
     *
     * @var ExtTaskAwardRulesDescResponseDTO
     */
    private $data;

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return ExtTaskAwardRulesDescResponseDTO
     */
    public function getData(): ?ExtTaskAwardRulesDescResponseDTO
    {
        return $this->data;
    }

    /**
     * @param ExtTaskAwardRulesDescResponseDTO $data
     */
    public function setData(?ExtTaskAwardRulesDescResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}