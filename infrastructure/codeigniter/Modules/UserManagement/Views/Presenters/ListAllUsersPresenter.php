<?php

namespace Modules\UserManagement\Views\Presenters;

use \Modules\UserManagement\Views\Dtos\UserResponse;

class ListAllUsersPresenter {

    public array $usersList;

    public function __construct(array $usersList) {
        foreach ($usersList as $userResponse) {
            $this->usersList[] = new UserResponse($userResponse);
        }
    }

    public function isEmpty(): bool {
        return !isset($this->usersList) || count($this->usersList) == 0;
    }

}
