<?php

namespace usermanagement\application\usecases;

interface ListUsersUseCase {

    function findAll(int $companyId);

    function findById(int $userId);
}
