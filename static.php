<?php
class A{
    const property1="first Propersty.";
    public static $property2="second property";
    public static function Method1(){
        echo "The Method is here";
    }

}
//A::Method1();
//echo A::property1;
echo A::$property2;