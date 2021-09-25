<?php
// Pulse Check
//1. Create a class named Fruit, add 2 properties and two methods to it.

class Fruit {
    //Properties
   public $firstFruit = "Apple";
   public $secondFruit = "Orange";
    //methods
    public function AllFruits (){
        return "All fruits"
    }
    public function favFruit(){
        return "$this->firstFruit the favorite fruits"
    }
}
// 2.Create a class named Apple 
//which inherits from the Fruit class add 1 additional property to it
class Apple extends Fruit {
    public $color = "Green";
}

// 3. Create a new class make 
//each property of it private and try to 
//access it and change it using getters/ setters
class Names {
    private $one = "Alaa";
    private $two = "Sarah";
}
// A. getters: a method which will get a private property from its class
public function getName (){
    return $this->one;
}
echo $one->getName();
// B. setters: a method that will set or change the private property
public function setName ($two){
    return $this->two = $two; 
}
$two->setName("Ali");
echo $two->getName();

?>