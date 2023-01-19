<?php
abstract class A{
    public function Test($re){
    echo "this is Test ...";
}
    abstract public function Use($var,$ts);
        
    
}
class B extends A{
    public function Test($re){
    //public function Test1(){
        echo "This is Test...";
    }

    public function Use($var,$t){
        echo "This is use...";
    }

}
$obj=new B();
$obj->Test(6);
//$obj->use(1,3);
//$obj->Test1();

//j class ta abstract bola hobe tar method name value sob same hobe.and oi method ta oboshoi thakte hobe.