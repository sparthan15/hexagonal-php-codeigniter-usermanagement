<?php

use \PHPUnit\Framework\TestCase;
use Modules\UserManagement\Controllers\LoginInputAdapter;
use usermanagement\application\ports\input\LogInInputPort;
use usermanagement\application\ports\output\SessionDataOutputPort;

class LoginInputAdapterTest extends TestCase {

    private string $username = "cgamboa";
    private string $password = "123456";
    private $loginRequest;
    private $log;
    private $response;
    private $userOutputPort;

    protected function setUp(): void {
        parent::setUp();
        $this->userOutputPort = $this->createMock(LogInInputPort::class);
        $this->userOutputPort->expects($this->once())
                ->method("execute")
                ->with($this->username, $this->password)
                ->willReturn("hellow");
        $this->sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);

        $this->request = $this->createMock(\CodeIgniter\HTTP\IncomingRequest::class);
        $this->response = $this->createMock(\CodeIgniter\HTTP\ResponseInterface::class);
        $this->logger = $this->createMock(Psr\Log\LoggerInterface::class);
    }

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
        $this->request->expects($this->exactly(2))
                ->method("getPost")
                ->withConsecutive(
                        [$this->equalTo("userName")],
                        [$this->equalTo("password")]
                )->willReturnOnConsecutiveCalls($this->username, $this->password);
        $loginInputAdapter = new LoginInputAdapter($this->userOutputPort, $this->sessionDataOutputPort);

        $loginInputAdapter->initController($this->request, $this->response, $this->logger);
        
        $result = $loginInputAdapter->login();
        $this->assertNotNull($result);
        $this->assertStringContainsString("welcome to the admin zone.", $result);
    }

}
