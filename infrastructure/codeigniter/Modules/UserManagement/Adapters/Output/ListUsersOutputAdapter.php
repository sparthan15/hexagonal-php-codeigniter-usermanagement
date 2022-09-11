<?php

namespace Modules\UserManagement\Adapters\Output;

use usermanagement\application\ports\output\ListUsersOutputPort;
use Modules\UserManagement\Models\ListUsersRepository;

class ListUsersOutputAdapter implements ListUsersOutputPort {

    private ListUsersRepository $repository;

    public function __construct(ListUsersRepository $repository) {
        $this->repository = $repository;
    }

    public function findAll(int $companyId): array {
        return $this->repository->findAllUsersByCompanyId($companyId);
    }
     public function findByUserId(int $userId): array {
       return  $this->repository->findAllUsersByCompanyId($userId);
    }
    

}
