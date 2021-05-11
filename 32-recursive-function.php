<?php

function factorial(int $value): int
{
    if ($value === 1) {
        return 1;
    }

    return $value * factorial($value - 1);
}

$value = 10;

echo "Factorial $value : " . factorial($value);