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
global $DB , $DB_cat;
$DB = array(
	"1" => array(
         "name" => "KIT65 'I'm Reading!' Mega Set of 15 Books",
		 "description" => "by Margaret Hillert - We recommend 1 set per child; 1 set per 2 children minimum.",
		 "price" => 15.75,
		 "price_option" => array(),
		 "old_price" => 27.99,
		 "product_image" => SITE_URL."/product_image/KIT65_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p>Get all 3 softcover sets at once. This Mega Set of 15 <i>I'm Reading!</i> books by Margaret Hillert is an indispensable addition to any classroom or home library. Invite beginner readers to relate to their own experiences as they build early literacy.</p><h3>Titles included in this set:</h3>
<ul><li><i>The No-Tail Cat or, I Like What I Am</i></li><li><i>Three Little Plays</i></li><li><i>Not Too Little to Help</i></li><li><i>Happy Mother's Day, Dear Dragon</i></li><li><i>Penguin, Penguin</i></li><li><i>I Can Do It</i></li><li><i>Dragon Goes to the Farm</i></li><li><i>It's Earth Day, Dear Dragon</i></li><li><i>Pumpkin, Pumpkin</i></li><li><i>Wolves</i></li><li><i>Things That Can Go</i></li><li><i>At the Beach</i></li><li><i>Come Play with Me</i></li><li><i>Rainbow, Rainbow</i></li><li><i>A House in a Tree</i></li></ul>",
		"type" => "Per Student Items",
		"category_id" => "0"
         ),
	"2" => array(
		"name" => "TKIT02 Kindergarten Classroom Kit",
		 "description" => "This kit includes all of the following: Kindergarten Teacher's Guide, Backpack Bear's Pre-Decodable Phonics Kit, Instructional Cards Kit, Decodable Phonics Kit, Books & Other Media Kit. Includes a free one-year School membership to More.Starfall.com. Required practice books and variable quantity items sold separately.",
		 "price" => 459.91,
		 "price_option" => array(),
		 "old_price" => 0,
		 "product_image" => SITE_URL."/product_image/TKIT02_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<br>Does NOT include children's practice books and variable quantity items.</br>
<h3>Kindergarten Classroom Kit:</h3>
<h4>Kindergarten Teacher's Guide</h4>
<ul>
<li>2 binders with full-color lesson plans, 10 themed units, 31 weeks</li>
<li>Includes assessments, blacklines, holiday plans, standards, tips for ELD (English Language Development)</li>
</ul>
<h4>Backpack Bear's Pre-Decodable Phonics Kit</h4>
<ul>
<li>Plush Backpack Bear</li>
<li>Sound-Spelling Wall Cards</li>
<li>Letter-Formation Wall Cards</li>
<li>Sentence Strips, Cards & Cover Cards for Starfall Pre-Decodable Books</li>
<li>Sound-Spelling Poster</li>
<li>ASL Alphabet Poster</li>
<li><i>Backpack Bear's ABC Rhyme Book</i></li>
<li>Sound-Spelling Instructional Cards</li>
<li><i>Backpack Bear's Books</i> Set</li>
</ul>
<h4>Instructional Cards Kit</h4>
<ul>
<li>Backpack Bear's Word and Picture Cards Boxed Set</li>
<li>Story Element Cards</li>
</ul>
<h4>Decodable Phonics Kit</h4>
<ul>
<li>Plush Zac the Rat</li>
<li>Plush Peg the Hen</li>
<li>Plush Tin Man</li>
<li>Plush Mox the Fox</li>
<li>Plush Gus the Duck</li>
<li>Sentence Strips, Word Card & Story Sequence Cards for <i>Learn to Read</i> Books</li>
<li><i>Learn to Read</i> Boxed Set</li>
<li><i>Short-Vowel Pals</i> Boxed Set</li>
<li><i>Backpack Bear's Books</i> Set</li>
</ul>
<h4>Books and Other Media Kit</h4>
<ul>
<li><i>Backpack Bear's Plant Book</i></li>
<li><i>Backpack Bear's Mammal Book</i></li>
<li><i>Backpack Bear's Bird Book</i></li>
<li><i>Backpack Bear's Reptiles, Fish & Amphibians Book</i></li>
<li><i>Backpack Bear's Invertebrates Book</i></li>
<li><i>How I Know My World</i></li>
<li>Backpack Bear's Animal Kingdom Poster Set</li>
<li><i>Backpack Bear Learns the Rules</i></li>
<li><i>Precipitation</i></li>
<li>Historical Figures Posters</li>
<li><i>America the Beautiful</i></li>
<li><i>I Am Your Flag</i></li>
<li><i>A Young Hero</i></li>
<li><i>Starfall Sing-Along</i> (vol. 1)</li>
<li><i>Star Writer Melodies</i></li>
<li>Starfall (Classic) CD-ROM</li>
</ul>",
		"type" => "Per Classroom Items",
		"category_id" => "0"

         ),
	"3" => array(
         "name" => "NG01 Starfall Speedway & Alphabet Avenue Games",
		 "description" => "Short description of the product and what it does,why it’s useful or fun, etc.",
		 "price" => 14.95,
		 "price_option" => array(),
		 "old_price" => 7.99,
		 "product_image" => SITE_URL."/product_image/NG01_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<h3>Two complete board games: Starfall Speedway and Alphabet Avenue</h3><p>Both Starfall Speedway and Alphabet Avenue are great games for children to practice phonetic strategies and word recognition. Starfall Speedway is for children ready to start reading.  Skill cards prompt children to identify letter, sound, or word in order to advance their game piece.</p>
<p>Alphabet Avenue, the other side of the board with alphabet tiles, is for children just learning letter/sound relationships.  No skill cards are required.  Children have the option to name the letter, the sound it represents, or a word beginning with that letter in order to advance their playing piece.</p>
<p>Enjoy this wonderful, sturdy game set in your classroom or at home.  Both games require collaboration among players, yet there's a clear finish line motivating each player to win!</p><p>Part of our Common Core aligned <a href=\"/order/indexc-kcurric-class.php?idt=FCP9m4HC&&reforderpage=order.indexc-kcurric-class.php&\">Kindergarten Curriculum</a></p>",
		"type" => "Per Classroom Items",
		"category_id" => "0"
         ),
	"4" => array(
         "name" => "NP20 Short-Vowel Puzzle Set (5 sturdy puzzles: a,e,i,o,u)",
		 "description" => "We recommend 2 sets per class of 20; 3 sets per class of 30.",
		 "price" => 14.95,
		 "price_option" => array(),
		 "old_price" => 7.99,
		 "product_image" => SITE_URL."/product_image/NP20_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p>This set features five puzzles, each focusing on a short vowel.  After your beginning readers put a puzzle together, encourage them to point and say the pictured short vowel words, and notice the common vowel sounds.

<p>Suggested activities:</p>
<ul>
<li>After assembling the puzzle, take turns finding and naming all of the short vowel words.  Listen very carefully to the short vowel words your friends choose; don't repeat their words</li>
<li>Use clues printed on the box to help find the short vowel words.  Sample short-u clues:  \"A baby bear\" (cub); \"You take a bath in this\" (tub)</li>
<li>Enjoy coming up with your own clues; your friends guess</li>
<li>Listen to <i>Starfall Sing-Along</i> (vol. 1), tracks 28-32 (short vowel songs) while you work</li> 
<li>Which puzzle(s) would you be in? Identify short vowel(s) in your name</li>
<li>Make up a story using the characters and actions pictured in the puzzle</li>
</ul>",
		"type" => "Per Classroom Items",
		"category_id" => "0"
         ),
	"5" => array(
                  "name" => "SB554 The Little Red Hen and other Folk Tales",
		 "description" => "Retold by Starfall - We recommend: at least 1 per class, more for classroom library.",
		 "price" => 8.95,
		 "price_option" => array("quantity" => 5,"set_price" => 2.95),
		 "old_price" => 17.99,
		 "product_image" => SITE_URL."/product_image/SB554_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p><i>The Little Red Hen and other Folk Tales</i> offers proverbs from around the world with universal themes. Children can compare and contrast the tales or relate them to their own lives. The charming characters and settings are drawn from the cultures and literature of England, America, the Far East and Russia.  </p><h3><i>The Little Red Hen</i> Stories:</h3>
<ul><li><i>The Little Red Hen</i><br>An English Folk Tale</center></br></li>
   <li><i>Chicken Little (The Sky Is Falling)</i><br> An English Folk Tale</br></li>
    <li><i>Mr. Bunny's Carrot Soup</i><br> A Modern American Folk Tale</br></li>
    <li><i>The Four Friends</i><br> A Tale from the Far East</br></li>
    <li><i>The Little Rooster</i><br> An American Folk Tale</br></li>
    <li><i>The Turnip</i><br> A Russian Folk Tale</br></li>
</ul>",
		"type" => "Per Classroom Items",
		"category_id" => "0"
         ),
	"6" => array(
         "name" => "KIT60 Block Print - Practice Books Kit",
		 "description" => "Listening and Writing - Book 1 (Block Print), Reading and Writing - Book 2 (Block Print); Backpack Bear's Expanded Cut-Up/Take-Home Book Set; My Starfall Writing Journal; and My Starfall Dictionary. Free pencils with orders of 20+. <img src='".SITE_URL."/theme/icon/block.png'>",
		 "price" => 5.41,
		 "price_option" => array(),
		 "old_price" => 0,
		 "product_image" => SITE_URL."/product_image/KIT60_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p>The complete set of Starfall's Level-K practice books.  All five books are packaged together, making it easier to order for a whole class.  Invite children to practice phonemic skills through multiple pathways of learning.  Listening, writing and reading activities in the practice books; reading practice in the take-home books; free-writing and illustrating invitations in the writing journal; word writing and alphabetizing in the dictionary.</p>
<p>Purchase one kit for each student in your class, year-after-year, so that each child has these practice materials to build a portfolio of their emerging literary skills.</p>
  
<h3>Block Print - Level-K Children&#39;s Practice Books Kit:</h3>
<ul>
<li><i>Level-K Listening and Writing Journal</i> in <b>Block Print</b></li>
<li><i>Level-K Reading and Writing Journal</i> in <b>Block Print</b></li>
<li><i>Level-K Cut-Up/Take-Home Books</i></li>
<li><i>My Starfall Writing Journal</i></li>
<li><i>My Starfall Dictionary</i></li>
</ul>
<p>Part of our Common Core aligned <a href=\"#\">Kindergarten Curriculum</a></p>",
		"type" => "Practice Books",
		"category_id" => "0"
         ),
	"7" => array(
         "name" => "KIT61 Manuscript - Practice Books Kit",
		 "description" => "Listening and Writing - Book 1 (Manuscript), Reading and Writing - Book 2 (Manuscript); Backpack Bear's Expanded Cut-Up/Take-Home Book Set; My Starfall Writing Journal; and My Starfall Dictionary. Free pencils with orders of 20+. <img src='".SITE_URL."/theme/icon/man.png'>",
		 "price" => 5.41,
		 "price_option" => array(),
		 "old_price" => 0,
		 "product_image" => SITE_URL."/product_image/KIT61_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p>The complete set of Starfall's Level-K practice books.  All five books are packaged together.  Invite children to practice phonemic skills through multiple pathways of learning.  Listening, writing and reading activities in the practice and take-home books; free-writing and illustrating invitations in the writing journal; word writing and alphabetizing in the dictionary.  The writing journals have plenty of room on each page for illustrations, and four sets of guidelines for writing practice.</p>
		<p><i>My Starfall Dictionary</i> is an essential tool for children to record new words as they learn to read and write them, becoming personal references for each child.  They offer rudimentary alphabetizing practice so children can differentiate beginning, middle, and end of the alphabet. This Kit offers essential tools for students to gain confidence demonstrating their reading and writing proficiencies; great assessment tools.</p>
		<p>Children demonstrate their literacy skills using all the practice books in this set.  Great portolio for documenting children's progress throughout the year.</p>
		<h3>Manuscript - Level-K Children's Practice Books Kit:</h3>
		<ul>
		<li><i>Level-K Listening and Writing Journal</i> in <b>Manuscript</b></li>
		<li><i>Level-K Reading and Writing Journal</i> in <b>Manuscript</b></li>
		<li><i>Level-K Cut-Up/Take-Home Books</i></li>
		<li><i>My Starfall Writing Journal</i></li>
		<li><i>My Starfall Dictionary</i></li>
		</ul>
		<p>Part of our Common Core aligned <a href=\"#\">Kindergarten Curriculum</a></p>",
		"type" => "Practice Books",
		"category_id" => "0"
         ),
	"8" => array(
         "name" => "NS50 Backpack Bear's Level-K Stickers",
		 "description" => "Optional, but fun.",
		 "price" => 1.45,
		 "price_option" => array(),
		 "old_price" => 0,
		 "product_image" => SITE_URL."/product_image/NS50_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p>What better way to acknowledge success and celebrate progress than an encouraging message from Backpack Bear and other familiar Starfall characters?</p><p>Consider using stickers to encourage writing success or as rebus prompts for reluctant writers.</p>",
		 "type" => "Optional Items",
		"category_id" => "0"
         ),
    "9" => array(
         "name" => "NRS01 Backpack Bear's Paw Print Stamp",
		 "description" => " Optional, but fun.",
		 "price" => 3.95,
		 "price_option" => array(),
		 "old_price" => 0,
		 "product_image" => SITE_URL."/product_image/NRS01_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p>Offer Backpack Bear's stamp of approval for good work. Use it to sign notes from Backpack Bear that you retrieve from his backpack. Consider integrating the stamp into science activities or other creative learning prompts.</p>",
		 "type" => "Optional Items",
		 "category_id" => "0"
         ),
	"10" => array(
         "name" => "WKP100 Pack of 100 Starfall Pencils",
		 "description" => " High quality pencils for Starfall writers.",
		 "price" => 2.95,
		 "price_option" => array(),
		 "old_price" => 1.99,
		 "product_image" => SITE_URL."/product_image/WKP100_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p>\"A #2 Pencil and a dream can take you anywhere!\"  --Joyce Meyer (www.brainyquote.com)</p><p>What better way to encourage your writers than by using their very own Starfall pencil! A staple for your classroom or home learning environment. Enjoy encouraging writing success.</p>",
		 "type" => "Optional Items",
		 "category_id" => "0"
         ),
	"11" => array(
         "name" => "NW03 Magnetic Dry Erase Board",
		 "description" => "An essential component of the Kindergarten Curriculum. A very sturdy dry erase board; lines on one side, blank on reverse. Magnetic surface for use with magnetic soft lower-case letters (NLO1), recommend 1 per child. 9\" x 12\". ",
		 "price" => 1.45,
		 "price_option" => array(),
		 "old_price" => 2.50,
		 "product_image" => SITE_URL."/product_image/NW03_w400-h400.png",
		 "type_option" => array(),
		 "details_description" => "<p>This sturdy wipe board is an ideal learning surface for children to practice letter formation and build a myriad of literacy skills.  Blank on one side, 3 rows of guidelines on reverse, each 1.5\" high with center guide.  Magnetic dry erase surface is an indispensable tool for each child to fully engage in building literacy!  Multi-purpose: for class, small group, and individual writing activities.   A marvelous formative assessment tool to target instruction.</p><p>Part of our common-core aligned <a href=\"#\">Kindergarten Curriculum</a></p>",
		 "type" => "others",
		 "category_id" => "0"
         ),
	"12" => array(
         "name" => "Pre-K Curriculum Kit",
		 "description" => "Everything you need for your Pre-K classroom!",
		 "price" => 395.00,
		 "price_option" => array(),
		 "old_price" => 0,
		 "product_image" => SITE_URL."/product_image/no_image.png",
		 "type_option" => array(),
		 "details_description" => "",
		 "type" => "Pre-K Curriculum",
		 "category_id" => "0"
         ),
	"13" => array(
         "name" => "Membership",
		 "description" => "",
		 "price" => 0,
		 "price_option" => array(),
		 "old_price" => 0,
		 "product_image" => SITE_URL."/product_image/data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTUwIiBoZWlnaHQ9IjE1MCI+PHJlY3Qgd2lkdGg9IjE1MCIgaGVpZ2h0PSIxNTAiIGZpbGw9IiNlZWUiPjwvcmVjdD48dGV4dCB0ZXh0LWFuY2hvcj0ibWlkZGxlIiB4PSI3NSIgeT0iNzUiIHN0eWxlPSJmaWxsOiNhYWE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LXNpemU6MTJweDtmb250LWZhbWlseTpBcmlhbCxIZWx2ZXRpY2Esc2Fucy1zZXJpZjtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNTB4MTUwPC90ZXh0Pjwvc3ZnPg==",
		 "type_option" => array(
					 "1" => array("op_name" => "Teacher Membership","op_price" => 70),
					 "2" => array("op_name" => "Classroom Membership","op_price" => 150),
					 "3" => array("op_name" => "School Membership","op_price" => 270)
					 ),
		"details_description" => "",
		 "type" => "Pre-K member",
		"category_id" => "0"
         ),
	"14" => array(
			 "name" => "NB30 Backpack Bear’s Books Set of 12 Pre-decodable books (6” x 8”)",
			 "description" => "These stories are also in Backpack Bear’s Cut-Up/Take-Home Books.",
			 "price" => 11.95,
			 "price_option" => array("quantity" => 5,"set_price" => 9.95),
			 "old_price" => 27.99,
			 "product_image" => SITE_URL."/product_image/NB30_w400-h400.png",
			 "type_option" => array(),
			 "details_description" => "<p>These pre-decodable primer books are designed to expand children's awareness of how words function in a sentence and reinforce high frequency words. Read about Backpack Bear's community experiences in these 12 rebus stories.</p><h3>Titles included in this set:</h3><ul><li><i>A Computer</i></li><li><i>At School</i></li><li><i>A Rainbow</i></li><li><i>At the Park</i></li><li><i>At the House</i></li><li><i>The Map</i></li><li><i>At the Post Office</i></li><li><i>Come Vote with Me</i></li><li><i>At the Library</i></li><li><i>The Bottle in the River</i></li><li><i>Ruby Goes to School</i></li><li><i>We Can See!</i></li></ul><p>Part of our Common Core aligned <a href=\"#\">Kindergarten Curriculum</a></p>",
			 "type" => "",
			 "category_id" => "0"
			 ),
	"15" => array(
			 "name" => "NB10 Boxed Set of Learn to Read Books by Starfall - 5 short-vowel books, plus 10 bonus stories",
			 "description" => "Boxed Set of 15 Learn to Read Books in a sturdy carrying case (Zac the Rat, Peg the Hen, etc.).",
			 "price" => 19.95,
			 "price_option" => array("quantity" => 5,"set_price" => 16.95),
			 "old_price" => 27.99,
			 "product_image" => SITE_URL."/product_image/NB10_w400-h400.png",
			 "type_option" => array(),
			 "details_description" => "<p>Launch your children's reading experiences with these primer books designed for explicit phoncis instruction. Interactive versions of these books are available on Starfall's websites.</p><h3>Titles included in this set:</h3><ul><li><i>Zac the Rat</i></li><li><i>Peg the Hen</i></li><li><i>The Big Hit</i></li><li><i>Mox's Shop</i></li><li><i>Gus the Duck</i></li><li><i>Jake's Tale</i></li><li><i>Pete's Sheep</i></li><li><i>Sky Ride</i></li><li><i>Robot and Mr. Mole</i></li><li><i>Dune Buggy</i></li><li><i>Soap Boat</i></li><li><i>Car Race</i></li><li><i>My Horse Glory</i></li><li><i>Surfer Girl</i></li><li><i>My Family</i></p></ul><p>Part of our Common Core aligned <a href=\"#\">Kindergarten Curriculum</a></p>",
			 "type" => "",
			 "category_id" => "0"
			 ),
	"16" => array(
			 "name" => "NB20 Boxed Set of 16 Decodable Short Vowel Pals Books in a sturdy carrying case.",
			 "description" => "Boxed Set of Short-Vowel Pals by Starfall - 16 decodable books, a companion to our first set.",
			 "price" => 19.95,
			 "price_option" => array("quantity" => 5,"set_price" => 16.95),
			 "old_price" => 27.99,
			 "product_image" => SITE_URL."/product_image/NB20_w400-h400.png",
			 "type_option" => array(),
			 "details_description" => "<p>These decodable primer books provide beginner readers with practice connecting letter sounds.</p><h3>Titles included in this set:</h3><ul><li><i>Zac and Cat</i></li><li><i>Zac and the Hat</i></li><li><i>Peg Helps Zac</i></li><li><i>Peg's Egg</i></li><li><i>Hen</i></li><li><i>Mox Jogs</i></li><li><i>Hop, Bend, Stomp</i></li><li><i>Pop! Pop! Pop!</i></li><li><i>Tin Man Sits</i></li><li><i>Fix the Jet</i></li><li><i>Fish and Me</i></li><li><i>Bug in a Jug</i></li><li><i>Get Up, Cub</i></li><li><i>Gus and His Dog</i></li><li><i>Peg and the Box</i></li><li><i>Zig-Zag</i></li></ul><p>Part of our Common Core aligned <a href=\"#\">Kindergarten Curriculum</a></p>",
			 "type" => "",
			 "category_id" => "0"
			 ),
	"17" => array(
         "name" => "Starfall Sing-Along Volume 1 (CD included)",
		 "description" => "A book of lyrics & a CD.",
		 "price" => 7.95,
		 "price_option" => array(),
		 "old_price" => 12.95,
		 "product_image" => SITE_URL."/product_image/SB912_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>Your children will love to sing and dance along with this collection of 49 favorite songs, nursery rhymes and chants. Softcover book & audio CD, 32 p. 8\" x 5.75.\"</p>",
		"type" => "Music",
		"category_id" => 1
         ),
	"18" => array(
         "name" => "Starfall Sing-Along Volume 2 (CD included)",
		 "description" => "A book of more lyrics & a CD",
		 "price" => 7.95,
		 "price_option" => array(),
		 "old_price" => 12.95,
		 "product_image" => SITE_URL."/product_image/SB1520_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>Your children will love to sing and dance along with this collection of more of your favorites: 52 songs, nursery rhymes and chants. Softcover book & audio CD, 40 p. 8\" x 5.75.\"</p>",
		"type" => "Music",
		"category_id" => 1
         ),
	"19" => array(
         "name" => "Starfall's Selected Nursery Rhymes with CD",
		 "description" => "Starfall's Selected Nursery Rhymes with CD.",
		 "price" => 10.95,
		 "price_option" => array(),
		 "old_price" => 12.95,
		 "product_image" => SITE_URL."/product_image/SB1582_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>Children will delight in singing along or chanting with these classic nursery rhymes throughout the year. Vibrant color illustrations. Softcover book and CD, 48 p. 10\" x 8.\"</p>",
		"type" => "Music",
		"category_id" => 1
         ),
	"20" => array(
         "name" => "Star Writer Melodies CD",
		 "description" => "A lovely collection of classical music.",
		 "price" => 6.99,
		 "price_option" => array(),
		 "old_price" => 12.95,
		 "product_image" => SITE_URL."/product_image/ND60_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>Star Writer Melodies are perfect for encouraging focus or relaxation. This CD of instrumental selections is sure to inspire. Audio CD, 9 tracks, 31 minutes.</p>",
		"type" => "Music",
		"category_id" => 1
         ),
	"21" => array(
         "name" => "Boxed Set of Learn to Read Books",
		 "description" => "5 short-vowel books, plus 10 bonus stories.",
		 "price" => 19.95,
		 "price_option" => array(),
		 "old_price" => 23.50,
		 "product_image" => SITE_URL."/product_image/NB10_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>5 short-vowel books, plus 10 bonus stories.</p>",
		"type" => "Books",
		"category_id" => 3
         ),
	"22" => array(
         "name" => "Boxed Set of Short-Vowel Pals",
		 "description" => "16 decodable books, a companion to our first set.",
		 "price" => 19.95,
		 "price_option" => array(),
		 "old_price" => 23.50,
		 "product_image" => SITE_URL."/product_image/NB20_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>16 decodable books, a companion to our first set.</p>",
		"type" => "Books",
		"category_id" => 3
         ),
	"23" => array(
         "name" => "Set of Backpack Bear's Books",
		 "description" => "12 predecodable books for the earliest readers.",
		 "price" => 11.95,
		 "price_option" => array(),
		 "old_price" => 13.95,
		 "product_image" => SITE_URL."/product_image/NB30_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>12 predecodable books for the earliest readers.</p>",
		"type" => "Books",
		"category_id" => 3
         ),
	"24" => array(
         "name" => "ABC Rhyme Book",
		 "description" => "A rhyme for each letter of the alphabet.",
		 "price" => 4.95,
		 "price_option" => array(),
		 "old_price" => 5.95,
		 "product_image" => SITE_URL."/product_image/SB530_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>A rhyme for each letter of the alphabet.</p>",
		"type" => "Books",
		"category_id" => 3
         ),
	"25" => array(
         "name" => "Backpack Bear's Plant Book",
		 "description" => "Learn about plant cycles.",
		 "price" => 4.95,
		 "price_option" => array(),
		 "old_price" => 6.95,
		 "product_image" => SITE_URL."/product_image/SB776_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>Learn about plant cycles.</p>",
		"type" => "Books",
		"category_id" => 4
         ),
	"26" => array(
         "name" => "Backpack Bear's Mammal Book",
		 "description" => "Learn about vertebrates we call mammals.",
		 "price" => 4.95,
		 "price_option" => array(),
		 "old_price" => 6.95,
		 "product_image" => SITE_URL."/product_image/SB868_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>Learn about vertebrates we call mammals.</p>",
		"type" => "Books",
		"category_id" => 4
         ),
	"27" => array(
         "name" => "Backpack Bear's Reptiles, Amphibians, & Fish Book",
		 "description" => "Learn about animals we call cold-blooded.",
		 "price" => 4.95,
		 "price_option" => array(),
		 "old_price" => 6.95,
		 "product_image" => SITE_URL."/product_image/SB882_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>Learn about animals we call cold-blooded.</p>",
		"type" => "Books",
		"category_id" => 4
         ),
	"28" => array(
         "name" => "Backpack Bear's Invertebrates Book",
		 "description" => "Learn about spiders and insects.",
		 "price" => 4.95,
		 "price_option" => array(),
		 "old_price" => 6.95,
		 "product_image" => SITE_URL."/product_image/SB899_w150-h150.png",
		 "type_option" => array(),
		 "details_description" => "<p>Learn about spiders and insects.</p>",
		"type" => "Books",
		"category_id" => 4
         )
);

$DB_cat = array(
"1" => array(
         "name" => "Music",
		 "description" => "Starfall's musical selections inspire children to clap, dance and chant to the beat, reinforcing their reading and math skills with music.",
		 "parent_id" => 0),
"2" => array(
         "name" => "Books",
		 "description" => "Category description. Starfall books will help your child learn to readwith fun and interesting books in both fiction and non-fiction.",
		 "parent_id" => 0),
"3" => array(
         "name" => "<strong>Learn to Read</strong> Books",
		 "description" => "These are the books children use to learn how to read. The books feature systematic and sequential sound and letter relationships or controlled vocabulary.",
		 "parent_id" => 2),
"4" => array(
         "name" => "<strong>Read to Me</strong> Books",
		 "description" => "These are the books read to children by adults and are perfect for developing spoken vocabullary and comprchension guided by a teacher. Advancing readers will also appreciate these titles.",
		 "parent_id" => 2),
"5" => array(
         "name" => "Starfall Book Levels",
		 "description" => "Browse our catalog of books by reading level. Teachers should use their professional judgement of additional qualitative criteria along with reader and task considerations to determine reading level.",
		 "parent_id" => 2)
);


?>
