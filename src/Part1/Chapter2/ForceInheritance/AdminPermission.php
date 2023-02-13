<?php

namespace Book\Part1\Chapter2\ForceInheritance;

/**
 * Class CAN be instantiated and inherited from.
 */
abstract class AdminPermission
{
    public const CAN_EDIT = 'canEdit';
    public const CAN_VIEW = 'canView';
    public const PERMS = [
        self::CAN_EDIT,
        self::CAN_VIEW
    ];

    abstract public function getPermName(): string;

    abstract public function isAllowed(): bool;
}
