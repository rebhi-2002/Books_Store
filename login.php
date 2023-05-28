<?php include 'header.php'; ?>

<?php
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pass = sha1($_POST['pass']);
  $sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
  if ($user) {
    $_SESSION['user_id'] = $user['id'];
    if ($user['type'] == 'admin') {
      $_SESSION['is_admin'] = true;
      header("Location: admin/index.php");
    } else {
      header("Location: index.php");
    }
  } else {
    $error = "Invalid Credential";
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
  <title>Login Page</title>
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
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
              <a class="nav-link active" href="login.php">Login</a>
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
  <!-- Start LoginPage -->
  <div class="login py-5 my-3">
    <div class="container d-flex justify-content-center align-items-center">
      <form action="" method="post" role="form" class="w-50">
        <?php if (isset($error)) { ?>
        <div class="alert alert-danger p-3 text-center">
          <?php echo $error ?>
        </div>
        <?php } ?>
        <h1 class="text-center mb-5">Login to your account</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Email" name="email" required />
        </div>
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass"
          required />
        <button name="login" type="submit" class="btn btn-success rounded w-100 mt-5">
          Login
        </button>
      </form>
    </div>
  </div>
  <!-- End LoginPage -->
  <!-- Start Footer -->
  <div class="footer w-100 px-3 py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <p class="copyrightText my-auto">
        All Copyright reserved to <a href="#">Rebhe Akram Ibrahim</a> &copy;
        2023
      </p>
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