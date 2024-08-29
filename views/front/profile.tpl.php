<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

$error="";
$msg="";
$conn = mysqli_connect('localhost', 'root', '', 'bansim');

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
        <style>     
        .center {
                display: block;
                padding-right: 30px;
                width:100%;
                height: 100%;
        }
        .thongtin{
            text-align: left;
        }
        .capnhat{
            justify-items: center;
            text-align: center;
            padding-left: 50px;
        }
        .form-profile{
            padding-left: 400px;
          
        }
        .anhprofile{
            width:50%;
            height:50%;
            margin-left: 100px;
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
        <div class="form-profile">
        <div class="col-md-7">
        <div class="tile">
          
        <div class="du--lieu-san-pham">
        <form action="" method="post" enctype="multipart/form-data">         
                            <h5 class="form-heading">THÔNG TIN TÀI KHOẢN</h5>
                                <?php echo $error; ?><?php echo $msg; ?>
                                <?php 
                                                    $id_user=$_SESSION['id_user'];
                                                    $query=mysqli_query($conn,"SELECT * FROM users WHERE id_user='$id_user'");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                ?>
                                                <div class="user-info mt-md-20"> 
                                                    <div class="overlay-black overflow-hidden position-relative">
                                                        <img src="../../userfiles/<?php echo $row['9'];?>" alt="" class="anhprofile">
                                                    </div>
                                                    <div class="mb-4 mt-2">                             
                                                    </div>
                                                    
                                                    <div class="thongtin">
                                                    <div class="form-group">
                                                        <div class="col-lg-5">
                                                            <div class=""><span style="font-size:15px"><b>Tên:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>Fullname:</b></span> </div>

                                                            <div class=""><span style="font-size:15px"><b>Email:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>SĐT:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>Địa chỉ:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>Ngày sinh:</b></span>  </span></div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                        <span style="font-size:15px"> <?php echo $row['3'];?> </span><br>
                                                        <span style="font-size:15px"> <?php echo $row['2'];?> </span><br>
                                                        <span style="font-size:15px"> <?php echo $row['5'];?> </span><br>
                                                        <span style="font-size:15px">0<?php echo $row['4'];?> </span><br>
                                                        <span style="font-size:15px"><?php echo $row['6'];?> </span><br>
                                                        <span style="font-size:15px"><?php echo $row['7'];?>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    
                                                    
                                    <span style="padding-left:145px;">
                                    <a href="update_profile.tpl.php?update=<?= $row['0']; ?>" class="btn btn-outline-info" data-target="#staticBackdrop1">Cập nhật</a>  
                                    </span>
                                    <?php } ?>
                                                    
                                                </div>
                        </form>
        </div>
        
        </div>
      </div>
      </div>
    </div>
  </main>   
      
      
    <script src="../../templates/front/carousel-10/js/jquery.min.js"></script>
    <script src="../../templates/front/carousel-10/js/popper.js"></script>
    <script src="../../templates/front/carousel-10/js/bootstrap.min.js"></script>
    <script src="../../templates/front/carousel-10/js/owl.carousel.min.js"></script>
    <script src="../../templates/front/carousel-10/js/main.js"></script>

    <?php include("footer.tpl.php");?>
      

    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>

    <script src="../../templates/front/js/myScript.js"></script>
    <script src="../../templates/front/js/tabbox.js"></script>
    </body>
</html>