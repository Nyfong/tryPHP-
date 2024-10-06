<?php 
class Animal {

   public  $name ;
    public $action;
    //create constructer 
    function __construct($name)
    {
        $this->name = $name;

    }
    protected function intro()
    {
        echo("Am i a {$this->name} or what");
    }
    function sum()
    {
        $rate = 10;

        return $rate;
    }
}
class Cat extends Animal {
    public $owner ;
    function callIntro ()
    {
        $this->intro();
    }
 
}
$object = new Cat("Kitty");
echo($object->name);
$object->owner = "Xiao Ge";
echo("<br>". $object->owner. " is the owner of {$object->name}");
// $object->intro(); // error because it is protected
echo("<br>");
echo("print the rate : {$object->sum()} <br>");
$object->callIntro(); // work because the function have been call in Other function . not direct

?>
