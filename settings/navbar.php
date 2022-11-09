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
          echo '<a class="nav-item nav-link" href="../login/login.php">Login</a>';
        } else {
          echo '<a class="nav-item nav-link" href="../view/add_product_form.php">Add Product</a>';
          echo '<a class="nav-item nav-link" href="../logout.php">Logout</a>';
        }
      ?>

    </div>
  </div>
</nav>