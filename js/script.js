let list = document.querySelectorAll(".dashboard  .dash-list li a");
let box = document.querySelectorAll(".dashboard .tab-box > div");

list.forEach((li) => {
  li.addEventListener("click", (el) => {
    el.preventDefault();

    box.forEach((e) => {
      e.classList.remove("active");
      e.classList.add("hidden");
    });

    document
      .querySelector(`${el.target.dataset.filter}`)
      .classList.toggle("hidden");

    list.forEach((c) => {
      c.classList.remove("color");
    });

    li.classList.add("color");
  });
});

let button = document.querySelectorAll(".dashboard .tab-box .tab-2 a");
let btn1 = document.querySelector(".dashboard .tab-box .tab-2 a.btn1");
let btn2 = document.querySelector(".dashboard .tab-box .tab-2 a.btn2");
let btn3 = document.querySelector(".dashboard .tab-box .tab-2 a.btn3");

let fs = document.getElementById("first");
let nd = document.getElementById("second");
let rd = document.getElementById("third");

let editIcon = document.querySelectorAll(
  ".dashboard .tab-box .tab-2 #first table tbody tr td i.icon-ed"
);
let deleteIcon = document.querySelectorAll(".icon-del"); // soon, in future...

// Hidden #second & #third section from Categories
// nd.classList.add("d-none");
// rd.classList.add("d-none");

document.querySelector(".add2").onclick = function () {
  console.log("MM");
};

// Handle to Add New Category or Edit it:-
button.forEach((b) => {
  b.addEventListener("click", (btn) => {
    // Button Add (class="add2") in (Add New Category, #second) to Hidden This section & Show #first
    if (b.classList.contains("add2")) {
      fs.classList.toggle("hidden");
      nd.classList.toggle("hidden");
      nd.classList.toggle("d-none");
      // Button Add (class="add3") in (Edit Category, #third) to Hidden This section & Show #first
    } else if (b.classList.contains("add3")) {
      rd.classList.toggle("active");
      fs.classList.toggle("hidden");
      // nd.classList.toggle("d-none");
      rd.classList.toggle("d-none");
    }
    btn.preventDefault();
  });

  // Button (Add New Category) in (All Categories, #first) to Hidden This section & Show #second
  btn1.addEventListener("click", () => {
    fs.classList.toggle("hidden");
    nd.classList.toggle("hidden");
    nd.classList.toggle("d-none");
  });

  // Buttton (All Categories) in (Add New Category, #second) to Hidden This section & Show #first
  btn2.addEventListener("click", () => {
    nd.classList.toggle("hidden");
    fs.classList.toggle("hidden");
    nd.classList.toggle("d-none");
  });

  // Handle Icon in #first & Button (All Categories) in #third:-
  editIcon.forEach((i) => {
    i.addEventListener("click", () => {
      // when click on (Icon Edit Category, #first) will be Hidden #first & Show #third
      fs.classList.toggle("hidden");
      rd.classList.toggle("active");
      rd.classList.toggle("d-none");
    });
    btn3.addEventListener("click", () => {
      // Buttton (All Categories) In (Edit Categories, #third) to Show #first & Hidden #third
      rd.classList.toggle("active");
      fs.classList.toggle("hidden");
      rd.classList.toggle("d-none");
    });
  });
});

let fs_2 = document.getElementById("first-2");
let nd_2 = document.getElementById("second-2");
let rd_2 = document.getElementById("third-2");

let editIcon_2 = document.querySelectorAll(
  ".dashboard .tab-box .tab-4 #first-2 table tbody tr td i.icon-ed"
);

let button_2 = document.querySelectorAll(".dashboard .tab-box .tab-4 a");
let btn_2 = document.querySelector(".button-2");

button_2.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    fs_2.classList.toggle("hidden");
    nd_2.classList.toggle("hidden");
  });
});

editIcon_2.forEach((icon) => {
  icon.addEventListener("click", () => {
    fs_2.classList.toggle("hidden");
    rd_2.classList.toggle("hidden");
  });
});

btn_2.addEventListener("click", () => {
  rd_2.classList.toggle("hidden");
  nd_2.classList.toggle("hidden");
});

// deleteIcon.forEach((i) => {
//   i.addEventListener("click", () => {
//     // alert("هل انت متاكد اخوي ؟!");
//     let confirmMsg = confirm("Are You Sure?");
//     console.log(confirmMsg);
//     if (confirmMsg === true) {
//       console.log("Item Deleted");
//     } else {
//       console.log("Item Not Deleted");
//     }
//   });
// });
