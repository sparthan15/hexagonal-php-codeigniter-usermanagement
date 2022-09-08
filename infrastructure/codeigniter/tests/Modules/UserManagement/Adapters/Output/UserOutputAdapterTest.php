<?php

use PHPUnit\Framework\TestCase;
use Modules\UserManagement\Adapters\Output\UserOutputAdapter;
use Modules\UserManagement\Models\UserRepository;
use usermanagement\domain\models\User;
use usermanagement\domain\models\Role;
use usermanagement\domain\vo\UserStatus;

class UserOutputAdapterTest extends TestCase {

    private string $username = "carlosgamboa15@gmail.com";
    private string $password = "123456";
    private int $userId = 1;

    public function testLogIn() {
        $userRepository = $this->createMock(UserRepository::class);
        $userRepository->expects($this->once())
                ->method("logIn")
                ->with($this->username, $this->password);
        $outputAdapter = new UserOutputAdapter($userRepository);
        $outputAdapter->logIn($this->username, $this->password);
        $this->assertNotNull($outputAdapter);
    }

    public function testLogOut() {
        $userRepository = $this->createMock(UserRepository::class);
        $userRepository->expects($this->once())
                ->method("logOut")
                ->with($this->userId);
        $outputAdapter = new UserOutputAdapter($userRepository);
        $outputAdapter->logOut($this->userId);
        $this->assertNotNull($outputAdapter);
    }

    public function testSave() {
        $user = new User(0, 1, $this->username, $this->password, "2022-09-04", "", UserStatus::active(), ['created'], [new Role(0, "Admin")]);
        $userRepository = $this->createMock(UserRepository::class);
        $userRepository->expects($this->once())
                ->method("save")
                ->with($user);
        $outputAdapter = new UserOutputAdapter($userRepository);
        $outputAdapter->save($user);
        $this->assertNotNull($outputAdapter);
    }

}
