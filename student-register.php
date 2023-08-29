<?php include("./connect.php");

if (isset($_POST["regname1"])) {
  $first_name = $_POST["regname1"];
  $last_name = $_POST["regname2"];
  $phone = $_POST["regphone"];
  $email = $_POST["regemail"];
  $college = $_POST["regcollege"];
  $category = $_POST["regcategory"];
  $field = $_POST["regfield"];
  $tenthmarks = $_POST["regtenthmarks"];
  $diplomamarks = $_POST["regdiplomamarks"];
  $degreemarks = $_POST["regdegreemarks"];
  $yearofpassing = $_POST["regyearofpassing"];
  $dob=$_POST["regdate"];

  $phonequery="select * from students where phone = '$phone'";
  $phonequery_res=mysqli_query($conn,$phonequery);
  if(mysqli_num_rows($phonequery_res)>0){
    echo "Error uploading file.";
    $data = [
      "success" => 0,
      "message" => "Phone number is already registered."
    ];
    $jsonData = json_encode($data);
    $encodedData = urlencode($jsonData);
    $redirectUrl = "index.php?data=" . $encodedData;
    header("Location: " . $redirectUrl);
    exit();
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["regfile"])) {
    $targetDirectory = "uploads/"; // Change this to your desired directory

    // Get the original file name and extension
    $originalFileName = $_FILES["regfile"]["name"];
    $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

    // Generate a custom file name (you can use any method to generate a unique name)
    $customFileName = $phone . "." . $fileExtension;

    $targetFile = $targetDirectory . $customFileName;
    
    // Check if the file was successfully uploaded
    if (move_uploaded_file($_FILES["regfile"]["tmp_name"], $targetFile)) {
      echo "File uploaded successfully.";
      $query = "insert into students (first_name, last_name, phone, email, college, category, field, tenth_marks, twelfth_marks, degree_marks, year_of_passing,path,dob) values ('$first_name', '$last_name', $phone, '$email', '$college', '$category', '$field', '$tenthmarks', '$diplomamarks', '$degreemarks', '$yearofpassing','$targetFile','$dob')";
      $res = mysqli_query($conn, $query);
    } else {
      echo "Error uploading file.";
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

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css?random=1923832139" rel="stylesheet">
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->
    <?php include("./navbar.php"); ?>

  <main>
    <section id="register" class="register">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="text-transform: none;color:#1a2533;font-size: 40px;">Student Registration</h2>
          <p>Students should fill all the fields and upload files in .pdf/.doc formats only.</p>
          <p>In case of technical errors, please reach out to <a style="text-decoration:underline;color:#444444" href="tel:+919372642011">9372642011</a> / <a style="text-decoration:underline;color:#444444" href="tel:+919967775891">9967775891</a> .</p>
        </div>
        <div class="eligibilitycontentcontainer registercontainerreducer">
          <form action="student-register.php" method="POST" enctype="multipart/form-data">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regname1">First Name</label>
                <input type="text" maxlength="40" name="regname1" class="form-control" id="regname1" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regname2">Last Name</label>
                <input type="text" maxlength="40" class="form-control" name="regname2" id="regname2" placeholder="" required>
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
              <div class="col-lg-12 form-group">
                <label for="regcollege">College Name</label>
                <input type="text" maxlength="150" class="form-control" name="regcollege" id="regcollege" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regcategory">Category</label>
                <select class="form-select" name="regcategory" id="regcategory" placeholder="" onchange="handleCategoryChange()" required>
                  <option value="" disabled selected>Select an option</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Non-Engineering/Diploma">Non-Engineering/Diploma</option>
                  <option value="12th HSC">HSC (12th passed/pursuing)</option>
                </select>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regfield">Field</label>
                <select class="form-select" name="regfield" id="regfield" placeholder="" required>
                  <option value="" disabled selected>Select an option</option>
                </select>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regtenthmarks">Class 10th Marks (in %)</label>
                <input type="number" class="form-control" name="regtenthmarks" id="regtenthmarks" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regdiplomamarks">Class 12th/Diploma marks (in %)</label>
                <input type="number" class="form-control" name="regdiplomamarks" id="regdiplomamarks" placeholder="" required>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regdegreemarks">Degree Marks (in %)</label>
                <input type="number" class="form-control" name="regdegreemarks" id="regdegreemarks" placeholder="">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regyearofpassing">Year of Passing</label>
                <input type="number" class="form-control" name="regyearofpassing" id="regyearofpassing" required>
              </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regfile">Upload your CV (in PDF)</label>
                <input type="file" class="form-control" name="regfile" id="regfile" accept=".pdf, .doc, .docx" placeholder="" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="regdate">Date of birth</label>
                <input type="date" class="form-control" id="regdate" name="regdate" max="2023-12-31" required>
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
  <script src="assets/js/main.js?random=1923832139"></script>


</html>