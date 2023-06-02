<?php include 'header.php'; ?>
<?php if (isset($_SESSION['user_id'])) { ?>

<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    $book = mysqli_fetch_assoc($res);
    $user_id = $_SESSION['user_id'];
    $book_name = $book['name'];
    $book_image = $book['image'];
    $book_price = $book['price'];
    // $users = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
    // $user_id = $users['id'];
    $sql = "INSERT INTO cart (book_name, book_image, book_price, user_id) VALUES ('$book_name', '$book_image', '$book_price', $user_id)";
    if (mysqli_query($conn, $sql)) {
      header("Location: add-to-cart.php");
    }
  }
  if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM cart WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
      header("Location: add-to-cart.php");
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
  <title>Cart Page</title>
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
              <a class="nav-link active" href="add-to-cart.php">Cart</a>
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
        <li class="breadcrumb-item"><a href="add-to-cart.php">Cart</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>
  </div>
  <!-- End Breadcrumb -->
  <!-- Start CartPage -->
  <div class="cart">
    <h2 class="text-center lh-lg m-auto">Your Cart</h2>
    <div class="container table-responsive-sm d-flex justify-content-center align-items-center ">
      <table class="table w-100">
        <thead>
          <tr class="text-white bg-dark">
            <td>ID</td>
            <td>Image</td>
            <td>Book</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Total</td>
            <td>Delete</td>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT *, COUNT(*) as quantity FROM cart GROUP BY book_name ORDER BY id ASC";
            $result = mysqli_query($conn, $sql);
            $totalPrice = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $quantity = $row['quantity'];
              $totalPrice += $row['book_price'] * $quantity;
            ?>
          <tr class="border-bottom">
            <td><?php echo $row['id'] ?></td>
            <td><img class="imgcart" src="<?php echo "imgs/" . $row['book_image'] ?>" alt="" /></td>
            <td><bdi><?php echo $row['book_name'] ?></bdi></td>
            <td><?php echo $row['book_price'] ?>.00$</td>
            <td><?php echo $quantity ?></td>
            <td><?php echo $row['book_price'] * $quantity ?>$</td>
            <td>
              <a onclick="return confirm('Are you sure?!');" href="add-to-cart.php?del=<?php echo $row['id'] ?>">
                <i class="fa-solid fa-xmark del-icon d-flex justify-content-center align-items-center text-center"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr class="text-white bg-dark">
            <td colspan="5">Total</td>
            <td colspan="2"><?php echo $totalPrice ?>$</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- End CartPage -->
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