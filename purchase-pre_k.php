<?php  include("includes/functions.php");
if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}
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

if(isset($_POST['btnsubmitpre'])){
 array_pop($_POST);
 $_SESSION['Pre_K_Curriculum']['cart']= $_POST;
//echo "<pre>"; 
//print_r($_SESSION['Pre_K_Curriculum']['cart']); echo "</pre>"; exit;
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
  					<a data-toggle="dropdown" href="#" class="check" id="check"><?php echo $payMethod; ?></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li class="one"><a href="#" id="po" class="method">Checkout w/ purchase order</a></li>
                        <li class="two"><a href="#" id="cc" class="method">Checkout w/ credit card</a></li>
                        <li class="three"><a href="#" id="off" class="method">Checkout offline (mail/phone)</a></li>
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
            <!-- <div class="col-sm-10 col-sm-push-2">
            <h2>Step 1 of 3</h2>
            </div> -->
            <div class="space20"></div>
			<div class="col-sm-12">
				<div class="row">
                <div class="col-sm-3">
                <img data-src="holder.js/150x150" alt="150x150" class="img-circle img-center img-responsive">
                <div class="space20"></div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
					<form method="post" name="frmpre_k" id="frmpre_k">
					<input type="hidden" name="curriculum_price" id="curriculum_price" value="199.99">
                    <div class="grey-box">
                      <h3 class="text-center"></h3>

                      
                      <div class="col-sm-9">
                            <div class="studItemBox">
                                <!-- <span><img data-src="holder.js/25x25" alt="25x25" class="img-circle img-center img-responsive"></span> -->
                                <div><strong><?php //echo $product['name']; ?>Pre-K Curriculum Kit</strong> $395.00<br />
                                <?php // echo $product['description']; ?> Everything you need for your Pre-K classroom!
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div>                       
                        <div class="col-sm-3"><span><?php // $_SESSION['product_'.$product_id] = $product['price']; echo $product['price']; ?>&nbsp;</span>
                          <!-- <input type="text" name="product_<?php echo $product_id; ?>" id="product_<?php echo $product_id; ?>" value=""> -->
                        </div>
                        <div class="newClear"></div>
                    
                     <!--  <p>
                        <label for="radio">Pre-K Curriculum Kit $199.99 <input type="text" name="pre_kvalue" id="pre_kvalue" value=""> </label>
                      </p> -->
                      <div class="col-sm-9">
                        <label for="radio">Membership type</label>
            						<ol>
            							<li><input type="radio" name="option_member" id="option_member1" checked value="70"> Teacher price: $70 </li>
            							<li><input type="radio" name="option_member" id="option_member2" value="150"> Classroom price: $150</li>
            							<li><input type="radio" name="option_member" id="option_member3" value="270"> School price: $270 </li>
            						</ol>
                      </div>
                      <div class="newClear"></div>
					  	<p>
                        <input type="submit" name="btnsubmitpre" id="btnsubmitpre" value="Add to Cart" class="btn btn-primary">
                      </p>
                    </div>
					</form>
                    </div>
                    <div class="space20"></div>
                    
                  </div>
				</div>
			</div>
</section>
</form>
		<div class="clearfix"></div>
<script type="text/javascript">
  $(document).ready(function(){ 
      // Hide divs to start
      $("div.conditional-1").hide();
      $("div.conditional-2").hide();
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
          $("div.conditional-1").hide();
          $("#"+div).show();
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