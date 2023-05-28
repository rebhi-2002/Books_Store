<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <!-- IE Compatibility Meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- First Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepage</title>
  <link href="imgs/WampServer.png" rel="icon" />

  <!-- Vendor CSS Files -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="css/bootstrap.rtl.min.css" />

  <!-- Vendor CSS File For Slider -->
  <link href="css/glightbox.min.css" rel="stylesheet" />
  <link href="css/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Font Awesome Icons Library -->
  <link rel="stylesheet" href="css/all.min.css" />

  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  <style>
    body {
      overflow: hidden;
    }
  </style>
  <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
  <style>
    .contact-form {
      margin: 60px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 5px;
      text-align: center;
    }

    .contact-form h2 {
      margin-bottom: 20px;
    }

    .contact-form .form-group {
      margin-bottom: 15px;
    }

    .contact-form label {
      display: block;
      margin-bottom: 5px;
      text-align: right;
    }

    .contact-form input[type="text"],
    .contact-form input[type="email"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
      font-size: 14px;
      text-align: right;
    }

    .contact-form textarea {
      height: 200px;
    }

    .contact-form button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .ck.ck-editor {
      text-align: right;
    }
  </style>
</head>

<body>
  <div class="loading d-flex justify-content-center align-items-center">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- End Section Loading -->
  <!-- Start Header -->
  <div class="header">
    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container">
        <a class="navbar-brand" href="index.php">مكتبة الكتب</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav right d-flex align-items-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-to-cart.php">عربة التسوق</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">تسجيل خروج</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- End Header -->
  <!-- Start Clock -->
  <div class="clock-content">
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
  <span class="scroller"></span>
  <!-- End Scroller -->
  <!-- Start Landing -->
  <div class="landing text-center py-5">
    <div class="overlay"></div>
    <div class="container">
      <div class="content">
        <h1>البحث عن أي كتاب ترغب فيه</h1>
        <div class="input-group my-4">
          <input type="search" class="form-control rounded-1 m-auto w-75" />
          <i class="fa fa-search icon-search position-absolute top-50 mr-1 translate-middle"></i>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="box position-relative">
              <i class="fa-solid fa-book fa-fw fa-2x mt-2"></i>
              <span class="d-block my-2 fs-3">39</span>
              <p class="mb-4 fs-14">الكتب</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="box position-relative">
              <i class="fa-solid fa-users fa-fw fa-2x mt-2"></i>
              <span class="d-block my-2 fs-3">23</span>
              <p class="mb-4">المؤلفون</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="box position-relative">
              <i class="fa-solid fa-tags fa-fw fa-2x mt-2"></i>
              <span class="d-block my-2 fs-3">10</span>
              <p class="mb-4">الفئات</p>
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
        <h2 class="mb-3">حول مكتبتنا</h2>
        <p class="lead">
          مكتبتنا هي وجهتك المثالية للاستكشاف والاستمتاع بعالم الكتب. نحن نقدم
          مجموعة واسعة من الكتب في مختلف المجالات والأنواع لتلبية اهتمامات
          جميع القراء. مهمتنا هي توفير بيئة قراءة مريحة وممتعة لجميع الزوار.
          لدينا مجموعة كبيرة من الكتب الجديدة والقديمة، بما في ذلك الروايات،
          الكتب الأكاديمية، الكتب الدينية، الكتب التعليمية، والكثير من المزيد.
          نحن نعمل على توفير تجربة قراءة شاملة، حيث يمكن للمستخدمين البحث عن
          الكتب التي يحتاجونها، ومعرفة المزيد عن المؤلفين المفضلين لديهم،
          واستعراض الكتب حسب الفئات المختلفة. سواء كنت تبحث عن توسع معرفتك، أو
          ترغب في الاستمتاع برواية مشوقة، فإن مكتبتنا هي المكان المثالي لك.
          تفضل بزيارتنا واستكشف عالم الكتب الممتع معنا.
        </p>
      </div>
    </div>
  </div>
  <!-- End About -->
  <div class="spikes"></div>
  <!-- Start Latest Categories -->
  <div class="latest-categories text-center px-5">
    <div class="container">
      <h2 class="mb-4">استكشف أحدث الفئات لدينا</h2>
      <p class="lead">
        استمتع باستكشاف هذه الفئات الرائعة واكتشف كتب جديدة ومثيرة لتحقيق
        تجربة قراءة غنية ومتنوعة.
      </p>
      <div class="content mt-4">
        <a href="action_category.php" class="btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
          الأكشن
        </a>
        <a href="drama_category.php" class="btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
          الدراما
        </a>
        <a href="romantic_category.php" class="btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
          الرومانسية
        </a>
        <a href="computers_&_technology.php" class="text-nowrap btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
          الكمبيوتر والتكنولوجيا
        </a>
        <a href="most_popular.php" class="btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
          الأكثر شعبية
        </a>
        <a href="web_development.php" class="text-nowrap btn w-25 lh-lg py-4 px-5 m-2 bg-white text-center d-inline-flex justify-content-center flex-wrap">
          تطوير الويب
        </a>
      </div>
    </div>
  </div>
  <!-- End Latest Categories -->
  <!-- Start Latest Books -->
  <div class="latest-books bg-white text-center">
    <div class="container">
      <div class="content">
        <h2 class="mb-4">استكشف أحدث الكتب لدينا:</h2>
        <p class="lead">
          تفضل بزيارة مكتبتنا للاستمتاع بمجموعة متنوعة من الكتب الجديدة
          والمثيرة واستكشاف عوالم مختلفة من خلال صفحاتها.
        </p>
        <div class="box mt-5 mx-5 d-flex justify-content-center flex-wrap">
          <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
            <img src="imgs/01.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-start"><bdi>انت لي</bdi></h5>
              <p class="card-text text-start">Est sit id voluptat</p>
              <a href="book-details_1.php" class="btn d-block btn-dark rounded-2">اقرأ المزيد</a>
            </div>
          </div>
          <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
            <img src="imgs/02.png" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-start">
                <bdi>دع القلق وابدا الحياة</bdi>
              </h5>
              <p class="card-text text-start">Esse quis et et Nam</p>
              <a href="book-details_2.php" class="btn d-block btn-dark rounded-2">اقرأ المزيد</a>
            </div>
          </div>
          <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
            <img src="imgs/03.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-start"><bdi>استمتع بحياتك</bdi></h5>
              <p class="card-text text-start">Maiores et ratione v</p>
              <a href="book-details_3.php" class="btn d-block btn-dark rounded-2">اقرأ المزيد</a>
            </div>
          </div>
          <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
            <img src="imgs/04.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-start">HTML & CSS</h5>
              <p class="card-text text-start">تصميم وبناء المواقع.</p>
              <a href="book-details_4.php" class="btn d-block btn-dark rounded-2">اقرأ المزيد</a>
            </div>
          </div>
          <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
            <img src="imgs/05.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-start">Javascript And Jquery</h5>
              <p class="card-text text-start">
                تطوير واجهة المستخدم التفاعلية للويب
              </p>
              <a href="book-details_5.php" class="btn d-block btn-dark rounded-2">اقرأ المزيد</a>
            </div>
          </div>
          <div class="card mx-3 mb-4 mt-auto" style="width: 18rem">
            <img src="imgs/06.jpg" class="card-img-top" style="height: 430px; object-fit: cover" alt="..." />
            <div class="card-body">
              <h5 class="card-title text-start">PHP & MySQL</h5>
              <p class="card-text text-start">تطوير الويب من الجانب الخادم</p>
              <a href="book-details_6.php" class="btn d-block btn-dark rounded-2">اقرأ المزيد</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Latest Books -->
  <div class="spikes"></div>
  <!-- ======= Gallery Section ======= -->
  <section id="gallery">
    <div class="container">
      <div class="section-header">
        <h2>معرض الصور</h2>
        <p class="lead">
          تفضل بالاطلاع على معرض الصور لدينا من الأحداث الأخيرة
        </p>
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
      <h2 class="mb-2">أخبار المكتبة</h2>
      <p class="lead mb-5">
        مكتبة الزهراء العامة توسعت بمجموعة كتب رقمية متنوعة وتستعد لعقد ندوة
        حول أهمية القراءة. قم بزيارتها وشارك في تحسين معرفتك واستفد من
        التفاصيل.
      </p>
      <div class="news-container">
        <div class="news-item">
          <h3>توسعة مجموعة الكتب الرقمية</h3>
          <p class="lead">
            توسعت مكتبة الزهراء العامة مجموعتها من الكتب الرقمية الجديدة
            والمفيدة للقراء
          </p>
          <a href="#"> اقرأ المزيد</a>
        </div>
        <div class="news-item">
          <h3>ندوة حول "أهمية القراءة في حياتنا"</h3>
          <p class="lead">
            سوف تعقد المكتبة ندوة حول "أهمية القراءة في حياتنا" يوم السبت
            المقبل في تمام الساعة 6:00 مساءً.
          </p>
          <a href="#">اقرأ المزيد</a>
        </div>
      </div>
      <p class="lead mt-3">
        توسعة مكتبة - كتب رقمية - تنوع - قراءة - ندوة - أهمية - معرفة - مشاركة
        - زيارة - تفاصيل
      </p>
    </div>
  </section>
  <!-- End library-news -->
  <div class="container">
    <div class="contact-form">
      <h2>نموذج الاتصال</h2>
      <form action="" method="POST">
        <div class="form-group">
          <label for="name">الاسم</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">البريد الإلكتروني</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">الرسالة</label>
          <input id="message" type="hidden" name="message" required>
          <textarea id="editor" name="editor"></textarea>
        </div>
        <button type="submit">إرسال</button>
      </form>
    </div>
  </div>
  <script>
    ClassicEditor
      .create(document.querySelector('#editor'))
      .then(editor => {
        console.log('تم تحميل محرر CKEditor بنجاح!');
      })
      .catch(error => {
        console.error('حدث خطأ أثناء تحميل محرر CKEditor:', error);
      });
  </script>
  <!-- Start Footer -->
  <div class="footer w-100 px-3 py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="text d-flex">
        <p class="copyrightText my-auto">
          جميع حقوق النشر محفوظة &copy; <span class="year"></span>
          <a href="#">ربحي أكرم إبراهيم</a>
        </p>
        <p class="my-auto ms-3">
          <a href="faq.php">الأسئلة الشائعة</a>
        </p>
        <p class="my-auto ms-3">
          <a href="blog.php">مدونة</a>
        </p>
        <ul class="d-flex justify-content-center align-items-center">
          <li class="ms-3">
            <a class="d-flex justify-content-center align-items-center text-black fs-5 text-decoration-none" href="index.php" style="cursor: pointer"><i class="fa fa-language"></i>
            </a>
          </li>
        </ul>
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
      <div class="row d-none d-flex justify-content-start align-items-center">
        <div class="col-md-8">
          <form id="contact-form" method="post" action="" role="form">
            <div class="controls">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_name">* الإسم</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="* الرجاء إدخال اسمك" required="required" data-error="Name is required." />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_email">* البريد الإلكتروني</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="* الرجاء إدخال بريدك الإلكتروني" required="required" data-error="Valid email is required." />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_message">* رسالتك</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="* الرجاء إدخال رسالتك" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <button type="submit" class="btn btn-success btn-send" value="إرسال الرسالة">
                <i class="fa-solid fa-paper-plane"></i>
                إرسال الرسالة
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

  <!-- Vendor JS Files For Slider -->
  <script src="js/glightbox.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="js/slider.js"></script>

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