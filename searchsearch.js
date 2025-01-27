let keyword = [
  "flight",
  "weather",
  "maps",
  "login",
  "signup",
  "route",
  "profile",
  "hotel",
  "feedback",
  "blogs",
  "trip",
];
const box = document.getElementById("search");
const result = document.getElementById("result-box");
box.onkeyup = function () {
  let resulte = [];
  let input = box.value;
  if (input.length) {
    resulte = keyword.filter((keywords) => {
      return keywords.toLowerCase().includes(input.toLowerCase()); // match case to lowercase
    });
    console.log(resulte);
  }
  display(resulte);
  if (!resulte.length) {
    result.innerHTML = "";
  }
};
function display(resulte) {
  const content = resulte.map((list) => {
    return "<li onclick=Selection(this)>" + list + "</li>";
  });
  result.innerHTML = "<ul>" + content.join("") + "</ul>";
}
function Selection(list) {
  box.value = list.innerHTML;
  result.innerHTML = "";
  switch (box.value) {
    case "maps":
      window.location.href = "maps.html";
      break;
    case "weather":
      window.location.href = "weather.html";
      break;
    case "login":
      window.location.href = "login_sign.html";
      break;
    case "signup":
      window.location.href = "insertlogin.php";
      break;
    case "feedback":
      window.location.href = "feedback.php";
      break;
    case "hotel":
      window.location.href = "flight.php";
      break;
    case "trip":
      window.location.href = "routing1.html";
      break;
    case "routing":
      window.location.href = "insertlogin.php";
      break;
    case "blogs":
      window.location.href =
        "https://www.lonelyplanet.com/articles/best-places-to-visit-in-india";
      break;
    case "profile":
      window.location.href = "profile.php";
      break;
    case "flight":
      window.location.href = "flight.php";
      break;
  }
}

function sebtn() {
  document.getElementById("sea").addEventListener("click", () => {
    result.textContent = " Wait ! Only Selected Services Available ";
  });
}
