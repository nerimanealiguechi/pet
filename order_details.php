<?php
$product = $_POST['product'] ?? '';
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if(!$product || !$name || !$email){
    echo "<p style='color:red;'>Missing required fields!</p>";
    exit;
}

echo "
<h3>Product:</h3><p>".htmlspecialchars($product)."</p>
<h3>Name:</h3><p>".htmlspecialchars($name)."</p>
<h3>Email:</h3><p>".htmlspecialchars($email)."</p>
<h3>Message:</h3><p>".nl2br(htmlspecialchars($message))."</p>
<p style='color:green;font-weight:bold;'>Order received successfully ✅</p>
";
?>