<?php
session_start();
include("includes/functions.php");
$curr_option = $_POST['curr_option'];

if($curr_option == "pre_k")
{
	$_SESSION['curriculum']['pre_k'] ='pre_k';
	if(isset($_SESSION['curriculum']['kindergarten']))
	unset($_SESSION['curriculum']['kindergarten']);
}
else
{
	$_SESSION['curriculum']['kindergarten'] ='kindergarten';
	if(isset($_SESSION['curriculum']['pre_k']))
	unset($_SESSION['curriculum']['pre_k']);
}
$redirect = $_POST['redirect'];
$_SESSION['user']['redirect'] = $redirect; 
echo $redirect;
?>