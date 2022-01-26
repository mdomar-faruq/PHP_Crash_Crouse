<?php

require_once "function.php";
//check which id respone
$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

// echo "<pre>";
// var_dump($id);
// echo "<pre>";
// exit;

require_once("DB.php");
//update , select table and id
$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($product);
// echo "<pre>";
// exit;

$title = $product['title'];
$description = $product['description'];
$price = $product['price'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $image = $_FILES['image'] ?? null;
    $imagePath = '';
    // make folder
    if (!is_dir('images')) {
        mkdir('images');
    }
    // image
    if ($image) {
        if ($product['image']) {
            unlink($product['image']);
        }
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }
    // check fild
    if (!$title) {
        $errors[] = 'Product title is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }
//Update database
    if (empty($errors)) {
        $statement = $pdo->prepare("UPDATE products SET title = :title, 
                                        image = :image, 
                                        description = :description, 
                                        price = :price WHERE id = :id");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);

        $statement->execute();
        header('Location: index.php');
    }

}

?>
<?php require_once("header.html");?>

<!-- content -->
<p>
 <a href="index.php" class="btn btn-default">Back to products</a>
</p>
<h1>Update Product: <b><?php echo $product['title'] ?></b></h1>
<!-- error info -->
<?php if (!empty($errors)): ?>
<div class="alert alert-danger">
 <?php foreach ($errors as $error): ?>
 <div><?php echo $error ?></div>
 <?php endforeach; ?>
</div>
<?php endif; ?>
<!-- end error info -->
<!-- update from -->
<form method="post" enctype="multipart/form-data">
 <!-- show image -->
 <?php if ($product['image']): ?>
 <img src="<?php echo $product['image'] ?>" class="product-img-view">
 <?php endif; ?>
 <!-- end show -->
 <div class="form-group">
  <label>Product Image</label><br>
  <input type="file" name="image">
 </div>
 <div class="form-group">
  <label>Product title</label>
  <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
 </div>
 <div class="form-group">
  <label>Product description</label>
  <textarea class="form-control" name="description"><?php echo $description ?></textarea>
 </div>
 <div class="form-group">
  <label>Product price</label>
  <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- end from -->
<!-- end content -->

<?php require_once("footer.html"); ?>