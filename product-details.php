<?php include("includes/functions.php");



if (session_status() == PHP_SESSION_NONE) {

//    echo "session_start"."<br>";

    session_start();

}

//session_destroy();

if(isset($_POST['btnsubmit']) && $_POST['btnsubmit']=='Add to Cart'){

  array_pop($_POST);

	if(isset($_POST['qty']) && $_POST['qty']!='')

	{

		$_SESSION['curriculum']['cart'][$_POST['product_id']]= array("quantity" => $_POST['qty'],"price" => $DB[$_POST['product_id']]['price']);

	}

  $next_step = SITE_URL."/cart.php";

  header("Location: $next_step", true);

  exit();

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

		<form name="frmproduct" id="frmproduct" method="post">

		<input type="hidden" name="product_id" id="product_id" value="<?php echo $_GET['product_id']; ?>" >

			<section class="container">

            <div class="col-md-2">

            <!--<img data-src="holder.js/150x150" alt="150x150" class="img-circle pull-left img-responsive">-->
			<img src="product_image/<?php echo $DB[$_GET['product_id']]['product_image']; ?>" alt="150x150" class="pull-left img-responsive">
            </div>

            <div class="col-md-10">

			<h2><?php echo $DB[$_GET['product_id']]['name']; ?></h2>

            <div class="col-sm-1">

            <span class="cut-price">$<?php echo number_format($DB[$_GET['product_id']]['old_price'], 2); ?></span>

            </div>

            <div class="col-sm-1">

            $<?php echo number_format($DB[$_GET['product_id']]['price'], 2); ?>

            </div>

            <div class="col-sm-3">

            <label for="checkbox_id">Quantity:</label>

            <input type="textfield" name="qty" id="qty_id" value="1">



            </div>

            <div class="col-sm-3">

            <input type="submit" value="Add to Cart" name="btnsubmit" id="btnsubmit" class="btn-cart">

            </div>

            <div class="clearfix"></div>

              <p><?php echo $DB[$_GET['product_id']]['details_description']; ?></p>

              </div>

            </div>

		</section>

		</form>

		<div class="clearfix"></div>

		



<?php get_footer(); ?>