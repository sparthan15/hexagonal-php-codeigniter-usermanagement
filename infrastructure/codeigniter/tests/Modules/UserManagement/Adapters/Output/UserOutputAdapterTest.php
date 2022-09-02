<?php

use \PHPUnit\Framework\TestCase;
use Modules\UserManagement\Adapters\Output\UserOutputAdapter;

class UserOutputAdapterTest extends TestCase {

    public function test() {
        $outputAdapter = new UserOutputAdapter();
        $this->assertNotNull($outputAdapter);
    }

}
