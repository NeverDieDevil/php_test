<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
$x = 12; //global scoped

function registerUser($email){
  global $x; //key word global
  echo $x . '<br>';
  echo $email . ' User registered';
}

// registerUser('NeverDie');

function sum($n1 = 4, $n2 = 5){ //function with default values
  return $n1 + $n2;
}
// $number = sum(2,20);
// $number2 = sum(10);
// echo $number . '<br>';
// echo $number2;

$subtract = function($x,$y) {
  return $x-$y;
};

// echo $subtract(10,5);


$multiply = fn($x,$y) => $x*$y; // arrow function

echo $multiply(9,4);

?>