<?php if (!isset($_SESSION['user']['payment'])) { $_SESSION['user']['payment'] = "cc"; } ?>
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
<!-- JS & CSS prototyping for facebox -->
	<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL; ?>/js/facebox.css">
	<script src="<?php echo THEME_URL; ?>/js/facebox.js"></script>
<!-- JS & CSS prototyping for facebox END -->
	<script type="text/javascript">
	$(document).ready(function() {
		
		$("a.redirect").click(function( event ) {
			event.preventDefault();
			var href = $(this).attr('href');
			var option = $(this).attr('id'); 
			$.ajax({
				type: "POST",
				url: "<?php echo SITE_URL; ?>/redirect.php",
				data: {redirect:href , curr_option:option}
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
				url: "<?php echo SITE_URL; ?>/pm.php",
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
		<a href="#" class="clear-session">Clear SESSION</a>
         <?php foreach($_SESSION as $key => $value):?>

        	<a href="#" class="clear-session btn btn-link primary btn-sm" data-vars="<?php echo $key; ?>">Clear <?php echo $key; ?></a>

    	<?php endforeach; ?>
    	<pre>
    	<?php print_r($_SESSION); ?>

        </pre>
    </div>
	<div class="container">
		<header>
			<!-- Starfall logo -->
			<div id="logo"><h3>Starfall</h3></div>
			<hr>
		</header>