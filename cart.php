<?php include("includes/functions.php");
if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}

if ($_SESSION['user']['payment'] == "po") { $payMethod = "Checkout w/ purchase order"; }
elseif ($_SESSION['user']['payment'] == "cc") { $payMethod = "Checkout w/ credit card"; }
elseif ($_SESSION['user']['payment'] == "off") { $payMethod = "Checkout offline (mail/phone)"; }




 if(isset($_SESSION['curriculum']['cart']) || isset($_SESSION['Pre_K_Curriculum']['cart'])) {
		//
	}else
	{
		$next_step = SITE_URL."/purchase-pre_k.php";
		header("Location: $next_step", true);
		exit();
	}

	$cart_url = SITE_URL."/cart.php";

	//print_r($_SESSION['curriculum']['cart']); 

if(isset($_POST['cart_mode']) && $_POST['cart_mode']=='edit')
{  
 array_shift($_POST);
 $_SESSION['Pre_K_Curriculum']['cart']= $_POST;
}

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
<?php } 
if(isset($_SESSION['Pre_K_Curriculum']['cart'])) {
?>
$('#frmpre_k').submit();
<?php } ?>
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

		

        <div class="row">
        <div class="col-sm-12">	
<form name="cart" id="cart" method="post">		
            <div class="row">
                <div class="white-box">
                    <div class="padsim1">
                          <!--<div class="col-sm-10">
                           <div class="simplleBoldstyle1">Cart</div></div> -->
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

            </div>

        </div>
</form> 
		<?php 
		  if(isset($_SESSION['Pre_K_Curriculum']['cart'])){ ?>
<!-- <div class="row">
                <div class="col-sm-3">
                <img data-src="holder.js/150x150" alt="150x150" class="img-circle img-center img-responsive">
                <div class="space20"></div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
					<form method="post" name="frmpre_k" id="frmpre_k">
					<input type="hidden" name="cart_mode" id="cart_mode" value="edit">
					<input type="hidden" name="curriculum_price" id="curriculum_price" value="<?php echo $_SESSION['Pre_K_Curriculum']['cart']['curriculum_price'];?>">
                    <div class="grey-box">
                      <h3 class="text-center">The Pre-K purchase form is much simpler than the Kindergarten form. It consists of 2 products: </h3>
                      <p>
                        <label for="radio"> 1. Pre-K Curriculum Kit price: $199.99 ( <input type="text" name="pre_kvalue" id="pre_kvalue" value="<?php echo $_SESSION['Pre_K_Curriculum']['cart']['pre_kvalue'];?>"> )</label>
                      </p>
                      <p>
                        <label for="radio"> 2. Membership type - radio button with three options: -</label>
						<ol>
							<li><input type="radio" name="option_member" id="option_member1" <?php if($_SESSION['Pre_K_Curriculum']['cart']['option_member']==70){echo 'checked';} ?> value="70"> Teacher price: $70 </li>
							<li><input type="radio" <?php if($_SESSION['Pre_K_Curriculum']['cart']['option_member']==150){echo 'checked'; }?> name="option_member" id="option_member2" value="150"> Classroom price: $150</li>
							<li><input type="radio" <?php if($_SESSION['Pre_K_Curriculum']['cart']['option_member']==270){echo 'checked'; }?> name="option_member" id="option_member3" value="270"> School price: $270 </li>
						</ol>
                      </p>
                    </div>
					</form>
                    </div>
		
		              
    </div> -->
	<?php 
	}
	if(isset($_SESSION['curriculum']['cart']))
	{
	$total = $products_total;
	//session_destroy();
	}
	if(isset($_SESSION['Pre_K_Curriculum']['cart']))
	{
	$total = ($_SESSION['Pre_K_Curriculum']['cart']['pre_kvalue'] * $_SESSION['Pre_K_Curriculum']['cart']['curriculum_price']) + $_SESSION['Pre_K_Curriculum']['cart']['option_member'];
	//session_destroy();
	}
	?>
  <div class="simplecartTxt"><a href="javascript:void(0);" onclick="return cartupdate();">Update Cart</a></div>
        <div class="col-sm-3 fr">
	<?php if(isset($_SESSION['curriculum']['cart'])){ ?>
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
		<?php } ?>
	<?php if(isset($_SESSION['Pre_K_Curriculum']['cart'])){ ?>
 <!--        	<div class="totalBox">
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
            </div> -->
		<?php } ?>
<?php if($payMethod=="Checkout w/ credit card"){ $convert = "Convert to Quote"; $convertID = "po"; $href = SITE_URL."/checkout-cc.php"; } elseif ($payMethod=="Checkout w/ purchase order"){ $convert = "Pay with Credit Card"; $convertID = "cc"; $href = SITE_URL."/checkout-po.php"; } ?>

            <div class="padsim3"><a class="btn btn-primary btn-lg" href="<?php echo $href; ?>" id="price-quote"><?php echo $payMethod; ?></a></div>
			<div class="padsim3"><a id="<?php echo $convertID; ?>" class="btn btn-link btn-lg payment" href="#"><?php echo $convert; ?></a></div>
            

        </div>

        </div>

           

        

                    

        </section>



		

		<div class="clearfix"></div>



<?php //get_footer(); ?>

