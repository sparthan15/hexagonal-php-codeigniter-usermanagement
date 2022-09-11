<?php

namespace Modules\UserManagement\Adapters\Output;

use usermanagement\application\ports\output\SessionDataOutputPort;

class SessionDataOutputAdapter implements SessionDataOutputPort {

    function getLogedUserData(): array {
        return ["companyId"=>1];
    }

}
