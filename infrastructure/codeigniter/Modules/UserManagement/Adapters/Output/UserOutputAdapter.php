<?php

namespace Modules\UserManagement\Adapters\Output;

use usermanagement\domain\models\User;
use usermanagement\application\ports\output\UserOutputPort;
use Modules\UserManagement\Models\UserRepository;
use \Config\Services;

class UserOutputAdapter implements UserOutputPort {

    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function logIn(string $userName, string $password): string {
        $session = Services::session();
        $queryResult = $this->userRepository->logIn($userName, $password);
        $logedUser = count($queryResult) > 0 ? json_encode($queryResult[0]) : "";
        $session->set("logedUser", $logedUser);

        return $logedUser;
    }

    public function logOut(int $userId): void {
        $this->userRepository->logOut($userId);
    }

    public function save(User $user): User {
        $insertedUser = $user;
        $this->userRepository->save($user);
        return $insertedUser;
    }

}
