<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- IE Compatibility Meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- First Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Details</title>
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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />
</head>

<body>
  <!-- Start Header -->
  <div class="header">
    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container">
        <a class="navbar-brand" href="index.php">Books Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
        <li class="breadcrumb-item"><a href="book-details_1.php"><bdi>انت لي</bdi></a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>
  </div>
  <!-- End Breadcrumb -->
  <!-- Start BookDetails -->
  <div class="book-details my-4">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="my-3 img-box">
            <img class="img3 figure-img img-fluid img-thumbnail position-relative start-50 translate-middle-x"
              src="imgs/01.jpg" alt="" />
          </div>
        </div>
        <div class="col-md-7">
          <div class="info-box">
            <p class="fs-3 m-auto"><bdi>انت لي</bdi></p>
            <span>Price: <span class="text-danger">125.00$</span></span>
            <hr />
            <p class="fs-14">Maiores et ratione v</p>
            <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="add-to-cart.php?id=1" class="btn btn-success mt-3 mb-5 py-2 px-4 rounded-1">
              <i class="fa-solid fa-cart-shopping me-2"></i>Add To Cart
            </a>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="desc">
        <h4>Description</h4>
        <p class="fs-14 mt-3 mb-5">
          Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu
          Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu
          Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu
          Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu
          Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu
          Dolorem quis et atqu Dolorem quis et atqu Dolorem quis et atqu
          Dolorem quis et atqu Dolorem quis et atqu
        </p>
      </div>
    </div>
  </div>
  <!-- End BookDetails -->
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