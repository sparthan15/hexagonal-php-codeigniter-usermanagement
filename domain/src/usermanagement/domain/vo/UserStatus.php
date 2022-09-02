<?php

namespace usermanagement\domain\vo;

class UserStatus {

    const ACTIVE = 'ACTIVE';
    const IN_ACTIVE = 'INACTIVE';
    const DELETED = 'DELETED';

    private string $status;

    private function __construct(string $status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public static function active() {
        return new self(self::ACTIVE);
    }

    public static function inactive() {
        return new self(self::IN_ACTIVE);
    }

    public static function deleted() {
        return new self(self::DELETED);
    }

}
