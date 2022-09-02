<?php

namespace usermanagement\domain\exceptions;

use RuntimeException;

class MalFormedLoginException extends RuntimeException {

    public function __construct(int $code = 0, ?\Throwable $previous = null) {
        return parent::__construct("Username or password does not met specifications", $code, $previous);
    }

}
