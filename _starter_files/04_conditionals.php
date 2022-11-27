<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if($age >= 18){
//   echo'you are old enought to drink in europe :D';
// } else {
//   echo"you can't drink :/";
// }

$t = date("H");

// if($t < 12){
//   echo 'Good Morning';
// } elseif($t<16){
//   echo'Good afternoon';
// }
// else {
//   echo 'Good evening';
// }

$posts = ['first post'];

// if(!empty($posts)){
//   echo $posts[0];
// } else {
//   echo 'No posts';
// }

// $firstPost = !empty($posts) ? $posts[0] : 'no posts';

$firstPost = $posts[0] ?? null;


echo $firstPost;

$favcolor = 'blue';

// switch ($favcolor) {
//   case 'blue':
//     echo 'Your favorite color is blue';
//     break;
//   case 'red':
//     echo 'Your favorite color is red';
//     break;

//   case 'green':
//     echo 'Your favorite color is blue';
//     break;
//   default:
//     echo 'Your favorite color is not specified';
// }



/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
