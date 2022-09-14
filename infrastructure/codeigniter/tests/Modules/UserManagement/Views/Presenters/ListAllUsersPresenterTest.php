<?php

use Modules\UserManagement\Views\Presenters\ListAllUsersPresenter;

class ListAllUsersPresenterTest extends PHPUnit\Framework\TestCase {

    public function test() {
        $array = new stdClass();
        $array->user_id = 1;
        $array->company_id = 1;
        $array->createdAt = "2022-09-11";
        $array->updatedAt = "2022-09-11";
        $array->status = "ACTIVE";
        $array->username = "carlosgamboa15@gmail.com";
        $userResponse = new Modules\UserManagement\Views\Dtos\UserResponse($array);
        $presenter = new ListAllUsersPresenter([$userResponse]);
        $this->assertNotNull($presenter);
        $this->assertNotNull($presenter->usersList);
    }

    public function testIsEmpty() {
        $presenter = new ListAllUsersPresenter([]);
        $this->assertNotNull($presenter);
        $this->assertTrue($presenter->isEmpty());
    }

}
