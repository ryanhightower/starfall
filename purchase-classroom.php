<?php  include("includes/functions.php");


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

				<h1>Starfall Classroom Membership</h1>

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

            <a href="<?php echo SITE_URL; ?>">Educators</a> // Classroom Membership

      </div>
    </div>

			



			

</section>

</form>

		

		<div class="clearfix"></div>







<script type="text/javascript">

  $(document).ready(function(){ 

  });

</script>



<?php get_footer(); ?>