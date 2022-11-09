<?php include_once("settings/core.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="login/register.php">Register</a>

      <?php 
        if(isAdmin()) {
          echo '<a class="nav-item nav-link" href="admin/brand.php">Brand</a>';
          echo '<a class="nav-item nav-link" href="admin/category.php">Category</a>';
        } 
      ?>

      <?php 
        if(!isLoggedIn()) {
          echo '<a class="nav-item nav-link" href="login/login.php">Login</a>';
        } else {
          echo '<a class="nav-item nav-link" href="view/add_product_form.php">Add Product</a>';
          echo '<a class="nav-item nav-link" href="logout.php">Logout</a>';
        }
      ?>

    </div>
  </div>
</nav>

<br>
<?php 

if(isset($_GET["success"])) {
  echo "<span class='badge badge-pill badge-success'>$_GET[success]</span>";
} else if(isset($_GET["error"])) {
  echo "<span class='badge badge-pill badge-danger'>$_GET[error]</span>";
}



?>
</body>
</html>