<?php

// function without return value;
function sayHi(): void
{
    echo "Hi... :)" . PHP_EOL;
}

sayHi();

// function with return value;
function sayHiHi(): string
{
    return "Hi... Hi... :)" . PHP_EOL;
}

echo sayHiHi();
