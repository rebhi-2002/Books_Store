<?php

include "header.php";

if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $url = $_POST['url'];
  $age = $_POST['age'];
  $phone = $_POST['phone'];
  $country = $_POST['country'];
  $pass = $_POST['password'];
  $hashedPassword = sha1($pass);
  $type = $_POST['type'];
  $sql = "INSERT INTO users (name, email, url, age, phone, country, password, type) VALUES ('$name', '$email', '$url', '$age', '$phone', '$country', '$hashedPassword', '$type')";
  if (mysqli_query($conn, $sql)) {
    header("Location: users.php");
  }
}

?>

<div class="tab p-4">
  <div id="second" class="box d-flex flex-column justify-content-between position-relative">
    <h2 class="fw-600">Add New User</h2>
    <a class="btn2 btn bg-transparent w-25 rounded-1 border position-absolute end-0 py-2 px-5" href="users.php">All
      Users</a>
    <hr />
    <form class="form" action="" method="post">
      <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" id="Name" name="name" placeholder="Name" required />
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email" name="email" placeholder="Email" required />
      </div>
      <div class="mb-3">
        <label for="url" class="form-label">URL</label>
        <input type="url" class="form-control" id="url" name="url" placeholder="URL" required />
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" min="0" class="form-control" id="age" name="age" placeholder="Age" required />
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number (Just No.)</label>
        <input type="tel" pattern="\d*" class="form-control" id="phone" name="phone" placeholder="Phone" required />
      </div>
      <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country" placeholder="Country" required />
      </div>
      <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required />
      </div>
      <div class="py-3">
        <label for="user-type">User Type:</label>
        <select id="user-type" name="type">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
      <button class="add2 btn btn-success mt-3 border-0 w-25" name="add">
        Add
      </button>
    </form>
  </div>
</div>
</div>
</div>

<?php include "footer.php" ?>