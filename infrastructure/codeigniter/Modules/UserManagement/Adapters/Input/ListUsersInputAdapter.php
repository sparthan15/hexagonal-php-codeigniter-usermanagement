<?php

namespace Modules\UserManagement\Adapters\Input;

use App\Controllers\BaseController;
use usermanagement\application\usecases\ListUsersUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;

class ListUsersInputAdapter extends BaseController {

    private ListUsersUseCase $listUsersUseCase;
    private SessionDataOutputPort $sessionDataOutputPort;

    public function __construct(ListUsersUseCase $listUsersUseCase, SessionDataOutputPort $sessionDataOutputPort) {
        $this->helpers = ['url'];
        $this->listUsersUseCase = $listUsersUseCase;
        $this->sessionDataOutputPort = $sessionDataOutputPort;
    }

    public function findAll() {
        $userData = $data["logedUserData"] = $this->sessionDataOutputPort->getLogedUserData();
        $data["usersList"] = $this->listUsersUseCase->findAll($userData["companyId"]);
        return view("Modules\UserManagement\Views\header", $data)
                . view("Modules\UserManagement\Views\listAllUsers");
    }

}
