<?php 
$conn = mysqli_connect('localhost', 'root', '', 'bansim');	
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}				
?>