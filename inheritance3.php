<?php 

class Student {
    public $name, $surname, $country, $tuition, $indexNumber;
    protected $studentStatus = false;

   protected function helloPmv()
    {
        return "Hello pmv We are your student";
    }

}
class  Pmv extends Student{
    
    function statusPmv()
    {
       return $this->studentStatus;
    }

}

 $object = new Pmv();
 
 if($object->statusPmv() == false)
 {
    echo("0");
 }
else {
    echo "{$object->statusPmv()}";
}

?>
