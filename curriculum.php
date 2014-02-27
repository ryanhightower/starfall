<?php include("includes/functions.php");
if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}

get_header(); ?>
		
		<section class="container">
			<a href="<?php echo SITE_URL; ?>">Educators</a> // Curriculum 
			<!-- Sidebar above fold -->
			
			<div class="col-sm-12">
				<div class="row">
                <div class="col-sm-9">
					<img data-src="holder.js/150x150" alt="150x150" class="img-circle pull-left img-responsive">
					<h1>Kindergarten Curiculum</h1>
					<p>Lorem ipsum Aute in pariatur aliquip qui in veniam aliqua pariatur adipisicing mollit cupidatat quis laboris tempor in officia in irure ut fugiat mollit velit exercitation in. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					
                    </div>
                    <div class="col-sm-3 purchse-btn">
                    <a href="<?php echo SITE_URL; ?>/curr-purchase-1.php" class="btn btn-primary btn-lg">Purchase</a><br>
                    <a href="" class="btn-link">Download At a Glance</a><br>
                    <a href="" class="btn-link">Download Catalog</a>
                    </div>
				</div>
				<div class="row">
					<div class="col-sm-12">
                    <img data-src="holder.js/150x150" alt="150x150" class="img-circle pull-left img-responsive">
						<h2>Research Based</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
                <div class="row">
					<div class="col-sm-12">
                    <img data-src="holder.js/150x150" alt="150x150" class="img-circle pull-left img-responsive">
						<h2>Imagination</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
                <div class="row">
					<div class="col-sm-10 col-sm-push-2">
						<h2>Kits Include</h2>
						<ul class="list">
                        	<li>Sed ut perspiciatis unde omnis iste natus</li>
                            <li>Serror sit voluptatem accusantium doloremque laudantium</li>
                            <li>Totam rem aperiam, eaque ipsa quae ab illo </li>
                            <li>Inventore veritatis et quasi architecto beatae</li>
                        </ul>
                        <ul class="list">
                        	<li>At vero eos et accusamus et iusto odio dignissimos</li>
                            <li>Qui blanditiis praesentium voluptatum deleniti atque</li>
                            <li>Corrupti quos dolores et quas molestias excepturi</li>
                            <li>Similique sunt in culpa qui officia deserunt mollitia animi</li>
                        </ul>
					</div>
				</div>
			</div>

			
		</section>

	
<?php get_footer(); ?>