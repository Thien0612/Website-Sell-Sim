<?php 
        include 'chitietloaiphong.php';
        $select_update = "SELECT chitietloaiphong.*, loaiphong.*
        FROM chitietloaiphong, loaiphong
        where chitietloaiphong.id_chitietloaiphong=$id_ctlp && chitietloaiphong.id_loaiphong=loaiphong.id_loaiphong";
        $query_ctlp_update=mysqli_query($conn,$select_update);
        $row_ctlp_update=mysqli_fetch_assoc($query_ctlp_update);

        if(isset($_POST['update'])){
            $tieude=$_POST['tieude'];
            $ctlp=$_POST['ctlp'];
            $giuong=$_POST['giuong'];
            $maygiat=$_POST['maygiat'];
            $maysay=$_POST['maysay'];
            $maylanh=$_POST['maylanh'];
            $maychieu=$_POST['maychieu'];
            $phongtamrieng=$_POST['phongtamrieng'];
            $phonglamviec=$_POST['phonglamviec'];
            $phonghop=$_POST['phonghop'];
            $minibar=$_POST['minibar'];
            $wifi=$_POST['wifi'];
            $tv=$_POST['tv'];
            $banlamviec=$_POST['banlamviec'];
            $tusat=$_POST['tusat'];
            $tulanh=$_POST['tulanh'];
            $phongtiepkhach=$_POST['phongtiepkhach'];
            $bep=$_POST['bep'];
            $phongan=$_POST['phongan'];
            $bancong=$_POST['bancong'];
            $sofa=$_POST['sofa'];
    
            $update= "UPDATE chitietloaiphong SET id_loaiphong=$ctlp, Tenphong='$tieude', Giuong='$giuong', MayGiat='$maygiat', 
            MaySay='$maysay',MayLanh='$maylanh', MayChieu= '$maychieu', PhongTamRieng='$phongtamrieng', 
            PhongLamViec='$phonglamviec', PhongHop='$phonghop', Minibar='$minibar', Wifi='$wifi', TV='$tv', BanLamViec='$banlamviec', 
            TuSat='$tusat', TuLanh='$tulanh', PhongTiepKhach='$phongtiepkhach', Bep='$bep', PhongAn='$phongan', BanCong='$bancong', Sofa='$sofa'
            WHERE id_chitietloaiphong= $id_ctlp";
    
            $query = mysqli_query($conn, $update); 
            header('location:../../views/admin/chitietloaiphong.tpl.php');  
        }

?>