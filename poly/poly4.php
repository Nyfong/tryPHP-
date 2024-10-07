<?php 

    abstract class Shap{
        abstract function calculate($raduis);
    }
    class Circle extends Shap{
        function calculate($raduis)
        {
            return 2*3.14*$raduis*$raduis;
        }
    }
    $object = new Circle();
    echo($object->calculate(1));




?>
