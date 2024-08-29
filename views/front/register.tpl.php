
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
    <title>ĐĂNG KÝ</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.jpeg"/>

    <style>
      #btnPassword{
        border-radius: 10px;
      }
    </style>
    </head>
  <body>  
    <div id="page-wrapper ">
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>

        <div id="wrapper">
        <div class="loginbox">
                <div class="login-right">  
                    <div class="login-right-wrap">  
                    <form id="form-register" action="../../admin/register.php" method='post' enctype="multipart/form-data">  
                    <h1 class="form-heading">ĐĂNG KÝ</h1>
                        <div class="form-group">
                        <input type="text" name="ten" class="form-control" id="inputText4" placeholder="Nhập tên" required>
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="text" name="fullname" class="form-control" id="inputText4" placeholder="Đầy đủ họ tên" required>

                        </div>
                        <div class="form-group">
                        <input type="email"  name="email" class="form-control" placeholder="Nhập email" required>
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="text" name="sdt" class="form-control" id="inputText4" maxlength="10" placeholder="Nhập số điện thoại" required>

                        </div> 
                        
                        <div class="form-group">

                            <input type="password" name="pass" class="form-control" id="inputText4"  placeholder="Nhập mật khẩu" required pattern=".{8,}" title="Mật khẩu phải chứa ít nhất 8 ký tự">                          
                            &nbsp&nbsp&nbsp&nbsp
                            <input type="text" name="diachi" class="form-control" id="inputText4" placeholder="Nhập địa chỉ" required>

                        </div>

                        <div class="form-group">  
                        <input type="date" name="ngaysinh" class="form-control" id="inputText4" value="<?php echo date('Y-m-d'); ?>" min="1960-01-01" max="<?php echo date('Y-m-d'); ?>">      
                        &nbsp&nbsp&nbsp&nbsp
                        <input class="form-control" id='test' name="anh" type="file" accept="image/x-png,image/gif,image/jpeg" required> 
                        </div>
                         
                        <button class="btn btn-success" name="register" value="register" type="submit">Đăng ký</button>
                        <div class="login-or">
                              <span class="or-line"></span>
                              <span class="span-or">or</span>
                            </div>							
                            <div class="text-center dont-have">Bạn đã có tài khoản?<a href="login.tpl.php"><span style="color:black">Đăng nhập</span></a></div>
                            
                    </form>
                 </div>

        </div>
        </div>

        </div>

      <?php include("footer.tpl.php");?>
    </div>
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
