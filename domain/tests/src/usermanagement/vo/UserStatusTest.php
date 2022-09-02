<?php

use \PHPUnit\Framework\TestCase;
use usermanagement\domain\vo\UserStatus;

class UserStatusTest extends TestCase {

    public function testActiveConstruction() {
        $status = UserStatus::active();
        $this->assertNotNull($status);
        $this->assertEquals($status->getStatus(), UserStatus::ACTIVE);
    }

    public function testInActiveStatus() {
        $status = UserStatus::inactive();
        $this->assertNotNull($status);
        $this->assertEquals($status->getStatus(), UserStatus::IN_ACTIVE);
    }

    public function testDeletedStatus() {
        $status = UserStatus::deleted();
        $this->assertNotNull($status);
        $this->assertEquals($status->getStatus(), UserStatus::DELETED);
    }

}
