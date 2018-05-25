var headerImage = document.getElementById('headerImage');
var headerTitle = document.querySelector('h1');

//Function that detects mobile device to know wether the image should be a hight resolution image or a small resolution image
function isMobileDevice() { 
	 if( navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 || navigator.userAgent.match(/Windows Phone/i)
	 ){
	    return true;
	  }
	 else {
	    return false;
	  }
}

//Change the image name depending on the media used for faster rending
var size = "";
if(isMobileDevice()){
	var size = "-min";
} 

headerImage.style.backgroundImage = "url(images/"+ headerTitle.textContent.replace(/ /g, "-") +""+size+".jpg)";

if(headerTitle.textContent == "about"){
	headerImage.style.backgroundPosition = "bottom";
}
if(headerTitle.textContent == "hospitality staff"){
	headerImage.style.backgroundPosition = "bottom";
}
