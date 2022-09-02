<?php

namespace usermanagement\application\ports\output;

use usermanagement\domain\models\User;

interface UserOutputPort {

    function logIn(string $userName, string $password):string;

    function logOut(int $userId): void;

    function save(User $user): User;
}
