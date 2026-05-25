import './bootstrap';

window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

function toggleContent(postId) {
    const content = document.getElementById("content" + postId);
    const fullContent = document.getElementById("full-content" + postId);

    if (fullContent.style.display === "none") {
        fullContent.style.display = "block";
        content.style.display = "none";
    } else {
        fullContent.style.display = "none";
        content.style.display = "block";
    }
}
