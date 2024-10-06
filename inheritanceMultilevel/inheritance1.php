<?php
class Parents{
var $name = "Parent";
public $saySomething= "something";
function returnName()
{
    return $this->name;
}
}

class child1 extends Parents { 
    public $hello = "child1";

    function greeting() {
        return $this->saySomething;   // Access parent property directly
    }
}

class child2 extends child1{

    function greeting()
    {
        return $this->hello;
    }

}

$kid = new child2();
echo("greeting everyone this is function:{$kid->greeting(1)}");
echo("<br>greeting everyone this is {$kid->saySomething}");
?>