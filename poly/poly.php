<?php

abstract class Personn{
    abstract public function greet();
}
class English extends Personn {
    public function greet()
    {
        return "hi";
    }
}
class French extends Personn
{
    public function greet ()
    {
        return " bonjour";
    }
}
class China extends Personn{
    public function greet()
    {
        return "Ni hao";
    }
}

$people = [
    new English(),
    new French(),
    new China()
];
function greeting($other)
{
    foreach ($other as $person )
    {
        echo ($person->greet());
        echo "<br>";
    }

}
greeting($people)

// The idea is to create the Absract Class and give definition
?>


