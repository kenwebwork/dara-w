const descArea = document.getElementById("description-area");
const openClose = document.getElementById("openClose");

function openCloseDesc() {
  if (descArea.classList.contains("unshown")) {
    descArea.classList.remove("unshown");
    openClose.innerText = "閉じる";
  } else {
    descArea.classList.add("unshown");
    openClose.innerText = "開く";
  }
  window.scroll({
    top: 0,
    behavior: "smooth",
  });
}


function praticeAgain() {
  const qaCheckbox = document.getElementsByClassName("qa-checkbox");
  for(let i=0; i<qaCheckbox.length; i++){
    qaCheckbox[i].checked = false;
  }
  
  const practiceTitle = document.getElementById("practice-title");
  practiceTitle.scrollIntoView({  
    behavior: 'smooth'
  });

  const practiceCounterNumber = document.getElementById("practiceCounterNumber");
  if (practiceCounterNumber != null){
    const number = practiceCounterNumber.innerHTML;
    if (number > 1){
      practiceCounterNumber.innerHTML -= 1;
    } else if (number == 1) {
      document.getElementById("againButton").innerHTML = "もう一回やっちゃう？笑";
    }
  } 
}