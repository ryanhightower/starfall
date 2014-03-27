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
//session_destroy();
if(isset($_POST['btnsubmitpre'])){
 array_pop($_POST);
$pre_classroom = $_POST['pre_classroom'];
$_SESSION['curriculum']['cart'][$_POST['Pre_K_id']]= array("quantity" => $pre_classroom,"price" => $_POST['curriculum_price']);
$_SESSION['curriculum']['cart'][$_POST['member_id']]= array("quantity" => 1,"price" => $_POST['option_member']);
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
			<div id="logo"><h3>Starfall Store</h3></div>
            </div>
            <div class="col-sm-7">
				<h1>Starfall Pre-K Curriculum</h1>
            </div>
            <div class="col-sm-3"><?php get_dropdown(); ?></div>
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
                    <div class="grey-box">
                      <h3 class="text-center"></h3>
	<?php 
	foreach($DB as $key => $product)
	{
		if($product['type']=='Pre-K Curriculum')
		{
		$product_id = $key;
	?><input type="hidden" name="curriculum_price" id="curriculum_price" value="<?php echo $product['price']; ?>">
	<input type="hidden" name="Pre_K_id" id="Pre_K_id" value="<?php echo $key; ?>">
                      <div class="col-sm-9">
                            <div class="studItemBox">
                                <div><strong><?php echo $product['name']; ?></strong> $<?php echo number_format($product['price'], 2); ?>&nbsp;&nbsp;<label for="textfield2"><input type="text" name="pre_classroom" id="pre_classroom" value="1" /> Classrooms </label><br />
                                <?php echo $product['description']; ?>
                                </div> 
                                <div class="newClear"></div>
                            </div>
                        </div> 
	<?php } }?>						
                      
                        <div class="newClear"></div>
	<?php 
	foreach($DB as $key => $product)
	{
		if($product['type']=='Pre-K member')
		{
		$product_id = $key;
	?><input type="hidden" name="member_id" id="member_id" value="<?php echo $key; ?>">
                      <div class="col-sm-9">
                        <label for="radio"><?php echo $product['name']; ?></label>
            						<ul style="list-style:none;">
									<?php foreach($product['type_option'] as $opt => $val_type)
									{
									?>
            							<li><input type="radio" name="option_member" id="option_member_<?php echo $opt; ?>" <?php if($opt==1){echo 'checked';} ?> value="<?php echo $val_type['op_price']; ?>"> &nbsp; &nbsp; $<?php echo number_format($val_type['op_price'], 2); ?> <?php echo $val_type['op_name']; ?> </li>
									<?php } ?>
            						</ol>
                      </div>
	<?php } }?>
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