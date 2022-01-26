<?php 
namespace app;


class Router{

 public array $getRoutes=[];
 public array $postRoutes=[];
 public Database $db;
 
public function  __construct()
{
 $this->db= new Database();
 
}

public function get($url,$fn){
 $this->getRoutes[$url] = $fn;
 }

 public function post($url,$fn){
  $this->postRoutes[$url] = $fn;
 }

//detect current wrote
public function resolve(){
   // echo "<pre>";
   // var_dump($_SERVER);
   // echo "<pre>";
   // exit;

    //$method= $_SERVER["REQUEST_METHOD"];
   // $url= $_SERVER["PATH_INFO"] ?? "/"; //PATCH_SELF

   
   //--setup apache url host ,bug error
   $currentUrl= $_SERVER["REQUEST_URI"] ?? "/";

   if(strpos($currentUrl, "?") !== false){
   $currentUrl = substr($currentUrl, 0, strpos($currentUrl,"?"));
   }
   //---setup end---
   $method= $_SERVER["REQUEST_METHOD"];
   

   
   
   if($method==="GET"){
   $fn = $this->getRoutes[$currentUrl] ?? null;
   }
   else if ($method==="POST"){
   $fn = $this->postRoutes[$currentUrl] ?? null;
   }

  if(!$fn){
   
     echo "Page not found";
     exit;
}
   echo call_user_func($fn,$this);//issue static methode  
 
}

//----View--- (product/index)
public function renderView($view, $params=[]){
foreach($params as $key => $value){

 //$$ it will create product variavle
 $$key=$value;

}
//output ceshing methode and save local buffar
 ob_start(); 
include_once __DIR__."/views/$view.php";
//_layout content
//return output clean buffer 
$content= ob_get_clean();
include_once __DIR__."/views/_layout.php";
}


} 
?>