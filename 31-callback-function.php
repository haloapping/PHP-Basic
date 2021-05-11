<?php

function sayHello(string $name, callable $filter): void
{
    echo "Hi " . call_user_func($filter, $name) . PHP_EOL;
}

sayHello("Rahel Cantik", fn($name) => strtolower($name));