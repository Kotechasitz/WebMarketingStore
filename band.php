<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>BAND Store</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="user.php"><img src="photo/4.png" alt="" width="150" height="90"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="user.php">Home</a></li> 
                            <li class="nav-item active"><a class="nav-link" href="BAND.php">BANDSTORES</a></li>                                                  
                           <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            
                          <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <?php
              session_start();
              if($_SESSION['Uuser']=='')
              {
                header("location:error2.php");
              }
              else
              {
                $connect = mysqli_connect("localhost","root","12345678","BAND");
                $sql = 'SELECT Username from account where Username = "'.$_SESSION["Uuser"].'"';
                $result = mysqli_query($connect,$sql);
                echo "Hi ! Welcome ... ". $_SESSION["Uuser"];
              }
               ?>
          </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="myorder.php">My Order</a></li>
                                    <li class="nav-item"><a class="nav-link" href="updateaccount.php">Update Account</a></li>  
                                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>  
                            </ul>
                            </li> 
                          </ul>
                        <div class="right-button">
                        </div> 
                    </div>

                </div>
            </nav>

        </div>
        
    </header>
    <!--================Header Menu Area =================-->

    <!--================Hero Banner Area Start =================-->
    <section class="hero-banner">
        <div class="container">
        <img src="/img/banner/2.jpg" alt=""/>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                </ol>
            </nav>
        </div>
    </section>
    <!--================Hero Banner Area End =================-->




    <!--================ Start Portfolio Area =================-->
    <section class="portfolio_area area-padding" id="portfolio">
        <div class="container">
            <div class="area-heading">
            <h3>BAND<span>STORE</span>S</h3>
                <p>Fashion Shop the Trends: Get Lucky</p>
            </div>

            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">all</li>
                    <li data-filter=".shirt">T-shirt</li>
                    <li data-filter=".pants"> Pants</li>
                    <li data-filter=".sweater">Sweater</li>
                    <li data-filter=".Rastaclat">Rastaclat</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid">
                    <div class="grid-sizer col-md-3 col-lg-4"></div>
                      <div class="col-lg-4 col-md-6 all shirt ">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/a1.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>500 Bath</p>
                              	
                                <h4><a href="https://www.youtube.com/watch?v=gOW_azQbOjw">เสื้อยืด Champion Classic Jersey Script Tee สีดำ </a></h4>  
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "1">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                          
                            </div>
                        </div>
                    </div>

                      <div class="col-lg-4 col-md-6 all shirt">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/a2.jpg"style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>450 Bath</p>
                                <h4><a href="portfolio-details.html">เสื้อยืดผ้าฝ้าย พิมพ์ลาย Dickies</a></h4>    
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "2">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                            
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 all shirt ">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/a3.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>500 Bath</p>
                                <h4><a href="portfolio-details.html">เสื้อยืดวันพีซ ลาย WANTED LUFFY สีกรม</a></h4>     
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "3">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                           
                            </div>
                        </div>
                    </div>

                      <div class="col-lg-4 col-md-6 all pants">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/b4.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>350 Bath</p>
                                <h4><a href="portfolio-details.html">กางเกง รุ่น TSCT02769 ไซส์ M สีกรมท่า ลายทาง</a></h4>   
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "4">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                             
                            </div>
                        </div>
                    </div>

                      <div class="col-lg-4 col-md-6 all pants">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/b5.jpg"  style="border: 1px solid #ccc; padding: 5px;"alt="">
                            <div class="short_info">
                              <p>600 Bath</p>
                                <h4><a href="portfolio-details.html">กางเกงยีนส์ขาสั้นผู้ชาย Levi's® 505C</a></h4>
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "5">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                                
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-lg-4 col-md-6 all pants">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/6.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>600 Bath</p>
                                <h4><a href="portfolio-details.html">กางเกงสแล็คผู้ชายสีดำ ทรงกระบอกเล็ก </a></h4> 
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "6">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                               
                          </div>
                        </div>
                    </div>

   
                      <div class="col-lg-4 col-md-6 all sweater">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/c7.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>200 Bath</p>
                                <h4><a href="portfolio-details.html">เสื้อสเวตเตอร์ แขนยาว มีฮู๊ดและซิบหน้า</a></h4>  
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "7">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                              
                          </div>
                        </div>
                    </div>

   
                      <div class="col-lg-4 col-md-6 all sweater">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/c8.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>650 Bath</p>
                                <h4><a href="portfolio-details.html">เสื้อสเวตเตอร์ถัก Hooded </a></h4> 
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "8">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                               
                          </div>
                        </div>
                    </div>

   
                      <div class="col-lg-4 col-md-6 all sweater">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/c9.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>650 Bath</p>
                                <h4><a href="portfolio-details.html">Gardenia Retro Retro </a></h4>   
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "9">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                             
                          </div>
                        </div>
                    </div>

   
                      <div class="col-lg-4 col-md-6 all Rastaclat">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/dd10.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>600 Bath</p>
                                <h4><a href="portfolio-details.html">Rastaclat Positive Vibes - Black</a></h4>  
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "10">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                              
                          </div>
                        </div>
                    </div>

   
                      <div class="col-lg-4 col-md-6 all Rastaclat">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/d11.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>500 Bath</p>
                                <h4><a href="portfolio-details.html">RASTACLAT Galaxy Shoelace Bracelet</a></h4> 
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "11">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                               
                          </div>
                        </div>
                    </div>

   
                      <div class="col-lg-4 col-md-6 all Rastaclat">
                        <div class="single_portfolio">
                            <img class="img-fluid w-100" src="img/project/dd12.jpg" style="border: 1px solid #ccc; padding: 5px;" alt="">
                            <div class="short_info">
                              <p>600 Bath</p>
                                <h4><a href="portfolio-details.html">Rastaclat Miniclat: Yasmeen</a></h4>  
                                <?php
                              $Uuser = $_SESSION["Uuser"];
                               echo '<form action="Buyproduct.php" method="post">';
                                echo '  <input type="hidden" name = "ProductID" value = "12">';
                                echo '  <input type="hidden" name = "id" value = "'.$Uuser.'">';
                                echo '  <input type="submit" value="ซื้อเลย" class="pull-right">';
                                echo ' </form>';
                              ?>                              
                          </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--================ End Portfolio Area =================-->


    <!--================Testimonial section Start =================-->
   
    <!--================Testimonial section End =================-->





    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
   
                    </div>
                </div>
            </div>
        </div>
  
</footer>
<!--================ End footer Area  =================-->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>
</html>