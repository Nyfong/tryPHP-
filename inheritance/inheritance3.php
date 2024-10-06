<?php 

class Student {
    public $name, $surname, $country, $tuition, $indexNumber;
    protected $studentStatus = true;

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
 
 $statusPmv =($object->statusPmv() == false)? "0" :  "{$object->statusPmv()}";
 echo ($statusPmv); 

?>
