<?php include("./connect.php");

if (isset($_POST["regcompanyname"])) {
  $company_name = $_POST["regcompanyname"];
  $hr_name = $_POST["reghrname"];
  $phone = $_POST["regphone"];
  $email = $_POST["regemail"];
  $location = $_POST["reglocation"];
  $position_count = $_POST["regopencount"];
  $average_ctc = $_POST["regaveragectc"];
  $maximum_ctc = $_POST["regmaxctc"];
  $description = $_POST["regdescription"];
  $selection = $_POST["regselection"];
  
  if (isset($_POST["regfields"])){
    $selectedfields=$_POST["regfields"];
    $interest_string="";
    foreach ($selectedfields as $fields){
      $interest_string=$interest_string.$fields.",";
    }
    $query = "insert into companies (company_name, hr_name, phone, email, job_location, position_count, average_ctc, maximum_ctc, job_brief, selection_brief, categories) values ('$company_name', '$hr_name', $phone, '$email', '$location', '$position_count', '$average_ctc', '$maximum_ctc', '$description', '$selection', '$interest_string')";
  }else{
    $query = "insert into companies (company_name, hr_name, phone, email, job_location, position_count, average_ctc, maximum_ctc, job_brief, selection_brief) values ('$company_name', '$hr_name', $phone, '$email', '$location', '$position_count', '$average_ctc', '$maximum_ctc', '$description', '$selection')";
  }

  $res = mysqli_query($conn, $query);
  if ($res) {
    $data = [
      "success" => 1,
      "message" => "Registration was successful."
    ];
    $jsonData = json_encode($data);
    $encodedData = urlencode($jsonData); // Encode the data to be URL-safe
    $redirectUrl = "index.php?data=" . $encodedData;
    header("Location: " . $redirectUrl);
    exit();
  } else {
    $data = [
      "success" => 0,
      "message" => "Please try again later."
    ];
    $jsonData = json_encode($data);
    $encodedData = urlencode($jsonData);
    $redirectUrl = "index.php?data=" . $encodedData;
    header("Location: " . $redirectUrl);
    exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mega Job Fair 2023 | ISHRAE x APSIT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://api.fontshare.com/v2/css?f[]=poppins@900,500,400,300,800,700,600&f[]=hind@400,500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700;800;900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="mylogo me-auto">
        <img src="assets/img/sof.jpeg" style="border-left: none;padding-left: 0;" class="apsitlogo" alt="" srcset="">
        <img src="assets/img/nhss.jpeg" class="apsitlogo" alt="" srcset="">
        <!-- <img src="assets/img/logos/job4u.png" id="apsitlogo" alt="" srcset=""> -->
      </div>


      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active hover-underline-animation" href="#videohero">Home</a></li>
          <li><a class="nav-link scrollto hover-underline-animation" href="#about">About</a></li>
          <li><a class="nav-link scrollto hover-underline-animation" href="#contact">Contact</a></li>
          <li class="dropdown"><a id="myherobutton" href="#"><span>Apply Now</span> <i class="bi bi-chevron-down"></i></a>
            <ul style="border-radius: 10px;">
              <li><a style="margin:0px" href="https://docs.google.com/forms/d/e/1FAIpQLSdoxUfXaCRw0v9QRcDM1br-f5D96sI7iGo1L_7o--5B2-TnQg/viewform">Student</a></li>
              <li><a style="margin:0px" href="https://docs.google.com/forms/d/e/1FAIpQLSd9S8EbjQK8vFpvd_X2nn5hCi3O4hlevcXMwdSbcPm-Gdk0Iw/viewform">Company</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <div class="progress-header">
    <div class="progress-container">
      <div class="progress-bar" id="progressBar"></div>
    </div>
  </div>

  <main>
    <section id="register" class="register">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="text-transform: none;color:#1a2533;font-size: 40px;">Register Here</h2>
        </div>
        <div class="eligibilitycontentcontainer registercontainerreducer">
          <form action="company-register.php" method="POST" enctype="multipart/form-data">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regcompanyname">Comapny's Name</label>
                <input type="text" name="regcompanyname" class="form-control" id="regcompanyname" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="reghrname">Attending HR's Name</label>
                <input type="text" class="form-control" name="reghrname" id="reghrname" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regphone">Phone</label>
                <input type="number" class="form-control" name="regphone" id="regphone" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regemail">Email</label>
                <input type="email" class="form-control" name="regemail" id="regemail" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="reglocation">Job location</label>
                <input type="text" class="form-control" name="reglocation" id="reglocation" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regopencount">Number of open positions</label>
                <input type="number" class="form-control" name="regopencount" id="regopencount" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regaveragectc">Approximate average CTC</label>
                <input type="number" class="form-control" name="regaveragectc" id="regaveragectc" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regmaxctc">Approximate maximum CTC</label>
                <input type="number" class="form-control" name="regmaxctc" id="regmaxctc" placeholder="" required>
              </div>
            </div>
            
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regdescription">A brief about the job </label>
                <textarea rows="6" class="form-control" name="regdescription" id="regdescription" placeholder="" required></textarea>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regselection">A brief about the selection process </label>
                <textarea rows="6" class="form-control" name="regselection" id="regselection" placeholder="e.g. Aptitude, Training, HR etc." required></textarea>
              </div>
            </div>
            <label class="form-check-label" style="margin-bottom: 15px;" data-aos="fade-up" data-aos-delay="100">Open positions for</label>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group d-flex" style="gap:0 2rem;margin-bottom:15px;flex-wrap:wrap;">
              <label class="form-check-label" style="font-weight: 600;">Engineering:</label>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Computer Science" id="computerscience">
                  <label class="form-check-label" style="margin-bottom: 0;" for="computerscience">
                    Computer Science
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Information Technology" id="informationtechnology" >
                  <label class="form-check-label" style="margin-bottom: 0;" for="informationtechnology">
                    Information Technology
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Electronics and Telecommunications" id="electronicsandtelecommunications" >
                  <label class="form-check-label" style="margin-bottom: 0;" for="electronicsandtelecommunications">
                  Electronics and Telecommunications
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Electrical" id="electrical" >
                  <label class="form-check-label" style="margin-bottom: 0;" for="electrical">
                  Electrical
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Mechanical" id="mechanical" >
                  <label class="form-check-label" style="margin-bottom: 0;" for="mechanical">
                  Mechanical
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Civil" id="civil" >
                  <label class="form-check-label" for="civil">
                  Civil
                  </label>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group d-flex" style="gap:0 2rem;margin-bottom:15px;flex-wrap:wrap;">
              <label class="form-check-label" style="font-weight: 600;">Non-Engineering:</label>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Diploma" id="diploma">
                  <label class="form-check-label" for="diploma">
                    Diploma
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Commerce" id="commerce" >
                  <label class="form-check-label" for="commerce">
                  Commerce
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Pharma" id="pharma" >
                  <label class="form-check-label" for="pharma">
                  Pharma
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="BSC Computer Science" id="bsccomputerscience" >
                  <label class="form-check-label" for="bsccomputerscience">
                  BSC Computer Science
                  </label>
                </div>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="BSC Information Technology" id="bscinformationtechnology" >
                  <label class="form-check-label" for="bscinformationtechnology">
                  BSC Information Technology
                  </label>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group d-flex" style="gap:0 2rem;margin-bottom:15px;flex-wrap:wrap;">
              <label class="form-check-label" style="font-weight: 600;">12th passed (HSC):</label>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    HSC passed
                  </label>
                </div>
              </div>
            </div>
            <button id="regsubmit" name="regsubmit" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4" style="align-items: center;">

      <div class="me-md-auto text-center text-md-start" style="letter-spacing: 0.2px;">
        <div class="copyright">
          <strong>SOF</strong> | All Rights Reserved.
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="https://www.facebook.com/profile.php?id=100081828978440&mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/ishrae_thane_chapter?igshid=MzRlODBiNWFlZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ishrae-thane-chapter/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

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
  <script src="assets/js/main.js"></script>


</html>