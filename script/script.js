let navbar = document.getElementById("navbarSupportedContent");
console.log(navbar)
window.onscroll = function (event) {
    if (window.scrollY > 0) {
        navbar.classList.add('navbar-scrolled')
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
}