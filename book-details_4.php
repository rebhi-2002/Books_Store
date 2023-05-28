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
        <li class="breadcrumb-item">
          <a href="book-details_4.php">HTML & CSS: Design and Build Websites</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>
  </div>
  <!-- End Breadcrumb -->
  <!-- Start BookDetails -->
  <div class="book-details my-4">
    <div class="container">
      <div class="row cardBooks" style="overflow: hidden">
        <div class="col-sm-3 details-book-cover-container">
          <div class="details-book-cover-content">
            <a href="" style="padding: 0; text-decoration: none">
              <div class="z-book-cover">
                <img alt="Book cover HTML &amp; CSS: Design and Build Websites" src="imgs/04.jpg" />
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-9">
          <h1 itemprop="name" style="color: #000; line-height: 140%">
            HTML &amp; CSS: Design and Build Websites
          </h1>
          <i>
            <a class="color1" href="" itemprop="author" title="Find all the author books">Jon Duckett</a>
          </i>
          <div class="book-rating-detail">
            <div class="book-rating">
              <span class="book-rating-interest-score"> 5.0 </span>
              /
              <span class="book-rating-quality-score"> 5.0 </span>
            </div>
            <div class="book-comments-info">0 comments</div>
            <div class="bookmarks">
              <i id="icon-heart" class="fa-regular fa-heart icon-heart" title="Mark the book you like best"></i>
            </div>
          </div>
          <div id="bookDescriptionBox" itemprop="reviewBody" style="
                font-size: 14px;
                max-width: 850px;
                line-height: 1.7;
                margin: 15px 0;
              ">
            <b>A full-color introduction to the basics of HTML and CSS from
              the publishers of Wrox!</b>
            <p>
              Every day, more and more people want to learn some HTML and CSS.
              Joining the professional web designers and programmers are new
              audiences who need to know a little bit of code at work (update
              a content management system or e-commerce store) and those who
              want to make their personal blogs more attractive. Many books
              teaching HTML and CSS are dry and only written for those who
              want to become programmers, which is why this book takes an
              entirely new approach.
            </p>
            <ul>
              <li>
                Introduces HTML and CSS in a way that makes them accessible to
                everyone—hobbyists, students, and professionals—and it’s
                full-color throughout
              </li>
              <li>
                Utilizes information graphics and lifestyle photography to
                explain the topics in a simple way that is engaging
              </li>
              <li>
                Boasts a unique structure that allows you to progress through
                the chapters from beginning to end or just dip into topics of
                particular interest at your leisure
              </li>
            </ul>
            <p>
              This educational book is one that you will enjoy picking up,
              reading, then referring back to. It will make you wish other
              technical topics were presented in such a simple, attractive and
              engaging way!
            </p>
            <br />
          </div>
          <div style="overflow: hidden; zoom: 1">
            <div class="bookDetailsBox">
              <div class="bookProperty property_categories">
                <div class="property_label">Categories:</div>
                <div class="property_value">
                  <a href=""> Computers &amp; Technology </a>
                  <a href="">
                    Web <br />
                    Development
                  </a>
                  <a href=""> HTML </a>
                </div>
              </div>
              <div class="bookProperty property_year">
                <div class="property_label">Year:</div>
                <div class="property_value">2011</div>
              </div>
              <div class="bookProperty property_edition">
                <div class="property_label">Edition:</div>
                <div class="property_value">1</div>
              </div>
              <div class="bookProperty property_publisher">
                <div class="property_label">Publisher:</div>
                <div class="property_value">Wiley</div>
              </div>
              <div class="bookProperty property_language">
                <div class="property_label">Language:</div>
                <div class="property_value text-capitalize">English</div>
              </div>
              <div class="bookProperty property_pages">
                <div class="property_label">Pages:</div>
                <div class="property_value">
                  <span title="Pages paperback"> 514 </span>
                </div>
              </div>
              <div class="bookProperty property_isbn 10">
                <div class="property_label">ISBN 10:</div>
                <div class="property_value">1118008189</div>
              </div>
              <div class="bookProperty property_isbn 13">
                <div class="property_label">ISBN 13:</div>
                <div class="property_value">9781118008188</div>
              </div>
              <div class="bookProperty property_isbn">
                <div class="property_label">ISBN:</div>
                <div class="property_value">1118008189,9781118008188</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start -->
      <!-- <div style="margin-top: 30px; margin-bottom: 15px"> -->
      <div class="my-5">
        <div class="details-buttons-container pull-left">
          <a class="btn btn-primary btn-success dlButton addDownloadedBook" data-isbn="1118008189,9781118008188"
            rel="nofollow, noreferrer" href="" target="_blank">
            <i class="fa-solid fa-download"></i>
            Download
          </a>
          <a class="btn btn-primary dlButton addDownloadedBook" data-book_id="html-css-487581"
            data-isbn="1118008189,9781118008188" href="" rel="nofollow, noreferrer">
            <i class="fa-solid fa-info"></i>
            Information
          </a>
          <a class="btn btn-primary dlButton addDownloadedBook" data-book_id="html-css-487581"
            data-isbn="1118008189,9781118008188" href="" rel="nofollow, noreferrer">
            <i class="fa-solid fa-cart-shopping"></i>
            Add To Cart
          </a>
        </div>
        <div style="clear: both"></div>
      </div>
      <!-- End -->
      <!-- Start -->
      <div class="">
        <h2 class="color1" style="margin-top: 20px; overflow: hidden">
          <span style="float: left"> You may be interested in </span>
        </h2>
        <div style="background: #49afd0; height: 2px; margin-bottom: 20px"></div>
        <div id="booksMosaicBoxContainer" class="mb-5">
          <div>
            <a href="">
              <img src="imgs/07.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/08.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/11.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/12.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/15.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/16.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/25.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/26.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/29.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/30.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="">
              <img src="imgs/34.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="book-details_3.php">
              <img src="imgs/03.jpg" loading="lazy" />
            </a>
          </div>
          <div>
            <a href="book-details_2.php">
              <img src="imgs/02.png" loading="lazy" />
            </a>
          </div>
        </div>
      </div>
      <!-- End -->
      <!-- Start -->
      <h2 class="color1" style="margin-top: 20px">Comments of this book</h2>
      <div style="background: #49afd0; height: 2px; margin-bottom: 20px"></div>
      <div class="mb-5">
        <div class="alert alert-warning">There are no comments yet.</div>
        <div class="card" style="margin-top: 1rem">
          <div class="card-body">
            <h5 class="card-title">Authentication required</h5>
            <p class="card-text">You must log in to post a comment.</p>
            <a href="" class="btn btn-primary">Log in</a>
          </div>
        </div>
      </div>
      <h2 class="color1" style="margin-top: 20px">Most frequent terms</h2>
      <div style="
            background: #49afd0;
            height: 2px;
            width: 100%;
            margin-bottom: 20px;
          "></div>
      <div class="termsCloud mb-5">
        <div class="termWrap">
          <a class="color1" href=""> Harry Potter </a>
          <sup title="Frequency in the text"> 42586 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> Romance </a>
          <sup title="Frequency in the text"> 9075 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> Physics </a>
          <sup title="Frequency in the text"> 3221 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> History </a>
          <sup title="Frequency in the text"> 3260 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> English </a>
          <sup title="Frequency in the text"> 6141 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> Love </a>
          <sup title="Frequency in the text"> 9852 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> Java </a>
          <sup title="Frequency in the text"> 5111 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> Python </a>
          <sup title="Frequency in the text"> 9870 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> HTML </a>
          <sup title="Frequency in the text"> 3870 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> CSS </a>
          <sup title="Frequency in the text"> 5870 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> JS </a>
          <sup title="Frequency in the text"> 9999 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> JQuery </a>
          <sup title="Frequency in the text"> 6745 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> PHP </a>
          <sup title="Frequency in the text"> 8359 </sup>
        </div>
        <div class="termWrap">
          <a class="color1" href=""> SQL </a>
          <sup title="Frequency in the text"> 8930 </sup>
        </div>
      </div>
      <!-- End -->
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
  <!-- <script src="js/all.min.js"></script> -->
  <script>
  document.getElementById("icon-heart").onclick = function() {
    document.getElementById("icon-heart").classList.toggle("fa-beat");
  };

  document
    .querySelectorAll(".details-buttons-container a")
    .forEach((el) => {
      el.addEventListener("click", (btn) => {
        btn.preventDefault();
      });
    });
  </script>
</body>

</html>
<?php } else {
  header("Location: index.php");
} ?>