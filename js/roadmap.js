const toTop = document.querySelector('#to-top');

toTop.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth" 
  });
});

window.addEventListener("scroll", function () {
  const scroll = window.pageYOffset;
  if (scroll > 500) {
    toTop.style.opacity = "1";
    toTop.style.zIndex = "1";
  } else {
    toTop.style.opacity = "0";
    toTop.style.zIndex = "-1";
  }
});