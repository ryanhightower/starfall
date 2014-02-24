<?php  include("includes/functions.php");

if ($_GET['payment']) { $_SESSION['user']['payment'] = $_GET['payment']; }

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

  $location = SITE_URL."/curr-purchase-2.php";

  // $_SERVER['curriculum']['returning'] = $_POST['radio'];

  //echo $_SERVER['curriculum']['returning'];



  header("Location: $location", true);

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

				<h1>Starfall Kindergarten Curriculum</h1>

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



<form method="post">

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

                <div class="col-sm-9">

					

                    

                    <div class="row">

                    <div class="grey-box">

                      <h3 class="text-center">Have you purchased this Curriculum before? </h3>

                      <p>

                        

                        <label for="radio"><input type="radio" name="return" id="radio" value="no"> No. Help me calculate how many materials I need.</label>

                      </p>

                      <p>

                        

                        <label for="radio"><input type="radio" name="return" id="radio" value="yes"> Yes.Take me straight to the itemized order form.</label>

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

                      <p>

                        <input type="text" name="textfield3" id="textfield3">

                        <label for="textfield3"> Classroom 1 Students</label>

                      </p>

                      <p>

                        <input type="text" name="textfield4" id="textfield4">

                        <label for="textfield4"> Classroom 2 Students</label>

                      </p>

                      <p>

                        <input type="text" name="textfield5" id="textfield5">

                        <label for="textfield5"> Classroom 3 Students</label>

                      </p>

                      <p>

                        <input type="submit" name="multiple-class" id="button" value="Next Step" class="btn btn-primary">

                      </p>

                    </div>

                    </div>

                  </div>

                   

				</div>

				

			</div>



			

</section>

</form>

		

		<div class="clearfix"></div>







<script type="text/javascript">

  $(document).ready(function(){ 

      $("div.conditional-1").hide();

      $("div.conditional-2").hide();

      $("input[name$='return']").change(function() {

          var test = $(this).val();

          $("div.conditional-1").hide();

          $("#"+test).show();

      }); 



      $("input[name$='classrooms']").change(function() {

          var test = $(this).val();

          $("div.conditional-2").hide();

          if(test=="single"){

            $("#"+test).show();

          }else if(test=="multiple"){

            $("#"+test).show();

            $('#num-classrooms').blur(function() {

              var $num = $(this).val();

              console.log($num);

              $("#"+test).show();

              var $elem;

              for (var i=0;i<$num;i++)

              { 



                var input = $("<input/>", {

                  class: "class",

                  type: "text",

                  val: "2"

                });

                $($elem).add(input);

                

              }

              console.log($elem);

            })

            



          }

      });



  });

</script>



<?php get_footer(); ?>