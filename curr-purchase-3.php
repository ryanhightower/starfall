<?php include("includes/functions.php");

if (session_status() == PHP_SESSION_NONE) {

//    echo "session_start"."<br>";

    session_start();

}

//session_destroy();

if(isset($_POST['submit'])){



 array_pop($_POST);

  // Store Product values and move to next step

//$i=0;	

foreach($_POST as $key => $row)

{ //$i++;

$product_key_arr =explode('_',$key);

	if(isset($_POST[$key]) && $_POST[$key]!='' && $_POST[$key]!=0)
	{

    $_SESSION['curriculum']['cart'][$product_key_arr[1]]= array("quantity" => $_POST[$key],"price" => $DB[$product_key_arr[1]]['price']);
	}

    //echo $_SESSION['curriculum']['products'][$i]."<br>";

  } 

/*echo "<pre>";

print_r($_SESSION['curriculum']['cart']);  

echo "</pre>"; exit;*/

  $next_step = SITE_URL."/cart.php";

  header("Location: $next_step", true);

  exit();

}

// Set variables for Step 3

// $total_students = $_SESSION['curriculum']['students'];
$total_students = 0;  // For OPTIONAL items, we don't want to specify how many they should buy [From Client (02/28/14)];

//var_dump($_SESSION['curriculum']['products']);



?>



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

			<div id="logo"><a href="<?php echo SITE_URL; ?>/store.php"><h3>Starfall Store</h3></a></div>

            </div>

            <div class="col-sm-7">

				<h1>Starfall Kindergarten Curriculum</h1>

            </div>

            <div class="col-sm-3"><?php get_dropdown(); ?></div>

            <div class="newClear"></div>



            </div>

		</header>



<section class="container">

   <form method="post"> 

		<div class="row">

			<div class="col-sm-12">

            <a href="<?php echo SITE_URL; ?>">Educators</a> // <a href="<?php echo SITE_URL; ?>/curriculum.php">Curriculum</a> // <a href="<?php echo SITE_URL; ?>/curr-purchase-1.php">Step1</a>  // <a href="<?php echo SITE_URL; ?>/curr-purchase-2.php">Step2</a>  // Step3

            </div>

            </div>

			<div class="space20"></div>

            <div class="col-sm-10 col-sm-push-2">

            <h2>Step 3 of 3</h2>

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

                    	<div class="col-sm-8">

                        <div class="simplleBoldstyle1">Optional Items<br />

                       <span> A typical classroom will have one of these per student. Tip:you may want

to order a few extras for replacements and new student transfers.

						</span></div></div>

                        <div class="col-sm-4 text-left">Price</div>

                        <div class="newClear"></div>

                    </div>

	<?php 

	foreach($DB as $key => $product)

	{

		if($product['type']=='Optional Items')

		{

		$product_id = $key;

	?>

                     <div class="padsim1">

                     	<div class="col-sm-8">

                            <div class="studItemBox">

                                <span><a href="<?php echo SITE_URL; ?>/product-details.php?product_id=<?php echo $product_id; ?>" target="_blank"><img src="product_image/<?php echo $product['product_image']; ?>" alt="25x25" class="img-center img-responsive"></a></span>

                                <div><a href="<?php echo SITE_URL; ?>/product-details.php?product_id=<?php echo $product_id; ?>" target="_blank"><strong><?php echo $product['name']; ?></strong></a><br />

                                <?php echo $product['description']; ?>

                                </div> 

                                <div class="newClear"></div>

                            </div>

                        </div>                       

                        <div class="col-sm-4 text-right">
							<div class="left_price">
							<span id="p_price_<?php echo $product_id; ?>">$<?php echo $product['price']; ?></span><strong> X </strong><input type="text" name="textfield_<?php echo $product_id; ?>" id="textfield_<?php echo $product_id; ?>" value="<?php echo $total_students; ?>">
							</div>
							<div class="right_price">
							<span id="p_cost_<?php echo $product_id; ?>"></span>
							</div>
							<?php if(count($product['price_option'])>0){ ?>
						<div class="text-left" style="clear:both;">
                  
		                    <?php echo "Buy ".$product['price_option']['quantity']." or more for $".$product['price_option']['set_price']." each"; ?>
		                  
		                </div>
		                <?php }  ?>
						</div>                        
                        <div class="newClear"></div>
                     </div> 

<?php } }?>


                    </div>

                   </div>

                </div>

                <div class="clearfix"></div>

                <div class="col-sm-3 fr">        	
        	<div class="totalBox">
            	<div class="totlaBar">
                	<strong>SubTotal: </strong><span id="subtotal">$0.00</span>
                </div>
                <!--<div class="totlaBar">
                	<strong>Shipping: </strong><span>$0.00</span>
                </div>
                <div class="totlaBar">
                	<strong>Tax </strong><span>$0.00</span>
                </div>
                <div class="totlaBar2">
                	<strong>Total </strong><span id="total">$0.00</span>
                </div>-->
            </div>
           			<div class="padsim3">

					<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Add All to Quote"></div>

        		</div>   

				</div>

			</div>

	</form>		

</section>


		<div class="clearfix"></div>
<?php //get_footer(); ?>
<script type="text/javascript">
$(document).ready(function(){
var total = 0;	
	$('.grey-box2 input[type=text]').each(function(index, element) {
		$(this).keyup(function() {
		//alert($(this).attr("id"));
		var id = $(this).attr("id");
		var id_arr = id.split('_');
		var product_id = id_arr[1];
		var product_qty = $(this).val();
	$.ajax({
	url: "<?php echo SITE_URL; ?>/product_set_price.php",
	data: {product_id: product_id , quantity: product_qty},
	success: function( data ) {
	$('#p_price_'+product_id).html('$'+data);
	
		//var price = $('#p_price_'+product_id).html();
		//var split_price_arr = price.split('$');
		//var per_price = parseFloat(split_price_arr[1]);
		//per_price = per_price.toFixed(2);
		var per_price = parseFloat(data);
		if(product_qty=='')
		var product_cost = 0;
		else
		var product_cost = (per_price) * (parseInt(product_qty));
		product_cost = product_cost.toFixed(2);
		//alert(product_cost);
		var p_cost_str = '$'+product_cost;
		$('#p_cost_'+product_id).html(' <strong>=</strong> '+p_cost_str);
	    }
	});
		/*total = parseFloat(total) + parseFloat(product_cost);
		total = total.toFixed(2);
		//alert(total);
		$('#subtotal').html(total);
		$('#total').html(total);*/
		var total = 0;
		$('.grey-box2 input[type=text]').each(function(index, element) {
		var id = $(this).attr("id");
		var id_arr = id.split('_');
		var product_id = id_arr[1];
		var product_qty = $(this).val();
		var price = $('#p_price_'+product_id).html();
		var split_price_arr = price.split('$');
		var per_price = parseFloat(split_price_arr[1]);
		//per_price = per_price.toFixed(2);
		if(product_qty=='')
		var product_cost = 0;
		else
		var product_cost = (per_price) * (parseInt(product_qty));
		product_cost = product_cost.toFixed(2);
		total = parseFloat(total) + parseFloat(product_cost);
		total = total.toFixed(2);
		//alert(total);
		$('#subtotal').html(total);
		//$('#total').html(total);
		});
		});

	});
});
</script>