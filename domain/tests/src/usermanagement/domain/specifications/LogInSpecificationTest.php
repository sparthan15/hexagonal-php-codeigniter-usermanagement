<?php

use \PHPUnit\Framework\TestCase;
use usermanagement\domain\specifications\LogInSpecification;

class LogInSpecificationTest extends TestCase {

    public function testLoginSpecificationNotsatisfied() {
        $this->expectException(\usermanagement\domain\exceptions\MalFormedLoginException::class);
        $logInSpecification = new LogInSpecification("", "");
        $logInSpecification->isSatisfiedBy();
    }

    public function testLoginSpecificationSatisfied() {
        $logInSpecification = new LogInSpecification("cgamboa", "123");
        $this->assertTrue($logInSpecification->isSatisfiedBy());
    }

}
