<?php

namespace Modules\UserManagement\Adapters\Output;

use usermanagement\domain\models\User;
use usermanagement\application\ports\output\UserOutputPort;

class UserOutputAdapter implements UserOutputPort {

    public function logIn(string $userName, string $password): string {
        return "";
    }

    public function logOut(int $userId): void {
        
    }

    public function save(User $user): User {
        return $user;
    }

}
