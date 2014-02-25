<?php  include("includes/functions.php");

if ($_SESSION['user']['payment'] == "po") { $payMethod = "Checkout w/ purchase order"; }
elseif ($_SESSION['user']['payment'] == "cc") { $payMethod = "Checkout w/ credit card"; }
elseif ($_SESSION['user']['payment'] == "off") { $payMethod = "Checkout offline (mail/phone)"; }


// Set variables for form and move to next step
if(isset($_POST['single-class'])){
  $_SESSION['curriculum']['returning'] = $_POST['return'];
  $_SESSION['curriculum']['classrooms'] = $_POST['classrooms']=="single" ? 1 : $_POST['num-classrooms'];
  $_SESSION['curriculum']['students'] = $_POST['students'];
  $location = SITE_URL."/curr-purchase-2.php";
  // $_SERVER['curriculum']['returning'] = $_POST['radio'];
  //echo $_SERVER['curriculum']['returning'];
  header("Location: $location", true);
  exit();
} elseif(isset($_POST['multiple-class'])){
  $_SESSION['curriculum']['returning'] = $_POST['return'];
  $_SESSION['curriculum']['multiclassroom'] = 'yes';

  $_SESSION['curriculum']['classrooms'] = $num = $_POST['classrooms']=="single" ? 1 : $_POST['num-classrooms'];
  $_SESSION['curriculum']['students'] = 0;
  for($i=0;$i<$num; $i++ ){
    $_SESSION['curriculum']['students'] += $_POST['class'.$i];  
  }
  //$_SESSION['curriculum']['students'] = $_POST['students'];
  $location = SITE_URL."/curr-purchase-2.php";
  // $_SERVER['curriculum']['returning'] = $_POST['radio'];
  //echo $_SERVER['curriculum']['returning'];
  header("Location: $location", true);
  exit();
}
//session_destroy();
if(isset($_POST['submit'])){
//print_r($_SESSION); 
 array_pop($_POST);
  // Store Product values and move to next step
foreach($_POST as $key => $row)
{ 
$product_key_arr =explode('_',$key);
	if(isset($_POST[$key]) && $_POST[$key]!='')
	{
		$_SESSION['curriculum']['cart'][$product_key_arr[1]]= array("quantity" => $_POST[$key],"price" => $_SESSION[$key]);
	}
    //echo $_SESSION['curriculum']['products'][$i]."<br>";
  } 
// echo "<pre>";
//print_r($_SESSION['curriculum']['cart']);   echo "</pre>"; exit;
  $next_step = SITE_URL."/cart.php";
  header("Location: $next_step", true);
  exit();
}
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
			<div id="logo"><h3>Starfall</h3></div>
            </div>
            <div class="col-sm-7">
				<h1>Starfall Pre-K Curriculum</h1>
            </div>
            <div class="col-sm-3">
            	<div class="dropdown top_rightCorner">
  					<a data-toggle="dropdown" href="#" class="check">Checkout w/ purchase order</a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li class="one"><a href="#">Checkout w/ credit card</a></li>
                        <li class="two"><a href="#">Checkout offline (mail/phone)</a></li>
                      </ul>
				</div>
            </div>
            <div class="newClear"></div>
            </div>
		</header>

