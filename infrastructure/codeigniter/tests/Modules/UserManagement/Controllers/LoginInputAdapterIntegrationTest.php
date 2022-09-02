<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;
use usermanagement\application\usecases\LogInUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;

class LoginInputAdapterIntegrationTest extends CIUnitTestCase {

    use ControllerTestTrait;
    use DatabaseTestTrait;

    public function testIndex() {
        $sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);
        $loginUseCase = $this->createStub(LogInUseCase::class);
        if ($sessionDataOutputPort instanceof SessionDataOutputPort) {
            echo "The object is SessionDataOutputPort";
        }
        $result = $this->withURI('http://example.com/user')
                ->LoginInputAdapter($loginUseCase, $sessionDataOutputPort)
                ->execute('index');

        $this->assertTrue($result->isOK());
    }

    public function testLogin() {
        $loginUseCase = $this->createStub(LogInUseCase::class);
        $sessionDataOutputPort = $this->createMock(SessionDataOutputPort::class);
        $result = $this->withURI('http://example.com/user')
                ->LoginInputAdapter($loginUseCase, $sessionDataOutputPort)
                ->execute('login');

        $this->assertTrue($result->isOK());
    }

}
