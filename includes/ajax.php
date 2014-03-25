<?php

if($_POST['fun'] == "payment"):
	$method = $_POST['method'];
	$redirect = $_POST['redirect'];
	if ($method == "po") { $payMethod = "Checkout w/ purchase order"; }
	elseif ($method == "cc") { $payMethod = "Checkout w/ credit card"; }
	elseif ($method == "off") { $payMethod = "Checkout offline (mail/phone)"; }
	$_SESSION['user']['payment'] = $method; 
	$output = array( 'method' => $method, 'payMethod' => $payMethod, 'redirect' => $redirect);
	echo $payMethod;
	// exit();
endif;

if($_POST['fun'] == "finalize"):
	$method = $_POST['method'];
	$redirect = $_POST['redirect'];
	if ($method == "po") { $payMethod = "Checkout w/ purchase order"; }
	elseif ($method == "cc") { $payMethod = "Checkout w/ credit card"; }
	elseif ($method == "off") { $payMethod = "Checkout offline (mail/phone)"; }
	$_SESSION['user']['payment'] = $method; 
	$output = array( 'method' => $method, 'payMethod' => $payMethod, 'redirect' => $redirect);
	echo $payMethod;
	// exit();
endif;

if($_POST['fun'] == "clear-session"):
	$vars = $_POST['vars'];
	if($vars == ""){session_destroy();} else{ 
		$vars = explode(" ", $vars);
		foreach ($vars as $key) {
			unset($_SESSION[$key]);
		}
	} 

endif;