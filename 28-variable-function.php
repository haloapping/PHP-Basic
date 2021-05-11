<?php

function foo(string $string): void
{
    echo "Foo $string" . PHP_EOL;
}

function bar(): void
{
    echo "Bar" . PHP_EOL;
}

$functionFoo = "foo";
$functionFoo("Bar");

$functionBar = "bar";
$functionBar();

function stringUpperCase(string $string, string $str_to_upper): void
{
    echo $str_to_upper($string) . PHP_EOL;
}

stringUpperCase("Apping", "strtoupper");
