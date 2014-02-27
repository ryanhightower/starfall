<?php
if (session_status() == PHP_SESSION_NONE) {
//    echo "session_start"."<br>";
    session_start();
}

$redirect = $_POST['redirect'];
$_SESSION['user']['redirect'] = $redirect; 
echo $redirect;
?>