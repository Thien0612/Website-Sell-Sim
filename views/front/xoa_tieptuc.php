<?php
session_start();
if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
//xóa sp trong giỏ hàng
if(isset($_GET['delid'])&&($_GET['delid']>=0)){
   array_splice($_SESSION['giohang'],$_GET['delid'],1);
}
header('location:cart.tpl.php');

?>