<?php include("includes/functions.php");
// Intermediate EDUCATOR Store Page
// Description: This page asks the user what payment method they wish to use.
// Options are "Institution (P.O.)", "Personal (CC)", "Offline (Mail, fax, phone). 
// After the user makes their selection, the page should redirect them to the original
// route they were going to. 
if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}
get_header_inner(); 
/*
echo "<pre>";
print_r($_SESSION['curriculum']['products']);   echo "</pre>"; 
echo "<pre>";
print_r($_SESSION['curriculum']['Optionalproducts']);   echo "</pre>";
*/
 if(!isset($_SESSION['curriculum']['products']) || !isset($_SESSION['curriculum']['Optionalproducts']))
	{
		 $next_step = SITE_URL."/curr-purchase-1.php";
		header("Location: $next_step", true);
		exit();
	}
?>

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
		if(isset($_SESSION['curriculum']['products']))
		{
		$products_total = 0;
		foreach($_SESSION['curriculum']['products'] as $key => $product)
		{
		$products_total = $products_total + ($product * 4.99);
		?>
                             <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong>Product Item <?php echo $key; ?></strong><br />
                                        Short description of the product and what it does,why it’s useful or fun, etc.
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                <div class="rightfinshedBox">
                                <span>$4.99&nbsp;</span><input type="text" name="textfield" id="textfield" value="<?php echo $product; ?>">
                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">
                                <div class="newClear"></div>
                                </div>
                                </div>                        
                                <div class="newClear"></div>
                             </div> 
		<?php } } ?>
		<?php 
		if(isset($_SESSION['curriculum']['Optionalproducts']))
		{
		$optional_total = 0;
		foreach($_SESSION['curriculum']['Optionalproducts'] as $key => $optionalproducts)
		{
		$optional_total = $optional_total + ($optionalproducts * 4.99);
		?>
                        	 <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong>Product Item <?php echo $key; ?></strong><br />
                                        Short description of the product and what it does,why it’s useful or fun, etc.
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                <div class="rightfinshedBox">
                                <span>$4.99&nbsp;</span><input type="text" name="textfield" id="textfield" value="<?php echo $optionalproducts; ?>">
                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">
                                <div class="newClear"></div>
                                </div>
                                </div>                        
                                <div class="newClear"></div>
                             </div>
		<?php } }?>
                            <!-- <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong>Product Item 1</strong><br />
                                        Short description of the product and what it does,why it’s useful or fun, etc.
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                <div class="rightfinshedBox">
                                <span>$4.99&nbsp;</span><input type="text" name="textfield" id="textfield">
                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">
                                <div class="newClear"></div>
                                </div>
                                </div>                        
                                <div class="newClear"></div>
                             </div>
                             <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong>Product Item 1</strong><br />
                                        Short description of the product and what it does,why it’s useful or fun, etc.
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                <div class="rightfinshedBox">
                                <span>$4.99&nbsp;</span><input type="text" name="textfield" id="textfield">
                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">
                                <div class="newClear"></div>
                                </div>
                                </div>                        
                                <div class="newClear"></div>
                             </div>
                             <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong>Product Item 1</strong><br />
                                        Short description of the product and what it does,why it’s useful or fun, etc.
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                <div class="rightfinshedBox">
                                <span>$4.99&nbsp;</span><input type="text" name="textfield" id="textfield">
                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">
                                <div class="newClear"></div>
                                </div>
                                </div>                        
                                <div class="newClear"></div>
                             </div>
                             <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong>Product Item 1</strong><br />
                                        Short description of the product and what it does,why it’s useful or fun, etc.
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                <div class="rightfinshedBox">
                                <span>$4.99&nbsp;</span><input type="text" name="textfield" id="textfield">
                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">
                                <div class="newClear"></div>
                                </div>
                                </div>                        
                                <div class="newClear"></div>
                             </div>
                             <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong>Product Item 1</strong><br />
                                        Short description of the product and what it does,why it’s useful or fun, etc.
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                <div class="rightfinshedBox">
                                <span>$4.99&nbsp;</span><input type="text" name="textfield" id="textfield">
                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">
                                <div class="newClear"></div>
                                </div>
                                </div>                        
                                <div class="newClear"></div>
                             </div>
                             <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong>Product Item 1</strong><br />
                                        Short description of the product and what it does,why it’s useful or fun, etc.
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                <div class="rightfinshedBox">
                                <span>$4.99&nbsp;</span><input type="text" name="textfield" id="textfield">
                                <img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive">
                                <div class="newClear"></div>
                                </div>
                                </div>                        
                                <div class="newClear"></div>
                             </div>-->
                             <div class="simplecartTxt"><a href="#">Update Cart</a></div>
                            </div>
                           </div>
                        </div>
	<?php 
	if(isset($_SESSION['curriculum']['products']) || isset($_SESSION['curriculum']['Optionalproducts']))
	{
	$total = $products_total + $optional_total;
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
            <div class="padsim3"><a class="btn btn-primary btn-lg" href="<?php echo SITE_URL; ?>/price-quote.php">Checkout</a></div>
            <div class="padsim3"><a class="btn btn-primary btn-lg" href="<?php echo SITE_URL; ?>/price-quote.php">Convert to Quote</a></div>
        </div>
        </div>
                    
        
                    
        </section>

		
		<div class="clearfix"></div>




<?php //get_footer(); ?>