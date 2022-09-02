<?php

namespace usermanagement\application\ports\input;

use usermanagement\domain\models\User;
use \usermanagement\application\ports\output\UserOutputPort;
use \usermanagement\application\usecases\CreateUserUseCase;

class CreateUserInputPort implements CreateUserUseCase {

    private UserOutputPort $userOutputPort;

    public function __construct(UserOutputPort $userOutputPort) {
        $this->userOutputPort = $userOutputPort;
    }

    public function execute(User $user): User {
        return $this->userOutputPort->save($user);
    }

}
