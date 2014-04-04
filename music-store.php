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
				<li><a href="#">Books</a></li>
				<li><a href="#">Music</a></li>
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
			<h2>Music</h2>
			<div class="featured-product">
			<img data-src="holder.js/150x150" alt="150x150" class="img-circle pull-left img-responsive">
			
			<p class="book_left_small">Categorydescription. Each pack contains 5 sheets of colorful stickersfeaturing Zac, Peg, Mox, Tin Man, Gus, and introducing Backpack Bear.</p>
			</div>
			<div class="clearfix"></div>
            
		</section>
		<div class="clearfix"></div>

		<section class="container pro-list2 nobod">			
			
            <div class="col-md-3">
            <h3 class="bookTtile">Starfall Sing-Along Volume 1 (CD included)</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<div class="priceblack"><span class="one">$12.05</span><span class="two">$7.95</span></div>
            <a href="#">Add to cart</a>
            <p>Your children will love to sing and dance along with this collection of 49 favorite songs, nursery rhymes and chants.</p>
            </div>
            <div class="col-md-3">
            <h3 class="bookTtile">Starfall Sing-Along Volume 2 (CD included)</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<div class="priceblack"><span class="one">$12.05</span><span class="two">$7.95</span></div>
            <a href="#">Add to cart</a>
            <p>Your children will love to sing and dance along with this collection of 52 favorite songs, nursery rhymes and chants.</p>
            </div>
            <div class="col-md-3">
            <h3 class="bookTtile">Starfall's Selected Nursery Rhymes with CD</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<div class="priceblack"><span class="one">$12.05</span><span class="two">$7.95</span></div>
            <a href="#">Add to cart</a>
            <p>Children will delight in singing along or chanting with these classic nursery rhymes throughout the year. Vibrant color illustrations. Softcover book and CD, 48 p. 10" x 8."</p>
            </div>
            <div class="col-md-3">
            <h3 class="bookTtile">Star Writer Melodies CD</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<div class="priceblack"><span class="one">$12.05</span><span class="two">$7.95</span></div>
            <a href="#">Add to cart</a>
            <p>Star Writer Melodies are perfect for encouraging focus or relaxation. This CD of instrumental selections is sure to inspire. Audio CD, 9 tracks,31minutes.</p>
            </div>
            <div class="clearfix"></div>
            <div class="seeall"><a href="#">See all "Read to Me" books</a></div>
		</section>
		<div class="clearfix"></div>


		
		
		

		

<?php get_footer(); ?>