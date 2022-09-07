<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use usermanagement\application\usecases\LogInUseCase;
use usermanagement\application\ports\output\SessionDataOutputPort;

class LoginInputAdapterIntegrationTest extends CIUnitTestCase {

    use \CodeIgniter\Test\FeatureTestTrait;
    use DatabaseTestTrait;

    protected function setUp(): void {
        parent::setUp();
    }

    public function testIndex() {
        $result = $this->call('post', 'user/login', [
            'userName' => 'carlosgamboa15@gmail.copm',
            'email' => '123456'
        ]);
        $this->assertTrue($result->isOK());
    }

    public function testLogin() {
       
        $result = $this->call('post', 'user/login', [
            'userName' => 'carlosgamboa15@gmail.copm',
            'email' => '123456'
        ]);

        $this->assertTrue($result->isOK());
    }

    protected function tearDown(): void {
        parent::tearDown();
    }

}
