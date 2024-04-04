const menuBtnCheck = document.getElementById("menu-btn-check");
const slider = document.getElementById("slider");

function isSliderClose() {
  return slider.classList.contains("unshown");
}

function openCloseSlider() {
  if (isSliderClose()) {
    slider.classList.remove("unshown");
  } else {
    slider.classList.add("unshown");
  }
}


(function() {
  const header = document.getElementById('header');
  const isUp = (function() {
    const scrollElement = document.scrollingElement;
    let flag, prePoint, scrollPoint;
    return function() {
      scrollPoint = scrollElement.scrollTop;
      flag = prePoint > scrollPoint ? true : false;
      prePoint = scrollPoint;
      return flag;
    }
  }());
  
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
      if (isUp()) {
        header.classList.add('show')
      } else {
        if (isSliderClose()){
          header.classList.remove('show');
        }
      }
    } else if (window.pageYOffset == 0) {
      header.classList.add('show');
    } else {
      header.classList.remove('show');
    }
  })
}());
