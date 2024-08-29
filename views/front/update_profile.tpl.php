<?php    
session_start();
$error="";
$msg="";
$conn = mysqli_connect('localhost', 'root', '', 'bansim');

$id_user=$_GET['update'];
$select="SELECT * FROM users where id_user=$id_user";
$query=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($query);

if(isset($_POST['capnhat'])){

  $ten = $_POST['ten'];
  $hoten = $_POST['hoten'];
  $email = $_POST['email'];
  $sdt = $_POST['sdt'];
  $diachi = $_POST['diachi'];
  $ngaysinh = $_POST['ngaysinh'];
  $pass = $_POST['pass'];

  $sql="UPDATE users SET Ten='$ten', Fullname='$hoten',Email='$email', Sdt='$sdt', Diachi='$diachi', Ngaysinh='$ngaysinh', Pass='$pass' WHERE id_user = $id_user";

  $query=mysqli_query($conn,$sql);

  header('location:profile.tpl.php');  
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
    <title>HOTEL TEN MAX</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/tenmax.png"/>
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
        #form-pro {
                width: 800px;
                height: 370px;
                background: rgb(255, 255, 255);
                flex-grow: 1;
                padding: 30px 50px 50px;
                box-shadow: 0px 0px 170px 2px rgba(252, 252, 252, 0.8);
                border-radius: 5px;
                justify-content: center;
                align-items: center;
            }
        .anhprofile{
            padding-left: 10px;
          
        }
    </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        </div>

        <div id="wrapper">
        <div class="loginbox">
                <div class="login-right">  
                    <div class="login-right-wrap">  
                    <form id="form-pro" action="" method='post' enctype="multipart/form-data">  
                    <h1 class="form-heading">CẬP NHẬT HỒ SƠ</h1>
                        <div class="form-group">
                        <input type="text"  name="ten" value="<?php echo$row['Ten']?>"class="form-control" required>
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="text"  name="hoten" value="<?php echo$row['Fullname']?>"class="form-control" required>

                        </div>
                        <div class="form-group">
                        <input type="email"  name="email" value="<?php echo$row['Email']?>" class="form-control" required>
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="text"  name="sdt" value="0<?php echo$row['Sdt']?>" class="form-control" required maxlength="10">

                        </div> 
                        
                        <div class="form-group">
                        <input type="password" name="pass"  value="<?php echo$row['Pass']?>" class="form-control" required>

                            &nbsp&nbsp&nbsp&nbsp
                            <input type="date"  name="ngaysinh" value="<?php echo$row['Ngaysinh']?>" class="form-control" required>

                        </div>

                        <div class="form-group">  
                        <input type="text"  name="diachi" value="<?php echo$row['Diachi']?>" class="form-control"  required>

                        </div>                      
                            <button class="btn btn-success" name="capnhat" value="capnhat" type="submit">Cập nhật</button>
                        
                    </form>
                 </div>

        </div>
        </div>

        </div> 
        <script>
        function xem()
        {
            var mk = document.getElementById("Pass");
            if(mk.type == "password")
            {
               mk.type = "text";
            }
            else
            {
                mk.type="password";
            }
        }
    </script>
       
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