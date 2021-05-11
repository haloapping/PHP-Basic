<?php

$printName = function (string $name) {
    echo "Hi $name" . PHP_EOL;
};

$printName("Apping");

$printName = function (string $name, $filter): void {
    echo "Hi " .  $filter($name) . PHP_EOL;
};

$filterFunction = function (string $name): string {
   return strtoupper($name);
};

echo $printName("Apping", $filterFunction);