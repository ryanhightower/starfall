<?php 
session_start();
include("includes/functions.php");
$product_id = $_GET['product_id'];
$quantity = $_GET['quantity'];
if(!empty($DB[$product_id]['price_option']))
{
if($quantity >= $DB[$product_id]['price_option']['quantity'])
	echo $product_price = $DB[$product_id]['price_option']['set_price'];
else
	echo $product_price = $DB[$product_id]['price'];
}
else
	echo $product_price = $DB[$product_id]['price'];	
//print_r($DB[$product_id]['price_option']);  
?>