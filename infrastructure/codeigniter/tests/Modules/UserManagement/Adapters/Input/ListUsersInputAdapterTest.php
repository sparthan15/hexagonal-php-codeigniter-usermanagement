<?php

use \PHPUnit\Framework\TestCase;
use Modules\UserManagement\Adapters\Input\ListUsersInputAdapter;
use usermanagement\application\usecases\ListUsersUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;

class ListUsersInputAdapterTest extends TestCase {

    private $request;
    private $response;
    private $listUsersUseCase;

    protected function setUp(): void {
        parent::setUp();
        $this->listUsersUseCase = $this->createMock(ListUsersUseCase::class);

        $this->sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);

        $this->request = $this->createMock(\CodeIgniter\HTTP\IncomingRequest::class);
        $this->response = $this->createMock(\CodeIgniter\HTTP\ResponseInterface::class);
        $this->logger = $this->createMock(Psr\Log\LoggerInterface::class);
    }

    public function testListAllUsers() {
        $idCompany = 1;
        $sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);
        $sessionDataOutputPort->expects($this->once())
                ->method("getLogedUserData")
                ->willReturn(["companyId" => $idCompany]);

        $this->listUsersUseCase->expects($this->once())
                ->method("findAll")
                ->with($idCompany)
                ->willReturn([]);
        $listUserInputAdapter = new ListUsersInputAdapter($this->listUsersUseCase, $sessionDataOutputPort);
        $result = $listUserInputAdapter->findAll();
        $this->assertNotNull($result);
        $this->assertStringContainsString("Welcome to User management", $result);
    }

}
