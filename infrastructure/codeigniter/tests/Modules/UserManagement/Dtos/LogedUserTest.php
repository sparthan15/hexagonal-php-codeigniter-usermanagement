<?php

use \Modules\UserManagement\Views\Dtos\LogedUser;

class LogedUserTest extends PHPUnit\Framework\TestCase {

    public function test() {
        $logedUser = new LogedUser('{"userName":"cgamboa15","name":"Carlos","lastName":"Gamboa","isAdmin":true}');

        $this->assertNotNull($logedUser->userName);
        $this->assertNotNull($logedUser->name);
        $this->assertNotNull($logedUser->lastName);
        $this->assertNotNull($logedUser->isAdmin);
    }

}
