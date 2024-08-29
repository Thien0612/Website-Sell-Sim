<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    $conn = mysqli_connect('localhost', 'root', '', 'bansim');	
    $id_user = $_SESSION['id_user'];
    $id_dathang = isset($_GET['id_dathang']) ? $_GET['id_dathang'] : '';

    $select_ctdh = "SELECT dh.*, ctdh.*, ttdh.*, s.* FROM donhang dh, chitietdonhang ctdh, trangthai_dathang ttdh, sim s
    WHERE dh.id_dathang=ctdh.id_donhang and ttdh.id_trangthai_dathang = dh.id_trangthai_dathang and ctdh.id_sim=s.id_sim and ctdh.id_donhang=$id_dathang";
    $query_ctdh = mysqli_query($conn, $select_ctdh);

    $row = mysqli_fetch_assoc($query_ctdh);

    $select_ctdh1 = "SELECT dh.*, ctdh.*, ttdh.*, s.* FROM donhang dh, chitietdonhang ctdh, trangthai_dathang ttdh, sim s
    WHERE dh.id_dathang=ctdh.id_donhang and ttdh.id_trangthai_dathang = dh.id_trangthai_dathang and ctdh.id_sim=s.id_sim and ctdh.id_donhang=$id_dathang";
    $query_ctdh1 = mysqli_query($conn, $select_ctdh1);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../templates/front/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../templates/front/css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../templates/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../templates/front/css/style.css">
    <link rel="stylesheet" href="../../templates/front/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../templates/front/css/css/style.css">
    <link rel="stylesheet" href="../../templates/front/css/login.css">
    <link rel="stylesheet" href="../../templates/front/css/app.css">
    <link rel="stylesheet" href="../../templates/front/css/reset.css">
    <link rel="stylesheet" href="../../templates/front/css/css.css">
    <link rel="stylesheet" href="../../templates/front/css/pricerange.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../templates/front/css/tabunderline.css">
    <link rel="stylesheet" href="../../templates/front/css/css_tab/demo.css">
    <link rel="stylesheet" type="text/css" href="../../templates/front/css/css_tab/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LỊCH SỬ</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.jpeg"/>

  
    </head>
  <body>  
    <div id="page-wrapper ">
        <?php include("header.tpl.php");?>
        <div id="wrapper">
        
        <form action="" id="form-datphong" method="post" enctype="multipart/form-data">
                <div class="container mt-60 min-height-100">  
                <table class="table-bordered w-100 bg-white" cellpadding="5px">
                <tr>
                    <th colspan="4"><h4 class="text-center">Chi tiết đơn hàng</h4></th>
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
                    <th>Tên</th>
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
                </div>
                <a href="lichsu.tpl.php">
                    <span style="background-color:#186dc3; width: 100px; height: 35px; padding-bottom:10px; margin-left:20px;">

                    <button type="button" class="btn" name="quayve"><span style="font-size:16px; color: white;"><b>Quay về</b></span></button>
                    </span>    
                </a>
                <?php
                if($row['id_trangthai_dathang'] == 5)  {
                ?>
                <a href="lichsu.tpl.php?huy=<?= $id_dathang?>">
                    <span style="background-color:red; width: 100px; height: 35px; padding-bottom:10px; margin-left:20px;">

                    <button type="button" class="btn" name="huy"><span style="font-size:16px; color: white;"><b>Hủy đặt hàng</b></span></button>
                    </span>    
                </a>
                <?php }?>
            </form>
                                                    
        
        </div>

      <?php include("footer.tpl.php");?>
    </div>
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>
    <script>
        function xem()
        {
            var mk = document.getElementById("Pass");
            if(mk.type == "password")
            {
               mk.type = "text";
            }
            else
            {
                mk.type="password";
            }
        }
    </script>
  </body>
</html>
