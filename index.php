<?php include 'header.php'; ?>

<!--
<?php
include 'header.php';
$query = $GET['query'];
if ($conn->connect_error) {
  die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
$sql = "SELECT * FROM books WHERE name LIKE '%$query%' OR price LIKE '%$query%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "عنوان الكتاب: " . $row["name"] . "<br>";
    echo "سعر الكاتب: " . $row["price"] . "<br>";
    echo "<hr>";
  }
} else {
  echo "لا توجد نتائج للبحث";
}
$conn->close();
?>
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- IE Compatibility Meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- First Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepage</title>
  <link href="imgs/WampServer.png" rel="icon" />

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Vendor CSS File For Slider -->
  <link href="css/glightbox.min.css" rel="stylesheet" />
  <link href="css/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Font Awesome Icons Library -->
  <link rel="stylesheet" href="css/all.min.css" />

  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- Google Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    /> -->
  <style>
    body {
      overflow: hidden;
    }
  </style>
  <style>
    <?php if (isset($_SESSION['user_id'])) {
    ?> ::-webkit-scrollbar {
      width: 0px;
    }

    ::-webkit-scrollbar-track {
      background-color: #fff;
      box-shadow: none;
    }

    ::-webkit-scrollbar-thumb {
      background-color: transparent;
      border: none;
      border-top-left-radius: 0px;
      border-bottom-left-radius: 0px;
    }

    <?php
    }

    ?>
  </style>
</head>

