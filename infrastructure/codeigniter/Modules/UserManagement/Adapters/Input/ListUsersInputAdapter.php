<?php

namespace Modules\UserManagement\Adapters\Input;

use App\Controllers\BaseController;

class ListUsersInputAdapter extends BaseController {

    public function findAll() {
        $data["logedUserData"] = "";
        return view("Modules\UserManagement\Views\header", $data)
                . view("Modules\UserManagement\Views\listAllUsers");
    }

}
