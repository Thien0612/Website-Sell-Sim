<?php
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
        
        .horizontal-line {
            border: none;
            color: gray;
            border-top: 1px solid gray; /* Chỉnh độ dày và màu sắc cho phù hợp */
            height: 5px; /* Chỉnh chiều cao của thanh gạch */
            width: 1200x; /* Chỉnh chiều rộng của thanh gạch */
            text-align: justify;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        .tt{
            width: max-content;
            text-align: left;
            font-size: 15px;

        }
        .td{
            font-size: 40px;
            color: #1b1b6b;
            padding-left: none;
            
        }
        
        .anh_tintuc{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                width: 250px;
                height: 150px;
        }
        .tieude{
            color: black;
            font-size: 13px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
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
        <!-- Hiện slidder -->

        <!-- Kết thúc slidder -->
        </div>
        <div class="full-row">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  
            <div class="container">
                <div class="tt">
                    <a href="index.tpl.php"> <span style="color:black;"><span class="mr-3 fa fa-home"></span>Trang chủ ></span></a>
                    &nbsp&nbsp&nbsp   
                    <a href="gioithieu.tpl.php"> <span style="color:blue;font-weight:400;"> Tin tức</span></a>&nbsp&nbsp&nbsp&nbsp
                </div>
                <div class="row">
                
                <div class="row p-4 bg-black">
                    <div class="td">
                        Tin tức                    
                    </div>
                    <div class="horizontal-line"></div>
                    <div class="full-row">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  
                    <?php 
                        $conn = mysqli_connect('localhost', 'root', '', 'bansim');	

                        $query=mysqli_query($conn,"SELECT tintuc.*, users.Fullname,users.Anh FROM tintuc,users WHERE tintuc.id_user=users.id_user ORDER BY id_tintuc");
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