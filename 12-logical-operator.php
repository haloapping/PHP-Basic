<?php

// AND
echo "true AND true: ";
var_dump(true && true);
echo PHP_EOL . "true AND false: ";
var_dump(true && false);
echo PHP_EOL . "false AND true: ";
var_dump(false && true);
echo PHP_EOL . "false AND false: ";
var_dump(false && false);

// OR
echo PHP_EOL . "true OR true: ";
var_dump(true || true);
echo PHP_EOL . "true OR false: ";
var_dump(true || false);
echo PHP_EOL . "false OR true: ";
var_dump(false || true);
echo PHP_EOL . "false OR false: ";
var_dump(false || false);