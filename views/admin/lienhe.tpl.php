<?php

ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'bansim');	

$id_user=$_SESSION['id_user'];
$sql = "SELECT * FROM users WHERE id_user = $id_user";
$qu = mysqli_query($conn,$sql);
$r = mysqli_fetch_array($qu);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý liên hệ</title>
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
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách liên hệ</h6>
                    </div>   
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead> 
                                        <tr style="text-align:center" >
                                            <th style="vertical-align: middle">#</th>
                                            <th style="vertical-align: middle">ID khách hàng</th>
                                            <th style="vertical-align: middle">Họ tên</th>
                                            <th style="vertical-align: middle">Sdt</th>
                                            <th style="vertical-align: middle">Email</th>
                                            <th style="vertical-align: middle">Địa chỉ</th>
                                            <th style="vertical-align: middle">Nội dung</th>

                                            <th style="vertical-align: middle">Ngày gửi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include("../../admin/lienhe.php");
                                        while($row_khachhang=mysqli_fetch_assoc($q)){
                                    ?>                            
                                        <tr>
                                            <td align="center" width="30px"><?= $row_khachhang['id_lienhe']; ?></td>
                                            <td align="center" width="50px"><?= $row_khachhang['id_user']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Hoten']; ?></td>
                                            <td align="center" width="100px">0<?= $row_khachhang['Sdt']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['email']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Diachi']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Noidung']; ?></td>

                                            <td align="center" width="100px" class="flex-btn">
                                            
                                            <a href="../../admin/lienhe.php?delete=<?=$row_khachhang['id_lienhe']; ?>" class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa bình luận này?');" ><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
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
