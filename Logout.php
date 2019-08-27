<?php
session_start();
session_destroy();
header('location:login.php');
unset($SESSION['username']);
$SESSION['message']="You Are now logged out";
?>
