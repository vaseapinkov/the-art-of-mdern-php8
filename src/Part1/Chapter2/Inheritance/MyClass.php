<?php

declare(strict_types=1);

namespace Book\Part1\Chapter2\Inheritance;

class MyClass extends MyParentClass implements GetsBarInterface, GetsFooInterface
{
    public function getBar(): int
    {
        return $this->bar;
    }

    public function getFoo(): int
    {
        return $this->foo;
    }
}
