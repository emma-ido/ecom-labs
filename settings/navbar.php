<?php include_once("../actions/cart_functions.php"); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      
      <a class="nav-item nav-link" href="../login/register.php">Register</a>

      <?php 
        if(isAdmin()) {
          echo '<a class="nav-item nav-link" href="../admin/brand.php">Brand</a>';
          echo '<a class="nav-item nav-link" href="../admin/category.php">Category</a>';
        } 
      ?>
      <?php 
        if(!isLoggedIn()) {
          $cart_count = get_cart_count_with_ip(getIpAddress());
          echo "<a class='nav-item nav-link' href='../view/cart.php'>Cart ($cart_count)</a>";
          echo '<a class="nav-item nav-link" href="../login/login.php">Login</a>';
        } else {
          $cart_count = get_cart_count(getUserId());
          echo '<a class="nav-item nav-link" href="../view/add_product_form.php">Add Product</a>';
          echo '<a class="nav-item nav-link" href="../view/all_product.php">All Products</a>';
          echo "<a class='nav-item nav-link' href='../view/cart.php'>Cart ($cart_count)</a>";
          echo '<a class="nav-item nav-link" href="../logout.php">Logout</a>';
        }
      ?>

    </div>
  </div>
</nav>