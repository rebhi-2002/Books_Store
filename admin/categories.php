<?php include "header.php" ?>

<div class="tab-2 p-4">
  <div id="first">
    <div class="box d-flex justify-content-between align-items-center position-relative">
      <h2 class="fw-600">All Categories</h2>
      <a class="btn1 btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="addcategory.php">Add
        New
        Category</a>
    </div>
    <hr />
    <table class="w-100">
      <thead>
        <tr class="text-white bg-dark">
          <td class="w-25">ID</td>
          <td class="w-50">Name</td>
          <td class="w-25">Actions</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr class="lh-base">
            <td data-label="ID"><?php echo $row['id'] ?></td>
            <td data-label="Name"><?php echo $row['name'] ?></td>
            <td data-label="Actions">
              <a href="editcategory.php?edit=<?php echo $row['id'] ?>" class="">
                <i class="icon-ed fa-regular fa-pen-to-square text-white bg-primary p-2 rounded-1"></i>
              </a>
              <a onclick="return confirm('Are you sure?!');" href="delcategory.php?del=<?php echo $row['id'] ?>" class="">
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