<section class="container">
		<div class="row">
			<div class="col-sm-12">
            <a href="<?php echo SITE_URL; ?>">Educators</a> // <a href="<?php echo SITE_URL; ?>/curriculum.php">Curriculum</a> // Step1  
            </div>
            </div>
			<div class="space20"></div>
            <div class="col-sm-10 col-sm-push-2">
            <h2>Step 1 of 3</h2>
            </div>
            <div class="space20"></div>
			<div class="col-sm-12">
				<div class="row">
                <div class="col-sm-3">
                <img data-src="holder.js/150x150" alt="150x150" class="img-circle img-center img-responsive">
                <div class="space20"></div>
                </div>
	<form method="post">
                <div class="col-sm-9">
                    <div class="row">
                    <div class="grey-box">
                      <h3 class="text-center">Have you purchased this Curriculum before? </h3>
                      <p>
                        <label for="radio"><input type="radio" name="return" id="radio_no" value="no"> No. Help me calculate how many materials I need.</label>
                      </p>
                      <p>
                        <label for="radio"><input type="radio" name="return" id="radio_yes" value="yes"> Yes.Take me straight to the itemized order form.</label>
                      </p>
                    </div>
                    </div>
                    <div class="space20"></div>
                    <div class="row">
                    <div id="no" class="grey-box conditional-1">
                      <h3 class="text-center">Multiple Classrooms or Just one?</h3>
                      <p>
                        <label for="radio3"><input type="radio" name="classrooms" id="radio3" value="single"> Just One</label>
                      </p>
                      <p>
                        <label for="radio4"><input type="radio" name="classrooms" id="radio4" value="multiple"> 
                        <input type="text" name="num-classrooms" id="num-classrooms">&nbsp;Classrooms</label>
                      </p>
                    </div>
                    </div>
                    <div class="space20"></div>
                    <div class="row">
                    <div id="single" class="grey-box conditional-2">
                      <h3 class="text-center">How many students do you have in your class?</h3>
                      <p>
                        The recommended number of materials will be based on this number.
                      </p>
                      <p>
                         <label for="textfield2"><input type="text" name="students" id="textfield2"> Students</label>
                      </p>
                      <p>
                        <input type="submit" name="single-class" id="button" value="Next Step" class="btn btn-primary">
                      </p>
                    </div>
                    </div>
                    <div class="space20"></div>
                    <div class="row">
                    <div id="multiple" class="grey-box conditional-2">
                      <h3 class="text-center">How many students in each classroom?</h3>
                      <p>
                        The recommended number of materials will be based on this number.
                      </p>
                          <div id="multiple-inputs">
                          </div>
                        <input type="text" name="textfield3" id="textfield3">
                        <label for="textfield3"> Classroom 1 Students</label>

                        <input type="text" name="textfield4" id="textfield4">
                      <p>
                        <input type="submit" name="multiple-class" id="button" value="Next Step" class="btn btn-primary">
                      </p>
                    </div>
                    </div>
                  </div>
	</form>
	<div class="col-sm-12" id="yes">
	<form name="frmquote" id="frmquote" method="post">
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
                        <div class="col-sm-3"><span>$<?php 
						$_SESSION['product_'.$product_id] = $product['price']; echo $product['price'];?>&nbsp;</span><input type="text" name="product_<?php echo $product_id; ?>" id="product_<?php echo $product_id; ?>" value=""></div>                        
                        <div class="newClear"></div>
                     </div> 
	<?php } }?>
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
                        <div class="col-sm-3"><span>$<?php $_SESSION['product_'.$product_id] = $product['price']; echo $product['price']; ?>&nbsp;</span><input type="text" name="product_<?php echo $product_id; ?>" id="product_<?php echo $product_id; ?>" value=""></div>                        
                        <div class="newClear"></div>
                     </div>
	<?php } } ?>
                     <div class="padsim1">
                    	<div class="col-sm-9">
                        <div class="simplleBoldstyle1">Optional Items<br />
                       <span> A typical classroom will have one of these per student. Tip:you may want
to order a few extras for replacements and new student transfers.
						</span></div></div>
                        <div class="col-sm-3">Price</div>
                        <div class="newClear"></div>
                    </div>	
 	<?php 
	foreach($DB as $key => $product)
	{
		if($product['type']=='Optional Items')
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
                        <div class="col-sm-3"><span>$<?php $_SESSION['product_'.$product_id] = $product['price']; echo $product['price']; ?>&nbsp;</span><input type="text" name="product_<?php echo $product_id; ?>" id="product_<?php echo $product_id; ?>" value=""></div>                        
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
			</form>	
			</div>
				</div>
			</div>
</section>
		<div class="clearfix"></div>
<script type="text/javascript">
  $(document).ready(function(){ 
      // Hide divs to start
      $("div.conditional-1").hide();
      $("div.conditional-2").hide();
	  $("#yes").hide();
      $q1 = $("input[name$='return']");
      // Check if divs should already be shown
        $val1 = $("input:checked");
         if($val1 != undefined){
          $val1.each(function(index){
            var div = $( this ).val();
            $("#"+div).show();
          });
         } 
      // Show divs when selected
      $q1.change(function() {
          var div = $(this).val();
		  if(div == 'no')
		  {
          $("div.conditional-1").hide();
		  $("#yes").hide();
          $("#"+div).show();
		  }else
		  {
		  $("#"+div).hide();
		  $("div.conditional-1").hide();
		  $("div.conditional-2").hide();
          $("#"+div).show();
		  }
      }); 
      $("input[name$='classrooms']").change(function() {
          var test = $(this).val();
          $("div.conditional-2").hide();
          if(test=="single"){
            $("#"+test).show();
          } else if(test=="multiple"){
            // MULTIPLE CLASSROOMS
            // need to calculate how many fields to show
            $("#"+test).show();
            $('#num-classrooms').blur(function() {
              var $num = $(this).val();
              // console.log($num);
              $("#"+test).show();
              var elem;
              for (var i=0;i<$num;i++)
              { 
                var p = $("<p/>", {
                  class: "class-"+i
                });
                var input = $("<input/>", {
                  id: "class"+i,
                  type: "text",
                  name: "class"+i
                });
                var label = $("<label/>", {
                  html: "Classroom "+(i+1)+" Students"
                });
                p.append(input).append(" ").append(label);
                $('#multiple-inputs').append(p);
                //$(elem).add(input);
              }
              // console.log($elem);
            })
          }
      });
  });
</script>


<?php get_footer(); ?>