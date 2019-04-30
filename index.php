<?php
include 'admin/config/config.php';
$sql = $conn->query("SELECT * from tb_tentang_kami order by id_tentang_kami desc LIMIT 1");
$data = $sql->fetch_assoc();
//var_dump($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- page title -->
    <title>Java Geo Survey</title>
    <!--Favicon icon-->
    <link rel="shortcut icon" href="assets/img/jk23.png" type="image/x-icon"> 
    <!--All Css here -->
    <!--Bootstrap v3.3.7 css-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- isotope css -->
    <link rel="stylesheet" href="assets/css/isotope.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--main style css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!--Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <style>
        p h3 {
            text-align: justify;
        }
        .slider-1{
            background:url(assets/background22.png)no-repeat center;
            background-size: cover;
            position: relative;
        }
        .slider-2{
            background:url(assets/edited1.png)no-repeat center;
            background-size: cover;
            position: relative;
        }
        .slider-3{
            background:url(assets/pemetaanudara1.png)no-repeat center;
            background-size: cover;
            position: relative;
        }
    </style>
</head>
<body>

    <!-- START PRELOADER AREA-->
        <!-- <div class="preloader-area">
            <div class="spinner">
                <div class="cp-spinner cp-eclipse"></div>
            </div>
        </div> -->
        <!-- END PRELOADER AREA -->
        <!-- Start Header-top-bar area-->
        <!-- <section class="header-top-bar">
            <div class="page-scroll" id="google_translate_element"></div>
        </section> --><!-- End Header-top-bar area-->
        <!-- Start header area -->
        <header id="header-area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=" "><img src="assets/img/1234.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><div class="page-scroll" id="google_translate_element"></div></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="#home">Beranda</a></li>
                            <li><a class="page-scroll" href="#about">Tentang Kami</a></li>
                            <li><a class="page-scroll" href="#service">Jasa</a></li>
                            <li><a class="page-scroll" href="#blog">Proyek</a></li>
                            <li><a class="page-scroll" href="#contact">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header><!--End header area -->
        <!-- Start slider section -->
        <section class="slider-area" id="home">
            <div class="container-full">
                <div class="row">
                    <div class="regular">
                        <div class="slider-1">
                            <div class="munia-overlay"></div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="welcome-text">
                                    <h1>"We Explore With No Limit, We Focus on Precision, We Present The Details"</h1>
                    
                                    <a href="#blog" class="page-scroll btn">Proyek</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-2">
                            <div class="munia-overlay"></div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="welcome-text">
                                    <h1>“We Explore With No Limit, We Focus on Precision, We Present The Details”</h1>
                                    
                                    <a href="#blog" class="page-scroll btn">Proyek</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-3">
                            <div class="munia-overlay"></div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="welcome-text">
                                    <h1>“We Explore With No Limit, We Focus on Precision, We Present Details”</h1>
                                    
                                    <a href="#blog" class="page-scroll btn">Proyek</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>   
        </section><!-- End slider section -->
        <!-- Start about section -->
        <section class="about section-padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="munia-title">
                            <h2><?= $data['title']; ?></h2>
                            <p align="justify"><?= $data['description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-info" style="text-align: justify;">
                            <h3><strong>Kenapa Memilih Kami ?</strong></h3>
                            <?= $data['why']; ?>
                            <a href="#" class="btn">Beranda</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-r-content">
                            <img src="assets/img/banner22.png" class="img-responsive __img-mobile" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End about section -->
        <!-- Start Service section -->
        <section class="service section-padding" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="munia-title">
                            <h2>Jasa</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box">
                            <div class="">
                                <img src="assets/img/12.png" class="img-responsive" alt="blog">
                                <h4 align="center">Pemetaan Darat</h4>
                                <p>Merupakan survei yang dilakukan diatas permukaan tanah atau sering disebut survei topografi. Survei ini bertujuan mendapatkan posisi atau letak objek di permukaan bumi sehingga dapat menghasilkan kontur permukaan bumi dan diketahui luasan ataupun volume dari </p>
                                <a href="jasa/1/">Baca Lebih Lanjut</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box">
                            <div class="">
                                <img src="assets/img/pemetaanlaut.jpg" class="img-responsive" alt="blog">
                                <h4 align="center">Survey Bathimetri</h4>
                                <p>Merupakan survei dilakukan diatas permukaan air untuk memperoleh kedalaman dasar perairan tersebut.Penentuan kedalaman perairan (pemeruman) adalah penentuan kedalaman titik-titik tertentu di dasar perairan terhadap muka surutan beserta posisi horizontalnya.</p>
                                <a href="jasa/2/">Baca Lebih Lanjut</a>
                            </div>                
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-box">
                            <div class="">
                                <img src="assets/img/45.png" class="img-responsive" alt="blog">
                                <h4 align="center">Pemetaan Udara</h4>
                                <p>Merupakan survei menggunakan wahana yang diterbangkan yang bertujuan untuk melakukan  pemetaan melalui udara yang dapat dilakukan dengan mudah lebih cepat dan murah dan dapat menghasilkan gambar beresolusi tinggi. Selain pemetaan dapat pula dilakukan pemantauan ataupun permodelan 3D </p>
                                <a href="jasa/3/">Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Service section -->
        <!-- Start Blog section -->
        <section class="blog section-padding" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="munia-title">
                            <h2>PROYEK</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $sql = $conn->query("SELECT * FROM tb_proyek");
                    while ($dataProyek = $sql->fetch_assoc()) {
                        # code...
                        ?>
                    <div class="col-md-4">
                        <div class="blog-content-area">
                            <div class="blog-img">
                                <img src="admin/data/proyek/gambar/<?= $dataProyek['images']; ?>" class="img-responsive" alt="blog" style="height:200px;">
                            </div>
                            <div class="blog-content-details">
                                <div class="blog-date">
                                    <span><i class="fa fa-clock-o"></i><?= substr(date('d F Y', strtotime($dataProyek['date_proyek'])), 2, 30) ?></span>
                                </div>
                                <div class="blog-title">
                                    <h4><?= $dataProyek['title']; ?></h4>
                                </div>
                                <div class="blog-info">
                                    <?= substr($dataProyek['description'], 0, 200); ?>
                                    <br>
                                    <a href="proyek/<?= $dataProyek['id_proyek']; ?>/">Baca Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                    
                    <!-- <div class="col-md-4">
                        <div class="blog-content-area">
                            <div class="blog-img">
                                <img src="assets/img/dok.jpg" class="img-responsive" alt="blog">
                            </div>
                            <div class="blog-content-details">
                                <div class="blog-date">
                                    <span><i class="fa fa-clock-o"></i>Januari 2019</span>
                                </div>
                                <div class="blog-title">
                                    <h4> Survey Bathimetri PT DOK Surabaya</h4>
                                </div>
                                <div class="blog-info">
                                    <p>Pekerjaan pengukuran bathimetri di area PT DOK Surabaya untuk mengetahui kedalaman dasar laut dari area PT DOK Surabaya setelah dilakukan proses pengerukan untuk normalisasi DOK </p>
                                    <a href="proyek2.html">Baca Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-content-area">
                            <div class="blog-img">
                                <img src="assets/img/peta detail.png" class="img-responsive" alt="blog">
                            </div>
                            <div class="blog-content-details">
                                <div class="blog-date">
                                    <span><i class="fa fa-clock-o"></i>Mei 2017</span>
                                <div class="blog-title">
                                    <h4> Pengukuran Topografi Gospier Pertamina Surabaya</h4>
                                </div>
                                <div class="blog-info">
                                    <p>Pengukuran topografi Pertamina gospier dilakukan pada tanggal 19 Mei 2017. Tujuan pengukuran topografi ini adalah untuk mengetahui elevasi eksisting dari pelabuhan </p>
                                    <a href="proyek3.html">Baca Lebih Lajut</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section><!-- End Blog section -->
        <!-- <section class="blog section-padding2" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-content-area">
                            <div class="blog-img">
                                <img src="assets/rusun.png" class="img-responsive" alt="blog">
                            </div>
                            <div class="blog-content-details">
                                <div class="blog-date">
                                    <span><i class="fa fa-clock-o"></i>Oktober 2018</span>
                                </div>
                                <div class="blog-title">
                                    <h4>Pengukuran Topografi Rusun Pakal Surabaya</h4>
                                </div>
                                <div class="blog-info">
                                    <p>Pengukuran Topografi Rusun Pakal Surabaya ini dilakukan pada 18 Oktober 2018. Pengukuran ini dilaksanakan untuk memenuhi kebutuhan data yang akan digunakan untuk mengetahui besaran volume </p>
                                    <a href="proyek4.html">Baca Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="blog-content-area">
                            <div class="blog-img">
                                <img src="assets/udara.png" class="img-responsive" alt="blog">
                            </div>
                            <div class="blog-content-details">
                                <div class="blog-date">
                                    <span><i class="fa fa-clock-o"></i>Januari 2018</span>
                                </div>
                                <div class="blog-title">
                                    <h4> Pemantauan Area Sungai Pasca Normalisasi, Sidoarjo</h4>
                                </div>
                                <div class="blog-info">
                                    <p>Pekerjaan survey Pemetaan Dengan foto Udara Jaringan Irigasi Kecamatan Candi Kabupaten Sidoarjo, dengan panjang total 2912 meter dangan lebar 8-9 meter. Adapun luaran yang dihasilkan dari pengukuran topografi </p>
                                    <a href="proyek5.html">Baca Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-content-area">
                            <div class="blog-img">
                                <img src="assets/ruang.png" class="img-responsive" alt="blog">
                            </div>
                            <div class="blog-content-details">
                                <div class="blog-date">
                                    <span><i class="fa fa-clock-o"></i>September 2017</span>
                                <div class="blog-title">
                                    <h4> ANALISA HASIL PENGUKURAN KOORDINAT  TERRESTRIAL LASER SCANNER GLS – 2000</h4>
                                </div>
                                <div class="blog-info">
                                    <p>TLS (Terrestrial Laser Scanner) merupakan salah satu alat yang digunakan untuk mengakuisisi data dengan cara memindai permukaan obyek, yang dapat diaplikasikan pada   </p>
                                    <a href="proyek6.html">Baca Lebih Lajut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --><!-- End Blog section -->
        
        <!-- Start Contact section -->
        <section class="contact section-padding" id="contact" >
            <div class="container">
                <div class="row">
                    <div class="col-md-18">
                        <div class="munia-title">
                            <h2>Kontak</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-info">
                           <!--  <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div> -->
                            <div class="contact-details">
                                 <center><i class="fa fa-map-marker"></i></center>
                                <center><h4>Alamat</h4></center>
                                <center>
                                <span>Jl Perum Korpri Tugurejo Gang A-9/50 Tugurejo Tugu, Semarang </span>
                            </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-info">
                            <!-- <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div> -->
                            <div class="contact-details">
                                <center><i class="fa fa-phone"></i>
                                <h4>Phone</h4>
                                </center>
                                <center>
                                <span>082234082284 (Aryan Prasetyo Adji. S.T.)</span><br>
                                <span>082229444453 (Alif Fariq'an Setiawan. S.T.)</span>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-info">
                            <!-- <div class="contact-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div> -->
                            <div class="contact-details">
                                <center><i class="fa fa-envelope-o"></i>
                                <h4>Email</h4>
                                </center>
                                <center>
                                <span>javageosurvey@gmail.com</span>
                            </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-form">
                            <form class="cmxform" method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Pesan...." name="message" required></textarea>
                                </div>
                                <div class="confirm">
                                    <input type="submit" name="submit" class="munia-btn submit" value="Submit">
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['submit'])) {
                                    # code...
                                $name       = $_POST['name'];
                                $email      = $_POST['email'];
                                $subject    = $_POST['subject'];
                                $message    = $_POST['message'];
                                $dateNow    = date("Y-m-d H:i:s");

                                $sql = $conn->query("INSERT into tb_hubungi_kami (name, email, subject, message, created_at, updated_at) VALUES ('$name', '$email', '$subject', '$message', '$dateNow', '$dateNow')");

                                if ($sql) {
                                    # code...
                                    ?>
                                    <!-- <div id="success" class="alert alert-success">Msg Sending Success</div> -->
                                    <script type="text/javascript">
                                        alert("Msg Sending Success");
                                    </script>
                                    <?php
                                } else {
                                    # code...
                                    ?>
                                    <!-- <div id="error" class="alert alert-danger">Msg Sending Failed</div> -->
                                    <script type="text/javascript">
                                        alert("Msg Sending Failed");
                                    </script>
                                    <?php
                                }
                                
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.259570054295!2d110.34935801477314!3d-6.97866889495847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTgnNDMuMiJTIDExMMKwMjEnMDUuNiJF!5e0!3m2!1sid!2sid!4v1555417791211!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Start Contact section -->
        <!-- Start Footer area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="footer-social-link text-center">
                            <ul>
                                <li><a href="https://instagram.com/javageos?utm_source=ig_profile_share&igshid=1ftkvkx7bjzw1"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/javageos/"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="https://www.linkedin.com/company/java-geo-survey"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="footer-text text-center">
                            <p style="text-align: center;">Copyright © Javageosurvey | Development by <a href="https://instagram.com/jdk_studio">Jdk Studio</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer area -->

<?php
?>

    <!--Scroll-up-->
    <a id="scroll-up" ><i class="fa fa-angle-up"></i></a>
    <!-- jequery  -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap min.js  -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- slick slider js  -->
    <script src="assets/js/slick.min.js"></script>
    <!-- isotope min.js  -->
    <script src="assets/js/isotope.min.js"></script>
    <!-- imageloaded js-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- magnific-popup js  -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- counterup js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <!-- jquery validate js-->
    <script src="assets/js/jquery.validate.js"></script>
    <!-- map api js -->
    <!--main js-->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'id'}, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>

