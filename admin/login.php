<?php 
session_start();
//koneksi ke database
include 'config/config.php';

// if (isset($_SESSION['admin']) AND isset($_SESSION['member'])) {

//   header('location:index.php');
//   exit();
// } 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><b>JAVAGEO</b>survey</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="user" placeholder="Username" required="" title="Masukkan Username anda dengan benar">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="pass" placeholder="Password" required="">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
        <!--
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
      -->
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>
      </div>
      <!-- /.col -->
      <?php
      if(isset($_POST['login'])){
        $user    = $conn->real_escape_string($_POST['user']);
        $pass    = $conn->real_escape_string($_POST['pass']);

        $sql = $conn->query("SELECT username, email FROM tb_admin WHERE username='$user' AND password='$pass'");
        $result = $sql->num_rows;
        if($result){

          $data = $sql->fetch_assoc();
          $_SESSION['user'] = $data;
          
          ?>
          <script type="text/javascript">
            setTimeout(function () {
              swal({
                title: "Login Berhasil !!",
                text: "silahkan masukkan username dan password dengan benar",
                icon: "success",
                timer: 2000,
              });
            }, 10);

            window.setTimeout(function(){ 
              window.location.replace('http://javageosurvey.com/admin');
            } ,2000);
          </script>
          <?php         
          

        }else{
          
          ?>
          <script type="text/javascript">
            setTimeout(function () {
              swal({
                title: "Login Gagal !!",
                text: "silahkan masukkan email dan password dengan benar",
                icon: "error",
                timer: 2000,
              });
            }, 10);

            window.setTimeout(function(){ 
              window.location.replace('login.php');
            } ,2000);
          </script>
          <?php
          
        }
      }
      ?>

    </div>
  </form>

</div>
<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!--Sweet Alert-->
<script src="assets/js/sweetalert.js"></script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
