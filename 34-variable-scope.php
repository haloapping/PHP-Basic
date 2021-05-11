<?php

$name = "Apping"; // Global Scope

function sayHello(): void
{
    $name   = "Rahel"; // Local scope
    $name_1 = $GLOBALS["name"];
    echo $name_1 . PHP_EOL;
}

sayHello();

function increment()
{
    static $counter = 1; // Static scope

    echo $counter . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
increment();
increment();
