<?php

namespace usermanagement\application\ports\output;

interface SessionDataOutputPort {

    function getLogedUserData(): array;
}
