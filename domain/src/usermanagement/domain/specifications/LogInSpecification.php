<?php

namespace usermanagement\domain\specifications;

use usermanagement\domain\specifications\Specification;
use usermanagement\domain\exceptions\MalFormedLoginException;

class LogInSpecification extends Specification {

    private string $userName;
    private string $password;

    public function __construct(string $userName, string $password) {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function isSatisfiedBy(): bool {
        if ($this->userName == "" && $this->password == "") {
            throw new MalFormedLoginException();
        }
        return true;
    }

}
