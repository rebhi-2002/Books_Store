<?php include "header.php" ?>

<div class="tab-4 p-4">
  <div id="third-2" class="">
    <div class="box d-flex justify-content-between align-items-center position-relative">
      <h2 class="fw-600">Update Book</h2>
      <a class="button-2 btn bg-transparent rounded-1 border position-absolute end-0 py-2 px-5" href="books.php">All
        Books
      </a>
    </div>
    <hr />
    <form class="form">
      <div class="mb-3">
        <label for="Name1" class="form-label">Title</label>
        <input type="text" class="form-control" id="Name1" placeholder="Title" required />
      </div>
      <div class="mb-3">
        <label for="formFileMultiple2" class="form-label">Image</label>
        <input id="formFileMultiple2" alt="Selected image" class="form-control" type="file" multiple required onchange="showSelectedFiles2()" />
        <div id="selectedFiles2" class="d-flex justify-content-start align-items-center flex-wrap"></div>
      </div>
      <div class="mb-3">
        <label for="Name2" class="form-label">Price</label>
        <input type="text" class="form-control" id="Name2" placeholder="Price" required />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Short Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Short Description" required style="height: 65px"></textarea>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea2" class="form-label">Full Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Full Description" required></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label" for="inputGroupSelect01">
          Author
        </label>
        <select class="form-select" id="inputGroupSelect01">
          <option class="text-uppercase" selected>
            --SELECT--
          </option>
          <option value="1"><bdi>د.منى المرشود</bdi></option>
          <option value="2"><bdi>ديل كارنيجي</bdi></option>
          <option value="3">
            <bdi>د.محمد بن عبد الرحمن العريفي</bdi>
          </option>
          <option value="4"><bdi>د.خولة حمدي</bdi></option>
          <option value="5"><bdi>ستيفن آر.كوفي</bdi></option>
          <option value="6">Jon Duckett</option>
          <option value="7">Robert C. Martin</option>
          <option value="8">JACKIE BAVARO</option>
          <option value="9">ROBERT SEDGEWICK</option>
          <option value="10">KEVIN WAYNE</option>
          <option value="11">Mary Jane Sterling</option>
          <option value="12">Donald D.Hearn</option>
          <option value="13">M. Pauline Baker</option>
          <option value="14">Marijn Haverbeke</option>
          <option value="15">KYLE SIMPSON</option>
          <option value="16">Gayle Laakmann McDowell</option>
          <option value="17">Aditya Y. Bhargava</option>
          <option value="18">Steve Krug</option>
          <option value="19">Other.....</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label" for="inputGroupSelect02">
          Category
        </label>
        <select class="form-select" id="inputGroupSelect02">
          <option class="text-uppercase" selected>
            --SELECT--
          </option>
          <option value="1">Action</option>
          <option value="2">Drama</option>
          <option value="3">Romantic</option>
          <option value="4">Computers & Technology</option>
          <option value="5">Most Popular</option>
          <option value="6">Web Development</option>
        </select>
      </div>
      <button class="add2 btn btn-success mt-3 border-0 w-25">
        Update
      </button>
    </form>
  </div>
</div>
</div>
</div>

<?php include "footer.php" ?>