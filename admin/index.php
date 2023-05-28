<?php
ob_start();
session_start();
include '../db.php';

if (!isset($_SESSION['is_admin'])) {
  header("Location: ../login.php");
}

// ** Add Category **

if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $sql = "INSERT INTO categories (name) VALUES ('$name')";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }
}

// ** Delete Category **

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "DELETE FROM categories WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }
}

// ** Edit Category **

if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $sql = "SELECT * FROM categories WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $category = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $sql = "UPDATE categories SET name = '$name' WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }
}
?>

<?php

// ** Delete Users **

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "DELETE FROM users WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }
}

// echo sha1(20203099);

?>

<?php

// ** Delete Books **

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "DELETE FROM books WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- IE Compatibility Meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- First Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="../imgs/WampServer.png" rel="icon" />

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />

  <!-- Font Awesome Icons Library -->
  <link rel="stylesheet" href="../css/all.min.css" />

  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="../css/style.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />
</head>

<body>
  <!-- Start Dashboard -->
  <div class="dashboard">
    <div class="container-fluid ps-0 ps-0">
      <div class="row">
        <nav class="navbar navbar-dark bg-dark fixed-top menu-dash position-relative col-12 px-2">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Company name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
              aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header position-relative">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                  Company name
                </h5>
                <div style="
                      position: absolute;
                      bottom: 0;
                      width: 92%;
                      height: 2px;
                      background: white;
                    "></div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
              </div>
              <div class="offcanvas-body control">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 dash-list">
                  <li>
                    <a class="color text-decoration-none mb-4 text-white d-block" aria-current="page" href=""
                      data-filter=".tab-1">
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a class="text-decoration-none mb-4 text-white d-block" href="" data-filter=".tab-2">Categories</a>
                  </li>
                  <li>
                    <a class="text-decoration-none mb-4 text-white d-block" href="" data-filter=".tab-3">Authors</a>
                  </li>
                  <li>
                    <a class="text-decoration-none mb-4 text-white d-block" href="" data-filter=".tab-4">Books</a>
                  </li>
                  <li>
                    <a class="text-decoration-none mb-4 text-white d-block" href="" data-filter=".tab-5">Users</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <div class="control-dash bg-light min-vh-100 col-sm-4 col-md-3 col-lg-2 pe-0">
          <div class="control">
            <p class="head bg-dark p-3 text-white">Company name</p>
            <ul class="list-unstyled p-3 dash-list">
              <li>
                <a class="color text-decoration-none mb-4 text-dark d-block" href="" data-filter=".tab-1">Dashboard</a>
              </li>
              <li>
                <a class="text-decoration-none mb-4 text-dark d-block" href="" data-filter=".tab-2">Categories</a>
              </li>
              <li>
                <a class="text-decoration-none mb-4 text-dark d-block" href="" data-filter=".tab-3">Authors</a>
              </li>
              <li>
                <a class="text-decoration-none mb-4 text-dark d-block" href="" data-filter=".tab-4">Books</a>
              </li>
              <li>
                <a class="text-decoration-none mb-4 text-dark d-block" href="" data-filter=".tab-5">Users</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="info-dash col-sm-8 col-md-9 col-lg-10 p-0">
          <div class="info d-flex">
            <div class="w-75">
              <input type="text" class="search form-control ps-3 shadow-none border-0 text-light h-100 rounded-0"
                placeholder="Search" />
            </div>
            <div class="text-center w-25">
              <a class="button btn btn-dark text-secondary d-flex justify-content-center align-items-center w-100 h-100 d-block rounded-0"
                href="../logout.php">Sign out</a>
            </div>
          </div>
          <div class="tab-box">
            <div class="tab-1 hidden active p-4">
              <h2 class="fw-600">Dashboard</h2>
              <hr />
            </div>
            <div class="tab-2 hidden p-4">
              <div id="first">
                <div class="box d-flex justify-content-between align-items-center position-relative">
                  <h2 class="fw-600">All Categories</h2>
                  <a class="btn1 btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="#">Add New
                    Category</a>
                </div>
                <hr />
                <table class="w-100">
                  <thead>
                    <tr class="text-white bg-dark">
                      <td class="w-25">ID</td>
                      <td class="w-50">Name</td>
                      <td class="w-25">Actions</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr class="lh-base">
                      <td data-label="ID"><?php echo $row['id'] ?></td>
                      <td data-label="Name"><?php echo $row['name'] ?></td>
                      <td data-label="Actions">
                        <a href="?edit=<?php echo $row['id'] ?>" class="">
                          <i class="icon-ed fa-regular fa-pen-to-square text-white bg-primary p-2 rounded-1"></i>
                        </a>
                        <a onclick="return confirm('Are you sure?!');" href="index.php?del=<?php echo $row['id'] ?>"
                          class="">
                          <i class="icon-del fa-solid fa-trash text-white bg-danger p-2 rounded-1"></i>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- Start Add New Category -->
              <div id="second" class="box d-none hidden d-flex flex-column justify-content-between position-relative">
                <h2 class="fw-600">Add New Category</h2>
                <a class="btn2 btn bg-transparent w-25 rounded-1 border position-absolute end-0 py-2 px-5" href="#">All
                  Categories</a>
                <hr />
                <form class="form" method="post">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name" name="name" required />
                  <button class="add2 btn btn-success mt-3 border-0 w-25" name="add">
                    Add
                  </button>
                </form>
              </div>
              <!-- End Add New Category -->
              <!-- Start Edit Category -->
              <div id="third" class="box d-none hidden d-flex flex-column justify-content-between position-relative">
                <h2 class="fw-600">Edit Category</h2>
                <a class="btn3 btn bg-transparent w-25 rounded-1 border position-absolute end-0 py-2 px-5" href="#">All
                  Categories</a>
                <hr />
                <form class="form" action="" method="post">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="Name" name="name" value="<?php echo $category['name'] ?>"
                    placeholder="Name" required />
                  <button class="add3 btn btn-info mt-3 border-0 w-25" name="update">
                    Update
                  </button>
                </form>
              </div>
              <!-- End Edit Category -->
            </div>
            <div class="tab-3 hidden p-4">
              <h2 class="fw-600">All Authors</h2>
              <hr />
            </div>
            <div class="tab-4 hidden p-4">
              <div id="first-2">
                <div class="box d-flex justify-content-between align-items-center position-relative">
                  <h2 class="fw-600">All Books</h2>
                  <a class="btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="">Add New
                    Book</a>
                </div>
                <hr />
                <table class="w-100">
                  <thead>
                    <tr class="text-white bg-dark">
                      <td>Serial</td>
                      <td>Title</td>
                      <td>Image</td>
                      <td>Price</td>
                      <td>Actions</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM books";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr class="lh-base">
                      <td data-label="Serial"><?php echo $row['serial'] ?></td>
                      <td data-label="Title"><bdi><?php echo $row['name'] ?></bdi></td>
                      <td data-label="Image">
                        <img class="imgcart" src="<?php echo "../imgs/" . $row['image'] ?>" alt="" />
                      </td>
                      <td data-label="Price"><?php echo $row['price'] ?>.00$</td>
                      <td data-label="Actions">
                        <a>
                          <i class="icon-ed fa-regular fa-pen-to-square text-white bg-primary p-2 rounded-1"></i>
                        </a>
                        <a onclick="return confirm('Are you sure?!');" href="index.php?del=<?php echo $row['id'] ?>">
                          <i class="icon-del fa-solid fa-trash text-white bg-danger p-2 rounded-1"></i>
                        </a>
                      </td>
                    </tr>
                    <?php  } ?>
                  </tbody>
                </table>
              </div>
              <div id="second-2" class="hidden">
                <div class="box d-flex justify-content-between align-items-center position-relative">
                  <h2 class="fw-600">Add New Book</h2>
                  <a class="btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="">All Books</a>
                </div>
                <hr />
                <form class="form">
                  <div class="mb-3">
                    <label for="Name1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="Name1" placeholder="Title" required />
                  </div>
                  <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Image</label>
                    <input id="formFileMultiple" alt="Selected image" class="form-control" type="file" multiple required
                      onchange="showSelectedFiles()" />
                    <div id="selectedFiles" class="d-flex justify-content-start align-items-center flex-wrap"></div>
                  </div>
                  <div class="mb-3">
                    <label for="Name2" class="form-label">Price</label>
                    <input type="text" class="form-control" id="Name2" placeholder="Price" required />
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Short Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                      placeholder="Short Description" required style="height: 65px"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea2" class="form-label">Full Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"
                      placeholder="Full Description" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="inputGroupSelect01">
                      Author
                    </label>
                    <select class="form-select" id="inputGroupSelect01">
                      <option class="text-uppercase" selected>
                        --SELECT--
                      </option>
                      <option value="1"><bdi>د.منى المرشود</bdi></option>
                      <option value="2"><bdi>ديل كارنيجي</bdi></option>
                      <option value="3">
                        <bdi>د.محمد بن عبد الرحمن العريفي</bdi>
                      </option>
                      <option value="4"><bdi>د.خولة حمدي</bdi></option>
                      <option value="5"><bdi>ستيفن آر.كوفي</bdi></option>
                      <option value="6">Jon Duckett</option>
                      <option value="7">Robert C. Martin</option>
                      <option value="8">JACKIE BAVARO</option>
                      <option value="9">ROBERT SEDGEWICK</option>
                      <option value="10">KEVIN WAYNE</option>
                      <option value="11">Mary Jane Sterling</option>
                      <option value="12">Donald D.Hearn</option>
                      <option value="13">M. Pauline Baker</option>
                      <option value="14">Marijn Haverbeke</option>
                      <option value="15">KYLE SIMPSON</option>
                      <option value="16">Gayle Laakmann McDowell</option>
                      <option value="17">Aditya Y. Bhargava</option>
                      <option value="18">Steve Krug</option>
                      <option value="19">Other.....</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="inputGroupSelect02">
                      Category
                    </label>
                    <select class="form-select" id="inputGroupSelect02">
                      <option class="text-uppercase" selected>
                        --SELECT--
                      </option>
                      <option value="1">Action</option>
                      <option value="2">Drama</option>
                      <option value="3">Romantic</option>
                      <option value="4">Computers & Technology</option>
                      <option value="5">Most Popular</option>
                      <option value="6">Web Development</option>
                    </select>
                  </div>
                  <button class="add2 btn btn-success mt-3 border-0 w-25">
                    Add
                  </button>
                </form>
              </div>
              <div id="third-2" class="hidden">
                <div class="box d-flex justify-content-between align-items-center position-relative">
                  <h2 class="fw-600">Update Book</h2>
                  <a class="button-2 btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="">All
                    Books
                  </a>
                </div>
                <hr />
                <form class="form">
                  <div class="mb-3">
                    <label for="Name1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="Name1" placeholder="Title" required />
                  </div>
                  <div class="mb-3">
                    <label for="formFileMultiple2" class="form-label">Image</label>
                    <input id="formFileMultiple2" alt="Selected image" class="form-control" type="file" multiple
                      required onchange="showSelectedFiles2()" />
                    <div id="selectedFiles2" class="d-flex justify-content-start align-items-center flex-wrap"></div>
                  </div>
                  <div class="mb-3">
                    <label for="Name2" class="form-label">Price</label>
                    <input type="text" class="form-control" id="Name2" placeholder="Price" required />
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Short Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                      placeholder="Short Description" required style="height: 65px"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea2" class="form-label">Full Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"
                      placeholder="Full Description" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="inputGroupSelect01">
                      Author
                    </label>
                    <select class="form-select" id="inputGroupSelect01">
                      <option class="text-uppercase" selected>
                        --SELECT--
                      </option>
                      <option value="1"><bdi>د.منى المرشود</bdi></option>
                      <option value="2"><bdi>ديل كارنيجي</bdi></option>
                      <option value="3">
                        <bdi>د.محمد بن عبد الرحمن العريفي</bdi>
                      </option>
                      <option value="4"><bdi>د.خولة حمدي</bdi></option>
                      <option value="5"><bdi>ستيفن آر.كوفي</bdi></option>
                      <option value="6">Jon Duckett</option>
                      <option value="7">Robert C. Martin</option>
                      <option value="8">JACKIE BAVARO</option>
                      <option value="9">ROBERT SEDGEWICK</option>
                      <option value="10">KEVIN WAYNE</option>
                      <option value="11">Mary Jane Sterling</option>
                      <option value="12">Donald D.Hearn</option>
                      <option value="13">M. Pauline Baker</option>
                      <option value="14">Marijn Haverbeke</option>
                      <option value="15">KYLE SIMPSON</option>
                      <option value="16">Gayle Laakmann McDowell</option>
                      <option value="17">Aditya Y. Bhargava</option>
                      <option value="18">Steve Krug</option>
                      <option value="19">Other.....</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="inputGroupSelect02">
                      Category
                    </label>
                    <select class="form-select" id="inputGroupSelect02">
                      <option class="text-uppercase" selected>
                        --SELECT--
                      </option>
                      <option value="1">Action</option>
                      <option value="2">Drama</option>
                      <option value="3">Romantic</option>
                      <option value="4">Computers & Technology</option>
                      <option value="5">Most Popular</option>
                      <option value="6">Web Development</option>
                    </select>
                  </div>
                  <button class="add2 btn btn-success mt-3 border-0 w-25">
                    Update
                  </button>
                </form>
              </div>
            </div>
            <div class="tab-5 hidden p-4">
              <h2 class="fw-600">All Users</h2>
              <hr />
              <div class="box d-flex justify-content-between align-items-center position-relative">
                <table class="w-100">
                  <thead>
                    <tr class="text-white bg-dark">
                      <td class="w-25">ID</td>
                      <td class="w-25">Name</td>
                      <td class="w-25">Email</td>
                      <!-- <td class="w-100">Password</td> -->
                      <td class="w-25">Type</td>
                      <td class="w-25">Actions</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr class="lh-base">
                      <td data-label="ID"><?php echo $row['id'] ?></td>
                      <td data-label="Name"><?php echo $row['name'] ?></td>
                      <td data-label="Email"><?php echo $row['email'] ?></td>
                      <!-- <td data-label="Password"><?php echo $row['password'] ?></td> -->
                      <td data-label="Type"><?php echo $row['type'] ?></td>
                      <td data-label="Actions">
                        <a href="index.php?edit=<?php echo $row['id'] ?>" class="">
                          <i class="icon-ed fa-regular fa-pen-to-square text-white bg-primary p-2 rounded-1"></i>
                        </a>
                        <a onclick="return confirm('Are you sure?!');" href="index.php?del=<?php echo $row['id'] ?>"
                          class="">
                          <i class="icon-del fa-solid fa-trash text-white bg-danger p-2 rounded-1"></i>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Dashboard -->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <!-- <script src="../js/all.min.js"></script> -->
  <script src="../js/script.js"></script>
  <script>
  function showSelectedFiles() {
    var input = document.getElementById("formFileMultiple");
    var output = document.getElementById("selectedFiles");
    if (input.files && input.files[0]) {
      for (var i = 0; i < input.files.length; i++) {
        var file = input.files[i];
        var reader = new FileReader();
        reader.onload = function(e) {
          var element;
          if (file.type.match("image.*")) {
            element = document.createElement("div");
            var img = document.createElement("img");
            img.src = e.target.result;
            element.appendChild(img);
            img.classList.add(
              "mt-3",
              "me-3",
              "img-fluid",
              "img-thumbnail",
              "figure-img"
            );
            img.style.cssText =
              "width: 150px; height: 150px; background: #2e6da4; object-fit: top; object-position: top;";
          } else {
            element = document.createElement("div");
            var fileName = document.createElement("p");
            fileName.textContent = file.name;
            element.appendChild(fileName);
            fileName.classList.add(
              "text-white",
              "rounded",
              "border",
              "mt-3",
              "me-3",
              "p-3"
            );
            fileName.style.cssText =
              "border-color: #2e6da4 !important; background: #2e6da4;";
          }
          // إضافة خاصية "data-file-id" إلى العنصر لتعريفه
          element.setAttribute("data-file-id", i);
          element.classList.add("position-relative");
          // إضافة زر "حذف"
          var deleteButton = document.createElement("button");
          deleteButton.textContent = "X";
          element.appendChild(deleteButton);
          output.appendChild(element);
          deleteButton.style.cssText =
            "position: absolute; display: flex; justify-content: center; align-items: center; text-align: center; width: 20px; height: 20px; top: 32px; right: 12px; border-radius: 50%; color: white; background: #2e6da4; border: 1px solid #2e6da4; transform: translate(-50%, -50%);";
          // إضافة event listener لزر الحذف
          deleteButton.addEventListener("click", deleteSelectedFile);
        };
        reader.readAsDataURL(file);
      }
    }
  }

  function deleteSelectedFile(e) {
    // إيقاف انتشار event النقر لكي لا يتم تنفيذ الدالة على العنصر نفسه
    e.stopPropagation();
    // العثور على العنصر الأب (والذي يحتوي على الزر "حذف")
    var parentElement = e.target.parentElement;
    // العثور على العنصر المراد حذفه باستخدام الخاصية "data-file-id"
    var elementId = parentElement.getAttribute("data-file-id");
    // العثور على العنصر باستخدام العنصر الأول "selectedFiles" ثم استخدام العنصر "children" للعثور على العنصر المراد حذفه
    var elementToDelete =
      document.getElementById("selectedFiles").children[elementId];
    // حذف العنصر
    elementToDelete.remove();
  }
  </script>
  <!--
    <script>
      function showSelectedFiles() {
        var input = document.getElementById("formFileMultiple");
        var output = document.getElementById("selectedFiles");
        if (input.files && input.files[0]) {
          for (var i = 0; i < input.files.length; i++) {
            var file = input.files[i];
            var reader = new FileReader();
            reader.onload = function (e) {
              var element;
              if (file.type.match("image.*")) {
                element = document.createElement("img");
                element.src = e.target.result;
              } else {
                element = document.createElement("p");
                element.textContent = file.name;
              }
              // إضافة خاصية "data-file-id" إلى العنصر لتعريفه
              element.setAttribute("data-file-id", i);
              output.appendChild(element);
              // إضافة event listener لعنصر الحذف
              element.addEventListener("click", deleteSelectedFile);
            };
            reader.readAsDataURL(file);
          }
        }
      }
      function deleteSelectedFile(e) {
        // إحضار معرف العنصر المراد حذفه من خلال الخاصية "data-file-id"
        var elementId = e.target.getAttribute("data-file-id");
        // العثور على العنصر باستخدام العنصر الأول "selectedFiles" ثم استخدام العنصر "children" للعثور على العنصر المراد حذفه
        var elementToDelete =
          document.getElementById("selectedFiles").children[elementId];
        // حذف العنصر
        elementToDelete.remove();
      }
    </script>
    -->
  <!--
    <script>
      function showSelectedFiles() {
        var input = document.getElementById("formFileMultiple");
        var output = document.getElementById("selectedFiles");
        if (input.files && input.files[0]) {
          for (var i = 0; i < input.files.length; i++) {
            var file = input.files[i];
            var reader = new FileReader();
            reader.onload = function (e) {
              var element;
              // تحقق من نوع الملف
              if (file.type.match("image.*")) {
                // إنشاء عنصر صورة
                element = document.createElement("img");
                element.src = e.target.result;
                element.classList.add(
                  "mt-3",
                  "me-3",
                  "img-fluid",
                  "img-thumbnail",
                  "figure-img"
                );
                element.style.cssText =
                  "width: 150px; height: 150px; background: #2e6da4; object-fit: top; object-position: top;";
              } else {
                // إنشاء عنصر نصي
                element = document.createElement("p");
                element.textContent = file.name;
                element.classList.add(
                  "text-white",
                  "rounded",
                  "border",
                  "mt-3",
                  "me-3",
                  "p-3"
                );
                element.style.cssText =
                  "border-color: #2e6da4 !important; background: #2e6da4;";
              }
              // إضافة العنصر إلى عنصر div في صفحة HTML
              output.appendChild(element);
            };
            reader.readAsDataURL(file);
          }
        }
      }
    </script>
    <script>
      function showSelectedFiles2() {
        var input2 = document.getElementById("formFileMultiple2");
        var output2 = document.getElementById("selectedFiles2");
        if (input2.files && input2.files[0]) {
          for (var i = 0; i < input2.files.length; i++) {
            var file2 = input2.files[i];
            var reader2 = new FileReader();
            reader2.onload = function (e) {
              var element2;
              // تحقق من نوع الملف
              if (file2.type.match("image.*")) {
                // إنشاء عنصر صورة
                element2 = document.createElement("img");
                element2.src = e.target.result;
                element2.classList.add(
                  "mt-3",
                  "me-3",
                  "img-fluid",
                  "img-thumbnail",
                  "figure-img"
                );
                element2.style.cssText =
                  "width: 150px; height: 150px; background: #2e6da4; object-fit: top; object-position: top;";
              } else {
                // إنشاء عنصر نصي
                element2 = document.createElement("p");
                element2.textContent = file2.name;
                element2.classList.add(
                  "text-white",
                  "rounded",
                  "border",
                  "mt-3",
                  "me-3",
                  "p-3"
                );
                element2.style.cssText =
                  "border-color: #2e6da4 !important; background: #2e6da4;";
              }
              // إضافة العنصر إلى عنصر div في صفحة HTML
              output2.appendChild(element2);
            };
            reader2.readAsDataURL(file2);
          }
        }
      }
    </script>
    -->
</body>

</html>