<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
if(!isset($_SESSION['Email']))
    {
        header('location:login.tpl.php'); 
}	
include('../../models/lienhe.php');

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
        .anh_phong{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                width: 350px;
                height: 200px;
        }
        
        .chu{
            margin-bottom: 50px;
            text-align: center;
            vertical-align: middle;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
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
            width: 1200x; /* Chỉnh chiều rộng của thanh gạch */
            text-align: justify;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .gia{
            background-color: #efefef;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 2px;
            border-radius: 5px;
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
        .tt{
            width: 1100px;
            background-color:#cf9b0a;
            text-align: center;
        }
        .td{
            font-size: 40px;
            color: #301e95;
            padding-left: none;
            text-align: center;
        }
        .anh_amthuc{
            margin-left: auto;
            margin-right: auto;
            padding-top: 30px;
            width: 700px;
            height:500px;
        }
        .anh_bar{
            margin-left: auto;
            margin-right: auto;
            padding-top: 30px;
            width: 700px;
            height:500px;
        }
        .lh{
            text-align: center;
            color: black;
            line-height: 2;
        }
        #lienhe{
           height: 500px;
           width: 700px;
           text-align: center;
        }
    </style>
    </head>
  <body>   

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        <!-- Hiện slidder -->
        
 </div>

      
            <div class="container">
                
                <div class="row">             
                    <div class="td">
                        Liên hệ
                    </div>
                    <div class="lh">
                        Lời chào nồng nhiệt từ MOBIFONE.
                    </div>
                    <div class="lh">
                         Vui lòng để lại tin nhắn của bạn dưới đây. Chúng tôi sẽ liên lạc lại với bạn trong vòng 48 giờ.
                    </div>
                    <div id="wrapper">
                    <form id="lienhe" action="../../views/front/lienhe.tpl.php" method='post'>         
                        <?php echo $msg; ?><?php echo $error; ?>    
                        <div class="form-group">
                            <input type="text" name="ten" class="form-control" id="inputText4" placeholder="Tên*" required>
                            &nbsp&nbsp&nbsp&nbsp
                            <input type="text" name="sdt" class="form-control" id="inputText4" placeholder="Số điện thoại*" required>
                        </div>
                        <div class="form-group">    
                            <input type="email"  name="email" class="form-control" placeholder="Email*" required>
                            &nbsp&nbsp&nbsp&nbsp 
                            <input type="text" name="diachi" class="form-control" id="inputText4" placeholder="Địa chỉ*" required>
                        </div>   
                        <div class="form-group">    
                            <textarea class="tinymce form-control" name="noidung"  rows="10" cols="10" placeholder="Nội dung*" required></textarea>

                        </div>
                        <button class="btn btn-warning" name="gui" value="gui" type="submit">Gửi</button>
                       
                </form>

                </div>
                 </div>
            </div>
                                    
                </div>
            </div>
        <!-- Kết thúc giới thiệu khách sạn-->
         
        <div class="full-row">
            <div class="container">
                <div class="row">              
                </div>
            </div>
        </div> 
       
  
      <?php include("footer.tpl.php");?>
      <!-- Click button ở trong ô tìm kiếm -->
      <script>
        (function($) {
        $('.quanti-invitati-op').on('click', function() {
            var op = parseInt($(this).data('op'));
            
            var quantiInvitati = parseInt($('.quanti-invitati').val());
            var quantiInvitatiMin = parseInt($('.quanti-invitati').attr('min'));
            
            $('.quanti-invitati').val(Math.max(quantiInvitatiMin, quantiInvitati + op));
        });
        }(jQuery));
      </script>
    
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
    </body>
</html>