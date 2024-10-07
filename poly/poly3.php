<?php

interface  Animnal
{
    function sleep();
}
class Cats implements Animnal
{
    function sleep()
    {
        return "cat is sleeping";
    }
}

class Dogs implements Animnal
{
    function sleep()
    {
        return "Dog is sleeping";
    }
}
$object = [
    new Cats(),
    new Dogs()
];
function pukNgDekLhot($object)
{
    foreach($object as $whatTheFuck)
{
    echo($whatTheFuck->sleep()."<br>");
    
};
}
pukNgDekLhot($object);
?>