<?php

declare(strict_types=1);

namespace Book\Part1\Chapter1\Simple;

class SimplePropertyAssignment
{
    private string $defined = 'defaultValue';

    public function __construct(private string $constructParam = 'constructorValue')
    {

        // Worst way to define a clas property
        // This property can be only public and the type can not be specified
        $this->dynamicProperty = 'dynamicProperty';

    }
}