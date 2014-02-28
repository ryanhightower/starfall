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

	if(isset($_POST[$key]) && $_POST[$key]!='')

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

$total_students = $_SESSION['curriculum']['students'];

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

			<div id="logo"><h3>Starfall Store</h3></div>

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

                    	<div class="col-sm-9">

                        <div class="simplleBoldstyle1">Optional Items<br />

                       <span> A typical classroom will have one of these per student. Tip:you may want

to order a few extras for replacements and new student transfers.

						</span></div></div>

                        <div class="col-sm-3 text-right">Price</div>

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

                     	<div class="col-sm-9">

                            <div class="studItemBox">

                                <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span>

                                <div><strong><?php echo $product['name']; ?></strong><br />

                                <?php echo $product['description']; ?>

                                </div> 

                                <div class="newClear"></div>

                            </div>

                        </div>                       

                        <div class="col-sm-3 text-right"><span>$<?php echo $product['price']; ?>&nbsp;</span><input type="text" name="textfield_<?php echo $product_id; ?>" id="textfield_<?php echo $product_id; ?>" value="<?php echo $total_students; ?>"></div>                        

                        <div class="newClear"></div>

                     </div> 

<?php } }?>


                    </div>

                   </div>

                </div>

                <div class="clearfix"></div>

                <div class="col-sm-3 fr">        	

           			<div class="padsim3">

					<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Add All to Quote"></div>

        		</div>   

				</div>

			</div>

	</form>		

</section>


		<div class="clearfix"></div>



<?php //get_footer(); ?>