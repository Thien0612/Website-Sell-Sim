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
        .td{
            font-size: 30px;
            color: #cf9b0a;
            padding-left: none;
        }
        .anh_phong{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                width: 250px;
                height: 150px;

        }
        
        .chu{
            margin-bottom: 50px;
            text-align: center;
            vertical-align: middle;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            color: #cf9b0a;
            font-weight: 750;
            
        }
        .tieude{
            color: black;
            font-size: 13px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .mota{
            font-family: Tahoma;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .timmua{
            color: black;
            font-size: 17px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .tin{
            font-size: 13px;
        }
        .button_p{
            border-radius:15px;
            border: 1px solid gray;
            color: gray;
            background-color: white;
        }
        .horizontal-line {
            border: none;
            color: gray;
            border-top: 1px solid gray; /* Chỉnh độ dày và màu sắc cho phù hợp */
            height: 5px; /* Chỉnh chiều cao của thanh gạch */
            width: 250px; /* Chỉnh chiều rộng của thanh gạch */
        }
        .gia{
            font-size: 16px;
            font-style: bold;
            text-align:left;
        }
        .gia1{
            font-size: 15px;
            font-style: bold;
        }
        .gioithieu{
            font-size: 25px;
            font-style: bold;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-top: none;
            padding-bottom: 20px;
            color:black;
        }
        .noidung_gioithieu{
            font-size: 15px;
            line-height: 1.8;
            text-align: justify;
        }
        .nhvs{
            font-size: 25px;
            font-style: bold;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-top: none;
            padding-bottom: 20px;
            color:black;
        }
        .noidung_nhvs{
            color: black;
            font-size: 17px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 15px;
            line-height: 1.8;
            text-align: justify;

        }      
        .btn_xemthem{
            justify-items: center;
            text-align:center;
        }
        .form-phong{
            background-image: url("../../templates/front/images/pvg.png");
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: bottom center;

        }
        .vt{
            background-image: url("../../templates/front/images/vt.png");
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: bottom center;
        }
        .dt_p{
            padding-top: 10px;
        }
        .form-check{
            border: 1px solid #d7c4c4;
            padding-bottom: 10px;
        }
        .form-floating{
            background-color: #b9b30252;
            border-radius: 5px;
            border: 1px solid #d7c4c4;
        }
        .anh_phong{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 40px;
                height: 40px;

        }
        
        .chu{
            margin-bottom: 50px;
            text-align: center;
            vertical-align: middle;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            color: #301e95;
            font-weight: 750;
            
        }
        .tieude{
            color: black;
            font-size: 13px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .mota{
            font-family: Tahoma;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .timmua{
            color: black;
            font-size: 17px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .tin{
            font-size: 13px;
        }
        .button_p{
            background-color: #cf9b0a;
            border-radius:5px;
        }
        .horizontal-line {
            border: none;
            color: gray;
            border-top: 1px solid gray; /* Chỉnh độ dày và màu sắc cho phù hợp */
            height: 5px; /* Chỉnh chiều cao của thanh gạch */
            width: 250px; /* Chỉnh chiều rộng của thanh gạch */
        }
        .gia{
            background-color: white;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 2px;
            border-radius: 5px;
            box-shadow: 0px 0px 16px 11px rgb(57 111 244 / 10%);
            }
        .gioithieu{
            font-size: 25px;
            font-style: bold;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-top: none;
            padding-bottom: 20px;
            color:black;
        }
        .noidung_gioithieu{
            font-size: 15px;
            line-height: 1.8;
            text-align: justify;
        }
        .nhvs{
            font-size: 25px;
            font-style: bold;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-top: none;
            padding-bottom: 20px;
            color:black;
        }
        .noidung_nhvs{
            color: black;
            font-size: 17px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 15px;
            line-height: 1.8;
            text-align: justify;

        }      
        .btn_xemthem{
            justify-items: center;
            text-align:center;
        }
        .form-phong{
            background-image: url("../../templates/front/images/pvg.png");
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: bottom center;

        }
        .vt{
            background-image: url("../../templates/front/images/vt.png");
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: bottom center;
        }
        .anh_tintuc{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                width: 250px;
                height: 150px;

        }
        .ban{
            color: inherit;
            text-decoration: none;
            font-size: 13px;
        }
        .chothue{
            color: inherit;
            text-decoration: none;
            font-size: 13px;
        }
        .chu{
            margin-bottom: 50px;
        }
        .tieude{
            color: black;
            font-size: 13px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .timmua{
            color: black;
            font-size: 17px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .tin{
            font-size: 13px;
        }
        .anh_tintuc{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                width: 250px;
                height: 150px;

        }
        .ban{
            color: inherit;
            text-decoration: none;
        }
        .chothue{
            color: inherit;
            text-decoration: none;
        }
        .chu{
            margin-bottom: 50px;
        }
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
						
                        
                        <form method="post" enctype="multipart/form-data">
                        <div class="row p-5 bg-black">


                        <div class="col-lg-3">
                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left position-relative pb-4 mb-4 mt-5">Tin tức mới nhất</h4>
                            <ul class="property_list_widget">
							
                            <?php 
                            include('../../models/chitietsim.php');

                            $query=mysqli_query($conn,"SELECT * FROM tintuc ORDER BY Ngaydang DESC LIMIT 4");
                                while($row=mysqli_fetch_array($query))
                                {
                            ?>
                                <li> 
                                    <img src="../../templates/front/images/<?= $row['4']; ?>" alt="" class="anh_tintuc">
                                    <div class="Tieude">
                                      <span style="text-align:justify;font-weight:200;"><h6><a href="chitiettintuc.php?id_tintuc=<?php echo $row['0'];?>"><?php echo $row['2'];?></a></h6></span>                                
                                    </div>
                            </li>
                                <?php } ?>

                            </ul>
                        </div>
                        </div>
                        </form>
                        <?php 
                        include('../../models/chitietsim.php');
                        while($row=mysqli_fetch_array($chitiet)){
                        ?>
                        <div class="col-lg-6">
                        <div class="row">
                        <form action="cart.tpl.php?id_sim=<?= $row['id_sim']; ?>" method="post" enctype="multipart/form-data">
                        <div class="row p-5 bg-black">


                        <ul class="property_list_widget">
                            <span style=" text-align:justify; color:#041c96;font-size:20px;">
                                CHI TIẾT SIM 
                            </span>
                            <br>
                            <br>
                            <span style=" text-align:justify; color:black; padding-top:50px; line-height:3;">
                            
                            Số sim: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#9a0e00; font-weight:700;"><?= $row['1']; ?></span>
                            <br>
                            Giá: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#9a0e00; font-weight:700;"> <?= $row['2']; ?> đ</span>
                            <br>
                            Loại sim: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:black; font-weight:700;"><?= $row['loaisim']; ?></span>
                            <br>
                            Tình trạng sim: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black; font-weight:700;"><?= $row['trangthaisim']; ?></span>
                            <br>
                            <i>_ Giao sim miễn phí trên toàn quốc ! </i>
                            </span> 
                            <br>
                            <?php if($row['soluong'] > 0 ){?>
                                                <span style="background-color:#33488d; width: 100px; height: 35px; padding-bottom:13px;">
                                                            
                                                    <button type="submit" class="btn" name="chon"><span style="font-size:16px; color: white;"><b>Đặt mua</b></span></button>
                                                            
                                                </span>
                                                <?php } else{?> 
                                                    <p class="text-danger">Sim đã được đặt mua</p>
                                                    
                                    <?php
                                    }
                                    ?>                      
                        </ul>
                        </div>
                        </form>
                        </div>
                        </div>
                        <?php } ?>
                        <div class="col-lg-3">
                        <h4 class="double-down-line-left position-relative pb-4 mb-4 mt-5">Sim khác</h4>
                        <ul>
							
                            <?php 
                            $query=mysqli_query($conn,"SELECT * FROM sim where id_sim!=$id_sim ORDER BY rand() LIMIT 3");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                            <li> 
                            <form method="POST" enctype="multipart/form-data" class="form-sim">

                                            
                                <a href="chitietsim.tpl.php?id_sim=<?php echo $row["0"]?>">
                                    <div class="p-2">
                                        
                                    <div class="gia">
                                    <table>
                                        <tr>
                                            <td rowspan="2"><img src="../../templates/front/images/logo.jpeg" alt="" class="anh_phong"></td>
                                            <td><span style="color:green; font-weight:700;"><?php echo$row['1'];?></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:13px; text-align:right;"><?php echo$row['2'];?> đ</span></td>
                                        
                                        </tr>
                                        
                                    </table>
                                    </div>
                                    </div>
                                </a>
                        </form>
                            </li>

                            
                            <?php } ?>

                        </ul>
                        
                        
                    </div>
                        </div>

                        
                        <div class="container">
                <div class="row">

                    <div class="col-md-12">
                    <h4>                          
                        Các sim mới nhất
                    </h4>
                    <div class="horizontal-line"></div>
                    </div>
                        <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
                                <?php 
                                       $conn = mysqli_connect('localhost', 'root', '', 'bansim');	
                                       $sim = "SELECT *
                                       FROM sim order by id_sim desc limit 8";
                                       $query1 = mysqli_query($conn, $sim);  
										while($row=mysqli_fetch_array($query1))
										{
									?>
								
                                    <div class="col-md-3 col-lg-3">

                                        <form method="POST" enctype="multipart/form-data" class="form-sim">

                                            
                                            <a href="chitietsim.tpl.php?id_sim=<?php echo $row["0"]?>">
                                                <div class="p-2">
                                                    
                                                <div class="gia">
                                                <table>
                                                    <tr>
                                                        <td rowspan="2"><img src="../../templates/front/images/logo.jpeg" alt="" class="anh_phong"></td>
                                                        <td><span style="color:green; font-weight:800;"><?php echo$row['1'];?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span style="font-size:15px; text-align:right;"><?php echo$row['2'];?> đ</span></td>
                                                    
                                                    </tr>
                                                    
                                                </table>
                                                </div>
                                                </div>
                                            </a>


                                            
   
                                            
                                        </form>
                                    </div>
									<?php } ?>
                                
									
                                </div>
                            </div>                          
                        </div>
                        
                </div>
            </div>  
                        
                        
                            
                            
                        
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