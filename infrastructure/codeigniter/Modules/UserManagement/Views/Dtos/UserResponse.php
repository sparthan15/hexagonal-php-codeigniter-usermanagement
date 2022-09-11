<?php

namespace Modules\UserManagement\Views\Dtos;

class UserResponse {

    public string $userId;
    public string $userName;
    public string $createdAt;
    public ?string $updatedAt;
    public bool $isActive;
    public string $companyId;

    public function __construct(\stdClass $object) {

        $this->companyId = $object->company_id;
        $this->userId = $object->user_id;
        $this->userName = $object->username;
        $this->createdAt = $object->createdAt;
        $this->updatedAt = $object->updatedAt;
        $this->isActive = $object->status == "ACTIVE";
    }

}
