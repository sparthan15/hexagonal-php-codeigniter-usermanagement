<?php

namespace Modules\UserManagement\Views\Dtos;

class UserResponse {

    const VALUE_NOT_FOUND = "VALUE NOT FOUND";

    public string $userId;
    public string $userName;
    public string $createdAt;
    public ?string $updatedAt;
    public bool $isActive;
    public string $companyId;

    public function __construct($object) {

        $this->companyId = isset($object->company_id) ? $object->company_id : "VALUE NOT FOUND";
        $this->userId = isset($object->user_id) ? $object->user_id : "VALUE NOT FOUND";
        $this->userName = isset($object->username) ? $object->username : "VALUE NOT FOUND";
        $this->createdAt = isset($object->createdAt) ? $object->createdAt : "VALUE NOT FOUND";
        $this->updatedAt = isset($object->updatedAt) ? $object->updatedAt : "VALUE NOT FOUND";
        $this->isActive = isset($object->status) && $object->status == "ACTIVE";
    }

}
