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
    <title>Quản lý tài khoản</title>
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
                     <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#staticBackdrop">
                     <i class="fas fa-plus"></i> Thêm người dùng
                     </button>
                     <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Thêm người dùng</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                           
                                <form action="../../admin/khachhang.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Tên </label>
                                        <input type="text" name="ten" class="form-control" id="inputText4" placeholder="Nhập tên">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Fullname </label>
                                        <input type="text" name="fullname" class="form-control" id="inputText4" placeholder="Đầy đủ họ tên">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Email </label>
                                        <input type="email"  name="email" class="form-control" placeholder="Nhập email">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Số điện thoại </label>
                                        <input type="text" name="sdt" class="form-control" id="inputText4" placeholder="Nhập số điện thoại">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputAddress">Password</label>
                                        <input type="password" name="pass" class="form-control" id="inputText4" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputAddress">Check Password</label>
                                        <input type="password" name="cpass" class="form-control" id="inputText4" placeholder="Nhập lại mật khẩu">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Địa chỉ </label>
                                        <input type="text" name="diachi" class="form-control" id="inputText4" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Ngày, tháng, năm sinh </label><hr>
                                        <input type="date" name="ngaysinh" class="form-control" id="inputText4" value="<?php echo date('Y-m-d'); ?>" min="1960-01-01" max="<?php echo date('Y-m-d'); ?>">       
                                    </div>
                                    <div class="form-row mb-3">
                                            <label class="col-form-label"><b>Ảnh</b></label>
                                            <input class="form-control" name="anh" type="file">
                                    </div> 
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Đóng</button>
                                        <input type="submit" class="btn btn-primary rounded-pill" value="Thêm" name="themnguoidung">
                                    </div>
										
                                </div>
                                
                            </form>

                                
                        </div>

                                
                    </div>
                                
                </div>                   
           
            </div>

            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
                    </div>   
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead> 
                                        <tr style="text-align:center" >
                                            <th style="vertical-align: middle">#</th>
                                            <th style="vertical-align: middle">Họ tên</th>
                                            <th style="vertical-align: middle">Email</th>
                                            <th style="vertical-align: middle">Số điện thoại</th>
                                            <th style="vertical-align: middle">Địa chỉ</th>
                                            <th style="vertical-align: middle">Ngày sinh</th>
                                            <th style="vertical-align: middle">Ảnh</th>
                                            <th style="vertical-align: middle">Trạng thái</th>
                                            <th style="vertical-align: middle">Ngày tạo</th>
                                            <th style="vertical-align: middle">Cập nhật gần nhất</th>
                                            <th style="vertical-align: middle">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include("../../admin/khachhang.php");
                                        while($row_khachhang=mysqli_fetch_assoc($query)){
                                    ?>                            
                                        <tr>
                                            <td align="center" width="30px"><?= $row_khachhang['id_user']; ?></td>
                                            <td align="center" width="50px"><?= $row_khachhang['Fullname']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Email']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Sdt']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Diachi']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Ngaysinh']; ?></td>
                                            <td><img style="width:100px;" src="../../userfiles/<?= $row_khachhang['Anh']; ?>"></td>
                                            <td align="center" width="100px"><?= $row_khachhang['trangthai_user']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Ngaytao']; ?></td>
                                            <td align="center" width="100px"><?= $row_khachhang['Capnhatlancuoi']; ?></td>
                                            <td align="center" width="100px" class="flex-btn">
                                            <a href="updatekhachhang.tpl.php?update=<?=$row_khachhang['id_user']; ?>" class="btn btn-outline-info" data-target="#staticBackdrop1"><i class="fas fa-edit"></i></a>  
                                            
                                            <a href="../../admin/khachhang.php?delete=<?=$row_khachhang['id_user']; ?>" class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa người dùng này?');" ><i class="fas fa-trash-alt"></i></a>
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
