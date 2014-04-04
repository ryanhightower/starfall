<?php include("includes/functions.php");

if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}
get_header_product(); ?>
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
			<h2>Books</h2>
			<p>Category description. Starfall books will help your child learn to readwith fun and interesting books in both fiction and non-fiction.</p>
			</div>
			<div class="clearfix"></div>
            
		</section>
        	<section class="container nobod">
			<h2>Book of the Month</h2>
			<div class="featured-product text-left">    
                        <img data-src="holder.js/150x150" alt="150x150" class="pull-left img-responsive">
                        <h3>Backpack Bear's Plant Book</h3>
                        <p class="book_left_small">Plants can be eaten or made into useful objects. They also beautify ourworld. Plants give to us in many ways every day. Have you thanked your favorite plant?</p>
                        <p><span class="cut-price">$6.95</span> <span class="price">$4.95</span><br /><a href="#">Add to cart</a></p>
			</div>
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
		<section class="container pro-list2 nobod">			
			<h2>"Read to Me" Books</h2>
                  <p class="text-left">"Read to Me" books are meant to be read aloud to your students in the classroom. They include various topics from fiction to non fiction.</p>
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
                  <div class="text-right"><a href="#">See all "Read to Me" books</a></div>
		</section>
		<section class="container pro-list2 nobod">			
			<h2>"Learn to Read" Books</h2>
            <p class="text-left">"Learn to Read" books are beginners books meant to be read by yourstudents. They will learn to recognize common words and phrases.</p>
            <div class="col-md-3 product-info">
            <h4 class="bookTtile">Boxed Set of Learn to ReadBooks</h4>
            <img src="<?php echo SITE_URL; ?>/product_image/SB1520_w150-h150.png" alt="100x100" class="img-responsive"><br>
			<div><span class="cut-price">$23.50</span> <span class="price">$19.95</span></div>
            <a href="#">Add to cart</a>
            <p>The Learn to Read series is Starfall's beginner reader phonics primers; interactive editions are featured at Starfall.com and more.Starfall.com.</p>
            </div>
            <div class="col-md-3 product-info">
            <h4 class="bookTtile">Boxed Set of Short-Vowel Palsl</h4>
            <img src="<?php echo SITE_URL; ?>/product_image/SB1520_w150-h150.png" alt="100x100" class="img-responsive"><br>
			<div><span class="cut-price">$23.50</span> <span class="price">$19.95</span></div>
            <a href="#">Add to cart</a>
            <p>Join Starfall's Vowel Pals in these beginner reader phonics primers which provide valuable short vowelpractice. </p>
            </div>
            <div class="col-md-3 product-info">
            <h4 class="bookTtile">Set of Backpack Bear's Books</h4>
            <img src="<?php echo SITE_URL; ?>/product_image/SB1520_w150-h150.png" alt="100x100" class="img-responsive"><br>
			<div><span class="cut-price">$23.50</span> <span class="price">$19.95</span></div>
            <a href="#">Add to cart</a>
            <p>Backpack Bear's Books are sturdy versions of 12 titles in the Level-K Cut-Up/Take-Home Book Set; interactive editions are featured at
more.Starfall.com.</p>
            </div>
            <div class="col-md-3 product-info">
            <h4 class="bookTtile">Boxed Set of Learn to ReadBooks</h4>
            <img src="<?php echo SITE_URL; ?>/product_image/SB1520_w150-h150.png" alt="100x100" class="img-responsive"><br>
			<div><span class="cut-price">$23.50</span> <span class="price">$19.95</span></div>
            <a href="#">Add to cart</a>
            <p>Children will want to hear these rhymes again and again. This book is a foundation for learning phonemic awareness and an essential tool for teaching letters and the sounds they represent.</p>
            </div>
            <div class="clearfix"></div>
            <div class="text-right"><a href="#">See all "Read to Me" books</a></div>
		</section>
		<div class="clearfix"></div>


		
		
		

		

<?php get_footer(); ?>