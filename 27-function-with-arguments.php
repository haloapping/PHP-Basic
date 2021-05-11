<?php

// Without default vale
function sayHi($name = "Anonymous", $time = "selamat"): void
{
    echo "Hi $name, selamat $time." . PHP_EOL;
}

sayHi();

// With default vale
function sayHiHi($name, $time): void
{
    echo "Hi $name, selamat $time." . PHP_EOL;
}

sayHiHi("Rahel", "malam");

// With argument datatype
function printFullName(string $firstname, string $lastname): void
{
    echo "Full Name: $firstname $lastname" . PHP_EOL;
}

printFullName("Rahel", "Cantik");

// With variable argument length
function sum(...$arrays): int
{
    $total = 0;

    foreach ($arrays as $array) {
        $total += $array;
    }

    return $total;
}

echo sum(1, 2, 3, 4, 5) . PHP_EOL;

