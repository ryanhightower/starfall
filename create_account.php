<?php  include("includes/functions.php");
if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}


if(isset($_POST['create_account'])){

//print_r($_SESSION);

 // array_pop($_POST);

  // Store Product values and move to next step
// var_dump($_POST);
$i=0; 
foreach($_POST as $key => $value)

{ $i++;

// $user_key_arr =explode('_',$key);

// var_dump($user_key_arr);

      if(isset($_POST[$key]) && $_POST[$key]!='')

      {

        $_SESSION['user']['account'][$key]= $value;

      }

    //echo $_SESSION['curriculum']['products'][$i]."<br>";

  } 

  $next_step = SITE_URL."/checkout-po.php";
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
			<div id="logo"><a href="<?php echo SITE_URL; ?>/store.php"><h3>Starfall Store</h3></a></div>
            </div>
            <div class="col-sm-7">
				<h1>Create Account</h1>
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
            <a href="<?php echo SITE_URL; ?>">Educators</a> // Create an Account
      </div>
    </div>
			<div class="space20"></div>
          
            <div class="space20"></div>
			<div class="col-sm-12">
				<div class="row">
                <div class="col-sm-3">
                <img data-src="holder.js/150x150" alt="150x150" class="img-circle img-center img-responsive">
                <div class="space20"></div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
					<form method="post" name="create_account" id="create_account">
                    <div class="grey-box">
                    
                      <div class="col-sm-9 credit_card">
                        <h3 class="text-center">User Information</h3>
                        <label>Username</label><input name="username" type="text" />
                        <label>Password</label><input name="password" type="password" />
                        <label>Confirm Password</label><input name="password-confirm" type="password" />
                      </div>
                      
                      <div class="col-sm-9 credit_card">
                        <h3 class="text-center">Shipping Address</h3>
                        <!-- <label>Credit Card No.</label><input name="" type="text" />
                        <label>Expiration Date</label><input name="" type="text" />
                        <label>CVV#</label><input name="" type="text" />  
                        <input type="submit" name="btnsubmitpre" id="btnsubmitpre" value="Complete Purchase" class="btn btn-primary"> -->


                        
                        <p>
                          Enter Your Shipping Information<b> <em>Fields marked with <b>*</b> are required.</em></b>
                          <br>
                          Please enter all required information 
                        </p> 

                        <p> 
                            <label>Shipping Address Type:</label>
                            
                            <select name="Address_Type">
                                <option value="">** Specify Residential or School **</option>
                                <option value="B" selected="">School/Business</option>
                                <option value="R">Residential</option>
                            </select>
                        </p>
                        <p> 
                            <label>School/Business Name: </label>
                            
                            
                            <input type="text" name="School_or_Business_Name" size="33" maxlength="35" value="">
                            <br><em class="v10">(Required if School)</em>
                        </p>
                        <p>
                          <label>First Name: *</label>
                            
                          <input type="text" name="First_Name" value="" size="20" maxlength="35">
                        </p>

                          
                            
                          
                          <p>
                            <label>Last Name: *</label>
                            
                            
                            <input type="text" name="Last_Name" value="" size="20" maxlength="35">
                          </p>

                          
                            
                          
                          <p>
                            <label>Street Address: *</label>
                            
                            
                            <input type="text" align="middle" name="Street_Address" size="33" maxlength="35" value="">
                          </p>
                            
                            
                          <p>
                            <label>room, apt or c/o:</label>
                            
                            
                            <input type="text" name="Address_Line_2" size="33" maxlength="35" value="">
                          </p>
                            
                          

                          
                            
                          
                          <p>
                            <label>City: *</label>
                            
                            
                            <input type="text" name="City" size="20" maxlength="20" value="">
                          </p>

                          
                            
                          
                          <p>
                            <label>State/Province: *</label>
                            
                            
                            
                            <select name="State_or_Province" onchange="javascript:State_or_ProvinceChanged ()">
                              <option value="">Select State/Province</option>
                              <option value="AL">Alabama</option>
                              <option value="AB">Alberta - CAN</option>
                              <option value="AK">Alaska</option>
                              <option value="AZ">Arizona</option>
                              <option value="AR">Arkansas</option>
                              <option value="BC">Brtsh Clmbia - CAN</option>
                              <option value="CA">California</option>
                              <option value="CO">Colorado</option>
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="DC">District of Columbia</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="GU">Guam</option>
                              <option value="HI">Hawaii</option>
                              <option value="ID">Idaho</option>
                              <option value="IL">Illinois</option>
                              <option value="IN">Indiana</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="ME">Maine</option>
                              <option value="MB">Manitoba - CAN</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NV">Nevada</option>
                              <option value="NB">New Brnswck - CAN</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NM">New Mexico</option>
                              <option value="NY">New York</option>
                              <option value="NL">Nwfndlnd &amp; Lbrdr - CAN</option>
                              <option value="NC">North Carolina</option>
                              <option value="ND">North Dakota</option>
                              <option value="NT">Northwest Terr. - CAN</option>
                              <option value="NS">Nova Scotia - CAN</option>
                              <option value="NU">Nunavut - CAN</option>
                              <option value="OH">Ohio</option>
                              <option value="OK">Oklahoma</option>
                              <option value="ON">Ontario - CAN</option>
                              <option value="OR">Oregon</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="PE">Prnce Edwrd Is. - CAN</option>
                              <option value="PR">Puerto Rico</option>
                              <option value="QC">Quebec - CAN</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SK">Saskatchewan - CAN</option>
                              <option value="SC">South Carolina</option>
                              <option value="SD">South Dakota</option>
                              <option value="TN">Tennessee</option>
                              <option value="TX">Texas</option>
                              <option value="AA">US Military - AA</option>
                              <option value="AE">US Military - AE</option>
                              <option value="AP">US Military - AP</option>
                              <option value="UT">Utah</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="VI">Virgin Islands (US)</option>
                              <option value="WA">Washington</option>
                              <option value="DC">Washington, DC</option>
                              <option value="WV">West Virginia</option>
                              <option value="WI">Wisconsin</option>
                              <option value="WY">Wyoming</option>
                              <option value="YT">Yukon Terr. - CAN</option>
                            </select><b class="a12">*</b>
                          </p>

                          
                            
                          
                          <p>
                            <label>Zip/Postal Code: *</label>
                            
                            
                            <input type="text" name="Zip_or_Postal_Code" size="12" maxlength="20" value="">
                          </p>

                          
                            
                          
                          <p>
                            <label>Country: * </label>
                            
                            <select name="Country" onchange="javascript:CountryChanged ()">
                              <option value="US" selected="">United States</option>
                              <option value="CA">Canada</option>
                              <option value="PR">Puerto Rico</option>
                              <option value="VI">Virgin Islands (US)</option>
                            </select>
                            <br><a href="javascript:goIntl()">Shipping to Other Countries</a>
                          </p>
                         
                            
                          
                          <p>
                            <label>Phone Number: *</label>
                            
                            
                            <input type="text" name="Phone_Number" size="20" maxlength="25" value="">
                            
                            <br><em>Phone needed for shipping problems only.</em>
                            
                          </p>

                          
                            
                          
                          <p>
                            <label>Email Address: *</label>
                            
                            
                            <input name="Email_Address" type="text" size="30" maxlength="50" value="">
                            
                        
                            <label>Retype Email:</label>
                            
                            
                            <input type="text" name="Retype_Email_to_Confirm" value="" size="30" maxlength="50">
                            <br>
                            <em class="v10">Email used only to confirm order. It is <b>kept private</b> (No email lists!)</em>
                          </p>
                            
                          

                          
                            
                          
                          
                            
                          <p>   
                            <input type="checkbox" align="middle" name="Same_address_for_billing" value="1" checked="">
                              Check here if this address is also your billing address.
                          </p>
                                  
                            <input type="submit" class="btn btn-large btn-success" name="create_account" value="  Generate Price Quote  " style="font-weight:bold;">
                            
			
                      </div>
                      <div class="newClear"></div>
					  	
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
      
  });
</script>
<?php get_footer(); ?>