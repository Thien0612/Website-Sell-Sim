<?php
    $conn = mysqli_connect('localhost', 'root', '', 'bansim');	
    $error='';
    $msg='';

    if(isset($_POST['gui']))
{
	$hoten=$_POST['ten'];
	$sdt=$_POST['sdt'];
    $email=$_POST['email'];
    $diachi=$_POST['diachi'];
	$noidung=$_POST['noidung'];

    $id_user=$_SESSION['id_user'];

	if(!empty($hoten) || !empty($sdt) || !empty($noidung) || !empty($email) || !empty($diachi)  )
	{
		
		$sql="INSERT INTO lienhe (id_user,Hoten,Sdt,email,Diachi,Noidung) VALUES ('$id_user','$hoten','$sdt','$email','$diachi','$noidung')";
		   $result=mysqli_query($conn, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Gửi thành công</p> ";
               header('location:../../views/front/lienhe.tpl.php'); 
            }
		   else{
			   $error = "<p class='alert alert-warning'>Gửi không thành công</p> ";
               header('location:../../views/front/lienhe.tpl.php'); 
		   }
	}else{
		$error = "<p class='alert alert-warning'>Không được để trống</p>";
        header('location:../../views/front/lienhe.tpl.php'); 

	}
}	

?>