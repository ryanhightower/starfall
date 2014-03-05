
<?php include("includes/functions.php");

get_header_inner(); 

// Intermediate EDUCATOR Store Page
// Description: This page asks the user what payment method they wish to use.
// Options are "Institution (P.O.)", "Personal (CC)", "Offline (Mail, fax, phone). 
// After the user makes their selection, the page should redirect them to the original
// route they were going to. 
?>

	<div class="container">
    
		<header>
        	<div class="row">
            <div class="col-sm-2">
			<!-- Starfall logo -->
			<div id="logo"><a href="<?php echo SITE_URL; ?>/store.php"><h3>Starfall Store</h3></a></div>
            </div>
            <div class="col-sm-7">
				<h1>Checkout Purchase Order</h1>
            </div>
            
            <div class="newClear"></div>

            </div>
		</header>

        <section class="container">
        <div class="row">
        <div class="col-sm-12">		
           <div class="row">
                <div class="padsim4">
                	<div class="col-sm-8">
                    	<h2>Price Quote #123456</h2>
                        <span>Your quote has been generated successfully. View your details below and print or email to give to your Administrator.</span>
               		</div>
                	<!-- <div class="col-sm-4 fr">
                            <p>Establish an account based on this PO and speed up delivery of yourproduct!</p>
                            <a class="btn btn-primary btn-lg" href="">Pay Now by CC</a>&nbsp;&nbsp;<a class="btn btn-primary btn-lg" href="">Create Account</a>
               		</div> -->
                    <div class="newClear"></div>
                </div>    
                <div class="padsim4">
                	<div class="col-sm-8">
                    	<a href="#" class="print">Print</a>
                        <a href="#" class="email">Email</a>
               		</div>
                	
                    <div class="newClear"></div>
                </div>            
                <div class="grey-box3">
                            <div class="padsim1">
                                <div class="col-sm-10">
                                <div class="simplleBoldstyle1">Quote #1234567</div></div>
                                <div class="col-sm-2">Price</div>
                                <div class="newClear"></div>
                            </div>

                            <?php  

                                // PRODUCTS
                                if(isset($_SESSION['curriculum']['cart'])):
                                    $products_total = 0;
                                    foreach($_SESSION['curriculum']['cart'] as $key => $product):
                                    $products_total = $products_total + ($product['quantity'] * $product['price']);
                            ?>

                             <div class="padsim2">
                                <div class="col-sm-10">
                                    <div class="studItemBox">
                                        <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                        <div><strong><?php echo $DB[$key]['name']; ?></strong><br />
                                            <?php echo $DB[$key]['description']; ?>
                                        </div> 
                                        <div class="newClear"></div>
                                    </div>
                                </div>                       
                                <div class="col-sm-2">
                                    <div class="rightfinshedBox">
                                        <span class="moresapce">$<?php echo $product['price']; ?></span><span><?php echo $product['quantity']; ?></span>
                                        <div class="newClear"></div>
                                    </div>
                                </div>                        
                                <div class="newClear"></div>
                            </div> 
                            <?php  
                                endforeach; // end foreach;
                                endif; // 
                                ?>

                             
                             
                            <div>
                                <div class="col-sm-6">
								    NOTICE: If you need to adjust or re print your quote, you may view create a quote from your<strong> purchase history</strong>. Call us at 1-800-999-9999 with questions or comments.
                                </div>
                                <div class="col-sm-3 fr">
                                    <div class="totalBox2">
                                        <div class="totlaBar">
                                            <strong>SubTotal:</strong><span>$<?php echo $products_total; ?></span>
                                        </div>
                                        <div class="totlaBar">
                                            <strong>Shipping:</strong><span>$0.00</span>
                                        </div>
                                        <div class="totlaBar">
                                            <strong>Tax</strong><span>$0.00</span>
                                        </div>
                                        <div class="totlaBar2">
                                            <strong>Total</strong><span>$<?php echo $products_total; ?></span>
                                        </div>
                                    </div>
                                </div>
        					</div>
                            <div class="newClear"></div>
                        </div>            
                    </div>
                </div>        
            </div> 
                    
        </section>

		
        <div class="clearfix"></div>




<?php //get_footer(); ?>