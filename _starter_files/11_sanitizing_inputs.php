<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if(isset($_POST['submit'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
  // $name = filter_var($POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

  echo $name;
  // echo $age;
}


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
  <label form='name'>Name: </label>
  <input type="text" name='name'>
</div>
<div>
  <label form='age'>Age: </label>
  <input type="text" name='age'>
</div>
<input type="submit" value='submit' name='submit'>
</form>