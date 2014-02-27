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
				<li><a href="#">Bulk Order Form</a></li>
			</ul>
			</div>
			</div>
		<div class="clearfix"></div>
			<section class="container">
            <div class="col-md-2">
            <img data-src="holder.js/150x150" alt="150x150" class="img-circle pull-left img-responsive">
            </div>
            <div class="col-md-10">
			<h2>Backpack Bear's Level-K Sticker</h2>
            <div class="col-sm-1">
            <span class="cut-price">$2.50</span>
            </div>
            <div class="col-sm-1">
            $1.45
            </div>
            <div class="col-sm-2">
            <label for="checkbox_id">Quantitiy:</label>
            <input type="textfield" name="qty" id="qty_id" value="1">

            </div>
            <div class="col-sm-3">
            <input type="button" value="Add to Cart" class="btn-cart">
            </div>
            <div class="clearfix"></div>
            
			
              <p>Great Value!<br>
              
              Each pack contains 5 sheets of colorful stickers featuring Zac, Peg, Mox, TinMan, Gus, and introducing Backpack Bear. 140 stickers in all! Your 
              children will love to be rewarded for their hardwork with these stickers.
              New Level-K Stickers. Contains more stickers. Best for large class use.</p>
              
              </div>
            </div>
		</section>
		<div class="clearfix"></div>
		

<?php get_footer(); ?>