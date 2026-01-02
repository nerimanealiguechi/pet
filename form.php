<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Form</title>
  <link rel="stylesheet" href="products.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h1>Order Product</h1>

<form id="order-form" class="adoption-container">
  <input type="hidden" name="product" value="<?php echo htmlspecialchars($_GET['product'] ?? ''); ?>">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <textarea name="message" placeholder="Your Message"></textarea>
  <button type="submit">Send Order</button>
</form>

<div id="response" style="text-align:center;margin-top:20px;"></div>

<script>
$(document).ready(function(){
  $("#order-form").submit(function(e){
    e.preventDefault(); 
    var formData = $(this).serialize();

    $.ajax({
      url: "process.php",
      type: "POST",
      data: formData,
      success: function(data){
        $("#response").html('<div class="pet-card" style="max-width:500px;margin:auto;">'+data+'</div>');
        $("#order-form")[0].reset();
      },
      error: function(){
        alert("Error sending order. Please try again.");
      }
    });
  });
});
</script>

</body>
</html>