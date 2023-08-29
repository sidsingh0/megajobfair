<?php include("./connect.php");

if (isset($_GET["companyid"])) {
  $companyid=$_GET["companyid"];
  $query="select * from trash where id=$companyid"; 
  $res = mysqli_query($conn, $query);
  if(!$res){
    echo mysqli_error($conn);
    exit;
  }
  if(mysqli_num_rows($res) < 1){
    $data = [
      "success" => 0,
      "message" => "Invalid Request!"
    ];
    $jsonData = json_encode($data);
    $encodedData = urlencode($jsonData);
    $redirectUrl = "index.php?data=" . $encodedData;
    header("Location: " . $redirectUrl);
    exit;
  }
  $res=$res->fetch_assoc();
}else{
  $data = [
    "success" => 0,
    "message" => "Invalid Request!"
  ];
  $jsonData = json_encode($data);
  $encodedData = urlencode($jsonData);
  $redirectUrl = "index.php?data=" . $encodedData;
  header("Location: " . $redirectUrl);
  exit;
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://api.fontshare.com/v2/css?f[]=poppins@900,500,400,300,800,700,600&f[]=hind@400,500&display=swap" rel="stylesheet">
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
  <style>
    .progress-bar{
      background-color:#03a9f5!important;
    }
    @media screen and (max-width:400px){
        .brie{
            max-width:300px!important;
        }
        .eli{
            max-width:300px!important;
        }
        .maxi{
            margin-right:16px!important;
            margin-bottom:16px!important;
        }
        .figurrrow{
            gap:10px;
        }
    }
  </style>

  <link href="assets/css/style.css?random=1923832139" rel="stylesheet" />
</head>

<body style="background-image: url('./assets/img/bg2.png')!important;background-repeat:no-repeat;background-size:cover;">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->
  <?php include("./navbar.php"); ?>

  <main>
    <section id="register" class="register">
      <div class="container">
        <!-- <div class="section-title">
          <h2 style="text-transform: none;color:#1a2533;font-size: 40px;">Company Details</h2>
        </div> -->
        <div class="eligibilitycontentcontainer registercontainerreducer mt-4 mb-4" style="background-color:#fff!important;" data-aos="fade-up">
          <div class="mt-4" style="width:100%;display:flex;justify-content:center!important;align-items:center;flex-direction:column">
            <img src="<?php echo $res['photo'];?>" class="mb-3" style="width:300px;border-radius:7px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" alt="" srcset="">
            <p style="margin-bottom:0;font-size: 24px;color:#e03a3c!important;font-weight:500;"><?php echo $res["name"];?></p>
          </div>

          <div class="mt-4 mb-4" style="width:100%;display:grid;justify-content:center!important;align-items:center;flex-direction:column">
            
            <div class="col-xl-8 row figurrrow" style="justify-self:center;">
            <div class="col-xl-4 p-0 pe-3">
              <div style="box-shadow: 0px 0px 10px 0px rgba(0, 135, 204, 0.15);padding:20px;"  class="opene">
                <p style="font-size:12px;margin-bottom:0;color:#e03a3c;">OPENINGS</p>
                <p style="font-size:18px;word-break: break-all;color:#19305e;margin-bottom:0"><?php echo $res["requirement"];?></p>
              </div>
            </div>        
              
            <div class="col-xl-4 p-0 pe-3">
              <div style="box-shadow: 0px 0px 10px 0px rgba(0, 135, 204, 0.15);padding:20px;" class="avge">
                <p style="font-size:12px;margin-bottom:0;color:#e03a3c;">AVERAGE CTC</p>
                <p style="font-size:18px;word-break: break-all;color:#19305e;margin-bottom:0"><span style="font-size:12px;">₹ </span><?php echo $res["ctc"];?></p>
              </div>
            </div>  
            <div class="col-xl-4 p-0">
              <div style="box-shadow: 0px 0px 10px 0px rgba(0, 135, 204, 0.15);padding:20px;" class="maxi">
                <p style="font-size:12px;margin-bottom:0;color:#e03a3c;">MAXIMUM CTC</p>
                <p style="font-size:18px;color:#19305e;margin-bottom:0"><span style="font-size:12px;">₹ </span><?php echo $res["max"];?></p>
              </div>
            </div>  
            </div>
            <div class="col-xl-8 col-sm-12 col-xs-12 brie" style="justify-self:center;margin-top:25px!important;">
              <p style="font-size:12px;margin-bottom:0;color:#e03a3c;">BRIEF</p>
              <p style="font-size:16px;line-height:1.7;color:#19305e;margin-bottom:0;font-weight:400;"><?php echo $res["about"];?></p>
            </div>
            <div class="col-xl-8  col-sm-12 col-xs-12 eli" style="justify-self:center;margin-top:25px!important;">
              <p style="font-size:12px;margin-bottom:0;color:#e03a3c;">ELIGIBILITY</p>
              <p style="font-size:16px;color:#19305e;line-height:1.7;word-break:break-all;font-weight:400;">
                <?php echo $res["eligibility"];?>
              </p>
            </div>
          </div>
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