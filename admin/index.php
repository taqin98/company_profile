<?php 
//koneksi ke database
include 'config/config.php';

session_start();

if (!isset($_SESSION['user']) ) {

  ?>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    setTimeout(function () {
      swal({
        title: "WARNING !!",
        text: "Anda tidak punya akses kesini",
        icon: "error",
        timer: 2000,
        button: "OK",
      });
    }, 10 );

    window.setTimeout(function () {
      window.location.replace('http://javageosurvey.com/admin/login.php');
    }, 2000 );
      //alert("Anda tidak punya akses kesini");
  </script>
  <?php
  //header('location:http://www.javageosurvey.com/admin/login.php');
  exit();
  
}
//var_dump($_SESSION['user']);


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Javageosurvey</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style type="text/css">
    input[type=text]#total {
    width: 6%;
    text-align: center;
    padding: 5px;
    margin: 4px;
    margin-bottom: 15px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>JAVA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN JAVAGEOSURVEY</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->


          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
                <?php
                  if (isset($_SESSION['user'])) {
                    echo $_SESSION['user']['username'];

                  }
                ?>                  
                </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php
                  if (isset($_SESSION['user'])) {
                    echo $_SESSION['user']['username'];

                  }
                  ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!--
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
              -->
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Logout out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php
                  if (isset($_SESSION['user'])) {
                    echo $_SESSION['user']['username'];

                  }
                ?>
                  
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php">
             <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="?halaman=viewTentangKami">
            <i class="fa fa-files-o"></i>
            <span>Tentang Kami</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">
                6
              </span>
            </span>
          </a>
        </li>

        <li>
          <a href="?halaman=viewProject">
            <i class="fa fa-files-o"></i>
            <span>Proyek</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">
                6
              </span>
            </span>
          </a>
        </li>

        <li>
          <a href="?halaman=viewContact">
            <i class="fa fa-files-o"></i>
            <span>Hubungi Kami</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">
                6
              </span>
            </span>
          </a>
        </li>
        
        <li>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      

  

      <?php
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

      switch ($_GET['halaman']) {

              //Tentang Kami
              case 'viewTentangKami':
                include 'data/tentang_kami/viewTentangKami.php';
                break;

              case 'addTentangKami':
                include 'data/tentang_kami/addTentangKami.php';
                break;

              case 'detailTentangKami':
                include 'data/tentang_kami/detailTentangKami.php';
                break;

              case 'editTentangKami':
                include 'data/tentang_kami/editTentangKami.php';
                break;

              case 'deleteTentangKami':
                include 'data/tentang_kami/deleteTentangKami.php';
                break;

              //Hubungi Kami
              case 'addContact':
                include 'data/hubungi_kami/addContact.php';
                break;

              case 'viewContact':
                include 'data/hubungi_kami/viewContact.php';
                break;

              case 'detailContact':
                include 'data/hubungi_kami/detailContact.php';
                break;

              case 'editContact':
                include 'data/hubungi_kami/editContact.php';
                break;

              case 'deleteContact':
                include 'data/hubungi_kami/deleteContact.php';
                break;

              //Proyek
              case 'addProject':
                include 'data/proyek/addProject.php';
                break;

              case 'viewProject':
                include 'data/proyek/viewProject.php';
                break;

              case 'detailProject':
                include 'data/proyek/detailProject.php';
                break;

              case 'editProject':
                include 'data/proyek/editProject.php';
                break;

              case 'deleteProject':
                include 'data/proyek/deleteProject.php';
                break;

              
              default:
                include 'data/home.php';
                break;
            }      
      ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="http://javageosurvey.com">Javageosurvey</a>.</strong> All rights
    reserved. | Design by <a href="https://adminlte.io">AdminLTE</a> | Development by <a href="http://www.instagram.com/jdk_studio">Jdk Studio</a>
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!--Sweet Alert-->
<script src="assets/js/sweetalert.js"></script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CKEDITOR -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
<!--Datatables-->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- bootstrap datepicker -->
<script type="text/javascript" src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })

    $('.datepicker').datepicker({
      format: 'mm/dd/yyyy'
    });
  })
</script>

<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script type="text/javascript">
  var max_fields      = 10;
  var wrapper         = $(".input_images_array"); 
  var add_button      = $(".add_field_button");
  var remove_button   = $(".remove_field_button");

  $(add_button).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields < max_fields){
      $(wrapper).append('<div class="form-group"><input type="file" name="gambar[]"></div>');
    }
  });
  $(remove_button).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields>1){
      wrapper[0].childNodes[total_fields-1].remove();
    }
  });
</script>

<!-- <script type="text/javascript">
$(function() {
    $('#reservation').daterangepicker();
});
</script> -->


<!--

<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"data/ajax.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('#notif').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('#count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 

 
 $(document).on('click', '.hitung', function(){
  $('#count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();
 }, 10);
 
});
</script>

-->

</body>
</html>
