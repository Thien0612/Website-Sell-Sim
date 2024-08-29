<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
	if(isset($_GET['id_sim'])){
		$id_sim=$_GET['id_sim'];
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https ://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
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
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.jpeg"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="../../templates/front/carousel-10/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../templates/front/carousel-10/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="../../templates/front/carousel-10/css/style.css">
        <style>
       
        .Tieude{
            color: black;
            font-size: 13px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        
    </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        </div>
        
		<div class="full-row">
            <div class="container">
                <div class="row">


                <div class="col-lg-12">
                        <div class="row">
						
                        
                        <?php 
                        $conn = mysqli_connect('localhost', 'root', '', 'bansim');	
                        if(isset($_GET['id_tintuc'])){
                            $id_tintuc=$_GET['id_tintuc'];
                        }
                        $query=mysqli_query($conn,"SELECT tintuc.*, users.Fullname,users.Anh, users.Sdt FROM tintuc,users WHERE tintuc.id_user=users.id_user && id_tintuc='".$id_tintuc."' ");
                                        while($row=mysqli_fetch_array($query))
                                        {
                                ?>
                        <form method="post" enctype="multipart/form-data">
                        <div class="row p-5 bg-black">


                        <ul class="property_list_widget">
                            
                                <span style="font-size:40px; font-style:bold; color:black; font-weight:500;"><?php echo $row['Tieude'];?></a></span>
                                <br>
                                <div class="flex-shrink-0">
                                
                                <img src="../../userfiles/<?= $row['Anh']; ?>" alt="" class="anh-user-tintuc">
                                <span style="font-size:15px; font-style:bold; color:black; font-weight:400;">   
                                Được đăng bởi <span style="font-size:15px; font-style:bold; color:red; font-weight:500;"><?php echo $row['Fullname'];?> </span>
                                lúc <?php echo date('H:m', strtotime($row['Ngaydang']));?> 
                                ngày <?php echo date('d-m-Y', strtotime($row['Ngaydang']));?>
                            
                                </span>
                                </div>
                           
                        </ul>

                        <div class="col-lg-9">
                            <span style="font-weight:500; text-align:justify;"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['Noidung'];?></a></p> </span> 
                        </div>
                        <div class="col-lg-3">
                        <h4 class="double-down-line-left position-relative pb-4 mb-4 mt-5">Tin tức khác</h4>
                        <ul class="property_list_widget">
							
                            <?php 
                            $query=mysqli_query($conn,"SELECT * FROM tintuc where id_tintuc!=$id_tintuc ORDER BY rand() LIMIT 5");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                            <li> 
                                    <img src="../../templates/front/images/<?= $row['4']; ?>" alt="" class="anh_tintuc">
                                    <div class="Tieude">
                                      <span style="text-align:justify;font-weight:200;"><h6><a href="chitiettintuc.tpl.php?id_tintuc=<?php echo $row['0'];?>"><?php echo $row['2'];?></a></h6></span>                                
                                    </div>
                            </li>
                            <?php } ?>

                        </ul>
                        
                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left position-relative pb-4 mb-4 mt-5">Tin tức mới nhất</h4>
                            <ul class="property_list_widget">
							
                            <?php 
                            $query=mysqli_query($conn,"SELECT * FROM tintuc ORDER BY Ngaydang DESC LIMIT 4");
                            while($row=mysqli_fetch_array($query))
                            {
                                ?>
                                    <li> 
                                        <img src="../../templates/front/images/<?= $row['4']; ?>" alt="" class="anh_tintuc">
                                        <div class="Tieude">
                                        <span style="text-align:justify;font-weight:200;"><h6><a href="chitiettintuc.tpl.php?id_tintuc=<?php echo $row['0'];?>"><?php echo $row['2'];?></a></h6></span>                                
                                        </div>
                                </li>
                                    <?php } ?>

                            </ul>
                        </div>
                    </div>
                        </div>

                        </form>
                           
                        
                        <?php } ?>

                        </ul>
                        
                        
                    </div>
                        </div>

                        
                        <div class="container">
        
                        
                        
                            
                            
                        
                        </div>
                    </div>
					
                    


                </div>
            </div>
    </div>
 </div>     
        <br>
        
        <br>
        
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