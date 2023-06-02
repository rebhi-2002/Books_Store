<?php

ob_start();
session_start();
include '../db.php';

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "DELETE FROM books WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: search.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
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

  <form class="input-group w-75 pt-5 m-auto d-flex justify-content-evenly align-items-center" action="" method="GET">
    <label class="h1 me-2" for="search" style="cursor:pointer;">
      <i class="fa-brands fa-searchengin fa-flip text-secondary"></i> Search:
    </label>
    <input name="query" type="search" id="search"
      class="rounded-1 search form-control ps-3 p-2 shadow-none border-0 text-bg-secondary text-white h-100 rounded-0"
      value="<?php if (isset($_GET['query'])) {
        echo $_GET['query'];
      } ?>" placeholder="Search" />
    <h4 class="ms-5 ps-5"><a class="text-decoration-none" href="index.php"><i class="fa-solid fa-house-user"></i>
        Dashboard</a></h4>
  </form>

  <?php
  echo '<div class="content m-auto">';
  if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
  }
  if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $sql = "SELECT * FROM books WHERE name LIKE '%$query%' OR price LIKE '%$query%' OR serial LIKE '%$query%' OR author LIKE '%$query%' OR category LIKE '%$query%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo '<div class="position-absolute w-100 rounded-4 mb-5 d-flex justify-content-center align-items-center flex-wrap" style="background:#fff;z-index:2;">';
      echo '<div class="container p-4">';
      echo '<div class="row p-5 d-flex justify-content-center" style="box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.3);">';
      while ($row = $result->fetch_assoc()) {
        echo '<div class="border m-2 col-md-3 d-flex justify-content-center align-items-center" style="box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.3)">';
        echo '<div class="position-relative d-flex flex-column justify-content-center align-items-center m-auto p-3 m-3">';
        echo '<img src="../imgs/' . $row['image'] . '" style="max-width:120px;" >';
        echo '<h5 class="d-flex justify-content-center align-items-center flex-column m-auto font-weight-normal pt-3 opacity-75">Title: <span class="pt-2 text-center text-black-50">' . $row['name'] . '</span></h5>';
        echo '<p>' . $row["created_at"] . '</p>';
        echo '<div class="d-flex flex-column position-absolute top-0 end-0 mt-4">';
        echo '<a href="editbook.php?edit=' . $row['id'] . '"><i class="mb-1 icon-ed fa-regular fa-pen-to-square text-white bg-primary p-2 rounded-1"></i></a>';
        echo '<a onclick="return confirm(\'Are you sure?!\');" href="?del=' . $row['id'] . '"><i class="mt-1 icon-del fa-solid fa-trash text-white bg-danger p-2 rounded-1"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
      echo '</div>'; // row
      echo '</div>'; // container
      echo '<div class="position-relative"
    style="top:40px; width: 96%; height: 2px; background: blue; padding: 2px; margin-bottom: 100px;"></div>';
      echo '</div>'; // position-absolute
    } else {
      echo '<h5 class="text-center mt-4 m-auto text-warning bg-light rounded-4 mb-5 p-5" style="width:90%;"><bdi>لم يتم
      العثور على أية نتائج.</bdi></h5>';
    }
    $result->free_result();
  }
  echo '</div>'; // closing div for container
  ?>

  <script src="../js/bootstrap.bundle.min.js"></script>
  <!-- <script src="../js/all.min.js"></script> -->
</body>

</html>