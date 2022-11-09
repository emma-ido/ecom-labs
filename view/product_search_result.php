<?php
include_once("../settings/core.php");
include_once("../actions/product_functions.php");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search</title>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php include_once('../settings/navbar.php'); ?>
<br>

	<script>
  feather.replace()
</script>
	
		<i data-feather="circle"></i>
	<div class="mx-auto" style="width: 95%;">
		<form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
	    </form>
	    <hr>
		<?php
		if(isset($_GET["q"])) {
			$search_term = $_GET["q"];
			if(isset($_GET["page"]) && is_numeric($_GET["page"])) {
				$page_number = $_GET["page"];
				if($page_number <= 0) {
					$page_number = 1;
				}
				$end = $page_number * 10;
				$start = $end - 10;
				getProducts($start, $end, $search_term);
			} else {
				getProducts(0, 0, $search_term);	
			}
		}
		?>
	</div>

	<!-- <div class="mx-auto">
	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item"><a class="page-link" href="">Previous</a></li>
	    <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
	    <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item"><a class="page-link" href="#">Next</a></li>
	  </ul>
	</nav>
	</div> -->
</body>
</html>