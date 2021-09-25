<?php
// Pulse Check
//1. Create a class named Fruit, add 2 properties and two methods to it.

class Fruit {
    //Properties
   public $firstFruit = "Apple";
   public $secondFruit = "Orange";
    //methods
    public function getFruits (){
        return "All fruits"
    }
    public function favFruit(){
        return "$this->firstFruit the favorite fruits"
    }
}


?>