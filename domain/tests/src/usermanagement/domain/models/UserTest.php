<?php

use usermanagement\domain\models\User;
use usermanagement\domain\vo\UserStatus;
use \usermanagement\domain\models\Role;

class UserTest extends \PHPUnit\Framework\TestCase {

    private Role $role;

    public function setUp(): void {
        $this->role = new Role(0, "Admin");
    }

    public function test() {
        $user = new User(1, 1, "cgamboa15", "123455", "2022-01-01", "", UserStatus::active(), [], [$this->role]);
        $this->assertNotNull($user->getId());
        $this->assertNotNull($user->getCompanyId());
        $this->assertNotNull($user->getUserName());
        $this->assertNotNull($user->getPassword());
        $this->assertNotNull($user->getStatus());
        $this->assertNotNull($user->getCreatedAt());
        $this->assertNotNull($user->getUpdatedAt());
        $this->assertNotNull($user->getLogs());
        $this->assertCount(1, $user->getRoles());
    }

    public function testAddNewRoleToUser() {
        $user = new User(1, 1, "cgamboa15", "123455", "2022-01-01", "", UserStatus::active(), [], [$this->role]);
        $user->addRole(new Role(0, "Employee"));
        $this->assertCount(2, $user->getRoles());
    }

    public function testValidateUserHasNotDuplicatedRoles() {
        $this->expectException(\RuntimeException::class);
        $user = new User(1, 1, "cgamboa15", "123455", "2022-01-01", "", UserStatus::active(), [], [$this->role]);
        $user->addRole(new Role(0, "Employee"));
        $user->addRole(new Role(0, "Employee"));
    }

    public function testValidateUserHasMoreThanOneRole() {
        $user = new User(1, 1, "cgamboa15", "123455", "2022-01-01", "", UserStatus::active(), [], [$this->role]);
        $user->addRole(new Role(0, "Employee"));
        $user->addRole(new Role(2, "Admin"));
        $user->addRole(new Role(1, "User"));
        $this->assertCount(4, $user->getRoles());
    }

}
