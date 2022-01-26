<?php require_once("DB.php");?>

<?php 
//super global get
$search=$_GET['search'] ?? "";
if($search){
$statement=$pdo->prepare("SELECT * FROM products Where title LIKE :title ORDER BY  create_date DESC");
$statement->bindValue(":title","%$search%");
}else{
 $statement=$pdo->prepare("SELECT * FROM products ORDER BY create_date DESC");
}
$statement->execute();
$products=$statement->fetchAll(PDO::FETCH_ASSOC); //table record value return Assoc arrray
// echo "<pre>";
// var_dump($products);
// echo "<pre>";
// exit;
?>

<?php require_once("header.html"); ?>

<!-- content -->
<h1>Product CRUD</h1>
<p><a class="btn btn-success" href="new.php">Create Product</a></p>
<!-- //search product -->
<form>
 <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="search for products" value="<?php echo $search ?>" name="search">
  <div class="input-group-append">
   <button class="btn btn-outline-secondary" type="submit">search</button>
  </div>
 </div>
</form>
<!-- end search -->
<table class="table">
 <thead>
  <tr>
   <th scope="col">ID#</th>
   <th scope="col">Image</th>
   <th scope="col">Title</th>
   <th scope="col">Price</th>
   <th scope="col">Date</th>
   <th scope="col">Action</th>
  </tr>
 </thead>
 <tbody>
  <?php  foreach ($products as $key=>$product): ?>
  <tr>
   <th scope="row"><?= $key+1 ?></th>
   <td>

    <?php if ($product['image']): ?>
    <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" class="product-img">
    <?php endif; ?>

   </td>
   <td><?= $product["title"] ?></td>
   <td><?= $product["price"] ?></td>
   <td><?= $product["create_date"] ?></td>
   <td>
    <a href="edit.php?id=<?php  echo $product["id"]; ?>" type="button" class="btn btn-sm btn-outline-success">Edit</a>

    <form method="post" action="delete.php" style="display: inline-block">
     <input type="hidden" name="id" value="<?php echo $product["id"]; ?>">
     <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
    </form>

   </td>
  </tr>
  <?php endforeach; ?>

 </tbody>
</table>
<!-- content -->

<?php require_once("footer.html");?>