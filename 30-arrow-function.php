<?php

$firstname = "Alfiyanto";
$lastname  = "Kondolele";

$arrow_function = fn(string $firstname, string $lastname) => "Hello $firstname $lastname" . PHP_EOL;

echo $arrow_function("Alfiyanto", "Kondolele");
