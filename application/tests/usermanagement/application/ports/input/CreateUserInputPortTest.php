<?php

use usermanagement\application\ports\input\CreateUserInputPort;
use usermanagement\application\ports\output\UserOutputPort;
use usermanagement\domain\models\User;
use \usermanagement\domain\vo\UserStatus;
use \PHPUnit\Framework\TestCase;

class CreateUserInputPortTest extends TestCase {

    public function test1() {
        $userToCreate = new User(0, 1, "cgamboa", "1234", "2022-08-29 00:00:00", "", UserStatus::active(), ["User Created"]);
        $userOutputPort = $this->createMock(UserOutputPort::class);
        $userOutputPort->expects($this->once())
                ->method("save")
                ->with($userToCreate);
        $createUserInputPort = new CreateUserInputPort($userOutputPort);
        $createdUser = $createUserInputPort->execute($userToCreate);
        $this->assertNotNull($createdUser);
    }

}
