<?php

use \PHPUnit\Framework\TestCase;
use Modules\UserManagement\Adapters\Input\LoginInputAdapter;
use usermanagement\application\usecases\LogInUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;

class LoginInputAdapterTest extends TestCase {

    private string $username = "cgamboa";
    private string $password = "123456";
    private $loginRequest;
    private $log;
    private $response;
    private $loginUseCase;

    protected function setUp(): void {
        parent::setUp();
        $this->loginUseCase = $this->createMock(LogInUseCase::class);

        $this->sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);

        $this->request = $this->createMock(\CodeIgniter\HTTP\IncomingRequest::class);
        $this->response = $this->createMock(\CodeIgniter\HTTP\ResponseInterface::class);
        $this->logger = $this->createMock(Psr\Log\LoggerInterface::class);
    }

    public function testIndex() {
        $sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);
        $sessionDataOutputPort->expects($this->once())
                ->method("getLogedUserData")
                ->willReturn([]);
        $loginInputAdapter = new LoginInputAdapter($this->loginUseCase, $sessionDataOutputPort);
        $result = $loginInputAdapter->index();
        $this->assertNotNull($result);
        $this->assertStringContainsString("Welcome to User management", $result);
    }

    public function testLoginFailed() {
        $this->request->expects($this->exactly(2))
                ->method("getPost")
                ->withConsecutive(
                        [$this->equalTo("userName")],
                        [$this->equalTo("password")]
                )->willReturnOnConsecutiveCalls($this->username, $this->password);

        $this->loginUseCase->expects($this->once())
                ->method("execute")
                ->with($this->username, $this->password)
                ->willReturn("");
        $sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);

        $loginInputAdapter = new LoginInputAdapter($this->loginUseCase, $sessionDataOutputPort);
        $loginInputAdapter->initController($this->request, $this->response, $this->logger);
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

        $this->loginUseCase->expects($this->once())
                ->method("execute")
                ->with($this->username, $this->password)
                ->willReturn('{"userName":"cgamboa15","name":"Carlos","lastName":"Gamboa","isAdmin":true}');
        $loginInputAdapter = new LoginInputAdapter($this->loginUseCase, $this->sessionDataOutputPort);
        $loginInputAdapter->initController($this->request, $this->response, $this->logger);

        $result = $loginInputAdapter->login();
        $this->assertNotNull($result);
        $this->assertStringContainsString("Welcome to the admin zone.", $result);
    }

}
