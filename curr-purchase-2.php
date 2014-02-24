<?php include("includes/functions.php");

if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}
  // echo "returning: ".$_SESSION['curriculum']['returning']."<br>";
  // echo "classrooms: ".$_SESSION['curriculum']['classrooms']."<br>";
  // echo "students: ".$_SESSION['curriculum']['students']."<br>";
  

//session_destroy();
if(isset($_POST['submit'])){
 array_pop($_POST);
  // Store Product values and move to next step
$i=0;	
foreach($_POST as $key => $row)
{ $i++;
$product_key_arr =explode('_',$key);

	if(isset($_POST[$key]) && $_POST[$key]!='')
	{
		$_SESSION['curriculum']['products'][$product_key_arr[1]]= $_POST[$key];
	}
    //echo $_SESSION['curriculum']['products'][$i]."<br>";
  } 
 //echo "<pre>";
 //print_r($_SESSION['curriculum']['products']);   echo "</pre>"; exit;
  $next_step = SITE_URL."/curr-purchase-3.php";
  header("Location: $next_step", true);
  exit();
}

// Set variable values for Step 2
if(isset($_SESSION['curriculum'])&&$_SESSION['curriculum']['returning']=="no"){
  $returning = $_SESSION['curriculum']['returning'];
  $classrooms = $_SESSION['curriculum']['classrooms'];
  $total_students = $_SESSION['curriculum']['students'];
  
} ?>

<?php 

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
			<div id="logo"><h3>Starfall</h3></div>
            </div>
            <div class="col-sm-7">
				      <h1>Starfall Kindergarten Curriculum</h1>
            </div>
            <div class="col-sm-3">
            	<div class="dropdown top_rightCorner">
            		<a data-toggle="dropdown" href="#" class="check">Checkoutw/purchaseorder</a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li class="one"><a href="#">Checkoutw/creditcard</a></li>
                        <li class="two"><a href="#">Checkoutoffline(mail/phone)</a></li>
                      </ul>
				</div>
				
            </div>
            <div class="newClear"></div>

            </div>
		</header>

<section class="container">
  <form method="post">
		<div class="row">
			<div class="col-sm-12">
            <a href="<?php echo SITE_URL; ?>">Educators</a> // <a href="<?php echo SITE_URL; ?>/curriculum.php">Curriculum</a> // <a href="<?php echo SITE_URL; ?>/curr-purchase-1.php">Step1</a>  // Step2
            </div>
            </div>
			<div class="space20"></div>
            <div class="col-sm-10 col-sm-push-2">
            <h2>Step 2 of 3</h2>
            </div>
            <div class="space20"></div>
			<div class="col-sm-12">
				<div class="row">
                <div class="col-sm-3">
                <img data-src="holder.js/150x150" alt="150x150" class="img-circle img-center img-responsive">
                <div class="space20"></div>

                </div>
                <div class="col-sm-9">		
                 <div class="row">
                    <div class="grey-box2">
                     <div class="padsim1">
                    	<div class="col-sm-9">
                        <div class="simplleBoldstyle1">Per Student Items<br />
                       <span> A typica lclassroom will have one of these per student. Tip:you may want
