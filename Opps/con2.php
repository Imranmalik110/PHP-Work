<?php

use Example as GlobalExample;

class Example
{
    public function dis1()
    {
        echo "this is constructor</br>";
    }
}
class B extends GlobalExample
{
    public function __construct()
    {
        echo parent::dis1();
        echo  'consturctor2<br>';
    }
    public function __destruct()
    {
        echo 'This is destructor';
    }
}
$obj =new B();
?>