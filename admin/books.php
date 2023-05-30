<?php include "header.php" ?>

<div class="tab-4 p-4">
  <div id="first-2">
    <div class="box d-flex justify-content-between align-items-center position-relative">
      <h2 class="fw-600">All Books</h2>
      <a class="btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="addbook.php">Add New
        Book</a>
    </div>
    <hr />
    <table class="w-100">
      <thead>
        <tr class="text-white bg-dark">
          <td>Serial</td>
          <td>Title</td>
          <td>Image</td>
          <td>Price</td>
          <td>Short Description</td>
          <td>Full Description</td>
          <td>Author</td>
          <td>Category</td>
          <td>Actions</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM books";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr class="lh-base">
            <td data-label="Serial"><?php echo $row['serial'] ?></td>
            <td data-label="Title"><bdi><?php echo $row['name'] ?></bdi></td>
            <td data-label="Image">
              <img class="imgcart" src="<?php echo "../imgs/" . $row['image'] ?>" alt="" />
            </td>
            <td data-label="Price"><?php echo $row['price'] ?>.00$</td>
            <td data-label="Short Description">
              <p><?php echo $row['ShortDescription'] ?></p>
            </td>
            <td data-label="Full Description">
              <p title="<?php echo $row['FullDescription'] ?>">Description</p>
            </td>
            <td data-label="Author"><?php echo $row['author'] ?></td>
            <td data-label="Category"><?php echo $row['category'] ?></td>
            <td data-label="Actions">
              <a href="editbook.php?edit=<?php echo $row['id'] ?>">
                <i class="icon-ed fa-regular fa-pen-to-square text-white bg-primary p-2 rounded-1"></i>
              </a>
              <a onclick="return confirm('Are you sure?!');" href="delbook.php?del=<?php echo $row['id'] ?>">
                <i class="icon-del fa-solid fa-trash text-white bg-danger p-2 rounded-1"></i>
              </a>
            </td>
          </tr>
        <?php  } ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>


<?php include "footer.php" ?>