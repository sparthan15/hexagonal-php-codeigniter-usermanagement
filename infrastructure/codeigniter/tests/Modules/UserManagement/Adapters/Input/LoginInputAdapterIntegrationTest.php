<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;

class LoginInputAdapterIntegrationTest extends CIUnitTestCase {

    use \CodeIgniter\Test\FeatureTestTrait;
    use DatabaseTestTrait;

    protected function setUp(): void {
        parent::setUp();
    }

    public function testIndex() {
        $result = $this->call('post', 'users/login', [
            'userName' => 'carlosgamboa15@gmail.com',
            'password' => '123456'
        ]);
        $this->assertTrue($result->isOK());
    }

    public function testLogin() {

        $result = $this->call('post', 'users/login', [
            'userName' => 'carlosgamboa15@gmail.copm',
            'password' => '123456'
        ]);

        $this->assertTrue($result->isOK());
    }

    protected function tearDown(): void {
        parent::tearDown();
    }

}
