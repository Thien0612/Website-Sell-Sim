<?php
    $conn = mysqli_connect('localhost', 'root', '', 'bansim');	
    $sql_phong = "SELECT sim.*, loaisim.*, trangthai_sim.*
                  FROM sim, loaisim, trangthai_sim
                  WHERE id_sim='".$id_sim."' && sim.id_loaisim=loaisim.id_loaisim && trangthai_sim.id_trangthai_sim=sim.id_tinhtrangsim";
    $chitiet = $conn->query($sql_phong);

   
?>