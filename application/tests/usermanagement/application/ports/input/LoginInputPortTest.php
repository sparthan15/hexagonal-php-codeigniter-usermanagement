<?php

use \usermanagement\application\ports\input\LogInInputPort;
use \usermanagement\domain\models\User;
use usermanagement\domain\vo\UserStatus;
use \PHPUnit\Framework\TestCase;
use \usermanagement\application\ports\output\UserOutputPort;
use \usermanagement\domain\exceptions\MalFormedLoginException;
use usermanagement\domain\specifications\LoginSpecification;

class LoginInputPortTest extends TestCase {

    private LogInInputPort $logInInputPort;

    public function testOutputPortCalled() {
        $username = "cgamboa";
        $password = "p9909jcpoeriopcer";
        $token = "asdklsdjklasjkldasdklas";
        $userOutpuPort = $this->createMock(UserOutputPort::class);
        $userOutpuPort->expects($this->once())
                ->method("login")
                ->with($username, $password)
                ->willReturn($token);

        $this->logInInputPort = new LogInInputPort($userOutpuPort);
        $result = $this->logInInputPort->execute($username, $password);
        $this->assertNotNull($this->logInInputPort);
        $this->assertEquals($result, $token);
    }

    public function testLoginFailedDueToMalFormedLoginRequest() {
        $this->expectException(MalFormedLoginException::class);
        $token = "ioasjdijasdoij";
        $wrongUsername = "";
        $wrongPassword = "";
        $userOutpuPort = $this->createMock(UserOutputPort::class);
        $userOutpuPort->expects($this->never())
                ->method("login")
                ->with($wrongUsername, $wrongPassword)
                ->willReturn($token);
        $validation = new LoginSpecification($wrongUsername, $wrongPassword);
        $this->logInInputPort = new LogInInputPort($userOutpuPort, $validation);
        $this->logInInputPort->execute($wrongUsername, $wrongPassword);
    }

}
