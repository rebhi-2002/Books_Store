<?php

include "header.php";

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "DELETE FROM categories WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: categories.php");
  }
}

?>

<?php include "footer.php"; ?>