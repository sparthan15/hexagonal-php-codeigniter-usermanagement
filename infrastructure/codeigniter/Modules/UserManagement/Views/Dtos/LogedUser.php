<?php

namespace Modules\UserManagement\Views\Dtos;

class LogedUser {

    public string $userName;
    public string $name;
    public string $lastName;
    public bool $isAdmin;

    public function __construct(string $jsonEncodedLogedUser) {
        $logedUserData = json_decode($jsonEncodedLogedUser);
        $this->userName = $logedUserData->userName;
        $this->name = $logedUserData->name;
        $this->lastName = $logedUserData->lastName;
        $this->isAdmin = $logedUserData->isAdmin;
    }

}
