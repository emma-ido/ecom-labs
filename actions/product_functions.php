<?php 
include_once("../controllers/product_controller.php");


//--PRODUCTS--//
function getProducts($start=0, $end=0, $like="") {
	$products = array();
	if(($start == 0) && ($end == 0) && strlen($like) == 0) {
		$products = getAllProducts();
	} else if($start >= 1 && strlen($like) == 0) {
		$products = getAllProductsLimit($start, $end);
	} else if(($start == 0) && ($end == 0) && strlen($like) > 0) {
		$products = getProductsLike($like);
	} else {
		$products = getProductLikeLimit($start, $end, $like);
	}
	
	$html = "";
	$i = 0;
	$html = $html. "<div class='row'>";
	$status = "open";
	foreach($products as $product) {
		$product_image = $product["product_image"];
		$product_title = $product["product_title"];
		$product_price = $product["product_price"];
		$product_id = $product["product_id"];
		if($i == 4) {
			$html = $html. "</div>";
			$html = $html. "<div class='row'>";
			$status = "open";
			$i = 0;
		}
		$html = $html. "
					    <div class='col' style='padding-bottom: 12px;'>
					    <div class='card'>
					    	<a href='single_product.php?id=$product_id'><img class='card-img-top' style='min-width:150px; min-height:160px;' src='$product_image' alt='Card image cap'></a>
						  <div class='card-body'>
						    <a href='single_product.php?id=$product_id' style='text-decoration: none;'>$product_title</a><br><span class='font-weight-bold'>GHC $product_price</span><br><a class='btn btn-primary' href='#' role='button'href='#'>Add to cart</a>
						  </div>
						</div>
				
					    </div>
					    ";
		
		$i++;
	}
	
	while($i != 4) {
		$html = $html. "<div class='col' style='padding-bottom: 12px;'>
						    
					    </div>
					    ";
		$i++;
	}

	$html = $html. "</div>";
	echo $html;
}


function getProductsTabular() {
	$products = getAllProducts();
	$html = "";
	foreach($products as $product) {
		$product_title = $product["product_title"];
		$product_price = $product["product_price"];
		$product_id = $product["product_id"];
		$html = $html. "<tr>
		<td>$product_title</td>
		<td>$product_price</td>
		<td><a href='../view/edit_product_form.php?id=$product_id' class='btn btn-primary' role='button'>Edit</a></td>
		</tr>"; 
	}
	echo $html;
}


function getSingleProduct($product_id) {
	return getProduct($product_id);
}


//--BRAND--//
function getBrands(){
	$brands = getAllBrands();
	$html = "";
	foreach($brands as $brand) {
		$brandName = $brand["brand_name"];
		$brandId = $brand["brand_id"];
		$html = $html. "<tr>
		<td>$brandName</td>
		<td><a href='../admin/brand.php?edit=$brandId' class='btn btn-primary' role='button'>Edit</a></td>
		</tr>";
	}
	echo $html;
}

function getBrand($brandId) {
	$brand = getBrandName($brandId);

	if(isset($brand["brand_name"])) {
		return $brand["brand_name"];
	} else {
		return "";
	}
	
}


function getBrandOptions() {
	$brands = getAllBrands();
	$html = "";
	foreach ($brands as $brand) {
		$html = $html. "
		<option value=$brand[brand_id]>$brand[brand_name]</option>
		";
	}
	echo $html;
}


//--CATEGORY--//
function getCategories() {
	$categories = getAllCategories();
	$html = "";
	// print_r($categories);
	foreach($categories as $cat) {
		$catName = $cat["cat_name"];
		$catId = $cat["cat_id"];
		$html = $html. "<tr>
		<td>$catName</td>
		<td><a href='../admin/category.php?edit=$catId' class='btn btn-primary' role='button'>Edit</a></td>
		</tr>";
	}
	echo $html;
}

function getCategory($categoryId) {
	$category = getCategoryName($categoryId);

	if(isset($category["cat_name"])) {
		return $category["cat_name"];
	} else {
		return "";
	}
}

function getCategoryOptions() {
	$categories = getAllCategories();
	$html = "";
	foreach ($categories as $category) {
		$html = $html. "
		<option value=$category[cat_id]>$category[cat_name]</option>
		";
	}
	echo $html;
}

?>