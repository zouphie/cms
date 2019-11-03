import "./sass/main.scss";

const nav = document.querySelector("header nav");
const burger = document.querySelector(".burger");

function toggleNav() {
    nav.classList.toggle("nav-active");
    burger.classList.toggle("nav-active");
}

burger.addEventListener("click", toggleNav);