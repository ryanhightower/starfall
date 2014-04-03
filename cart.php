<?php include("includes/functions.php");
if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}

$cart_url = SITE_URL."/cart.php";
switch($_SESSION['user']['payment']){
    case "po":
        $payMethod = "Checkout w/ purchase order"; 
        $cart = "Price Quote Preview"; 
        $submit_message = "Complete Price Quote Details";
        $checkout_url = (isset($_SESSION['user']['username']) || isset($_SESSION['user']['account']['username'])) ? SITE_URL."/checkout-po.php" : SITE_URL."/create_account.php";
        $convert = "Pay with Credit Card"; 
        $convertID = "cc";
        break;
    case "cc":
        $payMethod = "Checkout w/ credit card"; 
        $cart = "Cart"; 
        $submit_message = "Checkout w/ credit card";
        $checkout_url = SITE_URL."/checkout-cc.php";
        $convert = "Convert to Quote"; 
        $convertID = "po";
        break;
    case "off":
        $payMethod = "Checkout offline (mail/phone)"; 
        $cart = "Cart"; 
        $submit_message = "Checkout offline (mail/phone)";
        $checkout_url = SITE_URL."/checkout-po.php";
        break;
    default:
        $payMethod = "Checkout w/ credit card"; 
        $cart = "Cart"; 
        $submit_message = "Checkout w/ credit card";
        $checkout_url = SITE_URL."/checkout-cc.php";
}
// if ($_SESSION['user']['payment'] == "po") { $payMethod = "Checkout w/ purchase order"; $cart = "Price Quote Preview"; $submit_message = "Complete Price Quote Details"; }
// elseif ($_SESSION['user']['payment'] == "cc") { $payMethod = "Checkout w/ credit card"; $cart = "Cart"; $submit_message = "Checkout w/ credit card"; }
// elseif ($_SESSION['user']['payment'] == "off") { $payMethod = "Checkout offline (mail/phone)"; $cart = "Cart"; $submit_message = "Checkout offline (mail/phone)"; }




 if(isset($_SESSION['curriculum']['cart']) || isset($_SESSION['Pre_K_Curriculum']['cart'])) {
		//
	}else
	{
		// $next_step = SITE_URL."/";
		// header("Location: $next_step", true);
		// exit();
	}

	// $cart_url = SITE_URL."/cart.php";

	//print_r($_SESSION['curriculum']['cart']); 

// if(isset($_POST['cart_mode']) && $_POST['cart_mode']=='edit')
// {  
//  array_shift($_POST);
//  $_SESSION['Pre_K_Curriculum']['cart']= $_POST;
// }

    get_header_inner(); 

?>

<script>

function cartupdate()
{ 
<?php if(isset($_SESSION['curriculum']['cart'])) { ?>
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
<?php } ?>
}
</script>

	<div class="container">

    

		<header>

        	<div class="row">

            <div class="col-sm-2">

			<!-- Starfall logo -->

			<div id="logo"><a href="<?php echo SITE_URL; ?>/store.php"><h3>Starfall Store</h3></a></div>

            </div>

            <div class="col-sm-7">

				<h1>Starfall Kindergarten Curriculum</h1>

            </div>

            

            <div class="newClear"></div>



            </div>

		</header>



        <section class="container">

		

        <div class="row">
        <div class="col-sm-12">	
<form name="cart" id="cart" method="post">		
            <div class="row">
                <div class="white-box">
                    <div class="padsim1">
                          <!--<div class="col-sm-10">
                           <div class="simplleBoldstyle1">Cart</div></div> -->
                            <h1><?php echo $cart; ?></h1>
                            <div class="col-sm-2 col-sm-offset-10">Price</div>
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
                                <span><img src="<?php echo $DB[$key]['product_image']; ?>" alt="25x25" class="img-center img-responsive"></span>
                                <div><strong><?php echo $DB[$key]['name']; ?></strong><br />
                                    <?php echo $DB[$key]['description']; ?>
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-2">
                            <div class="rightfinshedBox">
                                <span>$<?php echo $product['price']; ?>&nbsp;</span><input type="text" name="products_<?php echo $key;?>" id="products_<?php echo $key;?>" value="<?php echo $product['quantity']; ?>">
                                <a href="javascript:void(0);" onclick="return cartupdate();"><img src="<?php echo THEME_URL; ?>/icon/update.png" alt="update" class="" width="25" height="25"></a>
                                <div class="newClear"></div>
                            </div>
                        </div>                        
                        <div class="newClear"></div>
                     </div> 
    		          <?php 
                    } 
                } ?>

            </div>

        </div>
