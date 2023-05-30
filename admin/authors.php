<?php

include "header.php";

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "UPDATE books SET author = NULL WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: authors.php");
  }
}

?>

<div class="tab-3 p-4">
  <div class="box d-flex justify-content-between align-items-center position-relative">
    <h2 class="fw-600">All Authors</h2>
  </div>
  <hr />

  <div class="box d-flex justify-content-between align-items-center position-relative">
    <table class="w-100">
      <thead>
        <tr class="text-white bg-dark">
          <td class="w-25">ID</td>
          <td class="w-25">Authors</td>
          <td class="w-25">Actions</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM books";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr class="lh-base">
          <td data-label="ID"><?php echo $row['id'] ?></td>
          <td data-label="Author"><?php echo $row['author'] ?></td>
          <td data-label="Actions">
            <a href="editauthor.php?edit=<?php echo $row['id'] ?>" class="">
              <i class="icon-ed fa-regular fa-pen-to-square text-white bg-primary p-2 rounded-1"></i>
            </a>
            <a onclick="return confirm('Are you sure?!');" href="?del=<?php echo $row['id'] ?>" class="">
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

<?php include "footer.php" ?>