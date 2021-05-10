<?php

// Dengan single quote
echo 'Dengan single quote' . PHP_EOL;

// Dengan double quote
echo "Dengan double quote" . PHP_EOL;

// Multiline
// Heredoc
echo <<< Apping

Heredoc
Di sini bisa nulis line baru,
tanpa perlu dienter secara manual dengan simbol '/n'


Apping;

// Nowdoc
echo <<<'Apping'
Nowdoc
Di sini bisa nulis line baru,
tanpa perlu dienter secara manual dengan simbol '/n'
Apping;
