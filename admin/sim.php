<?php  
    $conn = mysqli_connect('localhost', 'root', '', 'bansim');
    $phong = "SELECT sim.*, loaisim.*, trangthai_sim.*
    FROM sim, loaisim, trangthai_sim
    WHERE sim.id_loaisim=loaisim.id_loaisim && trangthai_sim.id_trangthai_sim=sim.id_tinhtrangsim
			  order by sim.id_sim ASC";
    $query = mysqli_query($conn, $phong); 

    $select_ctlp="SELECT * FROM loaisim";
    $query_ctlp=mysqli_query($conn,$select_ctlp);

    $select_ttp="SELECT * FROM trangthai_sim ";
    $query_ttp=mysqli_query($conn,$select_ttp);

    if(isset($_GET['delete'])){

        $delete_idp=$_GET['delete'];
        $sql_phong="DELETE FROM sim where id_sim=$delete_idp";
        $query=mysqli_query($conn,$sql_phong);
        header('location:../views/admin/sim.tpl.php'); 

    }


    if(isset($_POST['themsim']))
    {

        $sosim=$_POST['sosim'];
        $gia=$_POST['gia'];
	    $soluong=$_POST['soluong'];
        $loaisim=$_POST['loaisim'];
        $trangthai=$_POST['trangthai'];

        $sql_phong="INSERT INTO sim ( sosim, gia, id_loaisim, id_tinhtrangsim, soluong)
                                values('$sosim','$gia', $loaisim,$trangthai,$soluong)";
        $result=mysqli_query($conn,$sql_phong);

      
        header('location:../views/admin/sim.tpl.php'); 
        if($result)
		{
			$msg="<p class='alert alert-success'>Thêm thành công</p>";					
		}
		else
		{
			$error="<p class='alert alert-warning'>Đã xảy ra lỗi</p>";
		}
    }
 ?>