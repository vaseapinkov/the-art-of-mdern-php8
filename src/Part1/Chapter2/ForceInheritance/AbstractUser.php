<?php

namespace Book\Part1\Chapter2\ForceInheritance;

/**
 * Class CANNOT be instantiated, CAN be inherited
 */
abstract class AbstractUser extends Person
{
    public function __construct(
        protected int $id,
        protected string $name
    )
    {
        parent::__construct($name);
    }

    // Abstract method must be in child classes
    abstract public function __toString(): string;
}