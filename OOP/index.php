<?php 

require_once("person.php");
require_once("student.php");

$st=new student("james bond","jame",606);//extend person class(construct parametar pass)
 echo "<pre>";
 var_dump($st);
 echo "<pre>";

 $obj1= new person("MD Omar Faruq","Razu");
 // echo "<pre>";
 // var_dump($obj1);
 // echo "<pre>";
 
 // $obj1->setAge(25);
 // echo $obj1->getAge()."<br>";

 $obj2= new person("Jamil Hossain","Rocky");
 echo person::getCounter()."<br>";




?>