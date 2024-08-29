<?php
    $conn = mysqli_connect('localhost', 'root', '', 'bansim');

if(isset($_POST['dangtin']))
{
	
	$tieude=$_POST['tieude'];
	$mota=$_POST['mota'];
	
	$anh1=$_FILES['anh1']['name'];

	$temp_name1  =$_FILES['anh1']['tmp_name'];

	$sql="INSERT INTO tintuc (Tieude,Noidung,Anh)
    values('$tieude','$mota','$anh1')";
	$result=mysqli_query($conn,$sql);
	
	move_uploaded_file($temp_name1,"../templates/front/images/$anh1");

	header('location:../views/admin/tintuc.tpl.php'); 
	if($result)
		{
			$msg="<p class='alert alert-success'>Đăng thành công</p>";					
		}
		else
		{
			$error="<p class='alert alert-warning'>Đã xảy ra lỗi</p>";
		}
}	

if(isset($_GET['delete'])){

    $delete_kh=$_GET['delete'];
    $sql_kh="DELETE FROM tintuc where id_tintuc=$delete_kh";
    $query=mysqli_query($conn,$sql_kh);
    header('location:../views/admin/tintuc.tpl.php'); 
}

?>