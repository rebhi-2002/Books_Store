<?php

include "header.php";

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "DELETE FROM books WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: books.php");
  }
}

?>

<?php include "footer.php"; ?>