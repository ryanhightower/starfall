<?php include("includes/functions.php");

if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}
get_header_product(); 
//session_destroy();
$category_id = 1;
//print_r($DB_cat[$category_id]);
//echo THEME_URL;
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
				<img src="<?php echo THEME_URL ?>/images/music-notes-md.png" alt="Starfall Music" class="pull-left img-responsive">			
				<p><?php echo $DB_cat[$category_id]['description']; ?></p>
			</div>
			<div class="clearfix"></div>
        
		</section>
		<div class="clearfix"></div>

		<section class="container pro-list2 nobod">			
			
		  <div class="row">
	<?php 
	$j = 0;
	foreach($DB as $key => $product)
	{
		if($product['category_id']=='1')
		{ 
		$product_id = $key;
		$j++;
	?>		  
			<div class="col-md-3 product-info">
				<a href="<?php echo SITE_URL;?>/product-details.php?product_id=<?php echo $product_id; ?>" target="_blank">
					<img src="<?php echo $product['product_image']; ?>" alt="100x100" class="img-center img-responsive">
					<h4 class="bookTtile"><?php echo $product['name']; ?></h4>
				</a>
				<p><?php echo $product['description']; ?></p>
				<div class="product-price">
					<span class="cut-price">$<?php echo $product['old_price']; ?></span> 
					<span class="price">$<?php echo $product['price']; ?></span>
				</div>
				<a class="btn btn-success" href="javascript:void(0);" onclick="return add_to_cart(<?php echo $product_id; ?>);">Add to cart</a>
            </div>
<?php
		if($j%4==0)
		{
		echo '</div><div class="row">';
		}
		}
	}
	?>
		  </div>
		<div class="clearfix"></div>

		</section>
		<div class="clearfix"></div>


<?php get_footer(); ?>
<script>
function add_to_cart(product_id)
{
	$.ajax({
	url: "<?php echo SITE_URL; ?>/category_product_cart.php",
	data: {product_id: product_id},
	success: function( data ) {
			if(data=="true")
			{
				window.location.href="<?php echo SITE_URL;?>/cart.php";
			}
		}
	});
}
</script>