</form> 
		<?php 
		  if(isset($_SESSION['Pre_K_Curriculum']['cart'])){ ?>

	<?php 
	}
	if(isset($_SESSION['curriculum']['cart']))
	{
	$total = number_format($products_total, 2, '.', '');
	//session_destroy();
	}
	?>
  <div class="simplecartTxt">
  <a href="<?php echo SITE_URL; ?>/store.php">Continue shopping</a>&nbsp;&nbsp;
  <a href="javascript:void(0);" onclick="return cartupdate();">Update Cart</a>
  </div>
<?php
/*$results = array();
for($i = 1; $i <= 2; $i++) {
	$rand = rand(1,15);
	$results[] = $rand;
}
print_r($results);*/
?>
  
  <div class="recomend"> 
  <div><h3>Recommended Products</h3></div>
  <div class="recomm_thumb">
  <ul>
  <li><a href="<?php echo SITE_URL; ?>/product-details.php?product_id=12"><img data-src="holder.js/150x150" alt="150x150" class="img-center img-responsive"></a></li>
  <li><a href="<?php echo SITE_URL; ?>/purchase-pre_k.php"><img data-src="holder.js/150x150" alt="150x150" class="img-center img-responsive"></a></li>
 	<?php 
	$results = array();
	foreach($DB as $key => $product)
	{
		if($product['type']=='Per Classroom Items')
		{ 
		$results[] = $key;
		} 
	}
 		$rand_keys = array_rand($results, 2);
		//echo $results[$rand_keys[0]] . "\n";
		//echo $results[$rand_keys[1]] . "\n";
  ?>
 <li><a href="<?php echo SITE_URL; ?>/product-details.php?product_id=<?php echo$results[$rand_keys[0]]; ?>"><img src="product_image/<?php echo $DB[$results[$rand_keys[0]]]['product_image']; ?>" alt="25x25" width="100px" class="img-center img-responsive"></a></li>
 <li><a href="<?php echo SITE_URL; ?>/product-details.php?product_id=<?php echo$results[$rand_keys[1]]; ?>"><img src="product_image/<?php echo $DB[$results[$rand_keys[1]]]['product_image']; ?>" alt="25x25" width="100px" class="img-center img-responsive"></a></li>
  </ul>
  </div>
        <div class="col-sm-3 fr">
	<?php if(isset($_SESSION['curriculum']['cart'])){ ?>
        	<div class="totalBox">
            	<div class="totlaBar">
                	<strong>SubTotal:</strong><span>$<?php echo $total; ?></span>
                </div>
                <div class="totlaBar">
                	<strong>Shipping:</strong><span>$0.00</span>
                </div>
                <div class="totlaBar">
                	<strong>Tax</strong><span>$0.00</span>
                </div>
                <div class="totlaBar2">
                	<strong>Total</strong><span>$<?php echo $total; ?></span>
                </div>
            </div>
		<?php } ?>
	<?php if(isset($_SESSION['Pre_K_Curriculum']['cart'])){ ?>
 
		<?php } ?>
<?php 
// if($payMethod=="Checkout w/ credit card"){ 
//     $convert = "Convert to Quote"; $convertID = "po"; $href = SITE_URL."/checkout-cc.php"; 
// } elseif ($payMethod=="Checkout w/ purchase order"){ 
//     $convert = "Pay with Credit Card"; $convertID = "cc"; $href = SITE_URL."/checkout-po.php"; 
// } 
?>

            <div class="padsim3"><a class="btn btn-primary btn-lg" href="<?php echo $checkout_url; ?>" id="price-quote"><?php echo $submit_message; ?></a></div>
			<div class="padsim3"><a id="<?php echo $convertID; ?>" class="btn btn-link btn-lg payment" href="#"><?php echo $convert; ?></a></div>
            

        </div>
		<div class="newClear"></div>
		</div>
        </div>

           

        

                    

        </section>



		

		<div class="clearfix"></div>



<?php //get_footer(); ?>

