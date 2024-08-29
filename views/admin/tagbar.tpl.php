<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_index.php">
        
        <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.tpl.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Thống kê</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Hệ thống
    </div>
   
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Đặt mua</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="moidat.tpl.php">Mới Đặt</a>
                <a class="collapse-item" href="chuaduyet.tpl.php">Chưa được duyệt</a>
                <a class="collapse-item" href="xacnhanthanhtoan.tpl.php">Xác Nhận Thanh Toán</a>
                <a class="collapse-item" href="hosodathang.tpl.php">Đã đặt</a>

            </div>
        </div>
    </li>
  
    <li class="nav-item">
        <a class="nav-link" href="sim.tpl.php">
            <i class="fas fa-fw fa-map"></i>
            <span>Quản lý sim</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="loaisim.tpl.php">
            <i class="fas fa-fw fa-map"></i>
            <span>Quản lý loại sim</span></a>
    </li>
   
    <?php if($r['1']!=2){?>
    <li class="nav-item">
        <a class="nav-link" href="khachhang.tpl.php">
            <i class="fas fa-fw fa-map"></i>
            <span>Khách Hàng</span></a>
    </li>
    <?php }else{?>   <?php }?>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Các mục khác
    </div>

    
    <li class="nav-item">
        <a class="nav-link" href="lienhe.tpl.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Liên hệ </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tintuc.tpl.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tin tức </span></a>
    </li>
    
    
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
