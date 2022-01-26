<?php 

namespace app\controllers;
use app\Router;
use app\models\Product;

class ProductController{
 
public static function index(Router $router){
//take search super gloval GET
$search = $_GET["search"] ?? "";
  
$products= $router->db->getProducts($search);
// echo "<pre>" ;
// var_dump($products);
// echo "<pre>" ;

//pass the products associative array 
$router->renderView("products/index",
                 [
                  "products"=> $products,
                  "search"=> $search
                  
                  ]);

}

public static function create(Router $router){
 
  $errors = [];
  $productData = [
    "title" => "",
    "description" => "",
    "image" => "",
    "price" =>"",
    
  ];
  if($_SERVER["REQUEST_METHOD"]==='POST'){
  $productData["title"]= $_POST["title"];
  $productData["description"]= $_POST["description"];
  $productData["price"]= (float)$_POST["price"];
  $productData["imageFile"]= $_FILES["image"] ?? null;
  
  //model product class
  $product = new Product(); 
  $product->load($productData); //load everything and pass
  $errors=$product->save();
  if(empty($errors)){
    header("Location: /products");
    exit;
   }
  }
  
  //products and errors pass create page 
  $router->renderView("products/create",[

    "product"=> $productData,
    "errors" => $errors
  ]);
}

public static function update(Router $router){
  //use super variable
  $errors = [];
  $id = $_GET["id"] ?? null;
  if(!$id){
  header("Location: /products");
  exit;
  }
 
  //need update and renderview
$productData = $router->db->getProductById($id);

if($_SERVER["REQUEST_METHOD"]==='POST'){
  $productData["title"]= $_POST["title"];
  $productData["description"]= $_POST["description"];
  $productData["price"]= (float)$_POST["price"];
  $productData["imageFile"]= $_FILES["image"] ?? null;
  
  //model product class
  $product = new Product(); 
  $product->load($productData); //load everything and pass
  $errors=$product->save();
  if(empty($errors)){
    header("Location: /products");
    exit;
  }
}

  $router->renderView("products/update",[
    "product"=> $productData,
    "errors"=> $errors
  ]);
  
 
}
//delete 
public static function delete(Router $router){

  $id = $_POST["id"] ?? null;
  //check index  delete button pass id
  // var_dump($id);
  // exit;


  //if delete sucess back index
  if(!$id){
   header("location: /products");
   exit;
  }
  //database function call deleteProduct and delete
  $router->db->deleteProduct($id);
  header("location: /products");
}

}

?>