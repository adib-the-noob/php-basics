<?php


$x = "ADIB";
echo "Hello, $x";

echo "\n=====\n";

echo 'Hi Bro, ' . $x .'hackerONE';

echo "\n=========\n";
// string length
echo strlen($x) ." ";

// word count
$sentence = "Hello, I am adib the noob who is a super fucking dumb";
$words = str_word_count($sentence) ." ";

echo "There was --> ". $words ." words";

echo "\n=================\n";
// searching in a string
echo strpos("Kire mama, khobor ki?", "ki");

// upper case
$sample = "hacker one";
echo strtoupper($sample) ." ";

// replace
$word = "Hello, World!!";
echo str_replace("World", "ALex", $word);

echo "\n=================\n";
// reverse
$word2 = "Hi, BRO!!";
echo strrev($word2) ." ";
