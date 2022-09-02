<?php

namespace usermanagement\application\ports\input;

use \usermanagement\application\usecases\LogOutUseCase;
use \usermanagement\application\ports\output\UserOutputPort;

class LogOutInputPort implements LogOutUseCase {

    private UserOutputPort $userOutputPort;

    public function __construct(UserOutputPort $userOutputPort) {
        $this->userOutputPort = $userOutputPort;
    }

    public function execute(int $userId) {
        $this->userOutputPort->logOut($userId);
    }

}