<body>
  <!-- Start Section Loading -->
  <div class="loading d-flex justify-content-center align-items-center">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- End Section Loading -->
  <!-- Start Settings Box -->
  <?php if (isset($_SESSION['user_id'])) { ?>
    <div class="settings-box">
      <div class="toggle-settings">
        <i class="fa fa-gear"></i>
      </div>
      <div class="settings-container" style="overflow-y: scroll; height: 100vh">
        <div class="option-box">
          <h4>Colors</h4>
          <ul class="colors-list">
            <li class="active" data-color="#0D6EFD"></li>
            <li data-color="#FF9800"></li>
            <li data-color="#E91E63"></li>
            <li data-color="#009688"></li>
            <br />
            <li data-color="#03A9F4"></li>
            <li data-color="#4CAF50"></li>
          </ul>
        </div>

        <div id="fontSelector" class="option-box">
          <h4>** Type Font **</h4>
          <label class="pb-2" for="fontSelect">Choose Font:</label>
          <select id="fontSelect" class="mw-100" onchange="changeProperty('fontFamily',this.value)">
            <option value="Open_Sans">Open Sans</option>
            <option value="Work_Sans">Work Sans</option>
            <option value="Lato">Lato</option>
            <option value="Cairo">Cairo</option>
            <option value="Poppins">Poppins</option>
            <option value="Montserrat_Arabic">Montserrat Arabic</option>
          </select>
        </div>

        <div id="fontSizeSelector" class="option-box">
          <h4>** Size Font **</h4>
          <label class="pb-2" for="fontSizeSelect">Choose Font Size:</label>
          <select id="fontSizeSelect" onchange="changeProperty('fontSize', this.value)">
            <option value="14px">Small</option>
            <option value="18px">Medium</option>
            <option value="22px">Large</option>
          </select>
        </div>

        <div id="themeSelector" class="option-box">
          <h4>** Light/Dark **</h4>
          <label class="pb-2" for="themeSelect">Choose Theme:</label>
          <select id="themeSelect" onchange="changeTheme(this.value)">
            <option value="light">Light Mode</option>
            <option value="dark">Dark Mode</option>
          </select>
        </div>

        <div id="fontCustomization" class="option-box">
          <h4>** Line Thickness & Font Style **</h4>
          <label class="py-2" for="fontThicknessRange">Font Weight:</label>
          <input type="range" id="fontThicknessRange" min="100" max="900" step="100" onchange="changeProperty('fontWeight' ,this.value)" />
          <label class="py-2" for="fontStyleSelect">Font Style:</label>
          <select id="fontStyleSelect" onchange="changeProperty('fontStyle' ,this.value)">
            <option value="normal">normal</option>
            <option value="italic">italic</option>
            <option value="oblique">oblique</option>
          </select>
        </div>

        <div id="backgroundColorSelector" class="option-box">
          <h4>** Background Color **</h4>
          <label class="pb-2" for="backgroundColorSelect">Choose Background Color:</label>
          <select id="backgroundColorSelect" onchange="changeProperty('backgroundColor', this.value)">
            <option value="white">White</option>
            <option value="lightgray">Light Gray</option>
            <option value="lightblue">Light Blue</option>
            <option value="lightgreen">Light Green</option>
            <option value="lightyellow">Light Yellow</option>
          </select>
        </div>

        <div id="signature" class="option-box">
          <h4 class="pb-2">** Signature **</h4>
          <canvas class="pt-2 w-100 bg-white" id="signatureCanvas" width="150" height="150"></canvas>
          <button class="d-block text-white border-0" onclick="clearSignature()">
            Clear
          </button>
          <p id="clearMessage"></p>
        </div>

        <div id="textColorSelector" class="option-box">
          <h4>** Text Color **</h4>
          <label class="pb-2" for="textColorSelect">Choose Text Color:</label>
          <select id="textColorSelect" onchange="changeProperty('color', this.value)">
            <option value="black">Black</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
          </select>
        </div>

        <div id="languageSelector" class="option-box">
          <h4>** Language **</h4>
          <label class="pb-2" for="languageSelect"><i class="fa fa-language"></i> Choose Language:</label>
          <select id="languageSelect" onchange="changeLanguage(this.value)">
            <option value="en">English</option>
            <option value="ar">Arabic</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
          </select>
        </div>

        <div id="clockToggle" class="option-box">
          <h4>Toggle Clock</h4>
          <label for="clockCheckbox">Hide Clock:</label>
          <input type="checkbox" checked id="clockCheckbox" onchange="showClock()" />
        </div>

        <div class="option-box">
          <div id="timezoneSelector" class="m-auto option-box">
            <h4>** Change Timezone **</h4>
            <label class="pb-2" for="timezoneSelect">Select Timezone:</label>
            <select class="mw-100" id="timezoneSelect" onchange="changeTimezone(this.value)">
              <option value="">Select timezone</option>
              <option value="America/New_York">America/New_York</option>
              <option value="Europe/London">Europe/London</option>
              <option value="Asia/Tokyo">Asia/Tokyo</option>
              <option value="Asia/Jerusalem">Asia/Jerusalem</option>
              <option value="Asia/Riyadh">Asia/Riyadh</option>
              <option value="Africa/Cairo">Africa/Cairo</option>
              <option value="Europe/Paris">Europe/Paris</option>
            </select>
          </div>
          <div id="clockContainer" class="m-auto option-box d-flex justify-content-center align-items-center">
            <div class="innerClock">
              <div class="clock-info text-center w-100">
                <h2 class="clock-location m-auto" id="clockLocation1"></h2>
                <p class="clock-time fs-4 m-auto" id="clockTime1"></p>
              </div>
            </div>
            <div class="innerClock">
              <div class="clock-info text-center w-100">
                <h2 class="clock-location m-auto" id="clockLocation2"></h2>
                <p class="clock-time fs-4 m-auto" id="clockTime2"></p>
              </div>
            </div>
            <div class="innerClock">
              <div class="clock-info text-center w-100">
                <h2 class="clock-location m-auto" id="clockLocation3"></h2>
                <p class="clock-time fs-4 m-auto" id="clockTime3"></p>
              </div>
            </div>
            <div class="innerClock">
              <div class="clock-info text-center w-100">
                <h2 class="clock-location m-auto" id="clockLocation4"></h2>
                <p class="clock-time fs-4 m-auto" id="clockTime4"></p>
              </div>
            </div>
            <div class="innerClock">
              <div class="clock-info text-center w-100">
                <h2 class="clock-location m-auto" id="clockLocation5"></h2>
                <p class="clock-time fs-4 m-auto" id="clockTime5"></p>
              </div>
            </div>
            <div class="innerClock">
              <div class="clock-info text-center w-100">
                <h2 class="clock-location m-auto" id="clockLocation6"></h2>
                <p class="clock-time fs-4 m-auto" id="clockTime6"></p>
              </div>
            </div>
            <div class="innerClock">
              <div class="clock-info text-center w-100">
                <h2 class="clock-location m-auto" id="clockLocation7"></h2>
                <p class="clock-time fs-4 m-auto" id="clockTime7"></p>
              </div>
            </div>
          </div>
        </div>

        <button class="reset-options">Reset Options</button>
      </div>
    <?php } ?>
    </div>
    <!-- End Settings Box -->
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
    <!-- Start Clock -->

    <div class="clock-content  <?php if (isset($_SESSION['user_id'])) {
                                  echo "d-none";
                                } ?> ">
      <i class="fa-regular fa-clock fa-2x fa-fw text-danger clock"></i>
      <div class="clock-body d-none">
        <div id="time">
          <div class="timeBx">
            <div id="hours" style="--c: #04fc43"></div>
            <div id="minutes" style="--c: #fee800"></div>
            <div id="seconds" style="--c: #ff2972"></div>
            <div class="ap" style="--c: #fff">
              <div id="ampm"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Clock -->
    <!-- Start Scroller -->
    <?php if (isset($_SESSION['user_id'])) { ?>
      <span class="scroller"></span>
    <?php } ?>
    <!-- End Scroller -->
    <!-- Start Landing -->
    <div class="landing text-center py-5">
      <div class="overlay"></div>
      <div class="container">
        <div class="content">
          <h1>Search about any Book you need</h1>
          <form class="input-group my-4" method="" method="GET">
            <input name="query" type="search" class="form-control rounded-1 m-auto w-75" />
            <i class="fa fa-search icon-search position-absolute top-50 mr-1 translate-middle"></i>
          </form>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="box position-relative">
                <i class="fa-solid fa-book fa-fw fa-2x mt-2"></i>
                <span class="d-block my-2 fs-3">39</span>
                <p class="mb-4 fs-14">Books</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box position-relative">
                <i class="fa-solid fa-users fa-fw fa-2x mt-2"></i>
                <span class="d-block my-2 fs-3">23</span>
                <p class="mb-4">Authors</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box position-relative">
                <i class="fa-solid fa-tags fa-fw fa-2x mt-2"></i>
                <span class="d-block my-2 fs-3">10</span>
                <p class="mb-4">Categories</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Landing -->
    <!-- Start About -->
    <div class="about bg-white text-center">
      <div class="container">
        <div class="content">
          <h2 class="mb-3">About Our Library</h2>
          <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis est
            qui facilis voluptate omnis maiores tenetur culpa vel tempore saepe?
            Asperiores facilis quasi pariatur id sint voluptatibus ea fugit
            iure.
          </p>
        </div>
      </div>
    </div>
    <!-- End About -->
    <?php if (isset($_SESSION['user_id'])) { ?>
      <div class="spikes"></div>
    <?php } ?>
    <!-- Start Latest Categories -->
    <div class="latest-categories text-center px-5">
      <div class="container">
        <h2 class="mb-4">Explore our latest Categories</h2>
        <div class="content">
          <a <?php if (isset($_SESSION['user_id'])) {
                echo "href='action_category.php'";
              } ?> class="btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
            Action
          </a>
          <a <?php if (isset($_SESSION['user_id'])) {
                echo "href='drama_category.php'";
              } ?> class="btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
            Drama
          </a>
          <a <?php if (isset($_SESSION['user_id'])) {
                echo "href='romantic_category.php'";
              } ?> class="btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
            Romantic
          </a>
          <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="computers_&_technology.php" class="text-nowrap btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
              Computers & Technology
            </a>
            <a href="most_popular.php" class="btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
              Most Popular
            </a>
            <a href="web_development.php" class="text-nowrap btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
              Web Development
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- End Latest Categories -->
    <!-- Start Latest Books -->
    <div class="latest-books bg-white text-center">
      <div class="container">
        <div class="content">
          <h2 class="mb-4">Explore our latest books</h2>
          <div class="box mt-5 mx-5 d-flex justify-content-center flex-wrap">
            <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
              <img src="imgs/01.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-start"><bdi>انت لي</bdi></h5>
                <p class="card-text text-start">Est sit id voluptat</p>
                <a href="book-details_1.php" class="btn d-block btn-dark rounded-2">Read More</a>
              </div>
            </div>
            <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
              <img src="imgs/02.png" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-start">
                  <bdi>دع القلق وابدا الحياة</bdi>
                </h5>
                <p class="card-text text-start">Esse quis et et Nam</p>
                <a href="book-details_2.php" class="btn d-block btn-dark rounded-2">Read More</a>
              </div>
            </div>
            <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
              <img src="imgs/03.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-start"><bdi>استمتع بحياتك</bdi></h5>
                <p class="card-text text-start">Maiores et ratione v</p>
                <a href="book-details_3.php" class="btn d-block btn-dark rounded-2">Read More</a>
              </div>
            </div>
            <?php if (isset($_SESSION['user_id'])) { ?>
              <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
                <img src="imgs/04.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
                <div class="card-body">
                  <h5 class="card-title text-start">HTML & CSS</h5>
                  <p class="card-text text-start">Design and Build Websites</p>
                  <a href="book-details_4.php" class="btn d-block btn-dark rounded-2">Read More</a>
                </div>
              </div>
              <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
                <img src="imgs/05.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
                <div class="card-body">
                  <h5 class="card-title text-start">Javascript And Jquery</h5>
                  <p class="card-text text-start">
                    Interactive Front-End Web Development
                  </p>
                  <a href="book-details_5.php" class="btn d-block btn-dark rounded-2">Read More</a>
                </div>
              </div>
              <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
                <img src="imgs/06.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
                <div class="card-body">
                  <h5 class="card-title text-start">PHP & MySQL</h5>
                  <p class="card-text text-start">Server-side Web Development</p>
                  <a href="book-details_6.php" class="btn d-block btn-dark rounded-2">Read More</a>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- End Latest Books -->
    <?php if (isset($_SESSION['user_id'])) { ?>
      <div class="spikes"></div>
      <!-- ======= Gallery Section ======= -->
      <section id="gallery">
        <div class="container">
          <div class="section-header">
            <h2>Gallery</h2>
            <p class="lead">Check our gallery from the recent events</p>
          </div>
        </div>
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <a href="imgs/slide_01.jpg" class="gallery-lightbox">
                <img src="imgs/slide_01.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_02.jpg" class="gallery-lightbox"><img src="imgs/slide_02.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_03.jpg" class="gallery-lightbox"><img src="imgs/slide_03.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_04.jpg" class="gallery-lightbox"><img src="imgs/slide_04.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_05.jpg" class="gallery-lightbox"><img src="imgs/slide_05.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_06.jpg" class="gallery-lightbox"><img src="imgs/slide_06.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_07.jpg" class="gallery-lightbox"><img src="imgs/slide_07.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_08.jpg" class="gallery-lightbox"><img src="imgs/slide_08.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_09.jpg" class="gallery-lightbox"><img src="imgs/slide_09.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_10.jpg" class="gallery-lightbox"><img src="imgs/slide_10.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_11.jpg" class="gallery-lightbox"><img src="imgs/slide_11.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_12.jpg" class="gallery-lightbox"><img src="imgs/slide_12.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_13.jpg" class="gallery-lightbox"><img src="imgs/slide_13.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_14.jpg" class="gallery-lightbox"><img src="imgs/slide_14.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_15.jpg" class="gallery-lightbox"><img src="imgs/slide_15.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_16.jpg" class="gallery-lightbox"><img src="imgs/slide_16.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_17.jpg" class="gallery-lightbox"><img src="imgs/slide_17.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_18.jpg" class="gallery-lightbox"><img src="imgs/slide_18.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_19.jpg" class="gallery-lightbox"><img src="imgs/slide_19.jpg" class="img-fluid" alt="" /></a>
            </div>
            <div class="swiper-slide">
              <a href="imgs/slide_20.jpg" class="gallery-lightbox"><img src="imgs/slide_20.jpg" class="img-fluid" alt="" /></a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <!-- End Gallery Section -->
      <!-- Start library-news -->
      <section class="library-news">
        <div class="container">
          <h2>Library News</h2>
          <div class="news-container">
            <div class="news-item">
              <h3>Expansion of Digital Book Collection</h3>
              <p class="lead">
                Al Zahra Public Library has expanded its collection of new and
                useful digital books for readers.
              </p>
              <a href="#">Read More</a>
            </div>
            <div class="news-item">
              <h3>Seminar on "The Importance of Reading in Our Lives"</h3>
              <p class="lead">
                The library will hold a seminar on "The Importance of Reading in
                Our Lives" next Saturday at 6:00 pm.
              </p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </section>
    <?php } ?>
    <!-- End library-news -->
    <!-- Start Footer -->
    <div class="footer w-100 px-3 py-3">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="text d-flex">
          <p class="copyrightText my-auto">
            All Copyright reserved to <a href="#">Rebhe Akram Ibrahim</a> &copy;
            <span class="year"></span>
          </p>
          <?php if (isset($_SESSION['user_id'])) { ?>
            <p class="my-auto ms-3">
              <a href="faq.php">FAQ</a>
            </p>
            <p class="my-auto ms-3">
              <a href="blog.php">Blog</a>
            </p>
          <?php } ?>
        </div>
        <ul class="list list-unstyled text-center d-inline-flex p-0 m-0">
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
    <!-- Start Scroll To Top -->
    <span class="up"><i class="fa-solid fa-angle-up fa-fw fa-2x"></i></span>
    <!-- End Scroll To Top -->
    <!-- Contact Page -->
    <div id="contact-page">
      <div class="container">
        <div class="row d-none d-flex justify-content-end align-items-center">
          <div class="col-md-8">
            <form id="contact-form" method="post" action="" role="form">
              <div class="controls">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_name">Name *</label>
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name *" required="required" data-error="Name is required." />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_email">Email *</label>
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="form_message">Message *</label>
                  <textarea id="form_message" name="message" class="form-control" placeholder="Please enter your message *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <button type="submit" class="btn btn-success btn-send" value="Send message">
                  <i class="fa-solid fa-paper-plane"></i>
                  Send message
                </button>
              </div>
            </form>
          </div>
        </div>
        <i class="chat topauto fa-regular fa-comments fa-2x fa-fw"></i>
      </div>
    </div>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/all.min.js"></script> -->
    <!-- <script src="js/jquery.nicescroll.min.js"></script> -->

    <?php if (isset($_SESSION['user_id'])) { ?>
      <!-- Vendor JS Files For Slider -->
      <script src="js/glightbox.min.js"></script>
      <script src="js/swiper-bundle.min.js"></script>
      <!-- Template Main JS File -->
      <script src="js/slider.js"></script>
    <?php } ?>
    <script>
      document.oncopy = function(e) {
        console.log(document.location.href);
        let pagelink = `\n\nRead more at: ${window.location.href}`;
        e.clipboardData.setData(
          "text/plain",
          document.getSelection() + pagelink
        );
        return false;
      };
    </script>
    <!-- Start loading project -->
    <script>
      setTimeout(() => {
        document.querySelector("body").style.overflow = "auto";
      }, 2000);

      setTimeout(() => {
        $(".loading, .loading .spinner").fadeOut(1000);
      }, 2000);

      setTimeout(() => {
        $(".loading, .loading .spinner").remove();
      }, 3000);
    </script>
    <!-- End loading project -->
    <!-- jquery.nicescroll -->
    <script>
      //   $(function () {
      //     "use strict";
      //     // Trigger Nice Scroll
      //     $("html").niceScroll({
      //       cursorcolor: "#0d6efd",
      //       cursorwidth: "10px",
      //       cursorborder: "1px solid #0d6efd",
      //       cursorborderradius: 0,
      //     });
      //   });
    </script>
    <?php if (isset($_SESSION['user_id'])) { ?>
      <!-- Start Settings Box -->
      <script>
        document.querySelector(".toggle-settings .fa-gear").onclick =
          function() {
            this.classList.toggle("fa-spin");
            document.querySelector(".settings-box").classList.toggle("open");
          };

        const colorsLi = document.querySelectorAll(".colors-list li");
        colorsLi.forEach((li) => {
          li.addEventListener("click", (e) => {
            document.documentElement.style.setProperty(
              "--main-color",
              e.target.dataset.color
            );
          });
        });

        let mainColors = localStorage.getItem("color_option");
        if (mainColors !== null) {
          document.documentElement.style.setProperty("--main-color", mainColors);
          document.querySelectorAll(".colors-list li").forEach((element) => {
            element.classList.remove("active");
            if (element.dataset.color === mainColors) {
              element.classList.add("active");
            }
          });
        }

        colorsLi.forEach((li) => {
          li.addEventListener("click", (e) => {
            localStorage.setItem("color_option", e.target.dataset.color);
            e.target.parentElement
              .querySelectorAll(".active")
              .forEach((element) => {
                element.classList.remove("active");
              });
            e.target.classList.add("active");
          });
        });

        document.querySelector(".reset-options").onclick = function() {
          localStorage.removeItem("color_option");
          localStorage.removeItem("background-option");
          window.location.reload();
        };
      </script>
      <script>
        function changeProperty(property, value) {
          var body = document.body;
          body.style[property] = value;
        }

        function changeTheme(theme) {
          var body = document.body;
          if (theme === "dark") {
            body.classList.add("dark-theme"); // need style css
          } else {
            body.classList.remove("dark-theme"); // need style css
          }
        }

        function changeLanguage(language) {
          var htmlElement = document.documentElement;
          htmlElement.lang = language;
          if (language === "en") {
            window.location.href = "index.php";
          }
          if (language === "ar") {
            window.location.href = "index-ar.php";
          }
          if (language === "fr") {
            window.location.href = "https://example.com/french";
          }
          if (language === "es") {
            window.location.href = "https://example.com/spanish";
          }
        }

        <?php if (isset($_SESSION['user_id'])) { ?>

          function showClock() {
            var sidebar = document.querySelector(".clock-content");
            var sidebarCheckbox = document.getElementById("clockCheckbox");
            if (sidebarCheckbox.checked) {
              sidebar.classList.add("d-none");
              sidebar.classList.remove("d-block");
            } else {
              sidebar.classList.remove("d-none");
              sidebar.classList.add("d-block");
            }
          }
        <?php } ?>
      </script>
      <script>
        var canvas = document.getElementById("signatureCanvas");
        var ctx = canvas.getContext("2d");
        var isDrawing = false;
        var clearMessage = document.getElementById("clearMessage");
        var messageTimeout;
        canvas.addEventListener("mousedown", startDrawing);
        canvas.addEventListener("mousemove", draw);
        canvas.addEventListener("mouseup", stopDrawing);
        canvas.addEventListener("mouseout", stopDrawing);

        function startDrawing(event) {
          isDrawing = true;
          ctx.beginPath();
          ctx.moveTo(event.offsetX, event.offsetY);
        }

        function draw(event) {
          if (isDrawing) {
            ctx.lineTo(event.offsetX, event.offsetY);
            ctx.stroke();
          }
        }

        function stopDrawing() {
          isDrawing = false;
        }

        function clearSignature() {
          var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
          var data = imageData.data;
          var isEmpty = true;
          for (var i = 0; i < data.length; i += 4) {
            var alpha = data[i + 3];
            if (alpha !== 0) {
              isEmpty = false;
              break;
            }
          }
          if (isEmpty) {
            clearMessage.textContent = "لا يوجد توقيع";
          } else {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            clearMessage.textContent = "تم المسح";
          }
          clearTimeout(messageTimeout);
          messageTimeout = setTimeout(function() {
            clearMessage.textContent = "";
          }, 800);
        }
      </script>
      <script>
        var clocks = [{
            location: "New York",
            timezone: "America/New_York",
            clockId: "clockTime1",
            locationId: "clockLocation1",
          },
          {
            location: "London",
            timezone: "Europe/London",
            clockId: "clockTime2",
            locationId: "clockLocation2",
          },
          {
            location: "Tokyo",
            timezone: "Asia/Tokyo",
            clockId: "clockTime3",
            locationId: "clockLocation3",
          },
          {
            location: "Jerusalem",
            timezone: "Asia/Jerusalem",
            clockId: "clockTime4",
            locationId: "clockLocation4",
          },
          {
            location: "Riyadh",
            timezone: "Asia/Riyadh",
            clockId: "clockTime5",
            locationId: "clockLocation5",
          },
          {
            location: "Cairo",
            timezone: "Africa/Cairo",
            clockId: "clockTime6",
            locationId: "clockLocation6",
          },
          {
            location: "Paris",
            timezone: "Europe/Paris",
            clockId: "clockTime7",
            locationId: "clockLocation7",
          },
        ];

        function changeTimezone(selectedTimezone) {
          clocks.forEach(function(clock) {
            var clockElement = document.getElementById(clock.clockId);
            var locationElement = document.getElementById(clock.locationId);
            if (clock.timezone === selectedTimezone) {
              var currentTime = new Date().toLocaleString("en-US", {
                timeZone: clock.timezone,
              });
              clockElement.textContent = currentTime;
              locationElement.textContent = clock.location;
              clockElement.parentElement.classList.add("selected-clock");
            } else {
              clockElement.textContent = "";
              locationElement.textContent = "";
              clockElement.parentElement.classList.remove("selected-clock");
            }
          });
        }

        function updateClocks() {
          var selectedTimezone = document.getElementById("timezoneSelect").value;
          changeTimezone(selectedTimezone);
        }
        setInterval(updateClocks, 1000);
        window.addEventListener("load", updateClocks);
      </script>
      <!-- End Settings Box -->
    <?php } ?>
    <!-- Start Time -->
    <script>
      document.querySelector(".clock").addEventListener("click", () => {
        document.querySelector(".clock-body").classList.toggle("d-none");
      });
    </script>
    <script>
      setInterval(() => {
        let hours = document.getElementById("hours");
        let minutes = document.getElementById("minutes");
        let seconds = document.getElementById("seconds");
        let ampm = document.getElementById("ampm");

        let h = new Date().getHours();
        let m = new Date().getMinutes();
        let s = new Date().getSeconds();

        let am = h >= 12 ? "PM" : "AM";

        // convert 24hr clock to 12hr clock
        if (h > 12) {
          h = h - 12;
        }

        // add zero before single digit number
        h = h < 10 ? "0" + h : h;
        m = m < 10 ? "0" + m : m;
        s = s < 10 ? "0" + s : s;

        hours.innerHTML = h;
        minutes.innerHTML = m;
        seconds.innerHTML = s;
        ampm.innerHTML = am;
      });
    </script>
    <!-- End Time -->
    <?php if (isset($_SESSION['user_id'])) { ?>
      <!-- Start Scroll Top -->
      <script>
        let el = document.querySelector(".scroller");
        let height =
          document.documentElement.scrollHeight -
          document.documentElement.clientHeight;
        window.addEventListener("scroll", () => {
          let scrollTop = document.documentElement.scrollTop;
          el.style.width = `${(scrollTop / height) * 100}%`;
        });
      </script>
      <!-- End Scroll Top -->
    <?php } ?>
    <!-- Start Scroll page -->
    <script>
      let span = document.querySelector(".up");

      window.onscroll = function() {
        this.scrollY >= 1000 ?
          span.classList.add("show") :
          span.classList.remove("show");
      };

      span.onclick = function() {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      };
    </script>
    <!-- End Scroll page -->
    <!-- Start Year -->
    <script>
      document.querySelector(".year").innerHTML = new Date().getFullYear();
    </script>
    <!-- End Year -->
    <!-- Start msg form -->
    <script>
      document
        .querySelector("#contact-page .container .chat")
        .addEventListener("click", (e) => {
          document
            .querySelector("#contact-page .row")
            .classList.toggle("d-none");
          document.querySelector(".chat").classList.toggle("topauto");
        });

      $(document).ready(function() {
        $("#contact-form").submit(function(e) {
          e.preventDefault(); // يمنع إعادة تحميل الصفحة عند الضغط على زر "submit"
          var formData = $(this).serialize(); // يأخذ بيانات النموذج ويحولها إلى سلسلة نصية
          $.ajax({
            type: "POST",
            url: "index.php", // اسم ملف PHP الذي سيتعامل مع الإرسال
            data: formData, // يرسل بيانات النموذج إلى ملف PHP
            success: function(data) {
              $("#contact-form").html(
                '<div class="success-message">Your message has been sent successfully!</div>'
                // '<div class="success-message">تم إرسال رسالتك بنجاح!</div>'
              ); // يستبدل النموذج برسالة نجاح
            },
            error: function(data) {
              $("#contact-form").append(
                '<div class="error-message">Something went wrong, please try again.</div>'
                // '<div class="error-message">حدث خطأ أثناء إرسال رسالتك. يرجى المحاولة مرة أخرى!</div>'
              ); // يضيف رسالة خطأ إلى النموذج
            },
          });
        });
      });
    </script>
    <!-- End msg form -->
</body>

</html>