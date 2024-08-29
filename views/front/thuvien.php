<?php
    function conggio(){
        $startTime = date("Y-m-d H:i:s");//khởi tạo
        //Cộng giờ
        $cenvertedTime = date('Y-m-d H:i:s',strtotime('+6 hour',strtotime($startTime)));
        return $cenvertedTime;
    }


    function chaydi($id_dathang,$id_sim,$hoten,$sdt,$diachi,$soluong,$tt,$ghichu,$capnhat){
        $conn= ketnoidb();
        $sql = "INSERT INTO chitietdonhang(id_donhang, id_sim,Hoten,Sdt,Diachi,Sosim,Thanhtien,Ghichu,Capnhat) 
        VALUES ('$id_dathang','$id_sim','$hoten','$sdt','$diachi','$soluong', '$tt', '$ghichu', '$capnhat')";
        // use exec() because no results are returned
        $conn->exec($sql);
        $conn = null;
    }


    $id_user = $_SESSION['id_user'];
    function taodonhang($id_user,$ngay_dat_hang,$tong_tien,$id_ttdp){
        $conn= ketnoidb();
        $sql = "INSERT INTO donhang(id_khachhang,Ngaylaphoadon,Tongtien,id_trangthai_dathang) 
        VALUES ('$id_user','$ngay_dat_hang','$tong_tien','$id_ttdp')";
        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        $conn = null;
        return $last_id;
    }


    function ketnoidb(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bansim";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            return $e->getMessage();
        }

    }

    function tongdonhang(){
        $tong=0;
            if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
                if(sizeof($_SESSION['giohang'])>0){
                    
                    for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                        $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                        $tong+=$tt;
                        
                    }
                }
            }
            return $tong;
    }




    function showgiohang(){
        $ttgh="";
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                $tong=0;
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt;
                    $ttgh.= '<tr>
                            <td >'.($i+1).'</td>
                            <td>'.$_SESSION['giohang'][$i][0].'</td>
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                            <td>'.$_SESSION['giohang'][$i][3].'</td>
                            <td>'.$_SESSION['giohang'][$i][4].'</td>

                            <td>
                                <div>'.$tt.'</div>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="xoa_tieptuc.php?delid='.$i.'"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button></a>
                            </td>
                        </tr>';
                }
                $ttgh.= '<tr>
                        <th colspan="6">Tổng đơn</th>
                        <th>
                            <div>'.$tong.'</div>
                        </th>
    
                    </tr>';
            }
        }
        return $ttgh;
    }


    function showgiohang1(){
        $ttgh1="";
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                $tong=0;
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt;
                    $ttgh1.= '<tr>
                            <td >'.($i+1).'</td>
                            <td>'.$_SESSION['giohang'][$i][0].'</td>
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                            <td>'.$_SESSION['giohang'][$i][3].'</td>
                            <td>'.$_SESSION['giohang'][$i][4].'</td>

                            <td>
                                <div>'.$tt.'</div>
                            
                        </tr>';
                }
                $ttgh1.= '<tr>
                        <th colspan="7">Tổng đơn</th>
                        <th>
                            <div>'.$tong.'</div>
                        </th>
    
                    </tr>';
            }
        }
        return $ttgh1;
    }
?>