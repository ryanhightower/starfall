
<?php include_once(dirname(__DIR__).'/includes/functions.php'); ?>
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
				window.location.href = redirectLink;
			});
		});
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
			<!-- Starfall logo -->
			<div id="logo"><h3>Starfall</h3></div>
			<hr>
		</header>