<?php

use \CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;

class ListUsersInputAdapterTest extends CIUnitTestCase {

    use \CodeIgniter\Test\FeatureTestTrait;
    use DatabaseTestTrait;

    protected function setUp(): void {
        parent::setUp();
    }

    public function testFindAll() {
        $result = $this->call('get', 'users/');
        $this->assertTrue($result->isOK());
    }

}
