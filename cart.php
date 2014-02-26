<?php include("includes/functions.php");
if ($_SESSION['user']['payment'] == "po") { $payMethod = "Checkout w/ purchase order"; }
elseif ($_SESSION['user']['payment'] == "cc") { $payMethod = "Checkout w/ credit card"; }
elseif ($_SESSION['user']['payment'] == "off") { $payMethod = "Checkout offline (mail/phone)"; }


if (session_status() == PHP_SESSION_NONE) {

    session_start();

}


 if(!isset($_SESSION['curriculum']['cart'])) {

		$next_step = SITE_URL."/purchase-pre_k.php";

		header("Location: $next_step", true);

		exit();
	}

	$cart_url = SITE_URL."/cart.php";

	//print_r($_SESSION['curriculum']['cart']); 



    get_header_inner(); 

?>

<script>

function cartupdate()

{ 

var serial_ids =$('#cart').serializeArray();

	$.ajax({

    	url: "<?php echo SITE_URL; ?>/cartupdate.php",

    	data: {

    	   serial_ids: serial_ids

    	},

    	success: function( data ) {

    	   window.location.href = "<?php echo $cart_url; ?>";

    	}

	});

}

</script>

	<div class="container">

    

		<header>

        	<div class="row">

            <div class="col-sm-2">

			<!-- Starfall logo -->

			<div id="logo"><h3>Starfall</h3></div>

            </div>

            <div class="col-sm-7">

				<h1>Starfall Kindergarten Curriculum</h1>

            </div>

            

            <div class="newClear"></div>



            </div>

		</header>



        <section class="container">

		<form name="cart" id="cart" method="post">

        <div class="row">

        <div class="col-sm-12">		

            <div class="row">

                <div class="white-box">

                    <div class="padsim1">

                        <div class="col-sm-10">

                            <!-- <div class="simplleBoldstyle1">Cart</div></div> -->

                            <h1>Cart</h1>

                            <div class="col-sm-2">Price</div>

                            <div class="newClear"></div>

                        </div>

                		<?php 

                		  if(isset($_SESSION['curriculum']['cart']))
                		  {

                    		$products_total = 0;

                    		foreach($_SESSION['curriculum']['cart'] as $key => $product)
                    		{

                                $products_total = $products_total + ($product['quantity'] * $product['price']);

                                ?>

                     <div class="padsim2">

                        <div class="col-sm-10">

                            <div class="studItemBox">

                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>

                                <div><strong><?php echo $DB['product_item_'.$key]['name']; ?></strong><br />

                                    <?php echo $DB['product_item_'.$key]['description']; ?>

                                </div> 

                                <div class="newClear"></div>

                            </div>

                        </div>                       

                        <div class="col-sm-2">

                            <div class="rightfinshedBox">

                                <span>$<?php echo $DB['product_item_'.$key]['price']; ?>&nbsp;</span><input type="text" name="products_<?php echo $key;?>" id="products_<?php echo $key;?>" value="<?php echo $product['quantity']; ?>">

                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">

                                <div class="newClear"></div>

                            </div>

                        </div>                        

                        <div class="newClear"></div>

                     </div> 

    		          <?php 

                    } 

                } ?>

                <div class="simplecartTxt"><a href="javascript:void(0);" onclick="return cartupdate();">Update Cart</a></div>

            </div>

        </div>

    </div>

	<?php 

	if(isset($_SESSION['curriculum']['cart']))

	{

	$total = $products_total;

	//session_destroy();

	}

	?>

        <div class="col-sm-3 fr">

        	<div class="totalBox">

            	<div class="totlaBar">

                	<strong>SubTotal:</strong><span>$<?php echo $total; ?></span>

                </div>

                <div class="totlaBar">

                	<strong>Shipping:</strong><span>$00.00</span>

                </div>

                <div class="totlaBar">

                	<strong>Tax</strong><span>$0.00</span>

                </div>

                <div class="totlaBar2">

                	<strong>Total</strong><span>$<?php echo $total; ?></span>

                </div>

            </div>

            <div class="padsim3"><a class="btn btn-primary btn-lg" href="<?php echo SITE_URL; ?>/price-quote.php"><?php echo $payMethod; ?></a></div>

            <?php if($payMethod=="Checkout w/ credit card"){ ?>

                <div class="padsim3"><a id="po" class="btn btn-link btn-lg payment method" href="#">Convert to Quote</a></div>

            <?php }elseif($payMethod=="Checkout w/ purchase order"){ ?>

                <div class="padsim3"><a id="cc" class="btn btn-link btn-lg payment method" href="#">Pay with Credit Card</a></div>

            <?php } ?>
            

        </div>

        </div>

        </form>            

        

                    

        </section>



		

		<div class="clearfix"></div>



<?php //get_footer(); ?>

