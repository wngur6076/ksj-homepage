const navbar = document.querySelector("#navbar");
const toggle = document.querySelector(".navbar__toogle");
const menu = document.querySelector(".navbar__menu");
const util = document.querySelector(".navbar__util");
const loginBtn = document.querySelector(".util__login");

const memberbox = document.querySelector("#memberbox");

toggle.addEventListener("click", () => {
  menu.classList.toggle("active");
  util.classList.toggle("active");
  navbar.classList.toggle("active");
});

function memberboxActive() {
  memberbox.classList.toggle("active");
  loginBtn.classList.toggle("active");
}
