<?php
    class Bicyle{
     public $brand;
     public $model;
     public $year;
     public $weight;
     public $description = "Used Bicyle";
     private $unitOfWeight = false;
    //setter
    function setWeight($weight,  $unit =  false)
    {
       if ($unit)
       {
        $this->unitOfWeight = true;
       }
       else 
       {
        $this->unitOfWeight;
       }
       $this->weight = $weight;
        return $this->weight;
    }
    function setYear($year){
        $this->year = $year;
        return $this->year;
    }
    //getter
    function getWeight()
    {
        if($this->unitOfWeight)
        {
            return "Bike is {$this->weight} kilogram";
        }else{
            return "Bike  is  {$this->weight} grams";
        }
    }
   
    }
    $bicycle = new Bicyle();
   $weight = $bicycle->setWeight(150, true);
   $weight = $bicycle->setYear(2023);
   

    echo(" This is the bicycle weight: {$weight}");

    echo(" <br> {$bicycle->getWeight()}");
 


?>