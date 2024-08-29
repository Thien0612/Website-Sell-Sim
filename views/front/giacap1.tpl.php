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
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.jpeg"/>
    <style>
      
        .td{
            font-size: 40px;
            color: #1b1b6b;
            padding-left: none;
            text-align:center;
            
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
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .anh_sim{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 30%;
                width: 50px;
                height: 40px;

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
       
  
                <div class="container">
               
                <div class="row">
                
                <div class="full-row">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  
       
                    <div class="td">
                    Sim & Giá
                    </div>
                    <div class="full-row">
                        <div class="container">
                            <div class="row1">
                            <div class="timkiem">                                                
                                            <a href="giacap1.tpl.php"><button type="submit" class="btn2"><span style="font-size:16px; color: black;"><b>100k-1tr</b></span></button></a>                                                                                    
                                            </div>
                                           
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap2.tpl.php"><button type="submit" class="btn2"><span style="font-size:16px; color: black;"><b>1tr-5tr</b></span></button>  </a>                                                                                                   
                                            </div>
                                          
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap3.tpl.php"><button type="submit" class="btn2"><span style="font-size:16px; color: black;"><b>5tr-10tr</b></span></button>  </a>                                                                                                   
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap4.tpl.php"><button type="submit" class="btn2"><span style="font-size:16px; color: black;"><b>10tr-20tr</b></span></button> </a>                                                                                                    
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap5.tpl.php"><button type="submit" class="btn2"><span style="font-size:16px; color: black;"><b>20tr-50tr</b></span></button>  </a>                                                                                                   
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap6.tpl.php"><button type="submit" class="btn2"><span style="font-size:16px; color: black;"><b>50tr-100tr</b></span></button> </a>                                                                                                    
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap7.tpl.php"><button type="submit" class="btn2"><span style="font-size:16px; color: black;"><b>100tr-500tr</b></span></button>   </a>                                                                                                  
                                            </div>
                                            <div class="timkiem">                                                                                       
                                            <a href="giacap8.tpl.php"><button type="submit" class="btn2"><span style="font-size:16px; color: black;"><b>> 500tr</b></span></button>   </a>                                                                                                  
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simlucquy.tpl.php"> <a href="simlucquy.tpl.php"><button type="submit" class="btn1"><span style="font-size:16px; color: black;"><b>Sim lục quý </b></span></button></a>                                                                                         
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simnguquy.tpl.php"><button type="submit" class="btn1"><span style="font-size:16px; color: black;"><b>Sim ngũ quý </b></span></button>   </a>                                                                                              
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simtuquy.tpl.php"><button type="submit" class="btn1"><span style="font-size:16px; color: black;"><b>Sim tứ quý </b></span></button>    </a>                                                                                             
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simthantai.tpl.php"><button type="submit" class="btn1"><span style="font-size:16px; color: black;"><b>Sim thần tài </b></span></button>  </a>                                                                                               
                                            </div>
                                            
                                            <div class="timkiem1">                                                                                       
                                            <a href="simdacbiet.tpl.php"><button type="submit" class="btn1"><span style="font-size:16px; color: black;"><b>Sim đặc biệt </b></span></button>  </a>                                                                                               
                                            </div>
                                            <div class="timkiem1">                                                                                       
                                            <a href="simtamhoa.tpl.php"><button type="submit" class="btn1"><span style="font-size:16px; color: black;"><b>Sim tam hoa </b></span></button>   </a>                                                                                              
                                            </div>
                                            <div class="timkiem3">    
                                            <div class="container-fluid">
                                            <div class="row align-items-center text-center py-3 px-xl-5">
                                                <div class="col-lg-6 col-6 text-left m-auto">
                                                <form action="timkiem.tpl.php" method="POST">
                                                        <div class="input-group">
                                                            <input type="text" name="search_box" class="form-control border" onkeypress="return isNumberKey(event)" placeholder="Nhập số sim cần tìm...">
                                                            <div class="input-group-append">
                                                                <button class="input-group-text bg-transparent text-primary border" name="search_btn" type="submit">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
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

                    
                    <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php 
                                    $minPrice = 100000;
                                    $maxPrice = 1000000;

                                            $conn = mysqli_connect('localhost', 'root', '', 'bansim');	
                                            $sim = "SELECT *
                                            FROM sim where REPLACE(gia, '.', '') BETWEEN $minPrice AND $maxPrice
                                            order by id_sim asc";
                                            $query = mysqli_query($conn, $sim); 
                                            
                                            if ($query->num_rows > 0) {
                                            while($row=mysqli_fetch_array($query))
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
                                
									<?php } } else {
    echo "Không tìm thấy sim nào trong khoảng giá từ $minPrice đến $maxPrice";
} ?>


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
        
  
      <?php include("footer.tpl.php");?>
      <script>
   
        function isNumberKey(e) {
            var charCode = (e.which) ? e.which : e.keyCode;
            if (charCode > 31  && (charCode < 46 || charCode > 46) && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
        </script>
    
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>

    <script src="../../templates/front/js/myScript.js"></script>
    <script src="../../templates/front/js/tabbox.js"></script>
    
    </body>
</html>