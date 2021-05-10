<?php

$array_with_string_value          = ['Andi', 'Bokir', 'Bieber'];
$array_with_integer_value         = [1, 2, 3, 4, 5];
$array_with_float_value           = [1.22, 3.22, 4.23, 5.3, 3.0];
$array_with_boolean_value         = [true, false];
$array_with_mix_value             = ['Andi', 1, 1.22];
$array_with_string_multidimension = [['string'], [1], [1.45], [true, false], [1, 2, true, 'string', 23.5]];
$array_associative                = ['satu' => 1, 'dua' => 2, 'tiga' => 3];

echo PHP_EOL . "Array with string value : ";
var_dump($array_with_string_value);

echo PHP_EOL . "Array with integer value : ";
var_dump($array_with_integer_value);

echo PHP_EOL . "Array with float value : ";
var_dump($array_with_float_value);

echo PHP_EOL . "Array with boolean value : ";
var_dump($array_with_boolean_value);

echo PHP_EOL . "Array with mix value : ";
var_dump($array_with_mix_value);

echo PHP_EOL . "Array with multi dimension : ";
var_dump($array_with_string_multidimension);

echo PHP_EOL . "Array with associative index : ";
var_dump($array_associative);