<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo 'strlen: ' . strlen($string) . '<br>';

// Find the position of the first occurrence of a substring in a string
echo 'strpos "o": ' . strpos($string, 'o'). '<br>';

// Find the position of the last occurrence of a substring in a string
echo 'strrpos "o": ' . strrpos($string, 'o'). '<br>';

// Reverse a string
echo 'strrev: ' . strrev($string). '<br>';

// Convert all characters to lowercase
echo 'strtolower: ' . strtolower($string). '<br>';

// Convert all characters to uppercase
echo 'strtoupper: ' . strtoupper($string). '<br>';

// Uppercase the first character of each word
echo 'ucwords: ' . ucwords($string). '<br>';

// String replace
echo 'str_replace: ' . str_replace('World', 'Everyone', $string). '<br>';

// Return portion of a string specified by the offset and length
echo 'substr: ' . substr($string, 0, 5). '<br>';
echo 'substr: ' . substr($string, 5). '<br>';

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES'. '<br>';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES'. '<br>';
}

$string2 = '<script>alert(1)</script>';

echo htmlspecialchars($string2);

printf('%s likes to %s', 'NvD', 'code');
printf('<br>1+1=%f', 1+1);