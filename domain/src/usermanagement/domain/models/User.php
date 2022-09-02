<?php

namespace usermanagement\domain\models;

use usermanagement\domain\vo\UserStatus;

class User {

    private ?int $id;
    private int $companyId;
    private string $userName;
    private UserStatus $status;
    private string $password;
    private ?string $createdAt;
    private ?string $updatedAt;
    private array $logs;

    public function __construct(int $id, int $companyId, string $userName, string $password, $createdAt, string $updatedAt, UserStatus $status, array $logs) {
        $this->id = $id;
        $this->companyId = $companyId;
        $this->userName = $userName;
        $this->password = $password;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->status = $status;
        $this->logs = $logs;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getCompanyId() {
        return $this->companyId;
    }

    public function getUserName(): string {
        return $this->userName;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    public function getUpdatedAt(): string {
        return $this->updatedAt;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getLogs(): array {
        return $this->logs;
    }

}
