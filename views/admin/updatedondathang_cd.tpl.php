<?php 

        $id_dathang=$_GET['update'];
        ini_set('session.cache_limiter','public');
        session_cache_limiter(false);
        session_start();

        $conn = mysqli_connect('localhost', 'root', '', 'bansim');	

        $id_user=$_SESSION['id_user'];
        $sql = "SELECT * FROM users WHERE id_user = $id_user";
        $qu = mysqli_query($conn,$sql);
        $r = mysqli_fetch_array($qu);

        $select_update = "SELECT dh.*, ttdh.*
        FROM donhang dh, trangthai_dathang ttdh
        where dh.id_dathang=$id_dathang and dh.id_trangthai_dathang = ttdh.id_trangthai_dathang ";
        $query_dp_update=mysqli_query($conn,$select_update);
        $row_dp_update=mysqli_fetch_assoc($query_dp_update);

        if(isset($_POST['up'])){
            $ttdp=$_POST['ttdp'];
    
            $update= "UPDATE donhang SET id_trangthai_dathang=$ttdp
                      WHERE id_dathang= $id_dathang";
    
            $query = mysqli_query($conn, $update); 
            header('location:../../views/admin/chuaduyet.tpl.php');  
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý phòng</title>
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
                            <h6 class="m-0 font-weight-bold text-primary">Cập nhật trạng thái đặt phòng</h6>                                                         
                            </div>
                                <form method="POST" enctype="multipart/form-data">
                                <div class="description">
                                        <span style="font-size:13px;">
                                        <div class="row">
											<div class="col-xl-10">
												<div class="form-group row">
													<div class="col-lg-5">
                                                        <select class="form-control" required name="ttdp">
                                                            <option value="<?php echo $row_dp_update['id_trangthai_dathang']?>"><?php echo $row_dp_update['trangthaidathang']?></option>
                                                                <?php
                                                                    $t = $row_dp_update['id_trangthai_dathang'];
                                                                    $q = mysqli_query($conn,"SELECT * FROM trangthai_dathang WHERE id_trangthai_dathang!='$t' and id_trangthai_dathang !=2 ");
                                                                    while($row_ttdp=mysqli_fetch_assoc($q)){?>
                                                                        <option value= "<?php echo $row_ttdp['id_trangthai_dathang'];?>"><?php echo $row_ttdp['trangthaidathang'];?></option>
                                                                <?php }?>
														</select>	
                                                    </div>
												</div>
											
												
											</div>
                                        </div>
                                        </span>
                                        
                                     
										
										</div>
                                            <div class="modal-footer">
                                            <input type="submit" class="btn btn-success" value="Cập nhật" name="up">
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
