function checkButton() {
  let ch = document.getElementById("same-address"); //checkB
  let btn = document.getElementById("submit"); //checkbtn
  if (ch.checked ) {
      btn.style.visibility = "";
      btn.disabled = false;
  } else {
    btn.style.visibility = "hidden";
    btn.disabled = true;
  }
}

