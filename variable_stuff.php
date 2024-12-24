<?php
$x = $y= $z = 12;
echo $x;

// variable scoping - local, global, static
// global

$x = 12;

function adibFunction(){
    // using x inside this function will throw an error
    // echo "Global x inside function is: $x";

    // error : 12PHP Warning:  Undefined variable $x in variable_stuff.php on line 11
    
    $y = 12; // local scope
    echo "\nLocal y inside function is: $y";
};  

adibFunction();

echo "\n=====================";


// accesing global variable inside function
$x = 12;
$y = 34;

function hackerFunction(){
    global $x, $y;
    $y = $x + $y;
    echo "\nThe Result is: $y";
};

hackerFunction();

echo "\n=====================";

// php hold all global variables in an array called $GLOBALS[index]
$adib_age = 12;
$adib_name = "Adib";

function kireMamaFunc(){
    echo "\nAdib's age accessing from GLOBAL Array, val is " . $GLOBALS['adib_age'];
    echo "\nAdib's name accessing from GLOBAL Array, val is " . $GLOBALS['adib_name'];
};

kireMamaFunc();