<?php

$boolean_true  = true;
$boolean_false = false;
$string_1      = 'string_1';
$string_2      = 'string_2';

var_dump($boolean_true === $boolean_false);
var_dump($string_1 === $string_2);

var_dump($boolean_true !== $boolean_false);
var_dump($string_1 !== $string_2);

var_dump(false !== true);