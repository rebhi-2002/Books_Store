<?php include "header.php" ?>

<div class="tab-5 p-4">
  <div class="box d-flex justify-content-between align-items-center position-relative">
    <h2 class="fw-600">All Users</h2>
    <a class="btn1 btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="adduser.php">Add
      New
      User</a>
  </div>
  <hr />
  <div class="box d-flex justify-content-between align-items-center position-relative">
    <table class="w-100">
      <thead>
        <tr class="text-white bg-dark">
          <td class="w-25">ID</td>
          <td class="w-25">Name</td>
          <td class="w-25">Email</td>
          <td class="w-25">url</td>
          <td class="w-25">age</td>
          <td class="w-25">phone</td>
          <td class="w-25">country</td>
          <!-- <td class="w-100">Password</td> -->
          <td class="w-25">Type</td>
          <td class="w-25">Actions</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr class="lh-base">
            <td data-label="ID"><?php echo $row['id'] ?></td>
            <td data-label="Name"><?php echo $row['name'] ?></td>
            <td data-label="Email"><?php echo $row['email'] ?></td>
            <td data-label="url"><?php echo $row['url'] ?></td>
            <td data-label="age"><?php echo $row['age'] ?></td>
            <td data-label="phone"><?php echo $row['phone'] ?></td>
            <td data-label="country"><?php echo $row['country'] ?></td>
            <!-- <td data-label="Password"><?php echo $row['password'] ?></td> -->
            <td data-label="Type"><?php echo $row['type'] ?></td>
            <td data-label="Actions">
              <a href="edituser.php?edit=<?php echo $row['id'] ?>" class="">
                <i class="icon-ed fa-regular fa-pen-to-square text-white bg-primary p-2 rounded-1"></i>
              </a>
              <a onclick="return confirm('Are you sure?!');" href="deluser.php?del=<?php echo $row['id'] ?>" class="">
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


<?php include "footer.php" ?>