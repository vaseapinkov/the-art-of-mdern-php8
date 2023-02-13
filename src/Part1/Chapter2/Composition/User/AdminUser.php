<?php

namespace Book\Part1\Chapter2\Composition\User;

use Book\Part1\Chapter2\Composition\AdminPermission\AdminPermissionInterface;

final class AdminUser implements UserInterface
{
    /** @var array <string,AdminPermission> */
    private array $permissions;

    public function __construct(
        private readonly UserData $userData,
        AdminPermissionInterface  ...$permissions
    ) {
        \array_map(
            callback: function (AdminPermissionInterface $perm): void {
                $this->permissions[$perm->getPermName()] = $perm;
            },
            array: $permissions
        );
    }


    public function __toString(): string
    {
        $permissions = \implode(
            separator: "\n",
            array: \array_map(
                callback: static function (
                    AdminPermissionInterface $perm
                ): string {
                    $permName = $perm->getPermName();
                    $allowed = ($perm->isAllowed() ? 'true' : 'false');

                    return "{$permName}: {$allowed}";
                },
                array: $this->permissions
            )
        );

        return <<<STRING
                    admin user {$this->userData->getName()} ({$this->userData->getId()}) has these permissions: {$permissions}
                STRING;
    }
}
