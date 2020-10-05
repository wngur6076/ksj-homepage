const navbar = document.querySelector("#navbar");
const menu = document.querySelector(".navbar__menu");
const util = document.querySelector(".navbar__util");
const loginBtn = document.querySelector(".util__login");

const memberbox = document.querySelector("#memberbox");

function navbarActive() {
  menu.classList.toggle("active");
  util.classList.toggle("active");
  navbar.classList.toggle("active");
}

function memberboxActive() {
  loginBtn.classList.toggle("active");

  if (memberbox.classList.toggle("active") == true) {
    memberbox.querySelector(".user__id").disabled = false;
    memberbox.querySelector(".user__id").focus();
    memberbox.querySelector(".user__pw").disabled = false;
    memberbox.querySelector(".login__submit").disabled = false;
  } else {
    memberbox.querySelector(".user__id").disabled = "disabled";
    memberbox.querySelector(".user__pw").disabled = "disabled";
    memberbox.querySelector(".login__submit").disabled = "disabled";
  }
}
