<?php

use \PHPUnit\Framework\TestCase;
use usermanagement\application\ports\input\GetLogedUserDataInputPort;
use usermanagement\application\ports\output\SessionDataOutputPort;

class GetLogedUserDataInputPortTest extends TestCase {

    public function test() {
        $sessionData = $this->createMock(SessionDataOutputPort::class);
        $sessionData->expects($this->once())
                ->method("getLogedUserData")
                ->willReturn([]);
        $getLogedUserData = new GetLogedUserDataInputPort($sessionData);
        $this->assertNotNull($getLogedUserData->execute());
    }

    public function testUseOutputPortToFetchLogedUserData() {
        $sessionData = $this->createMock(SessionDataOutputPort::class);
        $sessionData->expects($this->once())
                ->method("getLogedUserData")
                ->willReturn([]);
        $getLogedUserData = new GetLogedUserDataInputPort($sessionData);
        $this->assertNotNull($getLogedUserData->execute());
    }

}
