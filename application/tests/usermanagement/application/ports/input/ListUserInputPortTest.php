<?php

use usermanagement\application\ports\output\ListUsersOutputPort;
use usermanagement\application\ports\input\ListUsersInputPort;
use \PHPUnit\Framework\TestCase;

class ListUserInputPortTest extends TestCase {

    public function testFindAll() {
        $listUserOutputPort = $this->createMock(ListUsersOutputPort::class);
        $listUserOutputPort->expects($this->once())
                ->method("findAll")
                ->with(1);
        $listUserInputPort = new ListUsersInputPort($listUserOutputPort);
        $this->assertNotNull($listUserInputPort->findAll(1));
    }
    
    public function testFindById() {
        $listUserOutputPort = $this->createMock(ListUsersOutputPort::class);
        $listUserOutputPort->expects($this->once())
                ->method("findByUserId")
                ->with(1);
        $listUserInputPort = new ListUsersInputPort($listUserOutputPort);
        $this->assertNotNull($listUserInputPort->findById(1));
    }

}
