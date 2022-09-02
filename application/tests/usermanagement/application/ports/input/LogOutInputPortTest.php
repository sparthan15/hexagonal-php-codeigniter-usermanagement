<?php

use \usermanagement\application\ports\input\LogOutInputPort;
use \PHPUnit\Framework\TestCase;
use \usermanagement\application\ports\output\UserOutputPort;

class LogOutInputPortTest extends TestCase {

    public function testValidateOutpuPortCalled() {
        $userOutputPort = $this->createMock(UserOutputPort::class);
        $userOutputPort->expects($this->once())
                ->method("logOut")
                ->with(1);
        $logoutUseCase = new LogOutInputPort($userOutputPort);
        $logoutUseCase->execute(1);
    }

}
