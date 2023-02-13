<?php

namespace Book\Part1\Chapter2\StaticAccess;

class ChildClass extends ParentClass
{

    protected const ZIP = '567';
    protected static string $foo = 'boo';

}