<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INSERT phonebook data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<br>


<div class="mx-auto" style="width: 65%;">
  <h2 class="font-weight-normal">Log in to your account</h2>

  <form id="theForm" action="../actions/contact_actions.php" method="POST">

    
    <div class="form-group">
      <label for="fullName">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
    </div>
    
    
    <div class="form-group">
      <label for="pass">Password</label>
      <input type="password" name="pass" class="form-control" id="password" placeholder="Your password" required>
    </div>
    
    <input type="submit" name="new_contact" value="Submit" class="btn btn-primary"></button>
  </form>
</div>


</body>
</html>