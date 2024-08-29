<?php    
session_start();
$error="";
$msg="";
$conn = mysqli_connect('localhost', 'root', '', 'bansim');
if(isset($_POST['Login']))
{
   $Email = $_POST['Email'];
   $Pass = ($_POST['Pass']);

    $sql = "SELECT * FROM users where Email='$Email' AND Pass='$Pass'";
    $stmt = $conn->query($sql);
    $rowCount = mysqli_num_rows($stmt);

   if($rowCount > 0){
 
     while($row=$stmt->fetch_assoc()){
        $_SESSION['id_user']=$row['id_user'];
        $_SESSION['Email']=$Email;
        
        if ($row['id_trangthai_user'] == 2) {
            echo '<script language="javascript">alert("Tài khoản đã bị vô hiệu hóa"); window.location="../views/front/login.tpl.php";</script>';
            exit;
        }else{
            if($row['id_user_type']==1)
            {
                
                header('location:../views/admin/index.tpl.php'); 
            }elseif($row['id_user_type'] == 2)
            {
                header('location:../views/front/index.tpl.php'); 
            }
            elseif($row['id_user_type'] == 3)
            {
                header('location:../views/admin/index.tpl.php'); 
            }
        }
      }
    }
    else {
        echo '<script language="javascript">alert("Sai mật khẩu hoặc email"); window.location="../views/front/login.tpl.php";</script>';
    }
 
  }
 
?>