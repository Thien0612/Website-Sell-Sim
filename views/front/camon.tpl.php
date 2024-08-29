<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'bansim');	
$id_user = $_SESSION['id_user'];
$id_dathang=$_SESSION['id_dathang'];
include_once 'thuvien.php';
if(isset($_POST['thanhtoan'])){
    $update = "UPDATE chitietdonhang SET pttt='cod' WHERE id_donhang = $id_dathang";
    $query = mysqli_query($conn, $update);
}

if(isset($_GET['thanhtoan'])){
    if($_GET['thanhtoan']='momo'){
        $update = "UPDATE chitietdonhang SET pttt='momo atm' WHERE id_donhang = $id_dathang";
        $query = mysqli_query($conn, $update);
    }
   
 
    }


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
        
        .camon{
            width: 200px;
            height: 200px;
            margin-left: 280px;
            position: absolute;
            top: 20%;
            left: 60%;
            transform: translate(-50%, -50%);
        }
     
    </style>
    </head>
  <body>   

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        <!-- Hiện slidder -->

       
        <div>
            <img src="../../templates/front/images/Thank.svg"  >
            <div class="camon">
                <a href="../../views/front/index.tpl.php">
                
                    <button type="button" class="d-block btn btn-info mt-3 w-100">Quay về trang chủ</button>
                
                </a>
            </div>
        </div>
        
        <div class="full-row">
            <div class="container">
                <div class="row">
               
                </div>
            </div>
        </div>  
      <?php include("footer.tpl.php");?>
      <!-- Click button ở trong ô tìm kiếm -->
      
    
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>

    <script src="../../templates/front/js/myScript.js"></script>
    <script src="../../templates/front/js/tabbox.js"></script>

    <script>
            var today = new Date();
            today.setDate(today.getDate() + 1);

            var year = today.getFullYear();
            var month = (today.getMonth() + 1).toString().padStart(2, '0');
            var day = today.getDate().toString().padStart(2, '0');
            var tomorrow = year + '-' + month + '-' + day;
            
            document.getElementById('ngaynhan').setAttribute('min', tomorrow);

            document.getElementById('ngaynhan').addEventListener('change', function() {
            var selectedDate = new Date(this.value);
            selectedDate.setDate(selectedDate.getDate() + 1);

            var year = selectedDate.getFullYear();
            var month = (selectedDate.getMonth() + 1).toString().padStart(2, '0');
            var day = selectedDate.getDate().toString().padStart(2, '0');
            var selectedDateString = year + '-' + month + '-' + day;

            document.getElementById('ngaytra').setAttribute('min', selectedDateString);

            var ngay1 = document.getElementById('ngaynhan');
            var selectedDate1 = new Date(ngay1.value);
            var day1 = selectedDate1.getDate();
            document.getElementById('test1').innerHTML=day1;    
            
            
            var ngayNhan = new Date(this.value);
            var ngayTra = new Date(document.getElementById('ngaytra').value);
            
            var soNgay = Math.floor((ngayTra - ngayNhan) / (1000 * 60 * 60 * 24));
            
            document.getElementById('test3').innerHTML = soNgay;
            
            });
            document.getElementById('ngaytra').addEventListener('change', function() {
            var ngay2 = document.getElementById('ngaytra');
            var selectedDate2 = new Date(ngay2.value);
            var day2 = selectedDate2.getDate();
            document.getElementById('test2').innerHTML=day2;

            var ngayTra= new Date(this.value);
            var ngayNhan = new Date(document.getElementById('ngaynhan').value);
            
            var soNgay = Math.floor((ngayTra - ngayNhan) / (1000 * 60 * 60 * 24));
            
            document.getElementById('test3').innerHTML = soNgay;
            
            var selectElement = document.getElementById("sophong");
            var selectedValue = selectElement.value;
            var numberOfRooms = parseInt(selectedValue);

            var test3Element = document.getElementById("test3");
            var test3Value = parseInt(test3Element.textContent);

            var tienphong = document.getElementById("tienphong").textContent;
            var tienphongWithoutDot = tienphong.replace(/\./g, "");
            var tienphongint = parseInt(tienphongWithoutDot);

            var options = selectElement.options;
            for (var i = 0; i < options.length; i++) {
                var option = options[i];
                var value = parseInt(option.value);

                var multipliedValue = value * tienphongint * test3Value;
                var formattedNumber = multipliedValue.toLocaleString();
                option.textContent = value + " (" + formattedNumber + " VND )";
            }
            });
            
           
        </script>
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