<?php

$plain = $argv[1];
$encoded = '';

for ($i = 0; $i < strlen($plain); $i++) {
    $ascii = ord($plain[$i]);
    if ($ascii == 90) {
        $ascii = 65;
    } else if ($ascii == 122) {
        $ascii = 97;
    } else {
        $ascii++;
    }

    $encoded[$i] = chr($ascii);
}

print "Plain: $plain" . PHP_EOL;
print "Cipher: $encoded" . PHP_EOL;