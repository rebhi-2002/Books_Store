<?php

include "header.php";

if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $sql = "SELECT * FROM users WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $type = $_POST['type'];
  $sql = "UPDATE users SET name = '$name', email = '$email', type = '$type' WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: users.php");
  }
}


?>

<div class="tab-2 p-4">
  <div id="third" class="box d-flex flex-column justify-content-between position-relative">
    <h2 class="fw-600">Edit User</h2>
    <a class="btn3 btn bg-transparent w-25 rounded-1 border position-absolute end-0 py-2 px-5" href="users.php">All
      User</a>
    <hr />
    <form class="form" action="" method="post">
      <label for="Name" class="form-label">Name</label>
      <input type="text" class="form-control" id="Name" name="name" value="<?php echo $user['name'] ?>" placeholder="Name" required />
      <label for="Email" class="form-label">Email</label>
      <input type="email" class="form-control" id="Email" name="email" value="<?php echo $user['email'] ?>" placeholder="Email" required />

      <div class="py-3">
        <label for="user-type">User Type:</label>
        <select id="user-type" name="type">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>

      <button class="add3 btn btn-info mt-3 border-0 w-25" name="update">
        Update
      </button>
    </form>
  </div>
</div>
</div>
</div>

<?php include "footer.php" ?>