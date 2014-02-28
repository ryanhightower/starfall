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
function get_dropdown(){
	require_once(THEME_PATH."/dropdown.php");
}


/*
* Mock Database
* setup the global $DB array to act like the product database
*/
global $DB;
$DB = array(
	"1" => array(
         "name" => "Product Item 1",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Per Student Items"
         ),
	"2" => array(
         "name" => "Product Item 2",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Per Student Items"
         ),
	"3" => array(
         "name" => "Product Item 3",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Per Student Items"
         ),
	"4" => array(
         "name" => "Product Item 4",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Per Student Items"
         ),
	"5" => array(
         "name" => "Product Item 1",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Per Classroom Items"
         ),
	"product_item_6" => array(
         "name" => "Product Item 2",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Per Classroom Items"
         ),
	"7" => array(
         "name" => "Product Item 3",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Per Classroom Items"
         ),
	"8" => array(
         "name" => "Product Item 4",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Per Classroom Items"
         ),
	"9" => array(
         "name" => "Product Item 1",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Optional Items"
         ),
    "10" => array(
         "name" => "Product Item 2",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Optional Items"
         ),
	"11" => array(
         "name" => "Product Item 3",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Optional Items"
         ),
	"12" => array(
         "name" => "Product Item 4",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 4.99,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Optional Items"
         ),
	"13" => array(
         "name" => "Backpack Bear's Level-K Sticker",
		 "description" => "Great Value!<br>Each pack contains 5 sheets of colorful stickers featuring Zac, Peg, Mox, TinMan, Gus, and introducing Backpack Bear. 140 stickers in all! Your children will love to be rewarded for their hardwork with these stickers. New Level-K Stickers. Contains more stickers. Best for large class use.",
		 "price" => 1.45,
		 "old_price" => 2.50,
		 "type_option" => array(),
		 "type" => "others"
         ),
	"14" => array(
         "name" => "Pre-K Curriculum Kit",
		 "description" => "Everything you need for your Pre-K classroom!",
		 "price" => 395.00,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Pre-K Curriculum"
         ),
	"15" => array(
         "name" => "Membership type",
		 "description" => "",
		 "price" => 0,
		 "old_price" => 0,
		 "type_option" => array(
					 "1" => array("op_name" => "Teacher price","op_price" => 70),
					 "2" => array("op_name" => "Classroom price","op_price" => 150),
					 "3" => array("op_name" => "School price","op_price" => 270)
					 ),
		 "type" => "Pre-K member"
         )
);




?>
