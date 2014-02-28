<?php

if ($_SESSION['user']['payment'] == "po") { $payMethod = "Checkout w/ purchase order"; }
elseif ($_SESSION['user']['payment'] == "cc") { $payMethod = "Checkout w/ credit card"; }
elseif ($_SESSION['user']['payment'] == "off") { $payMethod = "Checkout offline (mail/phone)"; }

?>


 <div class="dropdown top_rightCorner">
		<a data-toggle="dropdown" href="#" class="check" id="check"><?php echo $payMethod; ?></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">	
              <li class="one"><a href="#" id="po" class="method">Checkout w/ purchase order</a></li>
              <li class="two"><a href="#" id="cc" class="method">Checkout w/ credit card</a></li>
              <li class="three"><a href="#" id="off" class="method">Checkout offline (mail/phone)</a></li>
            </ul>
</div>

<script type="text/javascript">
$(document).ready(function() {
		$('a.method').click(function( event ){
			event.preventDefault();
			var currentId = $(this).attr('id');
			var redirectLink = $(this).attr('href');
			$.ajax({
				type: "POST",
				url: "pm.php",
				data: {method:currentId, redirect:redirectLink}
			}).done(function( data ) {
				$("#check").html(data);
			});
		});
});
</script>