<?php

interface userinterface1
 {
 public function testmethod();
 }

 interface userinterface2
 {
     public function testmethod2();
 }

 class User implements userinterface1,userinterface2
 {
     public function testmethod(){
         echo "this is a test class1";
     }
     public function testmethod2(){
        echo "this is a second class.";
     }
 }
 $obj=new User();
 $obj->testmethod();
 $obj->testmethod2();

