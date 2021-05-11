<?php

$numbers   = array(1, 4, 3 , 5, 6);
$mix_types = array("one" => 1, "two" => 'dua', "three" => true, 'four' => 1.44);

foreach ($numbers as $key => $value) {
    echo "Index " . $key . " = " . $value . PHP_EOL;
}

foreach ($mix_types as $key => $value) {
    echo "Index " . $key . " = " . $value . PHP_EOL;
}
