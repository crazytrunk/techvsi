var divs = ["Menu1", "Menu2", "Menu3", "Menu4", "Menu5", "Menu6", "Menu7", "Menu8", "Menu9", "Menu10", "Menu11"];
var visibleDivId = null;
function changeContent(divId) {
  if (visibleDivId != divId) {
    visibleDivId = divId;
  }
  hideNonVisibleDivs();
}
function hideNonVisibleDivs() {
  var i, divId, div;
  for (i = 0; i < divs.length; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if (visibleDivId === divId) {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }
}

function scrollToContent() {
  var elmnt = document.getElementById("languageContent");
  elmnt.scrollIntoView({ block: 'nearest',  behavior: 'smooth' });
}