<?php

require_once("DB.php");

$id=$_POST["id"] ?? null;

if(!$id){
 header("Location: index.php");
 exit;
}
// echo "<pre>";
// var_dump($id);
// echo "<pre>";
// exit;

// delete query
$statement=$pdo->prepare("DELETE FROM products WHERE id= :id");
$statement->bindValue(":id",$id);
$statement->execute();
header("Location: index.php");

?>