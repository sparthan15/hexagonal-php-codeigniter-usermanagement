<?php

namespace usermanagement\domain\specifications;

abstract class Specification {

    abstract function isSatisfiedBy(): bool;
}
