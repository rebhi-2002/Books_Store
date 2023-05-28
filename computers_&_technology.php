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
  <title>>Computers & Technology Category</title>
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
  <style>
  body {
    overflow-wrap: anywhere;
  }

  swiper-container {
    width: 100%;
    height: 100%;
  }

  swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    background-position: center;
    background-size: cover;
    padding: 40px 0;
  }

  swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  swiper-container {
    margin-left: auto;
    margin-right: auto;
  }

  .latest-books .container .content .dept_two #booksMosaicBoxContainer swiper-container.mySwiper swiper-slide #bMosaicBox {
    margin: 8px;
  }
  </style>
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
        <li class="breadcrumb-item">
          <a href="computers_&_technology.php">Computers & Technology</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>
  </div>
  <!-- End Breadcrumb -->
  <!-- Start Latest Books -->
  <div class="latest-books py-2 my-2 bg-white">
    <div class="container">
      <div class="content">
        <div class="col-md-12 itemFullText">
          <h2 class="color1 most-popular-title" style="margin-top: 20px">
            Computers & Technology
          </h2>
          <div class="most-popular-title-line" style="
                background: #49afd0;
                height: 2px;
                width: 100%;
                margin-bottom: 20px;
              "></div>
          <div class="check text-center fs-4 pt-2 pb-5 d-flex justify-content-start">
            <div id="dept_one" style="cursor: pointer" title="Best Sellers in Computers & Technology">
              Top 100 Paid
              <div class="line_1" style="
                    background: #49afd0;
                    width: 100%;
                    height: 2px;
                    margin-top: 10px;
                  "></div>
            </div>
            <div id="dept_two" class="mx-5" style="cursor: pointer" title="Best Sellers in Computers & Technology">
              Top 100 Free
              <div class="line_2" style="
                    background: #49afd080;
                    width: 100%;
                    height: 2px;
                    margin-top: 10px;
                  "></div>
            </div>
            <div id="dept_three" style="cursor: pointer" title="Hot New Releases">
              New Releases in Computers & Technology
              <div class="line_3" style="
                    background: #49afd080;
                    width: 100%;
                    height: 2px;
                    margin-top: 10px;
                  "></div>
            </div>
          </div>
          <div class="dept_one">
            <div id="booksMosaicBoxContainer" class="first_content">
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-74.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-75.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-76.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-77.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-78.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-79.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-80.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-81.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-82.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-83.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-84.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-85.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-86.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-87.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-88.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-89.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-90.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-91.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-92.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-93.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-94.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-95.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-96.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-97.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-98.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-99.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-100.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-101.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-102.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-103.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-104.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-105.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-106.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-107.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-108.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-109.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-110.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-111.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-112.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-113.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-114.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-115.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-116.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-117.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-118.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-119.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-120.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-121.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-122.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-123.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-124.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-125.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div id="booksMosaicBoxContainer" class="second_content d-none">
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-126.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-127.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-128.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-129.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-130.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-131.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-132.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-133.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-134.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-135.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-136.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-137.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-138.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-139.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-140.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-141.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-142.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-143.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-144.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-145.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-146.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-147.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-148.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-149.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-150.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-151.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-152.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-153.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-154.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-155.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-156.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-157.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-158.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-159.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-160.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-161.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-162.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-163.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-164.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-165.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div id="booksMosaicBoxContainer" class="third_content d-none">
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-166.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-167.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-168.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-169.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-170.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-171.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-172.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-173.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-174.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-175.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-176.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-177.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-178.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-179.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-180.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
              <div id="bMosaicBox">
                <div>
                  <a href="">
                    <div>
                      <img src="imgs/book-cover-181.jpg" loading="lazy" />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <nav aria-label="Page navigation example" class="pt-5 pb-3 mb-3">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link">Previous</a>
                </li>
                <li class="page-item no active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item no">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item no">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="dept_two d-none">
            <div id="booksMosaicBoxContainer" class="first_content">
              <!-- init="false" &
                  effect="fade"
                  effect="cube"
                  effect="cards"
                  effect="creative"
                  effect="flip"
                  effect="coverflow"
                -->
              <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                space-between="30" loop="true" effect="fade">
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-182.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-183.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-184.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-185.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-186.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-187.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-188.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-189.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-190.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-191.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-192.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-193.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-194.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-195.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-196.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-197.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-198.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-199.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
              </swiper-container>
              <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                space-between="30" loop="true" effect="fade">
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-200.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-201.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-202.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-203.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-204.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-205.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-206.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-207.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-208.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-209.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-210.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-211.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-212.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-213.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-214.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-215.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-216.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-217.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
              </swiper-container>
              <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                space-between="30" loop="true" effect="fade">
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-218.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-219.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-220.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-221.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-222.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-223.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-224.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-225.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-226.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-227.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-228.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-229.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-230.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-231.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-232.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-233.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-234.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-235.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
              </swiper-container>
              <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                space-between="30" loop="true" effect="fade">
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-236.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-237.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-238.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-239.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-240.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-241.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-242.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-243.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-244.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-245.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-246.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-247.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-248.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-249.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-250.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-251.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-252.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-253.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
              </swiper-container>
              <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                space-between="30" loop="true" effect="fade">
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-254.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-255.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-256.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-257.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-258.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-259.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-260.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-261.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-262.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-263.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-264.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-265.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-266.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-267.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-268.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-269.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-270.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-271.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-272.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-273.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-274.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                  <div id="bMosaicBox">
                    <div>
                      <a href="">
                        <div>
                          <img src="imgs/book-cover-275.jpg" loading="lazy" />
                        </div>
                      </a>
                    </div>
                  </div>
                </swiper-slide>
              </swiper-container>
            </div>
          </div>
          <div class="dept_three d-none">
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem,
              similique tenetur consequuntur consequatur facilis sunt
              distinctio repellendus debitis ducimus alias ea impedit vitae
              modi dignissimos molestiae quisquam voluptas quaerat aliquid
              corrupti ipsum veritatis voluptate deleniti quod saepe. Amet
              sunt obcaecati ea in quos sint tempora adipisci minus eaque
              laudantium molestiae earum pariatur officiis, facilis autem?
              Aperiam vero unde soluta temporibus inventore libero maxime,
              veniam tenetur aliquid eum provident quidem incidunt nemo cumque
              commodi sapiente officiis neque pariatur ea sequi saepe nobis
              corrupti nisi praesentium? Facilis, quisquam voluptatibus illum
              reiciendis beatae vitae ad tempore at ratione ipsum accusantium
              ullam rem maxime?
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Latest Books -->
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
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script> -->
  <script src="js/swiper-element-bundle.min.js"></script>

  <script>
  // const swiperEl = document.querySelector("swiper-container");
  //
  // const params = {
  //   injectStyles: [
  //     `
  // .swiper-pagination-bullet {
  //   width: 20px;
  //   height: 20px;
  //   text-align: center;
  //   line-height: 20px;
  //   font-size: 12px;
  //   color: #000;
  //   opacity: 1;
  //   background: rgba(0, 0, 0, 0.2);
  // }
  //
  // .swiper-pagination-bullet-active {
  //   color: #fff;
  //   background: #007aff;
  // }
  // `,
  //   ],
  //   pagination: {
  //     clickable: true,
  //     renderBullet: function (index, className) {
  //       return '<span class="' + className + '">' + (index + 1) + "</span>";
  //     },
  //   },
  // };
  //
  // Object.assign(swiperEl, params);
  //
  // swiperEl.initialize();
  </script>

  <script>
  document.querySelectorAll("a").forEach((el) => {
    el.addEventListener("click", (a) => {
      //  a.preventDefault();
    });
  });
  </script>

  <script>
  let items = document.querySelectorAll(".pagination li.page-item.no");

  let li_2 = document.querySelector(
    ".pagination li.page-item:nth-child(2)"
  );
  let li_3 = document.querySelector(
    ".pagination li.page-item:nth-child(3)"
  );
  let li_4 = document.querySelector(
    ".pagination li.page-item:nth-child(4)"
  );

  let prev = document.querySelector(".pagination li.page-item:first-child");
  let next = document.querySelector(".pagination li.page-item:last-child");

  let prev_btn = document.querySelector(
    ".pagination li.page-item:first-child a"
  );
  let next_btn = document.querySelector(
    ".pagination li.page-item:last-child a"
  );

  items.forEach((li) => {
    li.addEventListener("click", (e) => {
      items.forEach((a) => {
        a.classList.remove("active");
      });
      li.classList.add("active");

      if (li_2.classList.contains("active")) {
        prev.classList.add("disabled");
        prev.classList.remove("active");
      } else {
        prev.classList.remove("disabled");
        prev.classList.add("active");
      }

      if (li_4.classList.contains("active")) {
        next.classList.add("disabled");
        next.classList.remove("active");
      } else {
        next.classList.remove("disabled");
        next.classList.add("active");
      }
    });
  });

  li_2.addEventListener("click", () => {
    document.querySelector(".first_content").classList.remove("d-none");
    document.querySelector(".second_content").classList.add("d-none");
    document.querySelector(".third_content").classList.add("d-none");
  });
  li_3.addEventListener("click", () => {
    document.querySelector(".second_content").classList.remove("d-none");
    document.querySelector(".first_content").classList.add("d-none");
    document.querySelector(".third_content").classList.add("d-none");
  });
  li_4.addEventListener("click", () => {
    document.querySelector(".third_content").classList.remove("d-none");
    document.querySelector(".first_content").classList.add("d-none");
    document.querySelector(".second_content").classList.add("d-none");
  });
  </script>
  <script>
  let sec_one = document.getElementById("dept_one");
  let dept_one = document.querySelector(".dept_one");
  let sec_two = document.getElementById("dept_two");
  let dept_two = document.querySelector(".dept_two");
  let sec_three = document.getElementById("dept_three");
  let dept_three = document.querySelector(".dept_three");

  let line_1 = document.querySelector(".line_1");
  let line_2 = document.querySelector(".line_2");
  let line_3 = document.querySelector(".line_3");

  sec_one.addEventListener("click", () => {
    dept_one.classList.remove("d-none");
    dept_two.classList.add("d-none");
    dept_three.classList.add("d-none");
    line_1.style.cssText =
      "background:#49afd0; width: 100%; height: 2px; margin-top: 10px;";
    line_2.style.cssText =
      "background: #49afd080; width: 100%; height: 2px; margin-top: 10px;";
    line_3.style.cssText =
      "background: #49afd080; width: 100%; height: 2px; margin-top: 10px;";
  });

  sec_two.addEventListener("click", () => {
    dept_one.classList.add("d-none");
    dept_two.classList.remove("d-none");
    dept_three.classList.add("d-none");
    line_1.style.cssText =
      "background:#49afd080; width: 100%; height: 2px; margin-top: 10px;";
    line_2.style.cssText =
      "background: #49afd0; width: 100%; height: 2px; margin-top: 10px;";
    line_3.style.cssText =
      "background: #49afd080; width: 100%; height: 2px; margin-top: 10px;";
  });

  sec_three.addEventListener("click", () => {
    dept_one.classList.add("d-none");
    dept_two.classList.add("d-none");
    dept_three.classList.remove("d-none");
    line_1.style.cssText =
      "background:#49afd080; width: 100%; height: 2px; margin-top: 10px;";
    line_2.style.cssText =
      "background: #49afd080; width: 100%; height: 2px; margin-top: 10px;";
    line_3.style.cssText =
      "background: #49afd0; width: 100%; height: 2px; margin-top: 10px;";
  });

  // document
  //   .querySelector(".page-item.selected")
  //   .addEventListener("click", (e) => {
  //     if (e.target.parentElement.classList.contains("active")) {
  //       let next_secTwo = document.querySelector(".page-item.next");
  //       if (next_secTwo.classList.contains("active")) {
  //         next_secTwo.classList.add("disabled");
  //         next_secTwo.classList.remove("active");
  //       } else {
  //         next_secTwo.classList.remove("disabled");
  //         next_secTwo.classList.add("active");
  //       }
  //     }
  //   });
  </script>
</body>

</html>
<?php } else {
  header("Location: index.php");
} ?>