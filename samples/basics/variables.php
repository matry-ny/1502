<?php

$someTestVariable = 1;
$myArray = [];

$someTestVariable = array(10, 2);

var_dump((int)$someTestVariable, $myArray);

$test = 123;
$test2 = &$test;

$test += 1;
$test2 += 2;

var_dump($test, $test2);

$q = 't';
$t = 'r';
$r = 's';

var_dump($$$q);
