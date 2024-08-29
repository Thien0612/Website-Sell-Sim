<?php 
        $conn = mysqli_connect('localhost', 'root', '', 'bansim');

        $id_sim=$_GET['update'];
        ini_set('session.cache_limiter','public');
        session_cache_limiter(false);
        session_start();

        $id_user=$_SESSION['id_user'];
        $sql = "SELECT * FROM users WHERE id_user = $id_user";
        $qu = mysqli_query($conn,$sql);
        $r = mysqli_fetch_array($qu);


        include '../../admin/sim.php';
        include '../../admin/updatesim.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý sim</title>
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
                            <h6 class="m-0 font-weight-bold text-primary">Cập nhật sim</h6>                                                         
                            </div>
                                <form method="POST" enctype="multipart/form-data">
                                <div class="description">
                                <h5><span style="font-family:Roboto Slab;"> <b>Thông tin cơ bản </b></span></h5><hr>
                                        <span style="font-size:13px;">
                                        <div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<div class="col-lg-12">
														<textarea class="form-control" name="sosim" rows="3" minlength="10" maxlength="15" required > <?php echo $row_phong_update['sosim']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 10 ký tự, tối đa 15 ký tự</span></label>
													</div>
												</div>
												
												
											</div>
                                        </div>
                                        </span>
                                        <h5><span style="font-family:Roboto Slab;"> <b>Thông tin chi tiết </b></span></h5><hr>
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <input type="number" class="quantity-input form-control"  name="soluong" required value="<?php echo $row_phong_update['soluong']?>" min="0" >
													</div>														
													<div class="col-lg-6">
														<input type="text" class="quantity-input form-control" name="gia" onkeypress="return isNumberKey(event)" required value="<?php echo $row_phong_update['gia']?>" >
													</div>
												</div>
                                                
                                               	
                                                <div class="form-group row">
													<div class="col-lg-6">
                                                        <select class="form-control" required name="loaisim">
                                                            <option value="<?php echo $row_phong_update['id_loaisim']?>"><?php echo $row_phong_update['loaisim']?></option>
                                                                <?php
                                                                    include("../../admin/sim.php");
                                                                    while($row_ctlp=mysqli_fetch_assoc($query_ctlp)){?>
                                                                        <option value= "<?php echo $row_ctlp['id_loaisim'];?>"><?php echo $row_ctlp['loaisim'];?></option>
                                                                <?php }?>
														</select>													
                                                    </div>

													<div class="col-lg-6">
                                                        <select class="form-control" required name="trangthai">
                                                            <option value="<?php echo $row_phong_update['id_trangthai_sim']?>"><?php echo $row_phong_update['trangthaisim']?></option>
                                                                <?php
                                                                    include("../../admin/sim.php");
                                                                    while($row_ttp=mysqli_fetch_assoc($query_ttp)){?>
                                                                        <option value= "<?php echo $row_ttp['id_trangthai_sim'];?>"><?php echo $row_ttp['trangthaisim'];?></option>
                                                                <?php }?>
														</select>													
                                                    </div>
												</div>	
                                            </div>
                                        </div>
										
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'mota' );
</script>
<script>
    $(document).ready(function() {
    $('.quantity-input').bind("cut copy paste drag drop", function(e) {
        e.preventDefault();
    });     
    });
    function isNumberKey(e) {
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode > 31  && (charCode < 46 || charCode > 46) && (charCode < 48 || charCode > 57))
            return false;
        return true;
}
</script>
</body>
</html>
