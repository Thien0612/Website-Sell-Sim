<?php 
$conn = mysqli_connect('localhost', 'root', '', 'bansim');	

        $id_loaiphong=$_GET['update'];
        ini_set('session.cache_limiter','public');
        session_cache_limiter(false);
        session_start();

        $id_user=$_SESSION['id_user'];
        $sql = "SELECT * FROM users WHERE id_user = $id_user";
        $qu = mysqli_query($conn,$sql);
        $r = mysqli_fetch_array($qu);

        include '../../admin/loaisim.php';
        include '../../admin/updateloaisim.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý loại sim</title>
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
                            <h6 class="m-0 font-weight-bold text-primary">Cập nhật loại sim</h6>                                                         
                            </div>
                                <form method="POST" enctype="multipart/form-data">
                                <div class="description">
                                <h5><span style="font-family:Roboto Slab;"> <b>Thông tin cơ bản </b></span></h5><hr>
                                        <span style="font-size:13px;">
                                        <div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<div class="col-lg-12">
														<textarea class="form-control" name="loaisim" rows="3" minlength="5" maxlength="30"><?php echo $row_lp_update['loaisim']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 5 ký tự, tối đa 99 ký tự</span></label>
													</div>
												</div>
											
												
											</div>
                                        </div>
                                        </span>
                                        
                                     
										
										</div>
                                            <div class="modal-footer">
                                            <input type="submit" class="btn btn-success" value="Sửa" name="update">
                                            </div>
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
<script src="../../templates/admin/js/mota.js"></script>
<script src="../../templates/admin/js/nhapfloat.js"></script>

</body>
</html>
