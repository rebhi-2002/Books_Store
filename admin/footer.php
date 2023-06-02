</div>
</div>
</div>
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- <script src="../js/all.min.js"></script> -->
<script>
  function showSelectedFiles() {
    var input = document.getElementById("formFileMultiple");
    var output = document.getElementById("selectedFiles");
    if (input.files && input.files[0]) {
      for (var i = 0; i < input.files.length; i++) {
        var file = input.files[i];
        var reader = new FileReader();
        reader.onload = function(e) {
          var element;
          if (file.type.match("image.*")) {
            element = document.createElement("div");
            var img = document.createElement("img");
            img.src = e.target.result;
            element.appendChild(img);
            img.classList.add(
              "mt-3",
              "me-3",
              "img-fluid",
              "img-thumbnail",
              "figure-img"
            );
            img.style.cssText =
              "width: 150px; height: 150px; background: #2e6da4; object-fit: top; object-position: top;";
          } else {
            element = document.createElement("div");
            var fileName = document.createElement("p");
            fileName.textContent = file.name;
            element.appendChild(fileName);
            fileName.classList.add(
              "text-white",
              "rounded",
              "border",
              "mt-3",
              "me-3",
              "p-3"
            );
            fileName.style.cssText =
              "border-color: #2e6da4 !important; background: #2e6da4;";
          }
          // إضافة خاصية "data-file-id" إلى العنصر لتعريفه
          element.setAttribute("data-file-id", i);
          element.classList.add("position-relative");
          // إضافة زر "حذف"
          var deleteButton = document.createElement("button");
          deleteButton.textContent = "X";
          element.appendChild(deleteButton);
          output.appendChild(element);
          deleteButton.style.cssText =
            "position: absolute; display: flex; justify-content: center; align-items: center; text-align: center; width: 20px; height: 20px; top: 32px; right: 12px; border-radius: 50%; color: white; background: #2e6da4; border: 1px solid #2e6da4; transform: translate(-50%, -50%);";
          // إضافة event listener لزر الحذف
          deleteButton.addEventListener("click", deleteSelectedFile);
        };
        reader.readAsDataURL(file);
      }
    }
  }

  function deleteSelectedFile(e) {
    // إيقاف انتشار event النقر لكي لا يتم تنفيذ الدالة على العنصر نفسه
    e.stopPropagation();
    // العثور على العنصر الأب (والذي يحتوي على الزر "حذف")
    var parentElement = e.target.parentElement;
    // العثور على العنصر المراد حذفه باستخدام الخاصية "data-file-id"
    var elementId = parentElement.getAttribute("data-file-id");
    // العثور على العنصر باستخدام العنصر الأول "selectedFiles" ثم استخدام العنصر "children" للعثور على العنصر المراد حذفه
    var elementToDelete =
      document.getElementById("selectedFiles").children[elementId];
    // حذف العنصر
    elementToDelete.remove();
  }
</script>

<script>
  function showSelectedFiles() {
    var input = document.getElementById("formFileMultiple");
    var output = document.getElementById("selectedFiles");
    if (input.files && input.files[0]) {
      for (var i = 0; i < input.files.length; i++) {
        var file = input.files[i];
        var reader = new FileReader();
        reader.onload = function(e) {
          var element;
          if (file.type.match("image.*")) {
            element = document.createElement("img");
            element.src = e.target.result;
          } else {
            element = document.createElement("p");
            element.textContent = file.name;
          }
          // إضافة خاصية "data-file-id" إلى العنصر لتعريفه
          element.setAttribute("data-file-id", i);
          output.appendChild(element);
          // إضافة event listener لعنصر الحذف
          element.addEventListener("click", deleteSelectedFile);
        };
        reader.readAsDataURL(file);
      }
    }
  }

  function deleteSelectedFile(e) {
    // إحضار معرف العنصر المراد حذفه من خلال الخاصية "data-file-id"
    var elementId = e.target.getAttribute("data-file-id");
    // العثور على العنصر باستخدام العنصر الأول "selectedFiles" ثم استخدام العنصر "children" للعثور على العنصر المراد حذفه
    var elementToDelete =
      document.getElementById("selectedFiles").children[elementId];
    // حذف العنصر
    elementToDelete.remove();
  }
</script>
<script>
  let list = document.querySelectorAll(".dashboard .control .dash-list li a");
  list.forEach((li) => {
    li.addEventListener("click", (el) => {
      list.forEach((c) => {
        c.classList.remove("color");
      });
      li.classList.add("color");
    });
  });
</script>
</body>

</html>