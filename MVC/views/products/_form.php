<?php if (!empty($errors)): ?>
<div class="alert alert-danger">
 <?php foreach ($errors as $error): ?>
 <div><?php echo $error ?></div>
 <?php endforeach; ?>
</div>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">

 <!-- show image -->
 <?php if ($product['image']): ?>
 <img src="/<?php echo $product['image'] ?>" class="product-img-view">
 <?php endif; ?>
 <!-- end show -->
 <div class="form-group">
  <label>Product Image</label>
  <br>
  <input type="file" name="image" value="<?php echo $image ?>">
 </div>

 <div class="form-group">
  <label>Title</label>
  <input type="text" name="title" class="form-control" value="<?php echo $product["title"]; ?>">
 </div>

 <div class="form-group">
  <label>Product Description</label>
  <textarea name="description" class="form-control"><?php echo $product["description"]; ?></textarea>
 </div>

 <div class="form-group">
  <label>Price</label>
  <input type="number" step=".01" name="price" class="form-control" value="<?php echo $product["price"]; ?>">
 </div>

 <div class="form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">Check me out</label>
 </div>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>