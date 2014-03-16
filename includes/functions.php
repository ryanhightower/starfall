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
         "name" => "KIT65 'I'm Reading!' Mega Set of 15 Books",
		 "description" => "by Margaret Hillert - We recommend 1 set per child; 1 set per 2 children minimum.",
		 "price" => 15.75,
		 "old_price" => 27.99,
		 "type_option" => array(),
		 "type" => "Per Student Items"
         ),
	"2" => array(
         "name" => "SB554 The Little Red Hen and other Folk Tales",
		 "description" => "Retold by Starfall - We recommend: at least 1 per class, more for classroom library.",
		 "price" => 8.95,
		 "old_price" => 17.99,
		 "type_option" => array(),
		 "type" => "Per Student Items"
         ),
	"3" => array(
         "name" => "NG01 Starfall Speedway & Alphabet Avenue Games",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 14.95,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Per Student Items"
         ),
	"4" => array(
         "name" => "NP20 Short-Vowel Puzzle Set (5 sturdy puzzles: a,e,i,o,u)",
		 "description" => "We recommend 2 sets per class of 20; 3 sets per class of 30.",
		 "price" => 14.95,
		 "old_price" => 7.99,
		 "type_option" => array(),
		 "type" => "Per Student Items"
         ),
	"5" => array(
         "name" => "TKIT02K indergarten Classroom Kit",
		 "description" => "This kit includes all of the following: Kindergarten Teacher's Guide, Backpack Bear's Pre-Decodable Phonics Kit, Instructional Cards Kit, Decodable Phonics Kit, Books & Other Media Kit. Includes a free one-year School membership to More.Starfall.com. Required practice books and variable quantity items sold separately.",
		 "price" => 459.91,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Per Classroom Items"
         ),
	"6" => array(
         "name" => "KIT60 Block Print - Practice Books Kit",
		 "description" => "Listening and Writing - Book 1 (Block Print), Reading and Writing - Book 2 (Block Print); Backpack Bear's Expanded Cut-Up/Take-Home Book Set; My Starfall Writing Journal; and My Starfall Dictionary. Free pencils with orders of 20+.",
		 "price" => 5.41,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Per Classroom Items"
         ),
	"7" => array(
         "name" => "KIT61 Manuscript - Practice Books Kit",
		 "description" => "Listening and Writing - Book 1 (Manuscript), Reading and Writing - Book 2 (Manuscript); Backpack Bear's Expanded Cut-Up/Take-Home Book Set; My Starfall Writing Journal; and My Starfall Dictionary. Free pencils with orders of 20+.",
		 "price" => 5.41,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Per Classroom Items"
         ),
	"8" => array(
         "name" => "NS50 Backpack Bear's Level-K Stickers",
		 "description" => "Optional, but fun.",
		 "price" => 1.45,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Optional Items"
         ),
    "9" => array(
         "name" => "NRS01 Backpack Bear's Paw Print Stamp",
		 "description" => " Optional, but fun.",
		 "price" => 3.95,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Optional Items"
         ),
	"10" => array(
         "name" => "WKP100 Pack of 100 Starfall Pencils",
		 "description" => " High quality pencils for Starfall writers.",
		 "price" => 2.95,
		 "old_price" => 1.99,
		 "type_option" => array(),
		 "type" => "Optional Items"
         ),
	"11" => array(
         "name" => "Backpack Bear's Level-K Sticker",
		 "description" => "Great Value!<br>Each pack contains 5 sheets of colorful stickers featuring Zac, Peg, Mox, TinMan, Gus, and introducing Backpack Bear. 140 stickers in all! Your children will love to be rewarded for their hardwork with these stickers. New Level-K Stickers. Contains more stickers. Best for large class use.",
		 "price" => 1.45,
		 "old_price" => 2.50,
		 "type_option" => array(),
		 "type" => "others"
         ),
	"12" => array(
         "name" => "Pre-K Curriculum Kit",
		 "description" => "Everything you need for your Pre-K classroom!",
		 "price" => 395.00,
		 "old_price" => 0,
		 "type_option" => array(),
		 "type" => "Pre-K Curriculum"
         ),
	"13" => array(
         "name" => "Membership",
		 "description" => "",
		 "price" => 0,
		 "old_price" => 0,
		 "type_option" => array(
					 "1" => array("op_name" => "Teacher Membership","op_price" => 70),
					 "2" => array("op_name" => "Classroom Membership","op_price" => 150),
					 "3" => array("op_name" => "School Membership","op_price" => 270)
					 ),
		 "type" => "Pre-K member"
         )
);




?>
