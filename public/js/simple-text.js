var simpleTextImage = document.getElementById('simpleTextImage');
var simpleTextTitle = document.getElementById('simpleTextTitle');

simpleTextImage.style.backgroundImage = "url(images/"+ simpleTextTitle.textContent.replace(/ /g, "-") +".jpg)";