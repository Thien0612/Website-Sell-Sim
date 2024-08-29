<?php 
        include 'loaisim.php';
        $select_update = "SELECT *
        FROM loaisim
        where id_loaisim=$id_loaiphong";
        $query_lp_update=mysqli_query($conn,$select_update);
        $row_lp_update=mysqli_fetch_assoc($query_lp_update);

        if(isset($_POST['update'])){
            $tieude=$_POST['loaisim'];
    
            $update= "UPDATE loaisim SET loaisim='$tieude'
                      WHERE id_loaisim= $id_loaiphong";
    
            $query = mysqli_query($conn, $update); 
            header('location:../../views/admin/loaisim.tpl.php');  
        }

?>