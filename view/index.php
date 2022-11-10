<?php include_once("../settings/core.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php include_once("../settings/navbar.php"); ?>

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