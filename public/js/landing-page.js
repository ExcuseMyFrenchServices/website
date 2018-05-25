var links = document.getElementsByClassName('link');
var image = document.getElementById('background-image');

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

image.style.backgroundImage = "url(images/home"+size+".jpg)";

Object.keys(links).forEach(function(link){
  
  links[link].onmouseover = function(){
	    var opacity = 0.4;
	    var speed = 0.04;
	    var anim = setInterval(opacityAnim,50);

	    function opacityAnim(){
	    	if(opacity <= 0){
	    		clearInterval(anim);
		    } else {
	    		opacity = opacity - speed;
	    		image.style.opacity = opacity;
	    	}
	    }

    setTimeout(function(){
	    image.classList.remove('fondu');
	    image.style.backgroundImage = "url(images/"+ links[link].textContent.replace(/ /g, "-") +""+size+".jpg)";
	    image.style.backgroundPosition = "top";
	    void image.offsetWidth;
	    image.classList.add('fondu');
	    image.style.opacity = 0.4;
	},600);
  };
});