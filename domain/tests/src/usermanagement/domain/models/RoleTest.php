<?php

use usermanagement\domain\models\Role;

class RoleTest extends PHPUnit\Framework\TestCase {

    private Role $rol;

    public function setUp(): void {
        parent::setUp();
        $this->role = new Role(0, "Charlie");
    }

    public function testProperties() {
        $this->assertNotNull($this->role);
        $this->assertNotNull($this->role->getId());
        $this->assertNotNull($this->role->getState());
    }

    public function testActiveState() {
        $this->assertEquals("ACTIVE", $this->role->getState());
    }

    public function testInActiveState() {
        $this->role->inactivate();
        $this->assertEquals("INACTIVE", $this->role->getState());
    }

}
