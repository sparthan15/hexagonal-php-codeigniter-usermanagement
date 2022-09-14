<?php

namespace Modules\UserManagement\Adapters\Input;

use App\Controllers\BaseController;
use usermanagement\application\usecases\ListUsersUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;
use \Modules\UserManagement\Views\Presenters\ListAllUsersPresenter;

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
        $arrayResponse = $this->listUsersUseCase->findAll($userData["companyId"]);
        $presenter = new ListAllUsersPresenter($arrayResponse);
        $data["presenter"] = $presenter;
        return view("Modules\UserManagement\Views\header", $data)
                . view("Modules\UserManagement\Views\listAllUsers")
                . view('Modules\UserManagement\Views\modalsHtml');
    }

}
