<h1>Product List</h1>
<p><a class="btn btn-success" href="/products/create">Create Product</a></p>
<!-- //search product -->
<form>
 <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search for Products" value="<?php echo $search ?>" name="search">
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
    <!-- update -->
    <a href="/products/update?id=<?php  echo $product["id"]; ?>" type="button"
     class="btn btn-sm btn-outline-success">Edit</a>

    <!-- delete -->
    <form method="post" action="/products/delete" style="display: inline-block">
     <input type="hidden" name="id" value="<?php echo $product['id'] ?>" />
     <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
    </form>

   </td>
  </tr>
  <?php endforeach; ?>

 </tbody>
</table>
<!-- content -->