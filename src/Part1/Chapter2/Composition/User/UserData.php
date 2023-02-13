<?php

declare(strict_types=1);

namespace Book\Part1\Chapter2\Composition\User;

use Book\Part1\Chapter2\Composition\Person;

class UserData
{
    public function __construct(
        private readonly int $id,
        private readonly Person $person
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->person->getName();
    }
}