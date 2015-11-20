function forImage(img){
	var imagesrc=img.src;
	document.getElementById("popupimage").setAttribute("src", imagesrc);
	document.getElementById("popup").style.display="block";
}
function forImageHide(){
	document.getElementById("popup").style.display="none";
}