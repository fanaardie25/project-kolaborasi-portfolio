document.querySelector(".content").style.display = "none";
window.onload = function () {
  setTimeout(() => {
    document.querySelector(".loader").style.display = "none";
    document.querySelector(".content").style.display = "block";
  }, 2000);
};

document.addEventListener("DOMContentLoaded", function () {
  let typing = new Typed("#typed", {
    strings: ["fullstack developer", "content creator"],
    typeSpeed: 65,
    backSpeed: 65,
    loop: true,
    startDelay: 1000,
    autoInsertCss: true,
  });
});

window.onscroll = function () {
  stickyNavbar();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyNavbar() {
  if (navbar) {
    if (window.pageYOffset > sticky) {
      navbar.classList.add("fixed");
    } else {
      navbar.classList.remove("fixed");
    }
  }
}
