<?php

include "header.php";

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "DELETE FROM users WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: users.php");
  }
}

// echo sha1(20203099);

?>

<?php include "footer.php" ?>