<?php

namespace usermanagement\application\usecases;

use usermanagement\domain\models\User;

interface CreateUserUseCase {

    function execute(User $user): User;
}
