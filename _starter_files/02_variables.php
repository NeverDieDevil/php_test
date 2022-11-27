<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'NeverDie'; // string
// echo $name;
$age = 28; // int
// echo $age;
$has_Kids = false; // bool
// echo $has_Kids;
// var_dump($has_Kids);
$cash_in_pocket = 30.46; // float
// echo $cash_in_pocket;

// echo $name . ' is ' . $age . ' years old';

// echo "${name} is ${age} years old";

echo '5'+'5';
echo '5'-2;

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST
?>