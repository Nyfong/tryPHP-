<?php

abstract class Animal
{
   abstract function sleep();
   function eat()
   {
    //for overloading
    return  "Animal drink";
   }
   
}
class Cat extends Animal
{
    function sleep()
    {
        return "dog sleep";
    }
    function eat()
    {
        return "Meow eating";
    }
}
class Dog extends Animal 
{
    function sleep()
    {
        return "dog sleeping";
    }
    function eat()
    {
        return " Dog eating";
    }
}

?>