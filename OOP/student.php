<?php 
require_once("person.php");
class student extends person{
 public int $studentID;

 public function __construct($name,$suername,$studentID){
  $this->studentID=$studentID;
  parent:: __construct($name,$suername);
 }
}
?>