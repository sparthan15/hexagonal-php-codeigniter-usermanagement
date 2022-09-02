<?php

use usermanagement\domain\models\User;
use usermanagement\domain\vo\UserStatus;

class UserTest extends \PHPUnit\Framework\TestCase {

    public function test() {
        $user = new User(1, 1, "cgamboa15", "123455", "2022-01-01", "", UserStatus::active(), []);
        $this->assertNotNull($user->getId());
        $this->assertNotNull($user->getCompanyId());
        $this->assertNotNull($user->getUserName());
        $this->assertNotNull($user->getPassword());
        $this->assertNotNull($user->getStatus());
        $this->assertNotNull($user->getCreatedAt());
        $this->assertNotNull($user->getUpdatedAt());
        $this->assertNotNull($user->getLogs());
    }

}
