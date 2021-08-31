<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng nhập</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH; ?>public/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH; ?>public/css/main.css">

</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" name="main-form" action="login/runLogin" method="post">
          <span class="login100-form-title">
            Đăng nhập
          </span>

          <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
          	<input type="hidden" name="token" value="<?php echo $token; ?>" />
            <input class="input100" type="text" name="username" placeholder="Username" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Please enter password">
            <input class="input100" type="password" name="password" placeholder="Password" required>
            <span class="focus-input100"></span>
          </div>

          <div class="text-right p-t-13 p-b-23">
            <span class="txt1">
              Quên
            </span>

            <a href="/forget" class="txt2">
              Tài khoản / Mật khẩu?
            </a>
          </div>
          <!-- <?php //echo isset($error['username']) ? $error['username'] : ''; ?> -->

          <div class="container-login100-form-btn">
            <input type="submit" name="submit" value="Đăng nhập" class="login100-form-btn"/>
          </div>

          <div class="flex-col-c p-t-170 p-b-40">
            <span class="txt1 p-b-9">
              Không có tài khoản?
            </span>

            <a href=" /dangki" class="txt3">
              Đăng kí ngay
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
