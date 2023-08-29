<?php include("./connect.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>View Details</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      href="https://api.fontshare.com/v2/css?f[]=poppins@900,500,400,300,800,700,600&f[]=hind@400,500&display=swap"
      rel="stylesheet"
    />
      <link href="https://api.fontshare.com/v2/css?f[]=switzer@600,800,900,700,400,300,500&f[]=satoshi@900,800,600,700,500,300,400&display=swap" rel="stylesheet" />


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link href="assets/css/style.css?random=1923832139" rel="stylesheet" />
  </head>

  <body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- ======= Header ======= -->
     <?php include("./navbar.php"); ?><!-- End Header -->


    <main id="main">
      <section class="contact" style="min-height: 95vh; position: relative">
        <div
          
          class="col-lg-8 col-sm-8 col-xs-8 resultbox container aos-init aos-animate php-email-form"
        >
          <div class="section-title mt-5">
            <h2>View Registrations</h2>
            <h4 class="mt-5">Companies</h4>
          </div>
            <?php 
                $query1 = "select * from companies";
                $result1 = mysqli_query($conn, $query1);
            ?>
            <table id="tableUser">
                <thead>
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">HR Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                
                <tbody>
                <?php while($res=$result1->fetch_assoc()){
                    echo "<tr>
                        <td>". $res['company_name']."</td>
                        <td>". $res['hr_name']."</td>
                        <td>". $res['phone'] ."</td>
                        <td>". $res['email'] ."</td>
                    </tr>";

                }
                ?>

                </tbody>

            </table>

        </div>
        <div
          class="col-lg-8 col-sm-8 col-xs-8 resultbox container aos-init aos-animate php-email-form"
        >
        <div class="section-title">
            <h4 class="mt-5">Students</h4>
          </div>                
            <?php 
                $query = "select * from students";
                $result = mysqli_query($conn, $query);
            ?>
            <table id="tableUser1">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Category</th>
                    <th scope="col">Field</th>
                    <th scope="col">Degree Marks</th>
                </tr>
                </thead>
                
                <tbody>
                <?php while($res=$result->fetch_assoc()){
                    echo "<tr>
                        <td>". $res['first_name']. " " .$res['last_name'] ."</td>
                        <td>". $res['phone']."</td>
                        <td>". $res['category'] ."</td>
                        <td>". $res['field'] ."</td>
                        <td>". $res['degree_marks'] ."</td>
                    </tr>";

                }
                ?>

                </tbody>

            </table>

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


    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js?random=1923832139"></script>
    <script>
      $(document).ready(function() {
        $("#tableUser").DataTable({
            responsive: true
        });
      });
      $(document).ready(function() {
        $("#tableUser1").DataTable({
            responsive: true
        });
      });
    </script>
  </body>
</html>
