$(document).ready(function() {

		// $('a.payment').click(function( event ){
		// 	event.preventDefault();
		// 	var currentId = $(this).attr('id');
		// 	var redirectLink = $(this).attr('href');
		// 	$.ajax({
		// 		type: "POST",
		// 		url: "pm.php",
		// 		data: {method:currentId, redirect:redirectLink}
		// 	}).done(function( data ) {
		// 		window.location.href = redirectLink;
		// 	});
		// });

		// Allow user to select payment method on purchase-method.php and cart.php
		$('a.payment').click(function( event ){
			event.preventDefault();
			var currentId = $(this).attr('id');
			var redirectLink = $(this).attr('href');
			$.ajax({
				type: "POST",
				url: "<?php echo SITE_URL; ?>/includes/ajax.php",
				data: {fun:"payment", method:currentId, redirect:redirectLink}
			}).done(function( data ) {
				if($("#price-quote")!= undefined){
					// We're on the cart.php. Do this.
					$("#price-quote").html(data);
					if(currentId == "po"){
						$("#po").html("Pay with Credit Card");
						$("#price-quote").attr('href', '<?php echo SITE_URL; ?>/checkout-po.php' );
						$('#po').attr('id', 'cc');
					}if(currentId == "cc"){
						$("#cc").html("Convert to Quote");
						$("#price-quote").attr('href', '<?php echo SITE_URL; ?>/checkout-cc.php' );
						$('#cc').attr('id', 'po');
					}

				} else {
					// We're on purchase-method.php. Do this.
					window.location.href = redirectLink;
				}
				
				
			});
		});
		
		
		// Redirect from home page Curriculum links to purchase-method.php.
		$("a.redirect").click(function( event ) {
			event.preventDefault();
			var href = $(this).attr('href');
			$.ajax({
				type: "POST",
				url: "<?php echo SITE_URL; ?>/redirect.php",
				data: {redirect:href}
			}).done(function( result ) {
				window.location.href = "<?php echo SITE_URL; ?>/purchase-method.php";
			});
		});

		// Clear SESSION variables for testing.
		$('a.clear-session').click(function( event ){
			event.preventDefault();
			var currentId = $(this).attr('id');
			var vars = $(this).data('vars');
			$.ajax({
				type: "POST",
				url: "<?php echo SITE_URL; ?>/includes/ajax.php",
				data: {fun:"clear-session", vars:vars}
			}).done(function( data ) {
				console.log(data);
				window.location.reload();
			
			});
		});
		
		
});