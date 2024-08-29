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
    <title>Thống kê</title>
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
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <span style="text-align:center;"><h1 class="h3 mb-0 text-gray-800 center"><b>Thống kê</b></h1></span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">

                            <?php
                                            $select_users = "SELECT * FROM users where id_user_type='2'";
                                            $query=mysqli_query($conn,$select_users);
                                            $num_row_nd= mysqli_num_rows($query);                           
                            ?>
                        
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Tổng số người dùng</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $num_row_nd; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        
                           

                       
                            <?php
                                            $select_users = "SELECT * FROM sim";
                                            $query=mysqli_query($conn,$select_users);
                                            $num_row_ban= mysqli_num_rows($query);                           
                            ?>
                            <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Tổng số sim
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $num_row_ban; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <?php
                                            $select_p = "SELECT sum(soluong) as tsp FROM sim";
                                            $query_tsp=mysqli_query($conn,$select_p);
                                            $row_tsp = mysqli_fetch_assoc($query_tsp);
                                            $totalRooms = $row_tsp['tsp'];                        
                            ?>
                            <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Tổng số sim còn
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $totalRooms; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                                            $select_p = "SELECT sum(Tongtien) as tsp FROM donhang";
                                            $query_tsp=mysqli_query($conn,$select_p);
                                            $row_tsp = mysqli_fetch_assoc($query_tsp);
                                            $totalRooms = $row_tsp['tsp'];                        
                            ?>
                            <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Tổng số doanh thu
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $totalRooms; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                <?php
                                            $select_lh = "SELECT * FROM lienhe";
                                            $query=mysqli_query($conn,$select_lh);
                                            $num_row_lh= mysqli_num_rows($query);                           
                            ?>
                                                    <div class="col-xl-3 col-md-6 mb-4">

                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Tổng số liên hệ</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?= $num_row_lh; ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <?php
                                            $select_dh = "SELECT  count(*) as tsdh FROM donhang ";
                                            $query_dh=mysqli_query($conn,$select_dh);
                                            $row_dh = mysqli_fetch_assoc($query_dh);
                                            $total = $row_dh['tsdh'];                        
                            ?>
                            <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Tổng số đơn
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $total; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                                            $select_dh = "SELECT  count(*) as tsdh FROM donhang Where id_trangthai_dathang = 5 ";
                                            $query_dh=mysqli_query($conn,$select_dh);
                                            $row_dh = mysqli_fetch_assoc($query_dh);
                                            $total = $row_dh['tsdh'];                        
                            ?>
                            <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Tổng số đơn chưa được xử lý
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $total; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                                            $select_dh = "SELECT  count(*) as tsdh FROM donhang Where id_trangthai_dathang = 6 ";
                                            $query_dh=mysqli_query($conn,$select_dh);
                                            $row_dh = mysqli_fetch_assoc($query_dh);
                                            $total = $row_dh['tsdh'];                        
                            ?>
                            <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Tổng số đơn chưa được xác nhận thanh toán
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $total; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                                            $select_dh = "SELECT  count(*) as tsdh FROM donhang Where id_trangthai_dathang = 3 ";
                                            $query_dh=mysqli_query($conn,$select_dh);
                                            $row_dh = mysqli_fetch_assoc($query_dh);
                                            $total = $row_dh['tsdh'];                        
                            ?>
                            <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Tổng số đơn bị hủy
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $total; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
                <?php 
                $ngay = date("m");// Lấy ngày hôm nay


                // Thống kê đơn hàng theo ngày
                $query_ngay = "SELECT COUNT(*) AS tong_don_hang_ngay FROM donhang WHERE month(Ngaylaphoadon)= '$ngay'";
                $result_ngay = mysqli_query($conn, $query_ngay);
                $row_ngay = mysqli_fetch_assoc($result_ngay);
                $tongDonHangNgay = $row_ngay['tong_don_hang_ngay'];

                ?>
                

                <div class="card shadow mb-10">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thống kê theo ngày tháng năm </h6>                                                         
                            </div>
                                <form method="POST" enctype="multipart/form-data">
                                <div class="description">
                                        <span style="font-size:13px;">
                                        <div class="row">
											<div class="col-xl-10">
												<div class="form-group row">
													<div class="col-lg-5">

                                                        <input type="date" class="form-control" name="ngaybatdau">
                                                        
                                                    </div>
                                                    <div class="col-lg-5">

                                                    <input type="date" class="form-control" name="ngayketthuc">
                                                    </div>
                                                    <div class="col-lg-2">
                                                    <input type="submit" class="btn btn-info" value="Thống kê" name="thongke">

                                                    </div>
												</div>
											
												
											</div>
                                        </div>
                                        </span>
                                        
                                     
										
										</div>
                                            
                                    </div>

                              
                                
                            </form>

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
                            if(isset($_POST['thongke'])){
                                $batdau = $_POST['ngaybatdau'];
                                $ketthuc = $_POST['ngayketthuc'];
                                $ntn = "SELECT donhang.*, trangthai_dathang.*,users.* FROM donhang, trangthai_dathang, users
                                WHERE donhang.id_trangthai_dathang = trangthai_dathang.id_trangthai_dathang 
                                and users.id_user=donhang.id_khachhang  and Ngaylaphoadon BETWEEN '$batdau' AND '$ketthuc' order by id_dathang desc";

                                $query_ntn = mysqli_query($conn, $ntn);
                                while($row = mysqli_fetch_assoc($query_ntn))
                                {
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


                                            <a href="moidat.tpl.php?huy=<?php echo $row['id_dathang']?>" class="btn btn-primary btn-sm text-white" name="huy" type="button">Hủy đặt phòng</a>

                                            <?php } else if($row['id_trangthai_dathang'] == 6)  { ?>
                                                <a href="moidat.tpl.php?thanhtoan=<?php echo $row['id_dathang']?>" class="btn btn-info btn-sm text-white" name="thanhtoan" type="button">Xác nhận thanh toán</a>

                                            <?php } ?>
                                        </td> 
                                        <td align="center" class="flex-btn">
                                                <a href="updatedondathang.tpl.php?update=<?= $row['id_dathang']; ?>" class="btn btn-outline-info" data-target="#staticBackdrop1"><i class="fas fa-edit"></i></a>  
                                            
                                        </td>

                                    </tbody>
                                    <?php
                                        }
                                        ?>
                                        <?php } ?>
                                        

                                    <tbody>

                                </table>

</div>

</div>



            </div>   </div>
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
<script src="../../templates/admin/js/mota.js"></script>
<script src="../../templates/admin/js/nhapfloat.js"></script>
</body>
</html>
