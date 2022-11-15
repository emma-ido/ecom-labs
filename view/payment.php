<?php include_once("../settings/core.php"); ?>
<?php include_once("../actions/cart_functions.php"); ?>
<?php include_once("../controllers/customer_controller.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirm order</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<br><br>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="../js/payment.js"></script>
<!-- name | unit | qty | total_price -->
<div class="col d-flex justify-content-center">
	<div class="card" style="border-radius: 25px;width: 60%;padding: 5px;">
		<div class="card-body">
			<h3 style="text-align: center;">Cart Summary</h3>
			<hr>
			<br>
			<div class="row" style='text-align: center;'>
				<div class="col">
					<span class="font-weight-bold">Name</span>
				</div>
				<div class="col">
					<span class="font-weight-bold">Unit (GHC)</span>
				</div>
				<div class="col">
					<span class="font-weight-bold">Qty</span>
				</div>
				<div class="col">
					<span class="font-weight-bold">Price (GHC)</span>
				</div>
			</div>
			<?php
			if(!isLoggedIn()) {
				header("Location: cart.php");
			}
			// echo mt_rand(1000000, 9000000);
			echo display_cart_products(getUserId());
			$user_email = getEmailFromId(getUserId());
			echo "<input type='hidden' id='email-address' value='$user_email'>";
			?>


		</div>
	</div>
</div>


</body>
</html>