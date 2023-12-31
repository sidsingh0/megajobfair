<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>SOF Job Fair 2023</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

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

  <link href="assets/css/style.css" rel="stylesheet" />
  <style>
    ::placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: grey !important;
      opacity: 1;
      /* Firefox */
    }

    :-ms-input-placeholder {
      /* Internet Explorer 10-11 */
      color: grey !important;
    }

    ::-ms-input-placeholder {
      /* Microsoft Edge */
      color: grey !important;
    }

    input[type=date]:invalid::-webkit-datetime-edit {
      color: grey !important;
    }
  </style>
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- ======= Header ======= -->
  <?php include("./navbar.php"); ?>
<!-- End Header -->
  <!-- End Header -->
  <div class="progress-header">
    <div class="progress-container">
      <div class="progress-bar" id="progressBar"></div>
    </div>
  </div>

  <main id="main">
    <section class="contact" style="min-height: 95vh; position: relative">
      <div style="
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
          " class="col-lg-8 col-sm-8 col-xs-8 resultbox container aos-init aos-animate php-email-form">
        <div class="section-title">
          <h2>Results</h2>
          <p>
            In case of further assistance, please contact registration desk.
          </p>
        </div>
        <p id="responseerror" class="mb-1" style="text-align: center;font-size:14px;color:#e03a3c;"></p>
        <div class="row align-items-center">
          <div class="col-lg-5 col-xs-12 p-1">
            <input type="text" id="inputphone" name="Phone" placeholder="Phone number" maxlength="10" class="textbox form-control me-2" required />
          </div>
          <div class="col-lg-5 col-xs-12 p-1">
            <input type="date" id="inputdate" name="Date" placeholder="Date of birth" class="textbox form-control me-2" required />
          </div>
          <div class="col-lg-2 col-xs-12 p-1 text-center">
            <button type="button" class="" style="
                background: #e03a3c;
                font-weight:400;
                border: 0;
                padding: 9px 0px;
                width:100%;
                color: #fff;
                transition: 0.4s;
                border-radius: 4px;
              " id="checkbutton">
              Check
            </button>
          </div>
        </div>

        <div id="responseattendance" style="text-align: center;"></div>
        <div class="companies" id="companies">
          
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Company</th>
                <th scope="col">Status</th>
                <th scope="col">Room Number</th>
              </tr>
            </thead>
            <tbody id="companylist">
            </tbody>
          </table>
          <p>NOTE: If any of the above details are wrong please contact the registration desk.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4" style="align-items: center">
      <div class="me-md-auto text-center text-md-start" style="letter-spacing: 0.2px">
        <div class="copyright">
          <strong>Siddharth Ovalekar Foundation</strong>. All Rights
          Reserved.
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="https://www.facebook.com/profile.php?id=100081828978440&mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/ishrae_thane_chapter?igshid=MzRlODBiNWFlZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ishrae-thane-chapter/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

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
  <script>
    $("#companies").hide()
    $("#checkbutton").on("click", async function getResponse() {
      $("#companies").hide()
      $("#responseattendance").html("");
      $("#responseerror").html("");
      const inputphone = document.getElementById("inputphone").value;
      const inputdate = document.getElementById("inputdate").value;
      let url = `/getscores.php?phone=${inputphone}&dob=${inputdate}`

      $.ajax({
        type: "GET",
        url: url,
        success: function(data) {
          data = JSON.parse(data)
          if (data.status == 0) {
            $("#responseerror").html(data.message);
          } else {
            let attended = "";
            if (data.attendance != 1) {
              attended = "<span style='font-weight:500;color:#e03a3c'>ABSENT</span>"
            } else {
              attended = "<span style='font-weight:500;color:#4ce038'>PRESENT</span>"
            }
            const att = `<p style="margin-top:30px;">Attendance: ${attended}</p> <p class="mt-1">Aptitude Marks: ${data.aptitude}</p>`
            $("#responseattendance").html(att)

            if (data.allotment.length>0){
              $("#companies").show()
              let listofcompany=""
              let i=1
              data.allotment.forEach(element => {
                if (element.result === "pending") element.result = "Proceed to interview";
                listofcompany+=`
                <tr>
                  <td scope="row">${i}</td>
                  <td>${element.company}</td>
                  <td>${element.result.charAt(0).toUpperCase() + element.result.slice(1)}</td>
                  <td>${element.result=="pending"?element.room:"Interview Over"}</td>
                </tr>`
                i++
              }
              )
              $("#companylist").html(listofcompany);
            }
          }
        }
      });

    });
    $(".textbox").keypress(function(e) {
      let myArray = [];
      for (i = 48; i < 58; i++) myArray.push(i);
      if (!(myArray.indexOf(e.which) >= 0)) e.preventDefault();
    });
    $("form").submit(function(e) {
      if ($(".textbox").val().length === 10) {
        alert("Submitted successfully!");
      } else {
        e.preventDefault();
        alert("Enter ten numbers.");
      }
    });
  </script>
</body>

</html>