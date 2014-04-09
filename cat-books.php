<?php include("includes/functions.php");

if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}
get_header_product(); 

$category_id = 2;

?>
		<div class="container">
			<div class="col-lg-12 store-nav">
			<ul class="nav nav-pills">
				<li><a href="#">Workbooks</a></li>
				<li><a href="<?php echo SITE_URL; ?>/cat-books.php">Books</a></li>
				<li><a class="btn btn-link" href="<?php echo SITE_URL; ?>/cat-music.php">Music</a></li>
				<li><a href="#">Goodies</a></li>
				<li><a href="#">Teaching Tool</a></li>
				<li><a href="#">sKits</a></li>
				<li><a href="#">Memberships</a></li>
				<li><a href="#">Curriculum</a></li>
				<li><a href="#">BulkOrder Form</a></li>
			</ul>
			</div>
			</div>
		<div class="clearfix"></div>
			<section class="container">
			<h2><?php echo $DB_cat[$category_id]['name']; ?></h2>
			<div class="featured-product">
			<p><?php echo $DB_cat[$category_id]['description']; ?></p>
			</div>
			<div class="clearfix"></div>
            
		</section>
        	<section class="container nobod">
	<?php 
	$i = 0;
	foreach($DB_cat as $key => $category)
	{ 
		if($category['parent_id']==$category_id)
		{ 
		 $P_category_id = $key;
	?>
			<div class="col-md-4 newreadBooks">
                <h4 class="bookTtile"><?php echo $category['name']; ?></h4>
                       <div class="col-md-5 newnomargleft"> 
                       <img data-src="holder.js/150x150" alt="150x150" class="pull-left img-responsive"></div>
                        <div class="col-md-7 newnomargleft2"> 
                       <p class="book_left_small"><?php echo $category['description']; ?></p>
                       <a href="<?php echo SITE_URL; ?>/category-page.php?category_id=<?php echo $P_category_id;?>" class="showme">Show me more</a>
                       </div>
                       <div class="clearfix"></div>
                  </div>
<?php
		}
	}
	?>
			<!--<div class="col-md-4 newreadBooks2">
                <h4 class="bookTtile"><strong>Read to Me</strong> Books</h4>
                       <div class="col-md-5 newnomargleft"> 
                       <img data-src="holder.js/150x150" alt="150x150" class="pull-left img-responsive"></div>
                        <div class="col-md-7 newnomargleft2"> 
                       <p class="book_left_small">These are the books read to children by adults and are perfect for developing spoken vocabullary and comprchension guided by a teacher. Advancing readers will also appreciate these titles.</p>
                       <a href="#" class="showme">Show me more</a>
                       </div>
                       <div class="clearfix"></div>
                  </div>
            <div class="col-md-4 newreadBooks3">
                <h4 class="bookTtile">Starfall Book Levels</h4>
                       <div class="col-md-5 newnomargleft"> 
                       <img data-src="holder.js/150x150" alt="150x150" class="pull-left img-responsive"></div>
                        <div class="col-md-7 newnomargleft2"> 
                       <p class="book_left_small">Browse our catalog of books by reading level. Teachers should use their professional judgement of additional qualitative criteria along with reader and task considerations to determine reading level.</p>
                       <a href="#" class="showme">Show me more</a>
                       </div>
                       <div class="clearfix"></div>
                  </div>-->
			<div class="clearfix"></div>
            
		</section>
		<div class="clearfix"></div>
		<section class="container pro-list2 nobod">			
			<h2>Most Popular Books</h2>
                  <div class="col-md-3 product-info">
                        <h4 class="bookTtile">Backpack Bear's Mammal Book</h4>
                        <img src="<?php echo SITE_URL; ?>/product_image/SB1520_w150-h150.png" alt="100x100" class="img-responsive"><br>
                        <span class="price">$4.95</span><br>
                        <a href="#">Add to cart</a>
                        <p>Did you know that humans are mammals? In this book, you will learn about the diverse animals we are related to.</p>
                  </div>
                  <div class="col-md-3 product-info">
                        <h4 class="bookTtile">Backpack Bear's Bird Book</h4>
                        <img src="<?php echo SITE_URL; ?>/product_image/SB1520_w150-h150.png" alt="100x100" class="img-responsive"><br>
                        <span class="price">$4.99</span><br>
                        <a href="#">Add to cart</a>
                        <p>Birds are very different from you, but you share some things in common. You'll learn more in this book.</p>
                  </div>
                  <div class="col-md-3 product-info">
                        <h4 class="bookTtile">Backpack Bear's Reptiles, Amphibians, & Fish Book</h4>
                        <img src="<?php echo SITE_URL; ?>/product_image/SB1520_w150-h150.png" alt="100x100" class="img-responsive"><br>
                        <span class="price">$4.99</span><br>
                        <a href="#">Add to cart</a>
                        <p>What does an iguana have in common with a frog and a fish? You'll learn the answer in this book!</p>
                  </div>
                  <div class="col-md-3 product-info">
                        <h4 class="bookTtile">Backpack Bear's Invertebrates Book</h4>
                        <img src="<?php echo SITE_URL; ?>/product_image/SB1520_w150-h150.png" alt="100x100" class="img-responsive"><br>
                        <span class="price">$4.99</span><br>
                        <a href="#">Add to cart</a>
                        <p>From starfish to spiders, crabs to caterpillars, learn all about intertebrates in this book.</p>
                  </div>
                  <div class="clearfix"></div>
		</section>
		
		<div class="clearfix"></div>


		
		
		

		

<?php get_footer(); ?>