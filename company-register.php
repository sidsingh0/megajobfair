<?php include("./connect.php");

function randomPassword() {
  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  $pass = array(); //remember to declare $pass as an array
  $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
  for ($i = 0; $i < 8; $i++) {
      $n = rand(0, $alphaLength);
      $pass[] = $alphabet[$n];
  }
  return implode($pass); //turn the array into a string
}

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
  $password = randomPassword();
  
  if (isset($_POST["regfields"])){
    $selectedfields=$_POST["regfields"];
    $interest_string="";
    foreach ($selectedfields as $fields){
      $interest_string=$interest_string.$fields.",";
    }
    $query = "insert into companies (company_name, hr_name, phone, email, job_location, position_count, average_ctc, maximum_ctc, job_brief, selection_brief, categories, password) values ('$company_name', '$hr_name', $phone, '$email', '$location', '$position_count', '$average_ctc', '$maximum_ctc', '$description', '$selection', '$interest_string', '$password')";
  }else{
    $query = "insert into companies (company_name, hr_name, phone, email, job_location, position_count, average_ctc, maximum_ctc, job_brief, selection_brief, password) values ('$company_name', '$hr_name', $phone, '$email', '$location', '$position_count', '$average_ctc', '$maximum_ctc', '$description', '$selection', '$password')";
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

  <title>SOF Job Fair 2023</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

  <!-- Google Fonts -->
    <link href="https://api.fontshare.com/v2/css?f[]=switzer@600,800,900,700,400,300,500&f[]=satoshi@900,800,600,700,500,300,400&display=swap" rel="stylesheet" />

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
  <link href="assets/css/style.css?random=1923832139" rel="stylesheet" />
  <style>
      ::placeholder {
        color:#8c8c8c;
      }
    </style>
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->
    <?php include("./navbar.php"); ?>
  <main>
    <section id="register" class="register">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="text-transform: none;color:#1a2533;font-size: 40px;">Company Registration</h2>
        </div>
        <div class="eligibilitycontentcontainer registercontainerreducer">
          <form action="company-register.php" method="POST" enctype="multipart/form-data">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regcompanyname">Comapny's Name</label>
                <input type="text" maxlength="100" name="regcompanyname" class="form-control" id="regcompanyname" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="reghrname">Attending HR's Name</label>
                <input type="text" maxlength="100" class="form-control" name="reghrname" id="reghrname" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regphone">Phone</label>
                <input type="number" maxlength="10" class="form-control" name="regphone" id="regphone" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regemail">Email</label>
                <input type="email" maxlength="100" class="form-control" name="regemail" id="regemail" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="reglocation">Job location</label>
                <input type="text" maxlength="200" class="form-control" name="reglocation" id="reglocation" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regopencount">Number of open positions</label>
                <input type="number" class="form-control" name="regopencount" id="regopencount" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regaveragectc">Approximate average CTC (Annual)</label>
                <input type="number" class="form-control" name="regaveragectc" id="regaveragectc" placeholder="300000" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regmaxctc">Approximate maximum CTC (Annual)</label>
                <input type="number" class="form-control" name="regmaxctc" id="regmaxctc" placeholder="600000" required>
              </div>
            </div>
            
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regdescription">A brief about the job </label>
                <textarea rows="6" maxlength="400" class="form-control" name="regdescription" id="regdescription" placeholder="" required></textarea>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regselection">A brief about the selection process </label>
                <textarea rows="6" maxlength="400" class="form-control" name="regselection" id="regselection" placeholder="e.g. Aptitude, Training, HR etc." required></textarea>
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
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="Chemical" id="chemical" >
                  <label class="form-check-label" for="chemical">
                  Chemical
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
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="LLB" id="llb" >
                  <label class="form-check-label" for="bscinformationtechnology">
                    LLB
                  </label>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group d-flex" style="gap:0 2rem;margin-bottom:15px;flex-wrap:wrap;">
              <label class="form-check-label" style="font-weight: 600;">12th class (HSC):</label>
                <div class="form-check" style="margin-bottom: 0;">
                  <input class="form-check-input" type="checkbox" name="regfields[]" value="12th HSC" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    HSC (passed/pursuing)
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

  <footer class="newfooter">
    <div class="sectional" style="padding-top:32px;">
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
  <script src="assets/js/main.js?random=313123"></script>


</html>