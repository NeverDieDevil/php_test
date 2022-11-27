<?php
/* ----------- Arrrays ----------- */

use function PHPSTORM_META\map;

$numbers = [1,44,23,152];

$animals = array('cat', 'dog', 'deer');

// var_dump($numbers);

// echo $numbers[2];

$colors=[
  1=>'red',
  5=>'blue',
  55=>'yellow',
];

// print_r($colors);

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

$person =[
  'first_name' => 'Brad',
  'last_name' => 'Whoever',
  'email' => 'brad@gmail.com'
];

// echo $person['email'];

$people = [
  [
    'first_name' => 'Brad',
    'last_name' => 'Whoever',
    'email' => 'brad@gmail.com'
  ],
  [
    'first_name' => 'Jojo',
    'last_name' => 'Joestar',
    'email' => 'ih8dio@gmail.com'
  ],
  [
    'first_name' => 'Dio',
    'last_name' => 'Brando',
    'email' => 'ilovemybody@gmail.com'
  ]
  ];

// print_r($people);

// echo $people[1]['email'];

var_dump(json_encode($people))

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
?>