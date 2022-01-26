<?php

class person{
 public string $name;
 public string $suername;
 private ?int $age;
 public static int $counter=0;

  function __construct($name,$suername)
   {
    $this->name=$name;
    $this->suername=$suername;
    self::$counter++;
   }
  public static function getCounter(){
   return self::$counter;
  } 
  public function setAge($age){
    $this->age=$age;
   }
  public function getAge(){
    return $this->age;
   }
 }
 
 ?>