to order a few extras for replacements and new student transfers.
						</span></div></div>
                        <div class="col-sm-3">Price</div>
                        <div class="newClear"></div>
                    </div>
	<?php 
	foreach($DB as $key => $product)
	{
		if($product['type']=='Per Student Items')
		{
		$product_id = substr($key,13,strlen($key));
	?>
                     <div class="padsim1">
                     	<div class="col-sm-9">
                            <div class="studItemBox">
                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                <div><strong><?php echo $product['name']; ?></strong><br />
                                <?php echo $product['description']; ?>
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span>$<?php echo $product['price']; ?>&nbsp;</span><input type="text" name="product_<?php echo $product_id; ?>" id="product_<?php echo $product_id; ?>" value="<?php echo $total_students; ?>"></div>                        
                        <div class="newClear"></div>
                     </div> 
	<?php } }?>
                     <!--<div class="padsim1">
                     	<div class="col-sm-9">
                            <div class="studItemBox">
                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                <div><strong>Product Item 2</strong><br />
                                Short description of the product and what it does,why it’s useful or fun, etc.
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span>$4.99&nbsp;</span><input type="text" name="product2" id="product2" value="<?php echo $total_students; ?>"></div>                        
                        <div class="newClear"></div>
                     </div>
                     <div class="padsim1">
                     	<div class="col-sm-9">
                            <div class="studItemBox">
                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                <div><strong>Product Item 3</strong><br />
                                Short description of the product and what it does,why it’s useful or fun, etc.
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span>$4.99&nbsp;</span><input type="text" name="product3" id="product3" value="<?php echo $total_students; ?>"></div>                        
                        <div class="newClear"></div>
                     </div>
                     <div class="padsim1">
                     	<div class="col-sm-9">
                            <div class="studItemBox">
                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                <div><strong>Product Item 4</strong><br />
                                Short description of the product and what it does,why it’s useful or fun, etc.
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span>$4.99&nbsp;</span><input type="text" name="product4" id="product4" value="<?php echo $total_students; ?>"></div>                        
                        <div class="newClear"></div>
                     </div>-->
                     
                     <div class="padsim1">
                    	<div class="col-sm-9">
                        

                        <div class="simplleBoldstyle1">Per Classroom Items<br />
                       <span> A typical classroom will have one or more of each of these per classroom.
						</span></div></div>
                        <div class="col-sm-3">Price</div>
                        <div class="newClear"></div>
                    </div>
	<?php 
	foreach($DB as $key => $product)
	{
		if($product['type']=='Per Classroom Items')
		{ 
		$product_id = substr($key,13,strlen($key));
	?>
                     <div class="padsim1">
                     	<div class="col-sm-9">
                            <div class="studItemBox">
                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                <div><strong><?php echo $product['name']; ?></strong><br />
                                <?php echo $product['description']; ?>
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span>$<?php echo $product['price']; ?>&nbsp;</span><input type="text" name="product_<?php echo $product_id; ?>" id="product_<?php echo $product_id; ?>" value="<?php echo $classrooms; ?>"></div>                        
                        <div class="newClear"></div>
                     </div>
	<?php } } ?>					 
                    <!--<div class="padsim1">
                     	<div class="col-sm-9">
                            <div class="studItemBox">
                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                <div><strong>Product Item 2</strong><br />
                                Short description of the product and what it does,why it’s useful or fun, etc.
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span>$4.99&nbsp;</span><input type="text" name="product6" id="product6" value="<?php echo $classrooms; ?>"></div>                        
                        <div class="newClear"></div>
                     </div>
                     <div class="padsim1">
                     	<div class="col-sm-9">
                            <div class="studItemBox">
                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                <div><strong>Product Item 3</strong><br />
                                Short description of the product and what it does,why it’s useful or fun, etc.
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span>$4.99&nbsp;</span><input type="text" name="product7" id="product7" value="<?php echo $classrooms; ?>"></div>                        
                        <div class="newClear"></div>
                     </div>-->
                     <div class="padsim1">
                     	<!--<div class="col-sm-9">
                            <div class="studItemBox">
                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>
                                <div><strong>Product Item 4</strong><br />
                                Short description of the product and what it does,why it’s useful or fun, etc.
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span>$4.99&nbsp;</span><input type="text" name="product8" id="product8" value="<?php echo $classrooms; ?>"></div>-->
						<div class="newClear"></div>
                        <input type="submit" class="btn btn-success" name="submit" value="Next Step">
                     </div>
                    </div>
                   </div>
                </div>
                   
				</div>
				
			</div>

	</form>
</section>

		
		<div class="clearfix"></div>




<?php get_footer(); ?>