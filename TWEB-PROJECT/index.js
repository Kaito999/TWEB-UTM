const background = document.getElementById("background");

const backgroundBlur = () => {
  if (window.scrollY > 400) {
    background.classList.add("background--blur");
  } else {
    background.classList.remove("background--blur");
  }
};

document.addEventListener("scroll", backgroundBlur);

const navbar = document.getElementById("header");

const navbarFixed = () => {
  if (window.scrollY > 0) {
    navbar.classList.add("navbar--fixed");
  } else {
    navbar.classList.remove("navbar--fixed");
  }
};

document.addEventListener("scroll", navbarFixed);

//slider ================================================================================

const slider = document.querySelector(".items");
const slides = document.querySelectorAll(".item");
const button = document.querySelectorAll(".button");

let current = 0;
let prev = 4;
let next = 1;

for (let i = 0; i < button.length; i++) {
  button[i].addEventListener("click", () => (i == 0 ? gotoPrev() : gotoNext()));
}

const gotoPrev = () =>
  current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);

const gotoNext = () => (current < 4 ? gotoNum(current + 1) : gotoNum(0));

const gotoNum = (number) => {
  current = number;
  prev = current - 1;
  next = current + 1;

  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
    slides[i].classList.remove("prev");
    slides[i].classList.remove("next");
  }

  if (next == 5) {
    next = 0;
  }

  if (prev == -1) {
    prev = 4;
  }

  slides[current].classList.add("active");
  slides[prev].classList.add("prev");
  slides[next].classList.add("next");
};

//news expandable content =============================================================

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

//login form ==========================================================================

const switchers = [...document.querySelectorAll(".switcher")];

switchers.forEach((item) => {
  item.addEventListener("click", function () {
    switchers.forEach((item) =>
      item.parentElement.classList.remove("is-active")
    );
    this.parentElement.classList.add("is-active");
  });
});

// sign-in email validation ===================================================================

const emailInput = document.getElementById("login-email");

emailInput.addEventListener("input", () => {
  if (emailInput.value.match(/^\S+@\S+\.\S+$/)) {
    emailInput.style.backgroundColor = "green";
  } else {
    emailInput.style.backgroundColor = "red";
  }
});

// function evmailInput(){
//   if(emailInput == ''{

//   }
// }

// //sign-in password validation =================================================================

// const passwordInput = document.getElementById("login-password");

// passwordInput.addEventListener("input", () =>  {

// });
