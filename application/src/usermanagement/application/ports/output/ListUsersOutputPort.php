<?php

namespace usermanagement\application\ports\output;

interface ListUsersOutputPort {

    function findAll(int $companyId): array;

    function findById(int $userId0): User;
}
