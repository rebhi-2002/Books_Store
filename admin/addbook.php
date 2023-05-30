<?php

include "header.php";

if (isset($_POST['add'])) {
  $serial = $_POST['serial'];
  $title = $_POST['name'];
  $img = $_POST['image'];
  $price = $_POST['price'];
  $ShortDescription = $_POST['ShortDescription'];
  $FullDescription = $_POST['FullDescription'];
  $author = $_POST['author'];
  $category = $_POST['category'];
  $sql = "INSERT INTO books (serial, name, image, price, ShortDescription, FullDescription, author, category) VALUES ('$serial', '$title', '$img', '$price', '$ShortDescription', '$FullDescription', '$author', '$category')";
  if (mysqli_query($conn, $sql)) {
    header("Location: books.php");
  }
}

?>








<div class="tab-4 p-4">
  <div id="second-2" class="">
    <div class="box d-flex justify-content-between align-items-center position-relative">
      <h2 class="fw-600">Add New Book</h2>
      <a class="btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="books.php">All Books</a>
    </div>
    <hr />
    <form class="form" action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="serial" class="form-label">Serial</label>
        <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial no." required />
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Title</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Title" required />
      </div>
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Image</label>
        <input type="file" class="form-control" id="formFileMultiple" name="image" placeholder="Image" multiple required
          onchange="showSelectedFiles()" />
        <div id="selectedFiles" class="d-flex justify-content-start align-items-center flex-wrap"></div>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" min="0" class="form-control" id="price" name="price" placeholder="Price" required />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Short Description</label>
        <textarea name="ShortDescription" class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Short Description" required style="height: 65px"></textarea>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea2" class="form-label">Full Description</label>
        <textarea name="FullDescription" class="form-control" id="exampleFormControlTextarea2" rows="3"
          placeholder="Full Description" required></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label" for="inputGroupSelect01">
          Author
        </label>
        <select class="form-select" name="author" id="inputGroupSelect01">
          <option class="text-uppercase" selected>
            --SELECT--
          </option>
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
      </div>
      <div class="mb-3">
        <label class="form-label" for="inputGroupSelect02">
          Category
        </label>
        <select class="form-select" name="category" id="inputGroupSelect02">
          <option class="text-uppercase" selected>
            --SELECT--
          </option>
          <option value="Action">Action</option>
          <option value="Drama">Drama</option>
          <option value="Romantic">Romantic</option>
          <option value="Computers & Technology">Computers & Technology</option>
          <option value="Most Popular">Most Popular</option>
          <option value="Web Development">Web Development</option>
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