<?php

include "header.php";

if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $sql = "INSERT INTO categories (name) VALUES ('$name')";
  if (mysqli_query($conn, $sql)) {
    header("Location: categories.php");
  }
}

?>

<!-- Start Add New Category -->
<div class="tab-2 p-4">
  <div id="second" class="box d-flex flex-column justify-content-between position-relative">
    <h2 class="fw-600">Add New Category</h2>
    <a class="btn2 btn bg-transparent w-25 rounded-1 border position-absolute end-0 py-2 px-5" href="categories.php">All
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
</div>
</div>
</div>
<!-- End Add New Category -->

<?php include "footer.php" ?>