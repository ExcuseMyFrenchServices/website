var quoteImage = document.getElementById('footerFormImage');
var quoteTitle = document.getElementById('footerFormTitle');

quoteImage.style.backgroundImage = "url(images/"+ quoteTitle.textContent.replace(/ /g, "-") +".jpg)";