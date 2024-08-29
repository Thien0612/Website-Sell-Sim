<?php

$conn = mysqli_connect('localhost', 'root', '', 'bansim');
$s = "SELECT * FROM lienhe";
$q = mysqli_query($conn,$s);

if(isset($_GET['delete'])){

    $delete_kh=$_GET['delete'];
    $sql_kh="DELETE FROM lienhe where id_lienhe=$delete_kh";
    $query=mysqli_query($conn,$sql_kh);
    header('location:../views/admin/lienhe.tpl.php'); 
}

?>