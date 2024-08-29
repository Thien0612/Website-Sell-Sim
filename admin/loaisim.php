<?php  
    $conn = mysqli_connect('localhost', 'root', '', 'bansim');
    $loaiphong = "SELECT *
			  FROM loaisim
			  order by id_loaisim ASC";
    $query = mysqli_query($conn, $loaiphong);  
    
    
    if(isset($_GET['delete'])){

        $delete_lp=$_GET['delete'];
        $sql_lp="DELETE FROM loaisim where id_loaisim=$delete_lp";
        $query=mysqli_query($conn,$sql_lp);
        header('location:../views/admin/loaisim.tpl.php'); 

    }

    if(isset($_POST['themloaisim']))
    {
        $loaisim=$_POST['loaisim'];
        $sql_lp="INSERT INTO loaisim (loaisim) values('$loaisim')";
        $result=mysqli_query($conn,$sql_lp);

        header('location:../views/admin/loaisim.tpl.php'); 
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