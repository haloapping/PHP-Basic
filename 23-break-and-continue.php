<?php

// continue
echo "Continue: ";
for ($i = 0; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }

    echo $i . " ";
}

// break
echo PHP_EOL . "Break: ";
for ($i = 0; $i <= 10; $i++) {
    if ($i === 5) {
        break;
    }

    echo $i . " ";
}
