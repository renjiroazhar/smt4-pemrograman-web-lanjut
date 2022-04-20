<?php
  // Include config file
  include "config.php";

  if (!isset($_SESSION)) {
    // Initialize the session
    session_start();
  };
   
  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["email"]) === true){
    header("Location: ");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Toko ABC</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href=""/>
  <!-- fevicon -->
  <link rel="icon" href="dist/images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="dist/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="dist/css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="dist/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="" style="text-decoration: none;"><h3 style="font-size: 20px; margin-top: 15px">Toko ABC</h3></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Home</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="">Promo</a></li>
                      <li><a href="">Contact Us</a></li>
                      <?php
                      if ($_SESSION) {
                        echo "<li><a href=''>".$_SESSION['email']."</a></li>";
                        echo "<li><a href='logout.php' style='color: red;'><b>Logout</b></a></li>";
                      } else {
                        echo "<li><a href='login.php'>Login / Sign Up</a></li>";
                      } ?>
                     <li> <a href="#"><img src="dist/icon/icon_b.png" alt="#"/></a></li>
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Welcome To Toko ABC</span>
                      <h1>Local Village Shop</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                      <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="dist/images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To Toko ABC</span>
                      <h1>Local Village Shop</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                      <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="dist/images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To Toko ABC</span>
                      <h1>Local Village Shop</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                       <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="dist/images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About us</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages andIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many</p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="dist/images/about.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->

<!--  footer -->
<footer>
  <div class="footer ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href="#" class="logo_footer"><h3 style="font-size: 25px; margin-top: 10px; color: #ffffff;">Toko ABC</h3></a>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
              <div class="address">
                <h3>Contact </h3>
                <ul class="loca">
                  <li>
                    <a href="#"></a>It is a long established fact 
                    <br>that a reader will be  </li>
                    <li>
                      <a href="#"></a>(+62 812-3456-789) </li>
                      <li>
                        <a href="#"></a>tokoabc@gmail.com</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="address">
                      <h3>Social Link</h3>
                      <ul class="Menu_footer">
                        <li class="active"> <a href="https://instagram.com/tokoabc">Twitter</a> </li>
                        <li><a href="https://instagram.com/tokoabc">Facebook</a> </li>
                        <li><a href="https://instagram.com/tokoabc">Instagram</a> </li>
                        <li><a href="https://instagram.com/tokoabc">Linkdin</a> </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="address">
                      <h3>Newsletter</h3>
                        <form class="news">
                          <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                          <button class="submit">Subscribe</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright">
            <div class="container">
              <p>Copyright © 2022 Design by <a href="#home">Toko ABC </a></p>
            </div>
          </div>
        </div>
      </footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/jquery-3.0.0.min.js"></script>
<script src="dist/js/plugin.js"></script>
<!-- sidebar -->
<script src="dist/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="dist/js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>