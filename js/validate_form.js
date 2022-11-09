




function validateRegister() {
	var name = $('#name').val();
	var email = $('#email').val();
	var city = $('#city').val();
	var pass = $('#pass').val();
	var pass2 = $('#pass2').val();
	var country = $('#country').val();
	var city = $('#city').val();
	var contact = $('#contact').val();

	var passError = $('#invalid_pass');
	var nameError = $('#invalid_name');
	var emailError = $('#invalid_email');
	var countryError = $('#invalid_country');
	var cityError = $('#invalid_city');
	var contactError = $('#invalid_contact');

	if(pass2 !== pass) {
		passError.html("Passwords do not match");
		passError.css("display", "inline-block");
		return;
	} else {
		passError.css("display", "none");
	}

	if(pass.length > 150 || pass.length < 8) {
		passError.html("Enter a password between 8 and 24 characters");
		passError.css("display", "inline-block");
		return;
	} else {
		passError.css("display", "none");
	}

	if(name.length > 100 || name.length < 3) {
		nameError.html("Enter a name of length between 3 and 100");
		nameError.css("display", "inline-block");
		return;
	} else {
		nameError.css("display", "none");
	} 

	if(email.length > 50 || email.length < 3) {
		emailError.html("Enter an email of length between 3 and 50");
		emailError.css("display", "inline-block");
		return;
	} else {
		emailError.css("display", "none");
	}

	if(country.length > 30 || country.length < 3) {
		countryError.html("Enter a country name of length between 3 and 30");
		countryError.css("display", "inline-block");
		return;
	} else {
		countryError.css("display", "none");
	}

	if(city.length >= 30 || country.length < 3) {
		cityError.html("Enter a name of length between 3 and 100");
		cityError.css("display", "inline-block");
		return;
	} else {
		cityError.css("display", "none");
	} 

	if(contact.length >= 15 || contact.length < 10) {
		contactError.html("Enter a phone number between 10 and 15 numbers");
		contactError.css("display", "inline-block");
		return;
	} else {
		contactError.css("display", "none");
	} 

	$('#theForm').submit();
	// console.log(email);
	return;
}

function validateBrandName() {
	
	var brandName = $('#brandName').val();
	var brandNameError = $('#brandNameError');

	if(brandName.length < 2 || brandName.length > 100) {
		brandNameError.html("Enter a brand name between 2 and 100 characters")
		brandNameError.css("display", "inline-block");
		return;
	} else {
		brandNameError.css("display", "none");
	}

	$('#brandForm').submit();
	return;
}

function validateCategoryName() {
	var catName = $('#catName').val();
	var catNameError = $('#catNameError');

	if(catName.length < 2 || catName.length > 100) {
		catNameError.html("Enter a category name between 2 and 100 characters")
		catNameError.css("display", "inline-block");
		return;
	} else {
		catNameError.css("display", "none");
	}

	$('#catForm').submit();
	return;	
}

