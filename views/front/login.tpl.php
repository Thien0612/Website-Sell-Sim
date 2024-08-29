<?php

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
    <title>ĐĂNG NHẬP</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.jpeg"/>
  
    </head>
  <body>  
    <div id="page-wrapper ">
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>

        <div id="wrapper">
        <form id="form-login" action="../../admin/login.php" method='post'>         
            <h5 class="form-heading">ĐĂNG NHẬP</h5>
            <label name="error"></label>
            <div class="form-group">
            <input type="email"  name="Email" class="form-control" placeholder="Nhập email*" minlength="6" maxlength="50" required >
            </div>
            <div class="form-group">    
            <input type="password" name="Pass" id="Pass" class="form-control" placeholder="Nhập mật khẩu" minlength="6" maxlength="20" required pattern=".{8,}" title="Mật khẩu phải chứa ít nhất 8 ký tự">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="btnPassword" onclick="xem()">
                <span class="fas fa-eye"></span>
              </button>
            </div>
            </div>   
            <button class="btn btn-success" name="Login" value="Login" type="submit">Đăng nhập</button>
            <div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>							
						<div class="text-center dont-have">Bạn chưa có tài khoản?<a href="register.tpl.php"><span style="color:black">Đăng ký</span></a></div>
            <div class="text-center dont-have"><a href="quenmk.tpl.php"><span style="color:black"> Quên mật khẩu?</span></a></div>

       </form>

        </div>

      <?php include("footer.tpl.php");?>
    </div>
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>
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
  </body>
</html>
