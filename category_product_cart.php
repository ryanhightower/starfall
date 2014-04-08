<?php 
session_start();
include("includes/functions.php");
$product_id = $_GET['product_id'];
//print_r($DB);
if (array_key_exists($product_id, $DB)) {

		$_SESSION['curriculum']['cart'][$product_id]= array("quantity" => 1,"price" => $DB[$product_id]['price']);

    echo "true";
}else
	echo "false";
	
//print_r($DB[$product_id]['price_option']);  
?>