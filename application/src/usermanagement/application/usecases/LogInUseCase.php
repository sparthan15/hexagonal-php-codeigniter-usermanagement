<?php

namespace usermanagement\application\usecases;

interface LogInUseCase {

    function execute(string $userName, string $password):string;
}
