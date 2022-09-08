<?php

namespace Modules\UserManagement\Adapters\Input;

use \App\Controllers\BaseController;
use usermanagement\application\usecases\LogInUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;

class LoginInputAdapter extends BaseController {

    private LogInUseCase $loginUseCase;
    private SessionDataOutputPort $sessionDataOutputPort;

    public function __construct(LoginUseCase $loginUseCase, SessionDataOutputPort $sessionDataOutputPort) {
        $this->helpers = ['url'];
        $this->loginUseCase = $loginUseCase;
        $this->sessionDataOutputPort = $sessionDataOutputPort;
    }

    public function index() {
        $data["logedUserData"] = $this->sessionDataOutputPort->getLogedUserData();
        return view("Modules\UserManagement\Views\header", $data)
                . view("Modules\UserManagement\Views\index", $data);
    }

    public function login() {
        $data["logedUserData"] = $this->loginUseCase->execute($this->request->getPost("userName"), $this->request->getPost("password"));
        //$view = $data["logedUserData"] == "" ? "index" : "admin";
        return  redirect('\Modules\UserManagement\Adapters\Input\ListUsersInputAdapter::findAll');
    }

}
