<?php
trait Auth{
    public $login="Pakhi";
    public function islogin(){
        echo "You are logged in";
    }
}
class A{
    use Auth;
    public $property;
    public function Smethod(){
        echo "Class A is here.";
    }

}
class B{
    use Auth;
    public $property2;
    public function Smethod2(){
        echo "Class B is here.";
    }

}
$obj=new B();
$obj->islogin();
$obj->Smethod2();