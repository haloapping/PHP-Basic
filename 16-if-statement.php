<?php

// If statement
if (true && true) {
    echo "Hi" . PHP_EOL;
}

if (false || true) {
    echo "Hai" . PHP_EOL;
}

// If-else Statement
$hujan = false;

if ($hujan === true) {
    echo "Hari ini hujan" . PHP_EOL;
} else {
    echo "Hari ini tidak hujan, maka bisa belanja" . PHP_EOL;
}

// If-elseif-else statement
$libur = 'gak tau';

if ($libur === true) {
    echo "Hari ini bisa rebahan seharian" . PHP_EOL;
} elseif ($libur === false) {
    echo "Kerjain tugas kuliah" . PHP_EOL;
} else {
    echo "Gak tau mau ngapain :)" . PHP_EOL;
}