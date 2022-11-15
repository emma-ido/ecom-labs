function payWithPaystack() {
  event.preventDefault();

  // console.log($('#email-address').val());

  let handler = PaystackPop.setup({
    // key: 'pk_test_xxxxxxxxxx', // Replace with your public key
    key: 'pk_test_618b2a128cb38615a9db7357f9d5e8b5b85ebb13',
    email: document.getElementById("email-address").value,
    currency: 'GHS',
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      // alert(message);

      
      $.post('../actions/process_payment.php', 
        {ref: response.reference, amount: document.getElementById("amount").value}, 
        function(data) {
        // alert(data);
        if(data == "YES") {
          window.location.href = "../view/payment_success.php";
        } else {
          window.location.href = "../view/payment_failed.php";
        }
      });

      $('#select_seats_form').submit();
    
    }
  });

  handler.openIframe();
}