<?php 

        $id_khachhang=$_GET['update'];
        ini_set('session.cache_limiter','public');
        session_cache_limiter(false);
        session_start();
        include '../../admin/khachhang.php';
        include '../../admin/updatekhachhang.php';
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
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cập nhật tài khoản người dùng</h6>
                            </div>
                            <form  method="POST" enctype="multipart/form-data">
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Tên </label>
                                        <input type="text" name="ten" class="form-control" id="inputText4" value="<?php echo$row_kh_update['Ten']?>">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Fullname </label>
                                        <input type="text" name="fullname" class="form-control" id="inputText4" value="<?php echo $row_kh_update['Fullname']?>">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Email </label>
                                        <input type="email"  name="email" class="form-control" value="<?php echo $row_kh_update['Email']?>">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Số điện thoại </label>
                                        <input type="text" name="sdt" class="form-control" id="inputText4" value="0<?php echo $row_kh_update['Sdt']?>">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputAddress">Password</label>
                                        <input type="password" name="pass" class="form-control" id="inputText4" value="<?php echo $row_kh_update['Pass']?>">
                                    </div>
    
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Địa chỉ </label>
                                        <input type="text" name="diachi" class="form-control" id="inputText4" value="<?php echo $row_kh_update['Diachi']?>">
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Ngày, tháng, năm sinh </label><hr>
                                        <input type="date" name="ngaysinh" class="form-control" id="inputText4" value="<?php echo $row_kh_update['Ngaysinh']?>" min="1960-01-01" max="<?php echo date('Y-m-d'); ?>">       
                                    </div>
                                    <div class="form-row mb-3">
                                        <label class="ml-3  font-weight-bold" for="inputText4">Trạng thái tài khoản </label><hr>
                                            <select class="form-control" required name="tttk">
                                                            <option value="<?php echo $row_kh_update['id_trangthai_user']?>"><?php echo $row_kh_update['trangthai_user']?></option>
                                                                <?php
                                                                    include("../../admin/khachhang.php");
                                                                    $t = $row_kh_update['id_trangthai_user'];
                                                                    $q = mysqli_query($conn,"SELECT * FROM trangthai_user WHERE id_trangthai_user!='$t'");
                                                                    while($row_tttk=mysqli_fetch_assoc($q)){?>
                                                                        <option value= "<?php echo $row_tttk['id_trangthai_user'];?>"><?php echo $row_tttk['trangthai_user'];?></option>
                                                                <?php }?>
											</select>	      
                                    </div>
                                    
                                    <div class="modal-footer">
                                        
                                    <input type="submit" class="btn btn-success" value="Sửa" name="update">
                                    </div>

                                </form>
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
