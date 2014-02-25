<?php
$method = $_POST['method'];
if ($method == "po") { $payMethod = "Checkout w/ purchase order"; }
elseif ($method == "cc") { $payMethod = "Checkout w/ credit card"; }
elseif ($method == "off") { $payMethod = "Checkout offline (mail/phone)"; }
$_SESSION['user']['payment'] = $method; 
echo $payMethod;
?>