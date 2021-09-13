<?php
abstract class Animal
{
    public $name;
    public $age;
    public function discribe()
    {
        return $this->name.",".$this->age."years old";
    }
    abstract public function Great();
}
class Dog extends Animal
{
    public function Great()
    {
        return "woof";
    }
    public function describe()
    {
        return parent::discribe().", and I'm Dog";
    }
}
$animal =new Dog();
$animal->name="Bob";
$animal->age=7;
echo $animal->describe();
echo $animal->Great();
?>