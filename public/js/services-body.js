var services = document.getElementsByClassName('service');
for (var i = services.length - 1; i >= 0; i--){	
	var serviceTitle = services[i].getElementsByTagName('h3')[0];
	var serviceImage = services[i].getElementsByTagName('div')[0];

	serviceImage.style.backgroundImage = "url(images/"+ serviceTitle.textContent.replace(/ /g, "-") +".png)";
	serviceImage.style.backgroundPosition = "center";
	serviceImage.style.backgroundSize = "cover";
}	