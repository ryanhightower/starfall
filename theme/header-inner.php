<!doctype html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Starfall Prototype</title>



	<!-- Stylesheets -->

	<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL; ?>/styles.css">

	<!-- jQuery -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!-- BOOTSTRAP CSS/JS for rapid prototyping -->

	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

	<!-- holder.js temp images -->

	<script src="//cdnjs.cloudflare.com/ajax/libs/holder/2.3.0/holder.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("a.redirect").click(function( event ) {
			event.preventDefault();
			var currentId = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "redirect.php",
				data: {redirect:currentId}
			}).done(function( result ) {
				window.location.href = "/purchase-method.php";
			});
		});
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
		$('a.payment').click(function( event ){
			event.preventDefault();
			var currentId = $(this).attr('id');
			var redirectLink = $(this).attr('href');
			$.ajax({
				type: "POST",
				url: "pm.php",
				data: {method:currentId, redirect:redirectLink}
			}).done(function( data ) {
				if(redirectLink == "#"){
					location.reload(true);
				}else{
					window.location.href = redirectLink;
				}
				
			});
		});
		// TODO: Combine ajax functions into one ajax.php file.
		//
		// $('a#clear-session').click(function( event ){
		// 	event.preventDefault();
		// 	var redirectLink = $(this).attr('href');
		// 	var clear = "clear";
		// 	$.ajax({
		// 		type: "POST",
		// 		url: "ajax.php",
		// 		data: {clear:clear}
		// 	}).done(function( data ) {
		// 		window.location.href = redirectLink;
		// 	});
		// });
	});
	</script>



</head>

<body>

	<div class="sessions">
    	<pre>
    	<?php print_r($_SESSION); ?>
        </pre>
        <?php // TODO: create?>
        <!-- <a id="clear-session" href="#">Clear Session</a> -->
    </div>
