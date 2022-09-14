<?php

use Modules\UserManagement\Views\Dtos\UserResponse;

class UserResponseTest extends PHPUnit\Framework\TestCase {

    public function testValidateMapperFromArrayUserIsActive() {
        $object = new stdClass();
        $object->user_id = 1;
        $object->company_id = 1;
        $object->createdAt = "2022-09-11";
        $object->updatedAt = "2022-09-11";
        $object->status = "ACTIVE";
        $object->username = "carlosgamboa15@gmail.com";
        $userResponse = new UserResponse($object);

        $this->assertNotNull($userResponse->userId);
        $this->assertNotNull($userResponse->userName);
        $this->assertNotNull($userResponse->createdAt);
        $this->assertNotNull($userResponse->updatedAt);
        $this->assertNotNull($userResponse->companyId);
        $this->assertTrue($userResponse->isActive);
    }

    public function testValidateMapperFromArrayUserIsINActive() {
       $array = new stdClass();
        $array->user_id = 1;
        $array->company_id = 1;
        $array->createdAt = "2022-09-11";
        $array->updatedAt = "2022-09-11";
        $array->status = "INACTIVE";
        $array->username = "carlosgamboa15@gmail.com";
        $userResponse = new UserResponse($array);
        $this->assertFalse($userResponse->isActive);
    }
    
     public function testIfDoesNotExistPropertyThenReturnNA() {
       $array = new stdClass();
        $array->userid = 1;
        $array->companyid = 1;
        $array->createdAtaa = "2022-09-11";
        $array->updatedAtaa = "2022-09-11";
        $array->statusaa = "INACTIVE";
        $array->usernameaa = "carlosgamboa15@gmail.com";
        $userResponse = new UserResponse($array);
        $this->assertStringContainsString($userResponse->companyId, "VALUE NOT FOUND");
    }

}
