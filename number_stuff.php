<?php

$a = 2;
$b = 3.3;
$c = "35";

var_dump($a);
var_dump($b);
var_dump($c);

echo is_int($a);
echo "\n";
var_dump(is_file($b));

$a = (string) $a;
echo $a;