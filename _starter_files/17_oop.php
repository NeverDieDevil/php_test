<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
  OOP consists of classes that can hold "properties" and "methods". 
  Objects can be created from classes.
*/

class User {
  //properties are attributes that belong to a class

  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  //A constructor is a method that runs when and object is created
  public function __construct($name, $email, $password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  //Method is a fucntion that belongs to a class
  function set_name($name){
    $this->name=$name;
  }

  function get_name(){
    return $this->name;
  }
}

//instatiate a user object

$user_one = new User('NeverDie', 'nvd@gmail.com', 'passcode');


// var_dump($user_one);

// echo $user_one->get_name();

//inheritance

class Employee extends User {
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }
  public function get_title(){
    return $this->title;
  }
}

$first_employee = new Employee('Never', 'Die@vmail.com', 'passsscode', 'manager');

// var_dump($first_employee);

echo($first_employee->get_title());
