
<?php include("includes/functions.php");

get_header(); 

// Intermediate EDUCATOR Store Page
// Description: This page asks the user what payment method they wish to use.
// Options are "Institution (P.O.)", "Personal (CC)", "Offline (Mail, fax, phone). 
// After the user makes their selection, the page should redirect them to the original
// route they were going to. 
?>

<section class="container">
		<div class="row">
			<div class="col-sm-12">
            
            </div>
            </div>
			<div class="space20"></div>
			<div class="col-sm-12">
				<div class="row">
                <div class="col-sm-2">
                <img data-src="holder.js/150x150" alt="150x150" class="img-center img-responsive">
                <div class="space20"></div>
                </div>
                <div class="col-sm-10 form-group">
				  	<h1>Help Us Serve You</h1>
					<h2>I’m a returning Customer</h2>
                    <div class="space20"></div>
                    <div class="row">
						<form>
							<div class="col-sm-3">
								<label for="textfield">Customer Number</label><br>
								<input type="text" name="textfield" id="textfield">
							</div>
							<div class="col-sm-3">
								<label for="textfield2">Password</label><br>
								<input name="textfield2" type="password" id="textfield2" autocomplete="off">
							</div>
							<div class="col-sm-3"><br>
								<input type="button" value="Sign In" class="btn btn-primary">
							</div>
						</form>
                    </div>
                    <div class="space20"></div>
                    <div class="row">
                      <h2>Coninue as a guest, 3 ways to shop!</h2>
                      <p>You can create an account at checkout etc...Schools in the US and Canada can pay by purchase order. Choose purchase order below to create a pricequote etc...</p>
                    </div>
                    <div class="row">
                    	<form method="post">
							<div class="col-sm-4">
								<a href="curr-purchase-1.php"><p><img data-src="holder.js/150x150" alt="150x150" class="img-circle img-center img-responsive" /></p>
								<p>I want to create a Price Quote and pay by PURCHASE ORDER</p></a>
								
							</div>
							<div class="col-sm-4">
								<a href="curr-purchase-1.php">
								<p><img data-src="holder.js/150x150" alt="150x150" class="img-circle img-center img-responsive"></p>
								<p>I want to browse products and pay by CREDIT CARD</p>	
								</a>
							</div>
							<div class="col-sm-4">
								<a href="curr-purchase-1.php">
								<p><img data-src="holder.js/150x150" alt="150x150" class="img-circle img-center img-responsive"></p>
								<p>I want to create a Price Quote and pay OFFLINE by credit card or check .</p>
								</a>
							</div>
						</form>
					</div>
                </div>
                   
				</div>
				
			</div>

			
</section>

		
		<div class="clearfix"></div>




<?php get_footer(); ?>