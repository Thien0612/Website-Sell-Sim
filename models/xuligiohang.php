<?php
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'khachsan') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

if(isset($_POST['dongydathang'])){
    $hoten = ($_POST['hoten']);
    $sdt = ($_POST['sdt']);
    $diachi = ($_POST['diachi']);
    $ghichu = ($_POST['ghichu']);
    $ngay_dat_hang =($_POST['ngay_dat_hang']);
    $tong =($_POST['tong_tien']);
    
    
    $sql = "INSERT INTO dathang (id, hoten,sdt,diachi,ghichu,ngay_dat_hang,tongtien) VALUES ('$id','$hoten','$sdt','$diachi','$ghichu','$ngay_dat_hang','$tong_tien')";
    echo '<script language="javascript">alert("Đặt hàng thành công");window.location="index.php";</script>';
    if (mysqli_query($conn, $sql)){
        echo "Tên: ".$_POST['hoten']."<br/>";
        echo "số điiện thoại: ".$_POST['sdt']."<br/>";
        echo "Địa chỉ: ".$_POST['diachi']."<br/>";
        echo "ghi chú: " .$_POST['ghichu']."<br/>";
        echo "Ngày đặt: " .$_POST['ngay_dat_hang']."<br/>";
        echo "Tổng Tiền: " .$_POST['tong_tien']."<br/>";
        }
        else {
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="";</script>';
        }
        }
    ?>