<?php
// Set Constants
if(!defined("ABS_PATH")) define("ABS_PATH", dirname(__DIR__));
if(!defined("THEME_PATH")) define("THEME_PATH", ABS_PATH."/theme");
if(!defined("INCLUDES_PATH")) define("INCLUDES_PATH", ABS_PATH."/includes");

if(!defined("SITE_URL")){
	$url = $_SERVER['REQUEST_URI']; //returns the current URL
	$parts = explode('/',$url);
	$dir = $_SERVER['SERVER_NAME'];
	for ($i = 0; $i < count($parts) - 1; $i++) {
	 $dir .= $parts[$i]."/";
	}
	$dir = "http://". substr($dir, 0, strlen($dir)-1); //remove trailing slash
	define("SITE_URL", $dir);
	// echo SITE_URL;	
} 

if(!defined("THEME_URL")) define("THEME_URL", SITE_URL."/theme");

/*
* Helper functions
* functions for faster theme development
*/
function get_header(){
	require_once(THEME_PATH."/header.php");
}
function get_header_inner(){
	require_once(THEME_PATH."/header-inner.php");
}
function get_header_product(){
	require_once(THEME_PATH."/header-product.php");
}
function get_footer(){
	require_once(THEME_PATH."/footer.php");
}


/*
* Mock Database
* setup the global $DB array to act like the product database
*/
global $DB;
$DB = array(
	"product_item_1" => array(
         "name" => "Product Item 1",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Per Student Items"
         ),
	"product_item_2" => array(
         "name" => "Product Item 2",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Per Student Items"
         ),
	"product_item_3" => array(
         "name" => "Product Item 3",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Per Student Items"
         ),
	"product_item_4" => array(
         "name" => "Product Item 4",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Per Student Items"
         ),
	"product_item_5" => array(
         "name" => "Product Item 1",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Per Classroom Items"
         ),
	"product_item_6" => array(
         "name" => "Product Item 2",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Per Classroom Items"
         ),
	"product_item_7" => array(
         "name" => "Product Item 3",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Per Classroom Items"
         ),
	"product_item_8" => array(
         "name" => "Product Item 4",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Per Classroom Items"
         ),
	"product_item_9" => array(
         "name" => "Product Item 1",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Optional Items"
         ),
    "product_item_10" => array(
         "name" => "Product Item 2",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Optional Items"
         ),
	"product_item_11" => array(
         "name" => "Product Item 3",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Optional Items"
         ),
	"product_item_12" => array(
         "name" => "Product Item 4",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "type" => "Optional Items"
         )
);




?>
