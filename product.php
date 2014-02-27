<?php include("includes/functions.php");
if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}

get_header(); ?>

<?php get_footer(); ?>