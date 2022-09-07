<?php

use usermanagement\domain\specifications\AddRoleSpecification;
use \usermanagement\domain\models\Role;
use usermanagement\domain\models\User;
use usermanagement\domain\vo\UserStatus;
use PHPUnit\Framework\TestCase;

class AddRoleSpecificationTest extends TestCase {

    private User $user;

    public function setUp(): void {
        $role = new Role(1, "Employee");
        $this->user = new User(1, 1, "cgamboa15", "123455", "2022-01-01", "", UserStatus::active(), [], [$role]);
    }

    public function test() {
        $role = new Role(1, "Admin");
        $addRoleSpec = new AddRoleSpecification($role, $this->user);
        $this->assertNotNull($addRoleSpec);
    }

    public function testValidationSuccess() {
        $role = new Role(1, "Admin");
        $addRoleSpec = new AddRoleSpecification($role, $this->user);
        $this->assertTrue($addRoleSpec->isSatisfiedBy());
    }

    public function testValidationFailed() {
        $role = new Role(1, "Employee");
        $addRoleSpec = new AddRoleSpecification($role, $this->user);
        $this->assertFalse($addRoleSpec->isSatisfiedBy());
    }

}
