<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($i=0; $i<=10; $i++){
//   echo 'number ' . $i . '<br>';
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;

// while($x <= 15){
//   echo 'Number ' . $x . '<br>';
//   $x++;
// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x=1;

// do{
//   echo 'number ' . $x . '<br>';
//   $x++;
// }while($x<=10);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['first post', 'second post', 'third post'];

// for($x=0; $x < count($posts); $x++){
//   echo $posts[$x] . '<br>';
// }

foreach ($posts as $key => $post) {
  echo $key . ' = ' .  $post . '<br>';
  # code...
}