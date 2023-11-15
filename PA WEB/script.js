// dark mode night mode

// var element = document.body;
// function ubahWarna() {
//   element.classList.toggle("terang");
// }

// Toggle Class activate Hamburger Menu
const navbarNav = document.querySelector(".navbar-nav");
//ketika hamburger menu diklik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("activate");
};

// Toggle Class activate Search Form
const searchForm = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");

document.querySelector("#search-button").onclick = (e) => {
  searchForm.classList.toggle("active");
  searchBox.focus();
  e.preventDefault();
};

// Toggle Class activate Shopping Cart
const shoppingCart = document.querySelector(".shopping-cart");
document.querySelector("#shopping-cart-button").onclick = (e) => {
  shoppingCart.classList.toggle("active");
  e.preventDefault();
};

//klik diluar sidebar untuk menghilangkan nav
// MASIH ERROR UNTUK SEARCH BUTTON DAN SHOPPING CART
const hamburger = document.querySelector("#hamburger-menu");
const sb = document.querySelector("#search-button");
const sc = document.querySelector("#shopping-cart-button");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("activate");
  }
  if (!sb.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove("activate");
  }
  if (!sc.contains(e.target) && !shoppingCart.contains(e.target)) {
    shoppingCart.classList.remove("activate");
  }
});
document.addEventListener("click", function (e) {
  if (!sc.contains(e.target) && !shoppingCart.contains(e.target)) {
    shoppingCart.classList.remove("activate");
  }
});

const tombol = document.getElementById("tombol");
tombol.addEventListener("click", function () {
  tombol.textContent = "Coming soon!";
  tombol.style.color = "white";
});

// Mengambil elemen tombol menggunakan DOM
const button1 = document.getElementById("button1");

// Menambahkan event listener pada tombol
button1.addEventListener("click", function () {
  // Mengecek teks tombol saat ini
  if (button1.textContent === "Ahmad Nur Fauzan") {
    // Jika teks tombol adalah "Klik Saya", maka ganti menjadi "Teks Baru"
    button1.textContent = "@anfauzan";
    button1.style.color = "blue";
  } else {
    // Jika teks tombol bukan "Klik Saya", maka kembalikan ke "Klik Saya"
    button1.textContent = "Ahmad Nur Fauzan";
    button1.style.color = "#ee8896";
    window.open("https://www.instagram.com/anfauzan_/?hl=id", "_blank");
  }
});

//Modal Box

const itemDetailModal = document.querySelector("#item-detail-modal");
const itemDetailButtons = document.querySelectorAll(".item-detail-button");

itemDetailButtons.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModal.style.display = "flex"; //merubah yang awalanya display dari modal kita none berubah menjadi flex(muncul)
    e.preventDefault();
  };
});

//klik tombol close modal
document.querySelector(".modal .close-icon").onclick = (e) => {
  itemDetailModal.style.display = "none";
  e.preventDefault();
};

//klik di luar modal

window.onclick = (e) => {
  if (e.target === itemDetailModal) {
    itemDetailModal.style.display = "none";
  }
};
