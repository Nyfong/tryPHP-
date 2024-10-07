<?php 

abstract class Pagoda
{
    abstract function casting();
}
class YayChe extends Pagoda
{
    function casting()
    {
        return " Namout Tasak";
    }

}
class TaChe extends Pagoda
{
    function casting()
    {
        return "Anumout Tanea";
    }
}

$Bajai = [
    new YayChe(), 
    new TaChe(),
  
];
function castingSel($Bajai)
{
    foreach($Bajai as $person)
    {
        echo ($person->casting());
        echo "<br>";
    }
}
echo (date("y-m-d-l")."<br>");

castingSel($Bajai);
?>
