<?php

namespace Book\Part1\Chapter2\Composition\AdminPermission;

final class CanViewPermission implements AdminPermissionInterface
{
    public function __construct(
        private readonly bool $allowed
    ) {
    }

    public function getPermName(): string
    {
        return self::CAN_VIEW;
    }

    public function isAllowed(): bool
    {
        return $this->allowed;
    }
}
