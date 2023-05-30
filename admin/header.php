<?php
ob_start();
session_start();
include '../db.php';

if (!isset($_SESSION['is_admin'])) {
  header("Location: ../login.php");
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
</head>

<body>

  <div class="dashboard">
    <div class="container-fluid ps-0 ps-0">
      <div class="row">
        <nav class="navbar navbar-dark bg-dark fixed-top menu-dash position-relative col-12 px-2">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Company name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
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
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body control">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 dash-list">
                  <li>
                    <a class="color text-decoration-none mb-4 text-white d-block" aria-current="page" href="index.php" data-filter=".tab-1">
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a class="text-decoration-none mb-4 text-white d-block" href="categories.php" data-filter=".tab-2">Categories</a>
                  </li>
                  <li>
                    <a class="text-decoration-none mb-4 text-white d-block" href="authors.php" data-filter=".tab-3">Authors</a>
                  </li>
                  <li>
                    <a class="text-decoration-none mb-4 text-white d-block" href="books.php" data-filter=".tab-4">Books</a>
                  </li>
                  <li>
                    <a class="text-decoration-none mb-4 text-white d-block" href="users.php" data-filter=".tab-5">Users</a>
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
                <a class="color text-decoration-none mb-4 text-dark d-block" href="index.php" data-filter=".tab-1">Dashboard</a>
              </li>
              <li>
                <a class="text-decoration-none mb-4 text-dark d-block" href="categories.php" data-filter=".tab-2">Categories</a>
              </li>
              <li>
                <a class="text-decoration-none mb-4 text-dark d-block" href="authors.php" data-filter=".tab-3">Authors</a>
              </li>
              <li>
                <a class="text-decoration-none mb-4 text-dark d-block" href="books.php" data-filter=".tab-4">Books</a>
              </li>
              <li>
                <a class="text-decoration-none mb-4 text-dark d-block" href="users.php" data-filter=".tab-5">Users</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="info-dash col-sm-8 col-md-9 col-lg-10 p-0">
          <div class="info d-flex">
            <div class="w-75">
              <input type="text" class="search form-control ps-3 shadow-none border-0 text-light h-100 rounded-0" placeholder="Search" />
            </div>
            <div class="text-center w-25">
              <a class="button btn btn-dark text-secondary d-flex justify-content-center align-items-center w-100 h-100 d-block rounded-0" href="../logout.php">Sign out</a>
            </div>
          </div>
          <div class="tab-box">