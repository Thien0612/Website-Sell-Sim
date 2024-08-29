<?php 
        include 'khachhang.php';
        $select_update = "SELECT users.*, trangthai_user.*
        FROM users, trangthai_user
        where id_user=$id_khachhang && users.id_trangthai_user = trangthai_user.id_trangthai_user ";
        $query_kh_update=mysqli_query($conn,$select_update);
        $row_kh_update=mysqli_fetch_assoc($query_kh_update);
        
        if(isset($_POST['update'])){
            $ten = $_POST['ten'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $pass = $_POST['pass'];
            $diachi = $_POST['diachi'];
            $ngaysinh = $_POST['ngaysinh'];
            $tttk = $_POST['tttk'];

            $update= "UPDATE users SET id_user_type='2', Ten='$ten', Fullname='$fullname', Email='$email', Sdt=$sdt, 
                                             Diachi='$diachi', Ngaysinh='$ngaysinh', Pass='$pass', id_trangthai_user=$tttk
                      WHERE id_user= $id_khachhang";
    
            $query = mysqli_query($conn, $update); 
            header('location:../../views/admin/khachhang.tpl.php');  
        }

?>