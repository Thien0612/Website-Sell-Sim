<?php 
        include 'sim.php';
        $select_update = "SELECT sim.*, loaisim.*, trangthai_sim.*
        FROM sim, loaisim, trangthai_sim
        WHERE sim.id_loaisim=loaisim.id_loaisim && trangthai_sim.id_trangthai_sim=sim.id_tinhtrangsim
              && sim.id_sim=$id_sim";
        $query_phong_update=mysqli_query($conn,$select_update);
        $row_phong_update=mysqli_fetch_assoc($query_phong_update);

        if(isset($_POST['update'])){
            $sosim=$_POST['sosim'];
            $gia=$_POST['gia'];
            $soluong=$_POST['soluong'];
            $loaisim=$_POST['loaisim'];
            $trangthai=$_POST['trangthai'];
    
            $update= "UPDATE sim SET sosim='$sosim', gia='$gia', soluong=$soluong, id_tinhtrangsim=$trangthai, id_loaisim=$loaisim
                      WHERE id_sim= $id_sim";
    
            $query = mysqli_query($conn, $update); 
            header('location:../../views/admin/sim.tpl.php');  
        }

?>