<?php

include "header.php";

if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $sql = "SELECT * FROM books WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $book = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
  $name = $_POST['author'];
  $sql = "UPDATE books SET author = '$name' WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: authors.php");
  }
}

?>

<div class="tab p-4">
  <div id="third" class="box d-flex flex-column justify-content-between position-relative">
    <h2 class="fw-600">Edit Author</h2>
    <a class="btn3 btn bg-transparent w-25 rounded-1 border position-absolute end-0 py-2 px-5" href="authors.php">All
      Author</a>
    <hr />
    <form class="form" action="" method="post">
      <label class="form-label" for="inputGroupSelect01">
        Author
      </label>
      <select class="form-select" name="author" id="inputGroupSelect01">
        <option value="<?php echo $book['author'] ?>"><?php echo $book['author'] ?></option>
        <option value="د.منى المرشود"><bdi>د.منى المرشود</bdi></option>
        <option value="ديل كارنيجي"><bdi>ديل كارنيجي</bdi></option>
        <option value="د.محمد بن عبد الرحمن العريفي">
          <bdi>د.محمد بن عبد الرحمن العريفي</bdi>
        </option>
        <option value="د.خولة حمدي"><bdi>د.خولة حمدي</bdi></option>
        <option value="ستيفن آر.كوفي"><bdi>ستيفن آر.كوفي</bdi></option>
        <option value="Jon Duckett">Jon Duckett</option>
        <option value="Robert C. Martin">Robert C. Martin</option>
        <option value="8">JACKIE BAVARO</option>
        <option value="JACKIE BAVARO">ROBERT SEDGEWICK</option>
        <option value="KEVIN WAYNE">KEVIN WAYNE</option>
        <option value="Mary Jane Sterling">Mary Jane Sterling</option>
        <option value="Donald D.Hearn">Donald D.Hearn</option>
        <option value="M. Pauline Baker">M. Pauline Baker</option>
        <option value="Marijn Haverbeke">Marijn Haverbeke</option>
        <option value="KYLE SIMPSON">KYLE SIMPSON</option>
        <option value="Gayle Laakmann McDowell">Gayle Laakmann McDowell</option>
        <option value="Aditya Y. Bhargava">Aditya Y. Bhargava</option>
        <option value="Steve Krug">Steve Krug</option>
        <option value="Other.....">Other.....</option>
      </select>
      <button class="add3 btn btn-info mt-3 border-0 w-25" name="update">
        Update
      </button>
    </form>
  </div>
</div>
</div>
</div>


<?php include "footer.php" ?>