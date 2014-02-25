<?php
$redirect = $_POST['redirect'];
$_SESSION['user']['redirect'] = $redirect; 
echo $redirect;
?>