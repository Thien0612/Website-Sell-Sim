<?php
    $conn = mysqli_connect('localhost', 'root', '', 'bansim');

if(isset($_POST['register'])){
    $ten = $_POST['ten'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $pass = $_POST['pass'];
    $diachi = $_POST['diachi'];
    $ngaysinh = $_POST['ngaysinh'];
    $anh = $_FILES['anh']['name'];
    $temp_name1 = $_FILES['anh']['tmp_name'];
   
    $select_users ="SELECT * FROM users where Email='$email'";
    $query=mysqli_query($conn,$select_users);
    $num_row= mysqli_num_rows($query);
    if($num_row > 0){
        echo '<script type="text/javascript">alert(`Email đã tồn tại`)</script>';
    }else{
       

            $insert_users="INSERT INTO users(id_user_type, Ten, Fullname, Email, Sdt, Diachi, Ngaysinh, Pass, Anh, id_trangthai_user) 
                                      VALUES('2','$ten','$fullname','$email','$sdt', '$diachi', '$ngaysinh', '$pass','$anh','1')";
            $sql=mysqli_query($conn,$insert_users); 
            move_uploaded_file($temp_name1,"../userfiles/$anh");
            header('location:../views/front/login.tpl.php'); 
          }
 
       }
 
    
?>