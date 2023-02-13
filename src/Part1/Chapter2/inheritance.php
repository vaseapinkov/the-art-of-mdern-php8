<?php

declare(strict_types=1);

namespace Book\Part1\Chapter2;

class MyParentClass
{
    protected int $foo = 1;
    protected string $private = 'hidden';
}

class MyChildClass extends MyParentClass
{
    private int $bar = 2;

    public function getFoo(): int
    {
        // Access parent class property
        return $this->foo;
    }

    public function getBar(): int
    {
        // Access this class property
        return $this->bar;
    }

    public function getPrivate(): string
    {
        // This will not work
        // return $this->private
        return "Not Today";
    }
}
