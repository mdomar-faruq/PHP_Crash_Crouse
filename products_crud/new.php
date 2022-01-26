<?php require_once "function.php";?>
<?php require_once("DB.php");

// echo "<pre>";
// var_dump($_FILES);
// echo "<pre>";

$errors=[];
//initali empty value
$title = '';
$description = '';
$price = '';

if($_SERVER["REQUEST_METHOD"]==='POST'){
$title=$_POST["title"];
$description=$_POST["description"];
$price=$_POST["price"];
$date=date("Y-m-d H-i-s");

//validation, check empty or not
if(!$title){
 $errors[]="product title is require";
}
if(!$price){
 $errors[]="product price is require";
}
//image section
 $image = $_FILES['image'] ?? null;
    $imagePath = '';
//make image folder 
    if (!is_dir('images')) {
        mkdir('images');
    }

    if ($image && $image['tmp_name']) {
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

//end image section

if (empty($errors)) {
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                VALUES (:title, :image, :description, :price, :date)");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));

        $statement->execute();
        header('Location: index.php');
    }
}

 require_once("header.html"); 
 
 ?>

<!-- content -->
<h1>Create new Product</h1>

<?php if (!empty($errors)): ?>
<div class="alert alert-danger">
 <?php foreach ($errors as $error): ?>
 <div><?php echo $error ?></div>
 <?php endforeach; ?>
</div>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">
 <div class="form-group">
  <label>Product Image</label>
  <br>
  <input type="file" name="image" value="<?php echo $image ?>">
 </div>

 <div class="form-group">
  <label>Title</label>
  <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
 </div>

 <div class="form-group">
  <label>Product Description</label>
  <textarea name="description" class="form-control"><?php echo $description ?></textarea>
 </div>

 <div class="form-group">
  <label>Price</label>
  <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
 </div>

 <div class="form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">Check me out</label>
 </div>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- content -->

<?php require_once("footer.html");?>