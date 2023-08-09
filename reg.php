<?php include("./connect.php");

if(isset($_POST["first_name"])){
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $college = $_POST["college"];
    $degree = $_POST["degree"];
    $yop = $_POST["yop"];
    $department = $_POST["department"];
    $ssc_percent = $_POST["ssc_percent"];
    $hsc_percent = $_POST["hsc_percent"];
    $deg_percent = $_POST["deg_percent"];
    $soi = $_POST["soi"];
    $final_soi = "";
    foreach($soi as $s){
        $final_soi .= $s . ",";
    }
    
    $query = "insert into users (first_name, middle_name, last_name, phone, email, college_name, degree, yop, department, ssc_percentage, hsc_percentage, deg_percentage, scope_of_interest	) values ('$first_name', '$middle_name', '$last_name', $phone, '$email', '$college', '$degree', '$yop', '$department', '$ssc_percent', '$hsc_percent', '$deg_percent', '$final_soi')";
    $res = mysqli_query($conn, $query);
    if($res){
        echo "data inserted";
    }
    exit;
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
  <?php include("./header.php") ?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Register Here</h2>
          <p>Please Provide us with accurate data</p>
        </div>
        <form action="reg.php" method="POST">
        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12">
            <div class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="first_name" class="form-control" id="name1" placeholder="First Name" required>
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control" name="middle_name" id="email1" placeholder="Middle Name" required>
                </div>
                <div class="col form-group">
                  <input type="text" name="last_name" class="form-control" id="name1" placeholder="Last Name" required>
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                    <input type="number" class="form-control" name="phone" id="subject1" placeholder="Phone" required>
                </div>
                <div class="col form-group">
                    <input type="email" class="form-control" name="email" id="subject1" placeholder="Email ID" required>
                </div>
              </div>

              <div class="col form-group">
                  <input type="text" name="college" class="form-control" id="name1" placeholder="College Name" required>
              </div>
              
              <div class="col form-group">
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="degree" id="exampleRadios1" value="BE" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        BE
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="degree" id="exampleRadios2" value="BTech">
                    <label class="form-check-label" for="exampleRadios2">
                        BTech
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="degree" id="exampleRadios2" value="Diploma">
                    <label class="form-check-label" for="exampleRadios2">
                        Diploma
                    </label>
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                    <input type="text" maxlength="4" name="yop" class="form-control" id="name1" placeholder="Year Of Passing" required>
                </div>
                <div class="col form-group">
                    <select class="form-select" name="department" aria-label="Department">
                        <option value="">Select Department</option>
                        <option >Mechanical</option>
                        <option >Computer Science</option>
                        <option >Information Technology</option>
                    </select>
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                    <input type="number" class="form-control" name="ssc_percent" id="subject1" placeholder="SSC Percentage" required>
                </div>
                <div class="col form-group">
                    <input type="number" class="form-control" name="hsc_percent" id="subject1" placeholder="HSC Percentage" required>
                </div>
                <div class="col form-group">
                    <input type="number" class="form-control" name="deg_percent" id="subject1" placeholder="Degree Percentage" required>
                </div>
              </div>
              

              <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="soi[]" value="Design Engineer">
                    <label class="form-check-label" for="inlineCheckbox1">Design Engineer</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="soi[]" value="Research & Development">
                    <label class="form-check-label" for="inlineCheckbox2">Research & Development</label>
                </div>
              </div>
              
              <div class="text-center"><button type="submit" id="mailbutton">Apply</button></div>
            </div>
          </div>

        </div>
        </form>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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


</body>

</html>