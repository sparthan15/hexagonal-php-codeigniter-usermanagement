<?php

namespace Modules\UserManagement\Controllers;

use \App\Controllers\BaseController;
use usermanagement\application\usecases\LogInUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;

class LoginInputAdapter extends BaseController {

    private LogInUseCase $loginUseCase;
    private SessionDataOutputPort $sessionDataOutputPort;

    public function __construct(LoginUseCase $loginUseCase, SessionDataOutputPort $sessionDataOutputPort) {

        $this->loginUseCase = $loginUseCase;
        $this->sessionDataOutputPort = $sessionDataOutputPort;
    }

    public function index() {
        $logedUserData["userLogedData"] = $this->sessionDataOutputPort->getLogedUserData();
        return view("Modules\UserManagement\Views\header", $logedUserData)
                . view("Modules\UserManagement\Views\index", $logedUserData);
    }

    public function login() {
        $userLogedData["userLogedData"] = $this->loginUseCase->execute($this->request->getPost("userName"), $this->request->getPost("password"));
        return view("Modules\UserManagement\Views\header")
                . view("Modules\UserManagement\Views\index", $userLogedData);
    }

}
