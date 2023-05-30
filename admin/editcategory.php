<?php

include "header.php";

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
    header("Location: categories.php");
  }
}

?>

<div class="tab-2 p-4">
  <!-- Start Edit Category -->
  <div id="third" class="box d-flex flex-column justify-content-between position-relative">
    <h2 class="fw-600">Edit Category</h2>
    <a class="btn3 btn bg-transparent w-25 rounded-1 border position-absolute end-0 py-2 px-5" href="categories.php">All
      Categories</a>
    <hr />
    <form class="form" action="" method="post">
      <label for="Name" class="form-label">Name</label>
      <input type="text" class="form-control" id="Name" name="name" value="<?php echo $category['name'] ?>" placeholder="Name" required />
      <button class="add3 btn btn-info mt-3 border-0 w-25" name="update">
        Update
      </button>
    </form>
  </div>
</div>
</div>
</div>
<!-- End Edit Category -->

<?php include "footer.php" ?>