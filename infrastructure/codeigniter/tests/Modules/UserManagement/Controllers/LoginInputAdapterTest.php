<?php

use \PHPUnit\Framework\TestCase;
use Modules\UserManagement\Controllers\LoginInputAdapter;
use usermanagement\application\ports\input\LogInInputPort;
use usermanagement\application\ports\output\SessionDataOutputPort;

class LoginInputAdapterTest extends TestCase {

    private string $username = "cgamboa";
    private string $password = "123456";

    public function testIndex() {
        $userOutputPort = $this->createMock(LogInInputPort::class);
        $sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);
        $sessionDataOutputPort->expects($this->once())
                ->method("getLogedUserData")
                ->willReturn([]);
        $loginInputAdapter = new LoginInputAdapter($userOutputPort, $sessionDataOutputPort);
        $result = $loginInputAdapter->index();
        $this->assertNotNull($result);
        $this->assertStringContainsString("Welcome to User management", $result);
    }

    public function testLoginFailed() {

        $userOutputPort = $this->createMock(LogInInputPort::class);
        $userOutputPort->expects($this->once())
                ->method("execute")
                ->with($this->username, $this->password)
                ->willReturn("");
        $sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);
        $loginInputAdapter = new LoginInputAdapter($userOutputPort, $sessionDataOutputPort);
        $result = $loginInputAdapter->login();
        $this->assertNotNull($result);
         $this->assertStringContainsString("User/password incorrect or does not exists.", $result);
    }
    
    public function testLoginSuccessFull() {

        $userOutputPort = $this->createMock(LogInInputPort::class);
        $userOutputPort->expects($this->once())
                ->method("execute")
                ->with($this->username, $this->password)
                ->willReturn("hellow");
        $sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);
        $loginInputAdapter = new LoginInputAdapter($userOutputPort, $sessionDataOutputPort);
        $result = $loginInputAdapter->login();
        $this->assertNotNull($result);
         $this->assertStringContainsString("welcome to the admin zone.", $result);
    }

}
