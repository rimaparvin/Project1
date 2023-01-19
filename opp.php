<?php
class TestClass //class
{
    public $prop1; //property

    public function testMethod($one, $two) //method
    {
        echo "this is a test method " . $one + $two;
    }

    public function sum($one, $two)
    {
        echo $one + $two;
    }

    public function substraction($one, $two)
    {
        echo $one - $two;
    }
}

$obj = new TestClass(); //object

//$obj->testMethod(1, 2);
class User
{
    public $username;

    public function userName($name)
    {
        $this->username = $name;
    }

    public function number($a, $b)
    {
        $this->sum($a, $b);
    }

    public function sum($a, $b)
    {
        echo $a + $b;
    }
}

$obj = new User();

//$obj->number(1,2);


class ParentClass
{
    public $popertyOne = "parent property";

    private function name()
    {
        echo "Rima";
    }

    public function show()
    {
        $this->name();
    }
}

//$parentObj = new ParentClass();

 //$parentObj->show();

 class ChildClass extends ParentClass
 {
     public function showName()
     {
         $this->name();
     }
 }
 
 $childObj = new ChildClass();
 
// $childObj->show();




//method a bracket dite hoi r property te lage na..this a.




//private,protected,public
class Name{
    protected $username="Rima Khatun";
    public function fn1(){
         return $this->username;
    }
}
class Subname extends Name{
    public function Add2(){
        $this->username;
    }
}
//$obj=new Name();
//$obj->username;
 //$obj2=new Subname();
 //$obj2->Add2();

 class abc{
    private $ri="It is private name";
    public function fn2(){
         echo $this->ri;
    }
}
$obj=new abc();
$obj->fn2();

//constructor

class consClass
{
    public function __construct($var)
    {
        echo $var;
    }
}

//$consClassObj =  new consClass("this is for constructor");












