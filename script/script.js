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

    let bannerImg = document.getElementById("bannerImg");
    let opacity = 0;
    let fadeIn = setInterval(() => {
    bannerImg.style.opacity = opacity;
      opacity += 0.01;
    }, 10);

    if (opacity >= 1) {
      clearInterval(fadeIn);
    }
});

function openLink(url) {
  window.open(url, '_blank');
}