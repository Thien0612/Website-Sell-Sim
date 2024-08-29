<?php
    $conn = mysqli_connect('localhost', 'root', '', 'bansim');	
    $phong = "SELECT *
    FROM sim
    order by id_sim asc";
    $query = mysqli_query($conn, $phong);  
?>