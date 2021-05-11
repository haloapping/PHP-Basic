<?php

// Assign by reference
$name = "Apping";

$otherName = &$name;
$otherName = "Rahel";

echo $name . PHP_EOL;

// Pass by reference
function increment(int &$value): int {
    return $value++;
}

$counter = 1;
increment($counter);
increment($counter);
increment($counter);
increment($counter);

echo  $counter . PHP_EOL;

// Returning references
function &getValue(): int {
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;