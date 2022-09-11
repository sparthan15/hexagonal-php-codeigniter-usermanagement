<?php

namespace usermanagement\application\ports\output;

interface ListUsersOutputPort {

    function findAll(int $companyId): array;

    function findByUserId(int $userId): array;
}
