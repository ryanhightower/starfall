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
			<h2>Store Homepage</h2>
			<div class="featured-product">
			<img data-src="holder.js/150x150" alt="150x150" class="img-circle pull-left img-responsive">
			<h3>
			FIrst featured product</h3>
			<p>Great Value!<br>
Each pack contains 5 sheets of colorful stickers featuring Zac, Peg, Mox, Tin Man, Gus, and introducing Backpack Bear. <br>
<a href="#">Learn More</a> </p>
			</div>
			<div class="clearfix"></div>
            <div class="col-md-6">
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle pull-left img-responsive">
			<h3>
			FIrst featured product</h3>
			<p>Great Value!<br>
Each pack contains 5 sheets of colorful stickers featuring Zac, Peg, Mox, Tin Man, Gus, and introducing Backpack Bear. <br>
<a href="#">Learn More</a>&nbsp;&nbsp;<a href="#">Buy Now</a></p>
            </div>
            <div class="col-md-6">
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle pull-left img-responsive">
			<h3>
			FIrst featured product</h3>
			<p>Great Value!<br>
Each pack contains 5 sheets of colorful stickers featuring Zac, Peg, Mox, Tin Man, Gus, and introducing Backpack Bear. <br>
<a href="#">Learn More</a>&nbsp;&nbsp;<a href="#">Buy Now</a></p>
            </div>
            <div class="clearfix"></div>
		</section>
		<div class="clearfix"></div>
		<section class="container pro-list">
			
			<h2 align="left">Popular products</h2>
            <div class="col-md-3">
            <h3>Product 1</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<span>$4.99</span><br>
            Each pack contains 5 sheets of <br> colorful stickers featuring Zac
            </div>
            <div class="col-md-3">
            <h3>Product 2</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<span>$4.99</span><br>
            Each pack contains 5 sheets of <br> colorful stickers featuring Zac
            </div>
            <div class="col-md-3">
            <h3>Product 3</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<span>$4.99</span><br>
            Each pack contains 5 sheets of <br> colorful stickers featuring Zac
            </div>
            <div class="col-md-3">
            <h3>Product 4</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<span>$4.99</span><br>
            Each pack contains 5 sheets of <br> colorful stickers featuring Zac
            </div>
            <div class="col-md-3">
            <h3>Product 5</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<span>$4.99</span><br>
            Each pack contains 5 sheets of <br> colorful stickers featuring Zac
            </div>
            <div class="col-md-3">
            <h3>Product 6</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<span>$4.99</span><br>
            Each pack contains 5 sheets of <br> colorful stickers featuring Zac
            </div>
            <div class="col-md-3">
            <h3>Product 7</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<span>$4.99</span><br>
            Each pack contains 5 sheets of <br> colorful stickers featuring Zac
            </div>
            <div class="col-md-3">
            <h3>Product 8</h3>
            <img data-src="holder.js/100x100" alt="100x100" class="img-circle img-responsive"><br>
			<span>$4.99</span><br>
            Each pack contains 5 sheets of <br> colorful stickers featuring Zac
            </div>
            

			

			
		</section>

		
		<div class="clearfix"></div>


		
		
		

		

<?php get_footer(); ?>