<?php
class Animal
{
    function eat()
    {
        echo "All animal will eat". "<br/>";
    }
}

class Dog extends Animal
{
    function bite()
    {
        echo "Every dog will bite ". "<br/>";

    }
}
class PubbyDog extends Dog
{
    function naughty()
    {
        echo " Most of the pubbies are naughty in nature ". "<br/>";
    }
}

$a = new Animal();
$a->eat();
$d = new Dog();
$d->eat();
$d->bite();
$b=new PubbyDog();
$b->eat();
$b->bite();
$b->naughty();
?>