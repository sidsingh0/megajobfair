<?php
include("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Siddharth Ovalekar Foundation is a leading NGO in Thane, Maharashtra, dedicated to empowering lives through successful placements and job opportunities. Join us in making a difference." />
  <meta name="keywords" content="Siddharth Ovalekar Foundation, placements, jobs, Thane, Maharashtra, NGO" />
  <meta name="author" content="SOF" />

  <!-- Page-specific meta tags -->
  <meta name="robots" content="index, follow" />
  <meta name="og:title" content="Siddharth Ovalekar Foundation | Empowering Lives through Placements and Jobs in Thane, Maharashtra" />
  <meta name="og:description" content="Join Siddharth Ovalekar Foundation in Thane, Maharashtra, and be part of our mission to empower lives through successful placements and job opportunities." />
  <meta name="og:image" content="/assets/img/sof.jpeg" />

  <title>SOF Job Fair 2023</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
  <link rel="manifest" href="/site.webmanifest" />

  <!-- Google Fonts -->
  <link href="https://api.fontshare.com/v2/css?f[]=switzer@600,800,900,700,400,300,500&f[]=satoshi@900,800,600,700,500,300,400&display=swap" rel="stylesheet" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/00987c9d18.js" crossorigin="anonymous"></script>
  <link href="assets/css/style.css?random=19238321321" rel="stylesheet" />
  <style>

  </style>
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->
  <?php include("./navbar.php"); ?>
    
<?php

  if (isset($_GET["data"])) {
    $encodedJsonData = $_GET["data"];
    $jsonData = urldecode($encodedJsonData);
    $decodedData = json_decode($jsonData, true);
    if ($decodedData["success"]) {
      echo '
      <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="35" height="35" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          <strong>Congratulations!</strong>
          <p style="margin:0px;font-size:14px;">'.$decodedData["message"].'</p>
        </div>
        <button type="button" style="position:unset!important;margin: 0 0 0 40px;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      ';
    }else{
      echo '
      <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="35" height="35" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          <strong>Something went wrong!</strong>
          <p style="margin:0px;font-size:14px;">'.$decodedData["message"].'</p>
        </div>
        <button type="button" style="position:unset!important;margin: 0 0 0 40px;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      ';
    }
  }

?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

  <section style="margin-top: 60px" id="heropart">
    <div class="sectional herotext">
      <p class="herotext_head" style="text-align:center;">SIDDHARTH OVALEKAR FOUNDATION & DR. SHRIKANT SHINDE FOUNDATION</p>
      <p class="herotext_head" style="text-align:center;">WITH NHITM</p>
      <img class="cherotext_headimg" src="./assets/img/cherotext1.png" alt="" srcset="" />
      <img class="mherotext_headimg" src="./assets/img/mherotext1.png" alt="" srcset="" />
      <p class="cherotext_subhead">
        Join us on 9th September 2023, as we open the door to exciting job
        prospects, inviting you to be a part of our event and embark on a path
        of innovation and success.
      </p>
      <p class="mherotext_subhead">
        Join us on 9th September 2023, as we open the door to exciting job
        prospects.
      </p>
      <div class="herotextbtngrp">
        <a href="/student-register.php" class="newcta" style="margin-top: 2px;">Students<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
        <a href="/company-register.php" class="newcta" style="box-shadow: none;border: 2px solid #CFCFCF;background-color: #f6f6f6;color:black;">Company<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
      </div>
    </div>
  </section>

  <section class="videosection pb-0">
    <div class="sectional">
      <div class="promovid">
        <img src="./assets/img/thumbnail_computer.png" id="promovidimg" class="promovidimg" alt="" srcset="">
        <img src="./assets/img/play.png" class="promovidplay" id="promovidplay">

        <!-- vid btn -->
        <a href="https://vimeo.com/857457170?share=copy" class="glightbox play-btn mb-4" style="display: none!important;"></a>
        <!-- vid btn end -->

        <img src="./assets/img/registrations.png" class="promovidreg">
      </div>
      <div class="promocontent">
        <div class="promotext">
          <p class="m-0 p-0" style="margin-right: 6px!important;">In co-ordination</p>
          <p class="m-0 p-0">with</p>
        </div>
        <img class="promologos" src="./assets/img/partnerlogos.png" alt="" srcset="">
      </div>
    </div>
  </section>

  <!-- About Section - Home Page -->
  <section id="about" style="margin-top: 70px;margin-bottom:30px" class="about">

    <div class="sectional" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5 newaboutrow">
        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-buildings"></i>
                <h3>Location</h3>
                <a style="font-weight: 400;" href="https://goo.gl/maps/D1vvP39WB4DBtdkJ6">
                  <p>New Horizon Institute of Technology &amp; Management, <br> Anand Nagar, Thane.</p>
                </a>

              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-clipboard-pulse"></i>
                <h3>Date</h3>
                <p>The Job Fair will be held on 9 of September 2023 at 09:00 a.m. Mark your calendars!</p>
                <!--<p>The Job Fair's date will be announced very soon. Stay tuned for further updates.</p>-->
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-command"></i>
                <h3>Deadline</h3>
                <p>Registration ends at 07:00 p.m. on September 5. Kindly register before the deadline.</p>
                <!--<p>Registration deadline will be announced very soon. Stay tuned for further updates.</p>-->
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500" id="companiespart">
              <div class="icon-box">
                <i class="bi bi-graph-up-arrow"></i>
                <h3>Eligibility</h3>
                <p>Individuals in or above class 12, Engineers and Non-engineers, are eligible to apply.</p>
              </div>
            </div> <!-- End Icon Box -->

          </div>
        </div>
        <div class="col-xl-5 content newabouttext">
          <h3 style="font-family:'switzer',sans-serif;">About Us</h3>
          <p>Siddharth Ovalekar Foundation (SOF) is organizing Job Fair 2023 in collaboration with New Horizon Institute of Technology & Management. Over 50 companies will be participating in the event, recruiting students from a diverse range of fields. Register today to seize exciting opportunities!</p>
          <div class="herotextbtngrp">
            <a href="/student-register.php" class="newcta" style="margin-top: 2px;">Students<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
            <a href="/company-register.php" class="newcta" style="box-shadow: none;border: 2px solid #CFCFCF;background-color: #f6f6f6;color:black;">Company<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
          </div>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->



  <section style="padding:10px 0;background-color: #fff!important;margin-bottom:60px;" id="companies">
    <div class="sectional">
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php
          $swiper = "select * from trash ORDER BY id DESC";
          $res_swiper = mysqli_query($conn, $swiper);
          while ($res = $res_swiper->fetch_assoc()) {
            echo '<div class="swiper-slide"><a href="getcompany.php?companyid=' . $res["id"] . '" ><img src="' . $res["photo"] . '" class="img-fluid" alt=""></a></div>';
          }
          ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    </div>
    
        <div class="sectional">
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php
          $swiper = "select * from trash";
          $res_swiper = mysqli_query($conn, $swiper);
          while ($res = $res_swiper->fetch_assoc()) {
            echo '<div class="swiper-slide"><a href="getcompany.php?companyid=' . $res["id"] . '" ><img src="' . $res["photo"] . '" class="img-fluid" alt=""></a></div>';
          }
          ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    </div>
  </section>
  
  

  <section id="eligibility" class="eligibility pt-0" style="background-color: #f4f4f4!important;">
      <div class="sectional">
        <h2 class="section-title meratitle p-3" style="font-size: 40px;font-weight:bold;text-transform: none;color: #1a2533;">Open positions for</h2>
        <div class="row align-items-center mt-4 eligibilitymobileinvert">
          <div class="col-lg-4 col-md-6 eligibilitynav">
            <div class="eligibilitynav-card" id="eligibilityengineering" onclick="showEngineering(this)"  data-aos="fade-up" data-aos-delay="100">
              <i style="font-size: 35px;" class="eligibilitylogos bi bi-cpu"></i>
              <p style="color: #1a2533;" class="eligibilitylogos">Technical</p>
            </div>
            <div class="eligibilitynav-card" id="eligibilitynonengineering"  onclick="showNonengineering(this)"  data-aos="fade-up" data-aos-delay="200">
              <i style="font-size: 35px;" class="eligibilitylogos bi bi-mortarboard"></i>
              <p style="color: #1a2533;" class="eligibilitylogos">Non-Technical</p>
            </div>
            <div class="eligibilitynav-card"  id="eligibilityhsc" onclick="showHsc(this)"  data-aos="fade-up" data-aos-delay="300">
              <i style="font-size: 35px;" class="eligibilitylogos bi bi-book"></i>
              <p style="color: #1a2533;" class="eligibilitylogos">HSC</p>
            </div>            
          </div>
          <div class="col-lg-8 col-md-6 eligibilitycontent"  data-aos="fade-up" data-aos-delay="100">
            <div class="eligibilitycontentcontainer">
              <ul class="eligibilitylist eligibilitylist1" id="eligibilitylist">
                <li>Computer Science Engineering</li>
                <li>Information Technology Engineering</li>
                <li>Electronics and Telecommunications Engineering</li>
                <li>Electrical Engineering</li>
                <li>Mechanical Engineering</li>
                <li>Civil Engineering</li>
                <li>Chemical Engineering</li>
              </ul> 
            </div>
          </div>
        </div>
      </div>
    </section>

  <section id="contact" class="contact pt-0">
    <div class="sectional" data-aos="fade-up">

      <div class="section-title mb-4" style="text-align: center;">
        <h2 style="font-family: 'switzer',sans-serif;font-weight:700;">Reach us</h2>
        <p>Don't hesitate to reach out to us. We're here to help! Contact us now.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">
          <div class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name1" placeholder="Your Name" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email1" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="subject" id="subject1" placeholder="Phone" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="query1" id="query1" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="text-center"><button type="submit" id="mailbutton" style="box-shadow: none;border: 2px solid #CFCFCF;background-color: #f6f6f6;color:black;border-radius:35px;">Send Message</button></div>
          </div>
        </div>

        <div class="col-lg-6 gmaps">
          <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.363638844756!2d72.97172697475243!3d19.266546345963782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bb976ea62a8d%3A0x4859c81f415a6bb1!2sNew%20Horizon%20Scholar&#39;s%20School!5e0!3m2!1sen!2sin!4v1691585155406!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>

      </div>

    </div>
  </section>

  
  <section class="my-3"></section>

  <footer class="newfooter" data-aos="fade-up">
    <div class="sectional">
      <div class="footercta" style="background-image:url('./assets/img/footercta.png')">
        <img class="footersir" src="./assets/img/siddharthsir.png" alt="" srcset="">
        <div class="footerctacontent">
          <h3 class="footerctacontentheader">Grab the opportunity & place yourself.</h3>
          <a href="/student-register.php" class="newcta" style="margin-top: 2px;">Students<i class="fa-solid fa-chevron-right" style="margin-left:5px;font-size: 12px; font-weight: 600"></i></a>
        </div>
      </div>
      <div class="footersitemap row mb-4">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <a href="/index.php" class="newnavbar_logos">
            <img src="./assets/img/sofnegative.png" style="padding-right: 10px" alt="" srcset="" />
          </a>
          <p class="mt-4" style="color:#787878">Siddharth Ovalekar Foundation is a transformative initiative dedicated to assisting individuals across a diverse spectrum of domains.</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 newfooterpartners">
          <p style="display:block;color:#f6f6f6;font-weight:600;font-size:18px; ">Associate Partners</p>
          <a class="mt-1" href="https://www.facebook.com/Dr.ShrikantShindeFoundation/" style="display:block;color:#787878;font-size:14px;">Dr. Shrikant Shinde Foundation</a>
          <a class="mt-1" href="https://siddharthovalekarfoundation.com"style="display:block;color:#787878;font-size:14px;">Siddharth Ovalekar Foundation</a>
          <a class="mt-1" href="https://ishraethane.co.in/" style="display:block;color:#787878;font-size:14px;">ISHRAE Thane Chapter</a>
          <a class="mt-1" href="https://www.instagram.com/job4u_info/?hl=en" style="display:block;color:#787878;font-size:14px;">JOB4U</a>
          <a class="mt-1" href="https://nhitm.ac.in/" style="display:block;color:#787878;font-size:14px;">New Horizon Institute of Technology & Management</a>
          <a class="mt-1" href="https://www.linkedin.com/company/jvsh-technologies/" style="display:block;color:#787878;font-size:14px;">JVSH Technologies</a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 newfooteroverview">
          <p style="display:block;color:#f6f6f6;font-weight:600;font-size:18px;">Overview</p>
          <a class="mt-1" href="/index.php" style="display:block;color:#787878;font-size:14px;">Home</a>
          <a class="mt-1" href="/index.php#companiespart"style="display:block;color:#787878;font-size:14px;">Companies</a>
          <a class="mt-1" href="/student-register.php" style="display:block;color:#787878;font-size:14px;">Student Registration</a>
          <a class="mt-1" href="/company-register.php" style="display:block;color:#787878;font-size:14px;">Company Registration</a>
          <a class="mt-1" href="#" style="display:block;color:#787878;font-size:14px;">View your status</a>
        </div>
      </div>
      <div class="newfootersocials">
        <p class="newfootersocialsheader">Siddharth Ovalekar Foundation | All rights reserved</p>
        <div class="newfootersocialslogos">
          <i onclick="window.location.href = 'https://www.facebook.com/SiddharthDilipOvalekar?mibextid=ZbWKwL';" class='bx bxl-facebook' style="cursor: pointer;margin-right: 0px!important;"></i>
          <i onclick="window.location.href = 'https://www.siddharthovalekarfoundation.com/';" class='bx bx-globe' style="cursor: pointer;margin-left: 5px!important;"></i>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js?random=19239"></script>

  <script>
   if(window.screen.width<600){
      $('#promovidimg').attr('src', './assets/img/thumbnail_mobile.png?rand=' + Math.random());
    }
    $("#promovidplay").on("click", function() {
      $(".glightbox")[0].click();
    });

    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
      $(e.target)
        .prev()
        .find("i:last-child")
        .toggleClass("fa-minus fa-plus");
    });

    $("#mailbutton").on('click',function(){
        const email=$('#email1').val();
        const name=$('#name1').val();
        const phone=$('#subject1').val();
        const query=$('#query1').val();
        if (email && name && phone && query){
          window.open(`mailto:info@siddharthovalekarfoundation.com?subject=Inquiry Mega Job Fair&body=${query} (Name: ${name}, Phone: ${phone}, Email: ${email})`);
        }
    })
    showEngineering(document.getElementById("eligibilityengineering"));
    
  </script>
</body>

</html>