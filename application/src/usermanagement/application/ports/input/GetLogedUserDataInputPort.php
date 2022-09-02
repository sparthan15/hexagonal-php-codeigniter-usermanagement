<?php

namespace usermanagement\application\ports\input;

use \usermanagement\application\ports\output\SessionDataOutputPort;

class GetLogedUserDataInputPort implements \usermanagement\application\usecases\GetLogedUserDataUseCase {

    private SessionDataOutputPort $sessionData;

    public function __construct(SessionDataOutputPort $sessionData) {
        $this->sessionData = $sessionData;
    }

    public function execute() {
        return $this->sessionData->getLogedUserData();
    }

}
