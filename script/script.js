let navbar = document.getElementById("navbarSupportedContent");
window.onscroll = function (event) {
    if (window.scrollY > 0) {
        navbar.classList.add('navbar-scrolled')
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let spinnerSection = document.getElementById("spinnerSection");
    spinnerSection.remove();
})