<?php
session_start();
$cartproduct = $_GET['serial_ids'];
foreach($cartproduct as $key => $val)
{ $productname = explode('_',$val['name']);
	if($productname[0]=='products')
	{
	//echo $productname[1].'value'.$val['value'];
	$_SESSION['curriculum']['products'][$productname[1]]= $val['value'];
	}else
	{
	$_SESSION['curriculum']['Optionalproducts'][$productname[1]]= $val['value'];
	}
}
//print_r($cartproduct);
//print_r($_SESSION['curriculum']['products']);  
?>