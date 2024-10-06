<?php
// day one
class Person{
    private $name = "Nyfong"; // atrribute 
    private $num1 = 10;
    public $cars = array("bmw","amg","toyota");
    function Getname()   // function with parameter
    {
        return $this->name;
    }
    function Sum($num2)
    {
        $sum = $this->num1 + $num2;
        
        return  $sum;
    }
    
}

 $object = new Person();
 echo($object->Getname());
 echo("<br>");
 $num2=20;
 for ( $i = 0 ; $i<sizeof($object->cars) ; $i+=1)
 {
    echo($object->cars[$i]);
    
    echo("<br>");

 }
 echo("eccho size of array ". sizeof($object->cars));
 echo("<br>");
 echo("the sum of private number is ".$object->Sum($num2));

?>