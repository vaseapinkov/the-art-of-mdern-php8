<?php

declare(strict_types=1);

namespace Book\Part1\Chapter1\Simple;

require __DIR__ . '/../../../vendor/autoload.php';

$instance = new SimplePropertyAssignment();

// Dynamic property is public
echo "\n" . $instance->dynamicProperty;

// Dynamic property can be anything
$instance->dynamicProperty = 123;
echo "\n" . $instance->dynamicProperty;
