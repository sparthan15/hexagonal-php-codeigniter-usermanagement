<?php

namespace usermanagement\application\ports\input;

use usermanagement\application\usecases\ListUsersUseCase;
use usermanagement\application\ports\output\ListUsersOutputPort;

class ListUsersInputPort implements ListUsersUseCase {

    private ListUsersOutputPort $listUserOutputPort;

    public function __construct(ListUsersOutputPort $listUserOutputPort) {
        $this->listUserOutputPort = $listUserOutputPort;
    }

    public function findAll(int $companyId) {
        return $this->listUserOutputPort->findAll($companyId);
    }

    public function findById(int $userId) {
        return $this->listUserOutputPort->findById($userId);
    }

}
