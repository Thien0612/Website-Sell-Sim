
<div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="thongtin">
              <a href="#" class=""><span class="d-none d-md-inline-block" style="font-size:15px; color: white;"><i class="fas fa-envelope"></i> mobifone@gmail.com</span></a>
              &nbsp&nbsp&nbsp&nbsp
              <a href="#" class=""><span class="d-none d-md-inline-block" style="font-size:15px; color: white;"><i class="fas fa-phone"></i> (+84) 123456789</span></a>
              </div>

              <div class="anh_laco">
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/mobifone">
                <span class="mr-2 fa fa-facebook"></span>
              </a>
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/@mobifone.official">
                <span class="mr-2 fa fa-youtube"></span>
              </a>
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.tiktok.com/@mobifone.official">
                <span class="mr-2 fab fa-tiktok"></span>
              </a>
              <a class="btn btn-floating m-1">
                <img src="../../templates/front/images/laco.png" height="20px" width="25px" alt="" />
              </a>
            </div>

            </div>

          </div>

        </div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

<div class="container">
  <div class="row align-items-center position-relative">


    <div class="site-logo">
      <a href="index.html" class="text-black"><span class="text-primary">mobi<span style="color:red;">fone</span></span></a>
    </div>

    <div class="col-12 ">
      <nav class="site-navigation text-right ml-auto " role="navigation">

        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
          <li><a href="index.tpl.php" class="nav-link">TRANG CHỦ</a></li>
          <li><a href="gioithieu.tpl.php" class="nav-link">GIỚI THIỆU</a></li>
          <li><a href="sim.tpl.php" class="nav-link">SIM</a></li>       

          <li><a href="tintuc.tpl.php" class="nav-link">TIN TỨC</a></li>       
          <li><a href="lienhe.tpl.php" class="nav-link">LIÊN HỆ</a></li>
          <?php  if(isset($_SESSION['Email']))
						{ 
          ?>
          <li class="has-children"><a href="profile.tpl.php" class="nav-link">HỒ SƠ</a>
              <ul class="dropdown arrow-top">
                <li><a href="profile.tpl.php" class="nav-link">Thông tin cá nhân</a></li>
                <li><a href="lichsu.tpl.php" class="nav-link">Lịch sử đặt mua</a></li>
                <li><a href="../../models/logout.php" class="nav-link">Đăng xuất</a></li>
              </ul>
          </li>   
          <?php } else { ?>
										
					<?php } ?>	
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
          <div class="float-right"> 
              
              <?php  if(isset($_SESSION['Email'])) 
               { ?>
                <a href="#" class="" data-toggle="modal" data-target="#logoutModal">
                  <span class="d-none d-md-inline-block" style="font-size:15px; color: black; "><i class="fas fa-user"></i> Đăng xuất</span>

                </a>
                &nbsp&nbsp
              <a href="cart.tpl.php">
                <span class="d-none d-md-inline-block" style="color: black; ">
                  <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                </span>
                  
                </a>
               <?php } else { ?>
              <a href="login.tpl.php" class="">
                <span class="d-none d-md-inline-block" style="font-size:15px; color: black; "><i class="fas fa-user"></i> Đăng nhập</span>
              </a>
              <span class="mx-md-2 d-inline-block"></span>
              
              <a href="register.tpl.php" class="">
                <span class="d-none d-md-inline-block" style="font-size:15px; color: black; "><i class="fas fa-user-plus"></i> Đăng ký</span>
              </a>
              <?php } ?>              
              
          </div>
        </ul>
      </nav>

    </div>


  </div>
</div>

</header>