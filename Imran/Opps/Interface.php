<?php
interface Animal
{
    public function makeSound();
}
class Cat implements Animal
{
    public function makeSound()
    {
        echo 'Moew<br>';
    }
}
class Elephent implements Animal
{
    public function makeSound()
    {
        echo ' Sound of Elephent:Ohha<br>';
    }
}
class Horse implements Animal
{
    public function makeSound()
    {
        echo 'Horse Sound is:xidie';
    }
}
$obj = new Cat();
$obj->makeSound();
$elephent=new Elephent();
$elephent->makeSound();
$horse=new Horse();
$horse->makeSound();
?>