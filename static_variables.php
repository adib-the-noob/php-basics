<?php

function privateVariable(){
    static $x = 10;
    echo $x;
    $x++;
};

privateVariable();
privateVariable();
privateVariable();