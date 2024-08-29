<?php

ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'bansim');	

$id_user=$_SESSION['id_user'];
$sql1 = "SELECT * FROM users WHERE id_user = $id_user";
$qu = mysqli_query($conn,$sql1);
$r = mysqli_fetch_array($qu);


if(isset($_GET['huy'])){
    $id = $_GET['huy'];
  
    $select = "SELECT * FROM chitietdonhang WHERE id_donhang = $id";
    $que = mysqli_query($conn,$select);
    while($row=mysqli_fetch_assoc($que)){
      $id_sim = $row['id_sim'];
      $soluong = $row['Sosim'];
  
      $sql_update = "UPDATE sim set soluong = soluong + $soluong where id_sim = $id_sim";
      $query_update = mysqli_query($conn, $sql_update);
  
      $update_ttdp = "UPDATE donhang SET id_trangthai_dathang = 3 WHERE id_dathang = $id";
      $result = mysqli_query($conn, $update_ttdp);
    }
}

if(isset($_GET['duyet'])){
    $id = $_GET['duyet'];
  
    $select = "SELECT * FROM chitietdonhang WHERE id_donhang = $id";
    $que = mysqli_query($conn,$select);
    while($row=mysqli_fetch_assoc($que)){
        $id_sim = $row['id_sim'];
        $sosim = $row['Sosim'];
  
      $update_ttdp = "UPDATE donhang SET id_trangthai_dathang = 6 WHERE id_dathang = $id";
      $result = mysqli_query($conn, $update_ttdp);
    }
}

if(isset($_GET['thanhtoan'])){
    $id = $_GET['thanhtoan'];
  
    $select = "SELECT * FROM chitietdonhang WHERE id_donhang = $id";
    $que = mysqli_query($conn,$select);
    while($row=mysqli_fetch_assoc($que)){
        $id_sim = $row['id_sim'];
        $sosim = $row['Sosim'];
  
      $update_ttdp = "UPDATE donhang SET id_trangthai_dathang = 4 WHERE id_dathang = $id";
      $result = mysqli_query($conn, $update_ttdp);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý đặt hàng</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="../hinhanh/logo.png"/>
    <link href="../../templates/admin/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../templates/admin/css/sb-admin-2.css" rel="stylesheet" type="text/css">
    <link href="../../templates/admin/css/css.css" rel="stylesheet">
    <link href="../../templates/admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="page-top" >
    <div id="wrapper">
    <?php 
        include 'tagbar.tpl.php';				
    ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php include 'topbar.tpl.php'; ?>
            <div class="container-fluid">
                     
                                
                </div>                   
           
            </div>
            

                              
                                
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn mới đặt</h6>
                    </div>   
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead> 
                                        <tr style="text-align:center" >
                                            <th style="vertical-align: middle; text-align:left;">#</th>
                                            <th style="vertical-align: middle; text-align:left;">Khách hàng</th>
                                            <th style="vertical-align: middle; text-align:left;">Ngày lập hóa đơn</th>
                                            <th style="vertical-align: middle; text-align:left;">Tổng tiền</th>
                                            <th style="vertical-align: middle; text-align:left;">Trạng thái</th>
                                            <th style="vertical-align: middle; text-align:left;">Quản lý</th>
                                            <th style="vertical-align: middle; text-align:left;">Xử lý</th>
                                            <th style="vertical-align: middle; text-align:left;">Tiện ích</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
        
                                        $sql_ttdp = "SELECT dh.*, ttdh.*, users.* FROM donhang dh, trangthai_dathang ttdh, users 
                                        WHERE ttdh.id_trangthai_dathang = dh.id_trangthai_dathang and users.id_user=dh.id_khachhang 
                                        order by id_dathang desc";
                                        
                                        $query = mysqli_query($conn,$sql_ttdp);
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

                                        <?php } else {
                                        ?>
                                            
                                            <td><span style="color:blue;"><?php echo $row['trangthaidathang'] ?></span></td>

                                        <?php } ?>
                                        <td>
                                            <a href="chitietdonhang.tpl.php?id_dathang=<?php echo $row['id_dathang']; ?>">Xem</a>
                                        </td>
                                        <td>
                                        

                                            <?php
                                            if($row['id_trangthai_dathang'] == 5)  {
                                            ?>
                                            <a href="moidat.tpl.php?duyet=<?php echo $row['id_dathang']?>" class="btn btn-success btn-sm text-white" name="duyet" type="button">Duyệt</a>


                                            <a href="moidat.tpl.php?huy=<?php echo $row['id_dathang']?>" class="btn btn-primary btn-sm text-white" name="huy" type="button">Hủy đặt hàng</a>

                                            <?php } else if($row['id_trangthai_dathang'] == 6)  { ?>
                                                <a href="moidat.tpl.php?thanhtoan=<?php echo $row['id_dathang']?>" class="btn btn-info btn-sm text-white" name="thanhtoan" type="button">Xác nhận thanh toán</a>

                                            <?php } ?>
                                        </td> 
                                        <td align="center" class="flex-btn">
                                                <a href="updatedondatsim.tpl.php?update=<?= $row['id_dathang']; ?>" class="btn btn-outline-info" data-target="#staticBackdrop1"><i class="fas fa-edit"></i></a>  
                                            
                                        </td>

                                    </tbody>
                                    <?php
                                        }
                                        ?>
                                        

                                    <tbody>

                                </table>

</div>

</div>
</div>
<?php 
    include 'footer.tpl.php';				
?>
</div>
<?php include 'logout.tpl.php'; ?>
<script src="../../templates/admin/js/jquery.min.js"></script>
<script src="../../templates/admin/js/bootstrap.bundle.min.js"></script>
<script src="../../templates/admin/js/jquery.easing.min.js"></script>
<script src="../../templates/admin/js/sb-admin-2.min.js"></script>
</body>
</html>
