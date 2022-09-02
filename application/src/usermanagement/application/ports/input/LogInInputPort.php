<?php

namespace usermanagement\application\ports\input;

use \usermanagement\application\usecases\LogInUseCase;
use \usermanagement\application\ports\output\UserOutputPort;
use \usermanagement\domain\specifications\LogInSpecification;

class LogInInputPort implements LogInUseCase {

    private UserOutputPort $userOutputPort;

    public function __construct(UserOutputPort $userOutputPort) {
        $this->userOutputPort = $userOutputPort;
    }

    public function execute(string $userName, string $password): string {
        $specification = new LogInSpecification($userName, $password);
        $specification->isSatisfiedBy();
        return $this->userOutputPort->logIn($userName, $password);
    }

}
