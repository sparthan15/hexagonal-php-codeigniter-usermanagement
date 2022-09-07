<?php

namespace usermanagement\domain\models;

class Role {

    private int $id;
    private string $name;
    private string $state;

    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
        $this->state = "ACTIVE";
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getState() {
        return $this->state;
    }

    public function inactivate() {
        $this->state = "INACTIVE";
    }

}
