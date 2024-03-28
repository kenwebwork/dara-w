const menuBtnCheck = document.getElementById("menu-btn-check");
const slider = document.getElementById("slider");

function openCloseSlider() {
  if (slider.classList.contains("unshown")) {
    slider.classList.remove("unshown");
  } else {
    slider.classList.add("unshown");
  }
}