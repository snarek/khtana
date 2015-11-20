function forImage(img){
	var imagesrc=img.src;
	var imagetitle=img.alt;
	document.getElementById("popupimage").setAttribute("src", imagesrc);
	document.getElementById("imageTitle").innerHTML=imagetitle;
	document.getElementById("popup").style.display="block";
	
}
function forImageHide(){
	document.getElementById("popup").style.display="none";
}