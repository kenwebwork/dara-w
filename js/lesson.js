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

const qa = document.getElementById('qa');
for (let i = 0; i < list.length; i++) {
  qa.innerHTML += `
　　<div class="qa-box">
        <input id="q-${i}" class="qa-checkbox" type="checkbox" />
        <label for="q-${i}"><span>${i+1}.</span>${list[i]["ja"]}</label>
      <div class="en">${list[i]["en"]}</div>
    </div>
  `;
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