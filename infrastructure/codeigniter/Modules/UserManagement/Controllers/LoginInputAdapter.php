<?php

namespace Modules\UserManagement\Controllers;

use \CodeIgniter\Controller;
use usermanagement\application\usecases\LogInUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;

class LoginInputAdapter extends Controller {

    private LogInUseCase $loginUseCase;
    private SessionDataOutputPort $sessionDataOutputPort;

    public function __construct(LoginUseCase $loginUseCase, SessionDataOutputPort $sessionDataOutputPort) {
        $this->loginUseCase = $loginUseCase;
        $this->sessionDataOutputPort = $sessionDataOutputPort;
    }

    public function index() {
        $logedUserData = ["name" => "Sanjay", "email" => "sanjay_kumar@gmail.com"];
        $logedUserData["userLogedData"] = $this->sessionDataOutputPort->getLogedUserData();
        return view("Modules\UserManagement\Views\header", $logedUserData)
                . view("Modules\UserManagement\Views\index", $logedUserData);
    }

    public function login() {
        $userLogedData["userLogedData"] = $this->loginUseCase->execute("cgamboa", "123456");
        return view("Modules\UserManagement\Views\header")
                . view("Modules\UserManagement\Views\index", $userLogedData);
    }

}
