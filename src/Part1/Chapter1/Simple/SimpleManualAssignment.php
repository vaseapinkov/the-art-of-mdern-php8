<?php

declare(strict_types=1);

namespace Book\Part1\Chapter1\Simple;

class SimpleManualAssignment
{
    private string $name;
    public function __construct(string $name = 'Simon')
    {
        $this->name = $name;
    }
}
