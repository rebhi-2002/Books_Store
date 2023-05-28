<?php include 'header.php'; ?>
<?php if (isset($_SESSION['user_id'])) { ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <!-- IE Compatibility Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link href="imgs/WampServer.png" rel="icon" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Font Awesome Icons Library -->
    <link rel="stylesheet" href="css/all.min.css" />

    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <script>
      /* var countDate = new Date("Jan 1, 2023 00:00:00").getTime(); */
      var countDate = new Date(
        `Jan 1, ${new Date().getFullYear() + 1} 00:00:00`
      ).getTime();

      function newYear() {
        var now = new Date().getTime();
        gap = countDate - now;

        var second = 1000;
        var minute = second * 60;
        var hour = minute * 60;
        var day = hour * 24;

        var d = Math.floor(gap / day);
        var h = Math.floor((gap % day) / hour);
        var m = Math.floor((gap % hour) / minute);
        var s = Math.floor((gap % minute) / second);

        document.getElementById("day").innerText = d;
        document.getElementById("hour").innerText = h;
        document.getElementById("minute").innerText = m;
        document.getElementById("second").innerText = s;
      }

      setInterval(function() {
        newYear();
      }, 1000);
    </script>
  </head>

  <body>
    <!-- Start Header -->
    <div class="header">
      <nav class="navbar navbar-expand-lg bg-black">
        <div class="container">
          <a class="navbar-brand" href="index.php">Books Store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav right d-flex align-items-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <?php if (isset($_SESSION['user_id'])) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="add-to-cart.php">Cart</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              <?php } else { ?>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- End Header -->
    <!-- Start Breadcrumb -->
    <div class="container py-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start Blog -->
    <div class="section">
      <div class="contentBx">
        <h2>Coming Soon</h2>
        <div class="countdown">
          <div class="time">
            <div id="day"></div>
            <span>Days</span>
          </div>
          <div class="time">
            <div id="hour"></div>
            <span>Hours</span>
          </div>
          <div class="time">
            <div id="minute"></div>
            <span>Minutes</span>
          </div>
          <div class="time">
            <div id="second"></div>
            <span>Seconds</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog -->
    <!-- Start Footer -->
    <div class="footer w-100 px-3 py-3">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="text d-flex">
          <p class="copyrightText my-auto">
            All Copyright reserved to <a href="#">Rebhe Akram Ibrahim</a> &copy;
            2023
          </p>
          <p class="my-auto ms-3">
            <a href="faq.php">FAQ</a>
          </p>
          <p class="my-auto ms-3">
            <a href="blog.php">Blog</a>
          </p>
        </div>
        <ul class="list-unstyled d-inline-flex p-0 m-0">
          <li>
            <a class="d-block text-primary mx-1" href="#">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a class="d-block text-primary mx-1" href="#">
              <i class="fa-brands fa-twitter"></i>
            </a>
          </li>
          <li>
            <a class="d-block text-primary mx-1" href="#">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Footer -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
  </body>

  </html>
<?php } else {
  header("Location: index.php");
} ?>