<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$conn = mysqli_connect('localhost', 'root', '', 'bansim');	
$id_user = $_SESSION['id_user'];

if(isset($_GET['huy'])){
  $id = $_GET['huy'];

  $select = "SELECT * FROM chitietdonhang WHERE id_donhang = $id";
  $que = mysqli_query($conn,$select);
  while($row=mysqli_fetch_assoc($que)){
    $id_sim = $row['id_sim'];
		$soluong = $row['Sosim'];

    $sql_update = "UPDATE sim SET soluong = soluong + $soluong where id_sim = $id_sim";
		$query_update = mysqli_query($conn, $sql_update);

    $update_ttdp = "UPDATE donhang SET id_trangthai_dathang = 3 WHERE id_dathang = $id";
    $result = mysqli_query($conn, $update_ttdp);
    header('location:lichsu.tpl.php');  

  }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../templates/front/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../templates/front/css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../templates/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../templates/front/css/style.css">
    <link rel="stylesheet" href="../../templates/front/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../templates/front/css/css/style.css">
    <link rel="stylesheet" href="../../templates/front/css/login.css">
    <link rel="stylesheet" href="../../templates/front/css/app.css">
    <link rel="stylesheet" href="../../templates/front/css/reset.css">
    <link rel="stylesheet" href="../../templates/front/css/css.css">
    <link rel="stylesheet" href="../../templates/front/css/pricerange.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../templates/front/css/tabunderline.css">
    <link rel="stylesheet" href="../../templates/front/css/css_tab/demo.css">
    <link rel="stylesheet" type="text/css" href="../../templates/front/css/css_tab/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LỊCH SỬ</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.jpeg"/>
  
    </head>
  <body>  
    <div id="page-wrapper ">
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>

        <div id="wrapper">
        
        <form action="" id="form-datphong" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Lịch sử đặt mua hàng</h2>
    <table cellpadding="5px" class="table-bordered w-100 bg-white">
    <thead>
      <tr class="text-center">
        <th scope="col">Mã ĐH</th>
        <th scope="col">ID khách hàng</th>
        <th scope="col">Thời gian đặt</th> 
        <th scope="col">Giá tiền</th> 
        <th scope="col">Trạng thái</th>
        <th scope="col">Chi tiết</th> 
      </tr>
    </thead>
      
      <?php 
        $count = "SELECT COUNT(*) AS count FROM donhang WHERE id_khachhang = $id_user";

        $ketnoi = mysqli_query($conn, $count);
        $assoc = mysqli_fetch_assoc($ketnoi);
        $solanmua = $assoc['count'];
        if($solanmua>0){
        ?>
        <tbody>
      <?php
        

        $sql = "SELECT donhang.*, trangthai_dathang.*,users.* FROM donhang, trangthai_dathang, users 
        WHERE id_khachhang = $id_user and donhang.id_trangthai_dathang = trangthai_dathang.id_trangthai_dathang and users.id_user=donhang.id_khachhang";
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($query)){
      ?>
          <td><?php echo $row['id_dathang'] ?></td>
          <td><?php echo $row['Fullname']; ?></td> 
          <td><?php echo $row['Ngaylaphoadon']; ?></td> 
          <td><?php echo number_format($row['Tongtien'],0,',','.') ?> VND</td>
          <?php 
            if($row['id_trangthai_dathang']==5)
            {
          ?>
            
              <td><span style="color:#186dc3;"><?php echo $row['trangthaidathang'] ?></span></td>
          <?php }else if($row['id_trangthai_dathang']==3){
          ?>
            
              <td><span style="color:red;"><?php echo $row['trangthaidathang'] ?></span></td>

          <?php } else if($row['id_trangthai_dathang']==6){
          ?>
            
              <td><span style="color:green;"><?php echo $row['trangthaidathang'] ?></span></td>

          <?php } else if($row['id_trangthai_dathang']==4){
          ?>
            
              <td><span style="color:darkblue;"><?php echo $row['trangthaidathang'] ?></span></td>

          <?php } ?>
         <td>
            <a href="chitietdonhang.tpl.php?id_dathang=<?php echo $row['id_dathang']; ?>">Xem</a>
         </td>
    </tbody>
    <?php
        }
        ?>
       <?php
        }else{
        ?>
        <tbody>
          <h6><span style="color:red;">Không có lịch sử đặt mua</span></h6>
        </tbody>
       <?php
        }
        ?>
       
  </table>
        </form>
        </div>

      <?php include("footer.tpl.php");?>
    </div>
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>
    <script>
        function xem()
        {
            var mk = document.getElementById("Pass");
            if(mk.type == "password")
            {
               mk.type = "text";
            }
            else
            {
                mk.type="password";
            }
        }
    </script>
  </body>
</html>
