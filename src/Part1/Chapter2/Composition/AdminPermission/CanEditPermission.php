<?php

namespace Book\Part1\Chapter2\Composition\AdminPermission;

final class CanEditPermission implements AdminPermissionInterface
{
    public function __construct(
        private readonly bool $allowed
    ) {
    }

    public function getPermName(): string
    {
        return self::CAN_EDIT;
    }

    public function isAllowed(): bool
    {
        return $this->allowed;
    }
}
