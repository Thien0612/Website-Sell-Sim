
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
                     <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#staticBackdrop">
                     <i class="fas fa-plus"></i> Thêm loại sim
                     </button>
                     <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Thêm loại sim</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                           
                                <form action="../../admin/loaisim.php" method="POST" enctype="multipart/form-data">
                                <div class="description">
                                <h5><span style="font-family:Roboto Slab;"> <b>Thông tin cơ bản </b></span></h5><hr>
                                        <span style="font-size:13px;">
                                        <div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<div class="col-lg-12">
														<textarea class="form-control" name="loaisim" rows="3" minlength="5" maxlength="30" required placeholder="Tên loại sim"></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 5 ký tự, tối đa 30 ký tự</span></label>
													</div>
												</div>												
												
											</div>
                                        </div>
                                        </span>
                                </div>
										
										
                                        <hr>										
                                        
                                        <input type="submit" value="Thêm loại sim" class="btn btn-success" name="themloaisim">

                                        </div>

                                </div>
                                
                            </form>

                                
                        </div>

                                
                    </div>
                                
                </div>                   
           
            </div>

            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách loại sim</h6>
                    </div>   
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead> 
                                        <tr style="text-align:center" >
                                            <th style="vertical-align: middle">#</th>
                                            <th style="vertical-align: middle">Tên loại phòng</th>
                                            <th style="vertical-align: middle">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                        include("../../admin/loaisim.php");
                                        while($row_loaiphong=mysqli_fetch_assoc($query)){
                                    ?>

                                    
                                        <tr>
                                            <td align="center" width="30px"><?= $row_loaiphong['id_loaisim']; ?></td>
                                            <td align="center" width="50px"><?= $row_loaiphong['loaisim']; ?></td>
                                            <td align="center" width="100px" class="flex-btn">
                                            <a href="updateloaisim.tpl.php?update=<?=$row_loaiphong['id_loaisim']; ?>" class="btn btn-outline-info" data-target="#staticBackdrop1"><i class="fas fa-edit"></i></a>  
                                            
                                            <a href="../../admin/loaisim.php?delete=<?= $row_loaiphong['id_loaisim']; ?>" class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa loại sim này?');" ><i class="fas fa-trash-alt"></i></a>
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
