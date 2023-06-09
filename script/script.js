document.addEventListener("DOMContentLoaded", () => {
  let spinnerSection = document.getElementById("spinnerSection");
  spinnerSection.remove();

  let bannerImg = document.getElementById("bannerImg");
  let bannerContactBtn = document.getElementById("bannerContactBtn");
  let bannerSecondaryBtn = document.getElementById("bannerSecondaryBtn");
  let opacity = 0;
  let fadeIn = setInterval(() => {
    bannerImg.style.opacity = opacity;
    bannerContactBtn.style.opacity = opacity;
    bannerSecondaryBtn.style.opacity = opacity;
    opacity += 0.01;
    if (opacity >= 1) {
      clearInterval(fadeIn);
    }
  }, 10);
});

let navbar = document.getElementById("navbarSupportedContent");
window.onscroll = function (event) {
    if (window.scrollY > 0) {
        navbar.classList.add('navbar-scrolled')
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
}

function openLink(url) {
  window.open(url, '_blank');
}