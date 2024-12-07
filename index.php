<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BabaerShop || Home</title>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="icon" type="image/x-icon" href="37614-fotor-20230720231721.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Kaushan+Script&family=Libre+Baskerville&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Kaushan+Script&family=Libre+Baskerville&family=Poppins&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <!-- slick slider CSS library files -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jPushMenu.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>

  <script type="text/javascript">
    $(window).load(function() {
      $(".loader").fadeToggle("slow");
    })
  </script>

  <script>
    $(document).ready(function() {
      $('.product-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        arrows: true
      });
    });
  </script>

</head>

<body style="overflow-x: hidden;">

  <!-- <div class="loader"></div> -->

  <style>
    .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('3dgifmaker13300.gif') 50% 50% no-repeat rgb(249, 249, 249);
    }
  </style>

  <section id="banner">
    <div class="col-12">
      <section class="wow animate__rollIn" data-wow-duration="2s" data-wow-delay="0s">
        <div class="row" style="display: flex; justify-content: center; align-items: center;">
          <img src="37614-fotor-20230720231721.png" class="logo col-lg-2 col-6 col-md-4" />
        </div>
      </section>
    </div>

    <div class="banner-text">
      <section class="wow animate__slideInLeft" data-wow-duration="2s" data-wow-delay="0s">
        <h1>Babaer Shop</h1>
      </section>
      <section class="wow animate__slideInRight" data-wow-duration="2s" data-wow-delay="0s">
        <p>style you hair is style your life</p>
      </section>
      <div class="banner-btn">
        <section class="wow animate__flipInY" data-wow-duration="2s" data-wow-delay="0s">
          <a href="location.html"><span></span>Location</a>
          <a href="feedback.html"><span></span>Feedback</a>
        </section>
      </div>
    </div>
  </section>

  <div id="sideNav">
    <nav>
      <ul>
        <li><a href="#banner">banner</a></li>
        <li><a href="#feature">feature</a></li>
        <li><a href="#service">service</a></li>
        <li><a href="#testomonial">testomonial</a></li>
        <li><a href="#contact">contact</a></li>
      </ul>
    </nav>
  </div>
  <div id="manubtn">
    <img src="menu (2).png" id="manu" />
  </div>

  <!-- feature -->

  <section id="feature">
    <div class="title-text">
    <section class="wow animate__fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
      <p>FEATURE</p>
    </section>
    <section class="wow animate__fadeInDown " data-wow-duration="3s" data-wow-delay="0s">
      <h1>Why Choos Us</h1>
    </section>
    </div>
    <div class="feature-box">
      <div class="feature">
      <section class="wow animate__fadeInLeft " data-wow-duration="1s" data-wow-delay="0s">
        <h1>Experienced staff</h1>
        <div class="feature-desc">
          <div class="feature-icon offset-lg-2 offset-sm-0 offset-md-0">
            <i class="bi bi-circle-fill"></i>
          </div>
          <div class="feature-text">
            <p style="text-align: center;">We Have experienced staff to cut your hair</p>
          </div>
        </div>
      </section>

      <section class="wow animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0s">
        <h1>Pre Booking online</h1>
        <div class="feature-desc">
          <div class="feature-icon offset-lg-2 offset-sm-0 offset-md-0">
            <i class="bi bi-circle-fill"></i>
          </div>
          <div class="feature-text">
            <p style="text-align: center;">You Can pick up the order from home</p>
          </div>
        </div>
      </section>

      <section class="wow animate__fadeInLeft " data-wow-duration="3s" data-wow-delay="0s">
        <h1>low Cost</h1>
        <div class="feature-desc">
          <div class="feature-icon offset-lg-2 offset-sm-0 offset-md-0">
            <i class="bi bi-circle-fill"></i>
          </div>
          <div class="feature-text">
            <p style="text-align: center;">You Can get haircut very cheaply</p>
          </div>
        </div>
      </section>
      </div>
      <section class="wow animate__fadeInRight " data-wow-duration="2s" data-wow-delay="0s">
      <div class="feature-img">
        <img src="https://i.pinimg.com/originals/bb/6e/ce/bb6ece66a80c6331196a8655faf77cbc.jpg" alt="" />
      </div>
      </section>
    </div>
  </section>

  <!-- feature -->

  <section id="service">
    <div class="title-text">
    <section class="wow animate__fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
      <p>Service</p>
    </section>
    <section class="wow animate__fadeInDown " data-wow-duration="3s" data-wow-delay="0s">
      <h1>We Provide Better</h1>
    </section>
    </div>
    <div class="service-box">
    <section class="wow animate__fadeInLeft " data-wow-duration="2s" data-wow-delay="0s">
      <div style="width: 102%;" class="single-service">
        <img style="height: 390px;" src="https://cdn.shopify.com/s/files/1/1383/0317/files/widows_peak_on_men_grande.jpg?v=1539897570" alt="" />
        <div class="overlay"></div>
        <div class="service-desc">
          <h3>Hair Styling</h3>
          <hr />
          <p>We Can Cut any hair style</p>
        </div>
      </div>
    </section>
    <section class="wow animate__fadeInRight " data-wow-duration="2s" data-wow-delay="0s">
      <div style="width: 102%;" class="single-service">
        <img style="height: 390px;" src="https://tomsoflincoln.co.uk/wp-content/uploads/2021/08/handsome-man-shaving-beard-barbershop.jpg" alt="" />
        <div class="overlay"></div>
        <div class="service-desc">
          <h3>Shave Style</h3>
          <hr />
          <p>Shave The Way You Like It</p>
        </div>
      </div>
    </section>
      <section class="wow animate__fadeInLeft " data-wow-duration="4s" data-wow-delay="0s">
      <div style="width: 102%;" class="single-service">
        <img style="height: 390px;" src="https://img.freepik.com/premium-photo/bearded-man-color-hair-process-man-hair-coloring-hairdresser-salon_265223-10911.jpg" alt="" />
        <div class="overlay"></div>
        <div class="service-desc">
          <h3>Hair Coloring</h3>
          <hr />
          <p>Color You Hair The Way You Want It</p>
        </div>
      </div>
      </section>
      <section class="wow animate__fadeInRight " data-wow-duration="4s" data-wow-delay="0s">
      <div style="width: 102%;" class="single-service">
        <img style="height: 390px;" src="https://www.byrdie.com/thmb/bq7WcV3iOqmPp0okYyb-VpagB-4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-92348095-1d41442eb93e4382abdb5e47a2d38a0a.jpg" alt="" />
        <div class="overlay"></div>
        <div class="service-desc">
          <h3>Head Massage</h3>
          <hr />
          <p>Head Massage As You Like</p>
        </div>
      </div>
      </section>
    </div>
  </section>


  <div class="title-text mt-5">
  <section class="wow animate__fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
    <p>Feedback</p>
  </section>
  <section class="wow animate__fadeInDown " data-wow-duration="3s" data-wow-delay="0s">
    <h1>You Comments about our Service</h1>
  </section>
  </div>
  <section class="wow animate__slideInUp " data-wow-duration="2s" data-wow-delay="0s">
  <div class="product-slider" style="    margin-top: -2cm;">
    <?php
    // Include database configuration file 
    require 'connection copy.php';

    $c_rs = Database::search("SELECT * FROM `feedback`");
    $c_num = $c_rs->num_rows;

    for ($y = 0; $y < $c_num; $y++) {
      $cdata = $c_rs->fetch_assoc();

    ?>
      <div class="slide">
        <h1><?php echo $cdata["id"]; ?></h1>
        <img src="images/6769264_60111-removebg-preview.png" alt="" />
        <h6><?php echo $cdata["name"]; ?></h6>
        <br>
        <h1 style="color: white; font-size: 18px; text-align: center;"><?php echo $cdata["subject"]; ?></h1>
        <h1 style="color: white; font-size: 15px; text-align: center;"><?php echo $cdata["message"]; ?></h1>
      </div>
    <?php
    } ?>
  </div>
  </section>


  <br>
  <br>
  <br>


  <section class="wow animate__backInUp " data-wow-duration="2s" data-wow-delay="0s" id="contact" style="background-image: url(footer-img.jpg);">
    <div class="title-text">
    <section class="wow animate__fadeInDown " data-wow-duration="1s" data-wow-delay="2s">
      <p>CONTACT</p>
    </section>
    <section class="wow animate__fadeInDown " data-wow-duration="2s" data-wow-delay="2s">
      <h1 style="color: white; font-weight: bold;">Visit Shot Today</h1>
    </section>
    </div>
    <div class="footer-row">
      <div class="footer-left">
      <section class="wow animate__fadeInLeft " data-wow-duration="1s" data-wow-delay="2s">
        <h1>Opening Hours</h1>
      </section>
      <section class="wow animate__fadeInLeft " data-wow-duration="2s" data-wow-delay="2s">
        <p>Monday to Sunday - 09am to 09pm</p>
      </section>
      <section class="wow animate__fadeInLeft " data-wow-duration="3s" data-wow-delay="2s">
        <p class="fw-bold" style=" color: white;
          font-size: 30px;
          -webkit-text-stroke-width: 1px;
          -webkit-text-stroke-color: red;">Closed on holidays</p>
        <!-- <p>saturday And Sunday - 12am to 3pm</p> -->
      </section>
      </div>
      <div class="footer-right">
      <section class="wow animate__fadeInRight " data-wow-duration="1s" data-wow-delay="2s">
        <h1>Saloon Ditails</h1>
      </section>
      <section class="wow animate__fadeInRight " data-wow-duration="2s" data-wow-delay="2s">
        <p>656 Lake Rd, Boralesgamuwa 10290</p>
      </section>
      <section class="wow animate__fadeInRight " data-wow-duration="3s" data-wow-delay="2s">
        <p>BarberShop@gamail.com</p>
      </section>
      <section class="wow animate__fadeInRight " data-wow-duration="4s" data-wow-delay="2s">
        <p>+94 763 057 865</p>
      </section>
      </div>
    </div>

    <div class="social-links" style="color: white;">
    <section class="wow animate__lightSpeedInLeft " data-wow-duration="2s" data-wow-delay="3s">
      <i class="bi bi-facebook link"></i>
      <i class="bi bi-linkedin"></i>
    </section>
    <section class="wow animate__lightSpeedInRight " data-wow-duration="2s" data-wow-delay="3s">
      <!-- <i class="bi bi-phone"></i>
        <i class="bi bi-mailbox"></i> -->
      <p style="font-size: 20px;">Copyrigthe &copy; Hair Studio</p>
    </section>
    </div>
  </section>

  <script>
    var manubtn = document.getElementById("manubtn");
    var sideNav = document.getElementById("sideNav");
    var manu = document.getElementById("manu");

    sideNav.style.right = "-250px";

    manubtn.onclick = function() {
      if (sideNav.style.right == "-250px") {
        sideNav.style.right = "0";
        manu.src = "close.png";
      } else {
        sideNav.style.right = "-250px";
        manu.src = "menu (2).png";
      }
    };
    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 1000,
      speedAsDuration: true,
    });
  </script>


  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
</body>

</html>