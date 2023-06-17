window.addEventListener("load", () => {
  let spinnerSection = document.getElementById("spinnerSection");
  spinnerSection.remove();

  let bannerImg = document.getElementById("bannerImg");
  let bannerContactBtn = document.getElementById("bannerContactBtn");
  let bannerSecondaryBtn = document.getElementById("bannerSecondaryBtn");
  let opacity = 0;
  let scale = 0.8;
  let fadeIn = setInterval(() => {
    // Opacity
    bannerImg.style.opacity = opacity;
    bannerContactBtn.style.opacity = opacity;
    bannerSecondaryBtn.style.opacity = opacity;
    opacity += 0.01;
    // Scale
    bannerImg.style.transform = `scale(${scale})`;
    scale += 0.002;
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

// Change color of laravel logo when mouse is over
var logoLaravel = document.getElementById('logoLaravel');
// Access the <g> element
var gLogoLaravel = logoLaravel.querySelector('g');

logoLaravel.addEventListener('mouseover', function() {
  gLogoLaravel.style.transition = "fill 0.3s ease";
  gLogoLaravel.setAttribute("fill", "#f9322c");
});

logoLaravel.addEventListener('mouseout', function() {
  gLogoLaravel.setAttribute("fill", "#00000");
});
