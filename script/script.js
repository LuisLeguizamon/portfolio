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

// Read More
function readMore(event) {
  console.log(event.target)
  let readMoreBtn = event.target;
  readMoreBtn.style.transition = "opacity 0.3s ease-in-out";
  readMoreBtn.style.opacity = "0";
  readMoreBtn.style.display = "none";
  let readMoreText = document.getElementById("bannerReadMoreText");
  readMoreText.style.opacity = "100";
}

function openLink(url) {
  window.open(url, '_blank');
}

// Change color of stack logo when mouse is over it
const svgLogos = [
  { key: "logoLaravel", value: "#f9322c" },
  { key: "logoVue", value: "#41b883" },
  { key: "logoPhp", value: "#878EB7" },
  { key: "logoJavascript", value: "#f7df1e" },
];

svgLogos.forEach((element) => {
  var svgLogo = document.getElementById(element.key);
  var childElementToFill = svgLogo.getElementsByClassName("customFill")[0];

  svgLogo.addEventListener("mouseover", function () {
    childElementToFill.style.transition = "fill 0.3s ease";
    childElementToFill.setAttribute("fill", element.value);
  });

  svgLogo.addEventListener("mouseout", function () {
    childElementToFill.setAttribute("fill", "#00000");
  });
});

// Animation
let elementsToAnimate = document.querySelectorAll('.animation');

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("scroll-animation");
      } else {
        // entry.target.classList.remove("scroll-animation");
      }
    });
  },
  {
    threshold: 0.5,
  }
);

elementsToAnimate.forEach(element => {
  observer.observe(element);
});
