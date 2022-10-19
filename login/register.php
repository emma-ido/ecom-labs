<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/validate_form.js"></script>

<br>


<div class="mx-auto" style="width: 65%;">
  <h2 class="font-weight-normal">Register</h2>

  <form id="theForm" action="registerprocess.php" method="POST">

    <span id="invalid_name" class="font-weight-bold" style="color: red; display: none;"></span>
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" required>
    </div>

    <span id="invalid_email" class="font-weight-bold" style="color: red; display: none;"></span>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>


    <span id="invalid_pass" class="font-weight-bold" style="color: red; display: none;"></span>
    <div class="row">
      <div class="col">Password</div>
      <div class="col">Confirm Password</div>
    </div>
    <div class="row form-group">
        
        <div class="col">
          <input type="password" name="pass" class="form-control" id="pass" placeholder="Enter a password" required>
        </div>
        
        <div class="col">
          <input type="password" name="pass2" class="form-control" id="pass2" placeholder="Confirm password" required>
        </div>
      </div>

    <span id="invalid_country" class="font-weight-bold" style="color: red; display: none;">Full Name is required</span>
    <div class="form-group">
      <label for="fullName">Country</label>
      <input type="text" name="country" class="form-control" id="country" placeholder="Enter your country" required>
    </div>

    <span id="invalid_city" class="font-weight-bold" style="color: red; display: none;">Full Name is required</span>
    <div class="form-group">
      <label for="fullName">City</label>
      <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" required>
    </div>    


    <span id="invalid_contact" class="font-weight-bold" style="color: red; display: none;">Invalid phone number</span>
    <div class="form-group">
      <label for="contact">Contact </label>
      <input type="text" name="contact" class="form-control" id="contact" placeholder="Phone Number" required>
    </div>

    <input type="hidden" name="new_customer" value="new_customer">
    
    <input type="button" name="new_account" onclick="validateRegister()" value="Submit" class="btn btn-primary"></input>
  </form>
</div>



</body>
</html>