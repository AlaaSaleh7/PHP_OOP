<?php
// Pulse Check
//1. Create a class named Fruit, add 2 properties and two methods to it.

class Fruit {
    //Properties
   public $NameFruit = "Apple";
   public $colorFruit = "Yellow";
    //methods
    public function myFruits (){
        return "my fruits"
    }
    public function favFruit(){
        return "$this->NameFruit the favorite fruits"
    }
}
// 2.Create a class named Apple 
//which inherits from the Fruit class add 1 additional property to it
class Apple extends Fruit {
    public $priceFruit = "2 JD";
}

// 3. Create a new class make 
//each property of it private and try to 
//access it and change it using getters/ setters
class Names {
    private $firstName = "Alaa";
    private $lastName = "Saleh";
}
// A. getters: a method which will get a private property from its class
public function getName (){
    return $this->firstName;
}
echo $firstName->getName();
// B. setters: a method that will set or change the private property
public function setName ($lastName){
    return $this->lastName = $lastName; 
}
$lastName->setName("Mohammad");
echo $lastName->getName();

//4. Add a constructor to all the classes you have created
class Fruit {
    //Properties
   public $NameFruit = "Apple";
   public $colorFruit = "Yellow";
    function __construct(){
        $this->NameFruit = $NameFruit; 
        $this->colorFruit = $colorFruit; 
    }
}
$newFruit = new Fruit ("Grapes","Black");

class Names {
    private $firstName = "Alaa";
    private $lastName = "Saleh";
    function __construct (){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}
$newOne = new Names ("Ahmad", "Saleh");

?>