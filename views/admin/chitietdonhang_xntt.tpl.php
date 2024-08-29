<?php

ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'bansim');	

$id_user=$_SESSION['id_user'];
$sql = "SELECT * FROM users WHERE id_user = $id_user";
$qu = mysqli_query($conn,$sql);
$r = mysqli_fetch_array($qu);

$id_dathang = isset($_GET['id_dathang']) ? $_GET['id_dathang'] : '';

$select_ctdh = "SELECT dh.*, ctdh.*, ttdh.*, s.* FROM donhang dh, chitietdonhang ctdh, trangthai_dathang ttdh, sim s
WHERE dh.id_dathang=ctdh.id_donhang and ttdh.id_trangthai_dathang = dh.id_trangthai_dathang and ctdh.id_sim=s.id_sim and ctdh.id_donhang=$id_dathang";
$query_ctdh = mysqli_query($conn, $select_ctdh);

$row = mysqli_fetch_assoc($query_ctdh);

$select_ctdh1 = "SELECT dh.*, ctdh.*, ttdh.*, s.* FROM donhang dh, chitietdonhang ctdh, trangthai_dathang ttdh, sim s
WHERE dh.id_dathang=ctdh.id_donhang and ttdh.id_trangthai_dathang = dh.id_trangthai_dathang and ctdh.id_sim=s.id_sim and ctdh.id_donhang=$id_dathang";
$query_ctdh1 = mysqli_query($conn, $select_ctdh1);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Quản lý đơn đặt hàng</title>

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
                    </div>   
                    <div class="card-body">
                            <div class="table-responsive">
                            <table class="table-bordered w-100 bg-white" cellpadding="5px">
                            <tr>
                    <th colspan="4"><h6 class="text-center">Chi tiết đơn hàng</h6></th>
                </tr>
                <tr>
                    <td colspan="2">Người nhận: <?= $row['Hoten']?></td>
                    <td colspan="2">Số điện thoại: <?= $row['Sdt']?></td>
                </tr>
                <tr>
                    <td colspan="4">Địa chỉ: <?= $row['Diachi']?></td>
                

                </tr>
                <tr>
                    <td colspan="4">Ngày lập: <?= $row['Ngaylaphoadon']?></td>

                </tr>
                <tr>
                    <td colspan="2">Mã đơn: <?= $row['id_donhang']?></td>
                    <td colspan="2">Hình thức thanh toán: <?= $row['pttt']?></td>
                </tr>
                <tr>
                    <th>STT</th>
                    <th>Số sim</th>
                    <th>Số lượng</th>
                    <th>Giá mua</th>
                </tr>
                <?php 
                $i=0;
                while($row_ctdh=mysqli_fetch_assoc($query_ctdh1)){
                    $i++
                ?>
                <tr>
                    <td><?= $i?></td>
                    <td><?= $row_ctdh['sosim']?></td>
                    <td><?= $row_ctdh['Sosim']?></td>
                    <td><?= $row_ctdh['gia']?> VND</td>
                </tr>
                <tr>
                    <th colspan="4">Thành tiền: <?= $row_ctdh['Thanhtien']?> VND</th>
                </tr>
                <?php } ?>
                <tr>
                    <th colspan="4">Tổng tiền: <?= $row['Tongtien']?> VND</th>
                </tr>
                </table>
                <a href="xacnhanthanhtoan.tpl.php">
                    <span style="background-color:#186dc3; width: 100px; height: 35px; padding-bottom:10px; margin-left:20px;">

                        <button type="button" class="btn" name="quayve"><span style="font-size:16px; color: white;"><b>Quay về</b></span></button>
                    </span>    
                </a>

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
