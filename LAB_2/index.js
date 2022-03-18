const background = document.getElementById("background");

const backgroundBlur = () => {
  if (window.scrollY > 400) {
    background.classList.add("background--blur");
  } else {
    background.classList.remove("background--blur");
  }
};

document.addEventListener("scroll", backgroundBlur);

const navbar = document.getElementById("nav-container");

const navbarFixed = () => {
  if (window.scrollY > 0) {
    navbar.classList.add("navbar--fixed");
  } else {
    navbar.classList.remove("navbar--fixed");
  }
};

document.addEventListener("scroll", navbarFixed);
