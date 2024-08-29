<?php
session_start();
 
$_SESSION = array();
 
session_destroy();
 
header('location:../views/front/index.tpl.php'); 
exit;

?>