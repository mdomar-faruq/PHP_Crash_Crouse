<?php 

namespace app;

use app\models\Product;
use PDO; 


class Database{
 
 //type of pdo property
 // (big \PDO mean -> absolute name of class )
 public \PDO $pdo; //PHP 7.4
 public static Database $db;

 public function __construct()
 {
  //make connection database
 
$this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=products_crud","root");
$this->pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//db connection poblem throu error
//inside save property db
self::$db= $this;
 }
 
public function getProducts($search = ""){

if($search){
$statement=$this->pdo->prepare("SELECT * FROM products Where title LIKE :title ORDER BY  create_date DESC");
$statement->bindValue(":title","%$search%");
}else{
 $statement=$this->pdo->prepare("SELECT * FROM products ORDER BY create_date DESC");
}
$statement->execute();
//return all product
return $statement->fetchAll(PDO::FETCH_ASSOC); //table record value return Assoc arrray
}

//update
public function updateProduct(Product $product){
  $statement = $this->pdo->prepare("UPDATE products SET title = :title, 
                                        image = :image, 
                                        description = :description, 
                                        price = :price WHERE id = :id");
        $statement->bindValue(':title', $product->title);
        $statement->bindValue(':image', $product->imagePath);
        $statement->bindValue(':description', $product->description);
        $statement->bindValue(':price', $product->price);
        $statement->bindValue(':id', $product->id);

        $statement->execute();
}
//create product
public function createProduct(Product $product){
   $statement = $this->pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                VALUES (:title, :image, :description, :price, :date)");
        $statement->bindValue(':title', $product->title);
        $statement->bindValue(':image', $product->imagePath);
        $statement->bindValue(':description', $product->description);
        $statement->bindValue(':price', $product->price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));

        $statement->execute();
}

//update ,db  select id
public function getProductById($id){
        $statement = $this->pdo->prepare('SELECT * FROM products WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
return $product = $statement->fetch(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // var_dump($product);
        // echo "<pre>";
        // exit;
}
//delete product Query
public function deleteProduct($id){
        $statement=$this->pdo->prepare("DELETE FROM products WHERE id= :id");
        $statement->bindValue(":id",$id);
        $statement->execute();
        header("Location: /products");
}

}
?>