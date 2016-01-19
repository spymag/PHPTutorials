<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
      <?php
      
       class Dog{
       
       public $numLegs = 4;
       public $name;
       
       public function __construct($name) {
           $this->name = $name;
       }
       
       public function bark() {
           
           return "Woof! ";
       }
       
       public function greet() {
           return "Hello, I am : " . $this->name ." and i have " . $this->numLegs . " number of legs! ";
           }
       
           
      }
      
      $dog1 = new Dog("Barker");
      $dog2 = new Dog("Amigo");
      echo $dog1->bark();
      echo $dog2->greet();
      
      ?>
        <!-- Your code here -->
      </p>
    </body>
</html>
