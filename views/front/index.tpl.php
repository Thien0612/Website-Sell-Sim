<?php

ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
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
    <title>Trang chủ</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.jpeg"/>
    <style>
        .anh_sim{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 30%;
                width: 50px;
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
        .tin{
            font-size: 13px;
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
            padding-top: 10px;
            padding-bottom: 10px;
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
        .btn_xemthem{
            justify-items: center;
            text-align:center;
        }
        .form-sim{
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

      
    </style>
    </head>
  <body>   

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        <!-- Hiện slidder -->
        <div class="hero">
            <section id="Slider">
                        <div class="aspect-ratio-169">                        
                            <div>
                                <img src="../../templates/front/images/anh1.jpg">                               
                                <img src="../../templates/front/images/anh2.jpg">
                                <img src="../../templates/front/images/anh3.jpg">
                                <img src="../../templates/front/images/anh4.jpg"> 
                                <img src="../../templates/front/images/anh5.jpg"> 
                                <img src="../../templates/front/images/anh6.jpg">  
                            </div> 
                                        
                        </div>
                        <div class="dot-container">
                            <div class="dot active"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    
            </section>
        </div> 
        <!-- Kết thúc slidder -->
</div> 
        <!-- Khung tìm kiếm -->
            <div class="container">
                <div class="row">

                <div class="container h-50">
                        <div class="row h-50 align-items-center">
                            <div class="col-lg-12">
                                <div class="text-white">

                                <div class="tabContainer">
                                    <div class="buttonContainer">
                                        <button onclick="showPanel1(0,'#1F1F1F')"><span style="font-size:15px;"><b>TÌM SIM</b></span></button>
                                    </div>
                                    <div class="tabPanel">
                                    <form method="post">
                                    <div class="row">
                                            
                                    <div class="timkiem">                                                
                                            <a href="giacap1.tpl.php"><button type="button" class="btn2"><span style="font-size:16px; color: black;"><b>100k-1tr</b></span></button></a>                                                                                    
                                            </div>
                                           
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap2.tpl.php"><button type="button" class="btn2"><span style="font-size:16px; color: black;"><b>1tr-5tr</b></span></button>  </a>                                                                                                   
                                            </div>
                                          
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap3.tpl.php"><button type="button" class="btn2"><span style="font-size:16px; color: black;"><b>5tr-10tr</b></span></button>  </a>                                                                                                   
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap4.tpl.php"><button type="button" class="btn2"><span style="font-size:16px; color: black;"><b>10tr-20tr</b></span></button> </a>                                                                                                    
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap5.tpl.php"><button type="button" class="btn2"><span style="font-size:16px; color: black;"><b>20tr-50tr</b></span></button>  </a>                                                                                                   
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap6.tpl.php"><button type="button" class="btn2"><span style="font-size:16px; color: black;"><b>50tr-100tr</b></span></button> </a>                                                                                                    
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap7.tpl.php"><button type="button" class="btn2"><span style="font-size:16px; color: black;"><b>100tr-500tr</b></span></button>   </a>                                                                                                  
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap8.tpl.php"><button type="button" class="btn2"><span style="font-size:16px; color: black;"><b>> 500tr</b></span></button>   </a>                                                                                                  
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simlucquy.tpl.php"><button type="button" class="btn1"><span style="font-size:16px; color: black;"><b>Sim lục quý </b></span></button></a>                                                                                         
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simnguquy.tpl.php"><button type="button" class="btn1"><span style="font-size:16px; color: black;"><b>Sim ngũ quý </b></span></button>   </a>                                                                                              
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simtuquy.tpl.php"><button type="button" class="btn1"><span style="font-size:16px; color: black;"><b>Sim tứ quý </b></span></button>    </a>                                                                                             
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simthantai.tpl.php"><button type="button" class="btn1"><span style="font-size:16px; color: black;"><b>Sim thần tài </b></span></button>  </a>                                                                                               
                                            </div>
                                            
                                            <div class="timkiem1">                                                                                       
                                            <a href="simdacbiet.tpl.php"><button type="button" class="btn1"><span style="font-size:16px; color: black;"><b>Sim đặc biệt </b></span></button>  </a>                                                                                               
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simtamhoa.tpl.php"><button type="button" class="btn1"><span style="font-size:16px; color: black;"><b>Sim tam hoa </b></span></button>   </a>                                                                                              
                                            </div>
                                            <div class="timkiem2"> 
                                                <img src="../../templates/front/images/timkiem.png">
                                            </div>
                                        </div>                                                                        
                                           
                                    </form>
                                    </div>                                                       
                                   
                                </div>

                                </div>

                                </div>

                                </div>
                    </div>
                </div>
            </div>

        <!-- Kết thúc khung tìm kiếm -->


        <!-- Giới thiệu-->
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                    <div class="form-group row">
                       
						<div class="col-lg-6">
                            <img src="../../templates/front/images/mobifone.jpg"  >
						</div>
                        <div class="col-lg-6">
							<div class="gioithieu">Giới thiệu</div>
                            <h6 class="noidung_gioithieu">Là mạng viễn thông di động đầu tiên tại Việt Nam, MobiFone được thành lập ngày 16/04/1993 với tên gọi ban đầu là Công ty thông tin di động (VMS). Ngày 01/12/2014, MobiFone được chuyển đổi thành Tổng công ty Viễn thông MobiFone, thuộc Bộ Thông tin và Truyền thông. Tháng 11/2018, MobiFone được chuyển giao quyền đại diện chủ sở hữu về Ủy ban Quản lý vốn nhà nước tại doanh nghiệp. Tại Việt Nam, MobiFone là một trong số các doanh nghiệp Viễn thông – Công nghệ thông tin – Nội dung số lớn nhất, là nhà cung cấp mạng thông tin di động đầu tiên, với hơn 30% thị phần. MobiFone là thương hiệu được khách hàng yêu thích lựa chọn, nhận được nhiều giải thưởng ...</h6>
                            <!-- button xem thêm giới thiệu -->
                            <span style="background-color:#301e95; width: 200px; height: 40px; padding-bottom:11px; border-radius:45px;">
                            <a href="gioithieu.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                            </span>
                        </div>
                       
					</div>
                    </div>
                        
                </div>
            </div>
        <div class="full-row">
            <div class="container">
                <div class="row">              
                </div>
            </div>
        </div> 
        <!-- Các sim-->

            <div class="container">
                <div class="row">
                    <div class="form-sim">
                    <div class="col-md-12">
                        <h4 class="chu">                          
                        SIM VÀ GIÁ                    
                        </h4>
                    </div>
                        <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php 
                                       $conn = mysqli_connect('localhost', 'root', '', 'bansim');	
                                       $sim = "SELECT *
                                       FROM sim order by id_sim asc limit 12";
                                       $query1 = mysqli_query($conn, $sim);  
										while($row=mysqli_fetch_array($query1))
										{
									?>
								
                                    <div class="col-md-3 col-lg-3">

                                        <form action="" method="POST" enctype="multipart/form-data" class="form-sim">

                                            
                                            <a href="chitietsim.tpl.php?id_sim=<?php echo $row["0"]?>">
                                                <div class="p-2">
                                                    
                                                <div class="gia">
                                                <table>
                                                    <tr>
                                                        <td rowspan="2"><img src="../../templates/front/images/logo.jpeg" alt="" class="anh_sim"></td>
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

                        <!-- button xem thêm các sim -->
                        <div class="btn_xemthem">
                        <span style="background-color:#301e95; width: 150px; height: 40px; padding-bottom:11px; border-radius:45px;">
                            <a href="sim.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                        </span>
                        </div>
                </div>
                </div>
            </div>
        <!-- kết thúc xem sim -->
        <!-- các tin tức -->
            <div class="full-row">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                        
                    </div>
                        <div class="rt-container">
                            <div class="col-rt-12">
                                <div class="Scriptcontent">
                                
                                <div class="tile" id="tile-1">

                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <div class="slider"></div>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">MỚI NHẤT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">NỔI BẬT</a>
                                    </li>

                                </ul>
                                <div class="float-right">
                                    <a href="tintuc.tpl.php"><span style="color:black; font-size:14px; font-weight:400; padding-top:30px;">Xem thêm các tin tức khác<i class="fa fa-arrow-right"></i></span></a>
                                </div>
                                 <!-- tab tin tức mới nhất -->
                                 <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="tab-content mt-2" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                                <div class="row">
                                                                
                                                    <?php $query=mysqli_query($conn,"SELECT tintuc.* FROM tintuc ORDER BY rand() LIMIT 4");
                                                        while($row=mysqli_fetch_array($query))
                                                        {
                                                    ?>   
                                                    <div class="col-md-3 col-lg-3">
                                                        <div class="featured-thumb hover-zoomer mb-4">
                                                            <div class="overlay-black overflow-hidden position-relative"> 
                                                                <img src="../../templates/front/images/<?= $row['4']; ?>" alt="" class="anh_tintuc">
                                                            </div>
                                                            <a href="chitiettintuc.tpl.php?id_tintuc=<?php echo $row["0"]?>">
                                                            <div class="featured-thumb-data shadow-one">
                                                                <div class="p-2">
                                                                    <div class="tieude" >
                                                                        <span style="font-size:15px; color: black;"><b><?php echo $row["2"]?></b></span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-4 d-inline-block w-100">
                                                                    <div class="float-right"><span class="mr-2  icon-calendar"></span><?php echo date('d-m-Y', strtotime($row['Ngaydang']));?></div>
                                                                </div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php } ?>

                                                 </div>
                                            </div>
                                                            
                                         </div>

                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        
                                    <div class="tab-content mt-2" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                                <div class="row">
                                                                
                                                    <?php $query=mysqli_query($conn,"SELECT tintuc.* FROM tintuc ORDER BY Ngaydang DESC LIMIT 4");
                                                        while($row=mysqli_fetch_array($query))
                                                        {
                                                    ?>   
                                                    <div class="col-md-3 col-lg-3">
                                                        <div class="featured-thumb hover-zoomer mb-4">
                                                            <div class="overlay-black overflow-hidden position-relative"> 
                                                                <img src="../../templates/front/images/<?= $row['4']; ?>" alt="" class="anh_tintuc">
                                                            </div>
                                                            <a href="chitiettintuc.tpl.php?id_tintuc=<?php echo $row["0"]?>">
                                                            <div class="featured-thumb-data shadow-one">
                                                                <div class="p-2">
                                                                    <div class="tieude" >
                                                                        <span style="font-size:15px; color: black;"><b><?php echo $row["2"]?></b></span>
                                                                    </div>
                                                                </div>
                                                                <div class="p-4 d-inline-block w-100">
                                                                    <div class="float-right"><span class="mr-2  icon-calendar"></span><?php echo date('d-m-Y', strtotime($row['Ngaydang']));?></div>
                                                                </div>
                                                            </div>
                                                            </a>
                                                        </div>
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
        </div>
        <!-- vị trí -->
        <div class="container">
                <div class="row">
                <div class="vt">
                <div class="col-md-12">
                    <div class="form-group row">
                       
						<div class="col-lg-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15704.797020127096!2d105.9590232!3d10.2455078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a82c7e4235a6d%3A0xc6303502f23e0778!2sMobifone%20Vi%CC%83nh%20Long!5e0!3m2!1svi!2s!4v1709012026481!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>						</div>
                        
                        <div class="col-lg-5">
                        
							<div class="gioithieu"><span style="color:white;text-align:left;">VỊ TRÍ<span></div>
                            <h6 class="noidung_gioithieu">
                            <span style="color:white;text-align:left;">Trung tâm giao dịch MobiFone là nơi tiếp nhận và giải quyết các vấn đề về dịch vụ mạng. Ngoài ra, quý khách cũng có thể mua điện thoại giá siêu tốt, hỗ trợ các dịch vụ sim số, hòa mạng số mới, làm lại sim, thay sim, đăng ký thông tin sim chính chủ, đóng cước, thẻ cào…
                            </span>
                            </h6>
                            
                            <span class="mr-2 icon-home" style="color:white;text-align:left;">        Mobifone, Vĩnh Long, Việt Nam </span><br>
                            <span class="mr-2 icon-phone" style="color:white;text-align:left;">       +(84) 123456789</span><br>
                            <span class="mr-2 icon-envelope" style="color:white;text-align:left;">        mobifone@gmail.com</span><br>
                            <span style="background-color:#cf9b0a; width: 200px; height: 40px; padding-bottom:11px; border-radius:45px;">
                            <a href="gioithieu.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                            </span>
                        </div>
                       
					</div>
                    </div>
                </div>
                </div>
            </div>
            <!-- kết thúc vị trí -->
                            
            <div class="full-row">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  

      <?php include("footer.tpl.php");?>
     
    
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>

    <script src="../../templates/front/js/myScript.js"></script>
    <script src="../../templates/front/js/tabbox.js"></script>

    
        <!-- Hiện các slider -->
        <script>
            const header = document.querySelector("header")
            window.addEventListener("scroll",function(){
                x = window.pageYOffset
                if(x>0){
                    header.classList.add("sticky")
                }
                else{
                    header.classList.remove("sticky")
                }
            })
            const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
            const imgContainer = document.querySelector(".aspect-ratio-169")
            const dotItem = document.querySelectorAll(".dot")
            let imgNuber = imgPosition.length
            let index = 0
            //console.log(imgPosition)
            imgPosition.forEach(function(image,index){
            image.style.left = index*100+"%"
            dotItem[index].addEventListener("click",function(){
                slider(index)
            })
            })
            function imgSlide (){
                index++;

                if(index>=imgNuber){
                    index=0
                }
                slider(index)
                
            }
            function slider(index){
                imgContainer.style.left = "-" +index*100+ "%" 
                const dotActive = document.querySelector(".active")
                dotActive.classList.remove("active")
                dotItem[index].classList.add("active")
                
            }
            setInterval(imgSlide,3000)
        </script>
                <script>
                $(document).ready(function(){
                                    
                $("#tile-1 .nav-tabs a").click(function() {
                    
                var position = $(this).parent().position();
                    
                var width = $(this).parent().width();
                    
                    $("#tile-1 .slider").css({"left":+ position.left,"width":width});
                    
                });
                var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
                    
                var actPosition = $("#tile-1 .nav-tabs .active").position();
                    
                $("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});
                    
                });        
                </script>
    </body>
</html>