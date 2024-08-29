<?php
$conn = mysqli_connect('localhost', 'root', '', 'bansim');	
  
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!isset($_SESSION['Email']))
{
    header("location:login.tpl.php");
}

$id_user = $_SESSION['id_user'];
include_once 'thuvien.php';


    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    
    //lấy dữ liệu từ form
    if(isset($_POST['chon'])){
        $id=$_GET['id_sim'];
        $_SESSION['id_sim']=$_GET['id_sim'];
        $s = "SELECT sim.*, loaisim.*
        FROM sim, loaisim
        WHERE id_sim='".$id."' && sim.id_loaisim=loaisim.id_loaisim ";
        $q = mysqli_query($conn,$s);
        $r = mysqli_fetch_assoc($q);
        $sosim = $r['sosim'];
        $gia = $r['gia'];
        $loaisim = $r['loaisim'];

       
        $soluong=1;
        $price_string = str_replace(".", "", $gia);
        $price_int = intval($price_string);
        //kiem tra sim co trong gio hang hay khong?

        $fl=0; //kiem tra sim co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][0]==$id){
                $fl=1;
                $soluongnew=0+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }            

        //neu khong trung sim trong gio hang thi them moi
        if($fl==0){
            //them moi sim vao gio hang
            $sp=[$id,$sosim,$price_int,$soluong,$loaisim];
            $_SESSION['giohang'][]=$sp;
        }

    //    var_dump($_SESSION['giohang']);
      }
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
    <link rel="stylesheet" href="../../templates/front/css/main.css">
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
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.jpeg"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="../../templates/front/carousel-10/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../templates/front/carousel-10/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="../../templates/front/carousel-10/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
        <style>
     
        .datsim{
            background-color:#cf9b0a;
            width: 450px;
            height: 30px;
            color: white;
            border-radius: 15px;
        }
        
       
        </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        </div>

        <main class="app app-ban-hang">
    <div class="row">
     
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="tile">
          <h3 class="tile-title">Giỏ hàng</h3>
          <form action="bill.php" method="post">

        <div class="du--lieu-san-pham">
          <table class="table table-hover table-bordered">
            <thead>
              <tr style="vertical-align: middle">
                <th style="vertical-align: middle" class="so--luong">STT</th>
                <th style="vertical-align: middle" class="so--luong">ID</th>
                <th style="vertical-align: middle" class="so--luong" width="10">Số sim</th>
                <th style="vertical-align: middle" class="so--luong">Giá</th>
                <th style="vertical-align: middle" class="so--luong" width="10">Số lượng</th>
                <th style="vertical-align: middle" class="so--luong" width="10">Loại sim</th>
                <th style="vertical-align: middle" class="so--luong">Thành tiền(VNĐ)</th>
                <th style="vertical-align: middle" class="so--luong text-center" style="text-align: center; vertical-align: middle;"></th>
              </tr>
            </thead>
            <tbody>
            <?php echo showgiohang(); ?>
            </tbody>
          </table>
        </div>
        <div class="row">
        <div class="tile-footer col-md-12">
                  <a href="xoa_tieptuc.php?delcart=1"><input type="button" class="btn btn-warning" value="XÓA GIỎ HÀNG"></a>
                  <a href="sim.tpl.php"><input type="button" class="btn btn-info" value="TIẾP TỤC ĐẶT HÀNG"></a>
        </div>
        </div>
        <div class="alert">

          
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="tile">
          <h3 class="tile-title">Thông tin thanh toán</h3>
          <div class="row">
          <?php 
          $select_kh = "SELECT * FROM users WHERE id_user=$id_user";
          $query_kh = mysqli_query($conn,$select_kh);
          while($row_kh = mysqli_fetch_assoc($query_kh)){
          ?>
            <label class="control-label">Họ tên khách hàng</label>

            <div class="form-group  col-md-10">
              <input class="form-control" type="text" name="hoten" value="<?php echo $row_kh['Fullname'] ?>" required>
            </div>
            <label class="control-label">Số điện thoại</label>

            <div class="form-group  col-md-12">
			        <input class="form-control" type="number" name="sdt" value="0<?php echo $row_kh['Sdt'] ?>" required>
            </div>
            <label class="control-label">Địa chỉ</label>

			      <div class="form-group  col-md-12">
              <input class="form-control" name="diachi" value="<?php echo $row_kh['Diachi'] ?>" required>
            </div>
            <label class="control-label">Ghi chú đơn đặt phòng</label>

            <div class="form-group  col-md-12">
              <input class="form-control" name="ghichu"  required>
            </div>
            <label class="control-label">Ngày đặt</label>

			      <div class="form-group  col-md-12">
			        <input class="form-control" type="text" name="ngaydat" value="<?php echo " ".conggio();?>" disabled="enable">
            </div>
        </div>
          <div class="row">
           
          <div class="tile-footer col-md-12">
              
                <input class="btn btn-primary luu-san-pham" type="submit" name="datsim" value="ĐẶT MUA">
              
            </div>
            
            <?php } ?>
            
          </div>
        </div>
        </div>
  </form>
    
        <div>
        
        </div>
      </div>
    </div>
    
  </main>


  <!-- The Modal -->
  

  <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
    //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> <i class="bx bxs-calendar" ></i> ' + today + ' | <i class="fa fa-clock-o" aria-hidden="true"></i>  : ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
  </script>
  
  
       
    <script src="../../templates/front/carousel-10/js/jquery.min.js"></script>
    <script src="../../templates/front/carousel-10/js/popper.js"></script>
    <script src="../../templates/front/carousel-10/js/bootstrap.min.js"></script>
    <script src="../../templates/front/carousel-10/js/owl.carousel.min.js"></script>
    <script src="../../templates/front/carousel-10/js/main.js"></script>
      
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>

    <script src="../../templates/front/js/myScript.js"></script>
    <script src="../../templates/front/js/tabbox.js"></script>
    </body>
</html>