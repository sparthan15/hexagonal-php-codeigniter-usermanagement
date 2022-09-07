<?php

namespace usermanagement\domain\specifications;

use \usermanagement\domain\specifications\Specification;
use \usermanagement\domain\models\Role;
use \usermanagement\domain\models\User;

class AddRoleSpecification extends Specification {

    private Role $newRole;
    private User $user;

    public function __construct(Role $newRole, User $user) {
        $this->newRole = $newRole;
        $this->user = $user;
    }

    public function isSatisfiedBy(): bool {
        if (in_array($this->newRole, $this->user->getRoles())) {
            return false;
        }
        return true;
    }

}
