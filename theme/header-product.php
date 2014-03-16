<?php if (!isset($_SESSION['user']['payment'])) { $_SESSION['user']['payment'] = "cc"; } ?>
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
			var href = $(this).attr('href');
			$.ajax({
				type: "POST",
				url: "redirect.php",
				data: {redirect:href}
			}).done(function( result ) {
				window.location.href = "<?php echo SITE_URL; ?>/purchase-method.php";
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
				window.location.href = redirectLink;
			});
		});

		// .method moved to dropdown.php
		// $('a.method').click(function( event ){

		// 	event.preventDefault();

		// 	var currentId = $(this).attr('id');

		// 	$.ajax({

		// 		type: "POST",

		// 		url: "pm.php",

		// 		data: {method:currentId}

		// 	}).done(function( result ) {

		// 		$("#check").html(result);

		// 	});

		// });

	});

	</script>

</head>

<body>

	<div class="sessions">

    	<pre>

    	<?php print_r($_SESSION); ?>

    	<?php //print_r($_SESSION['curriculum']); ?>

        <?php echo session_name(); ?>

        </pre>

    </div>

	<div class="container">

		<header>

		<div class="col-md-4">

			<!-- Starfall logo -->

			<div id="logo"><a href="<?php echo SITE_URL; ?>/store.php"><h3>Starfall Store</h3></a></div>

			</div>

			<div class="col-md-3 top-links">

			<!--<a href="#">Checkout w/ purchase order</a>-->

			</div>

			<div class="col-md-2 hello">

			<div class="dropdown">

  <a data-toggle="dropdown" href="#">Hi, Ms.Smith</a>

  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">

    <li><a href="#">Start from previous purchase</a></li>

	<li><a href="#">View purchase history</a></li>

	<li><a href="#">Account Settings</a></li>

  </ul>

		</div>

		<script>

		$('.dropdown-toggle').dropdown()



		</script>

			</div>

			<div class="col-md-3"><?php get_dropdown(); ?></div>

			</div>

			<div class="clearfix"></div>

			<hr>

		</header>