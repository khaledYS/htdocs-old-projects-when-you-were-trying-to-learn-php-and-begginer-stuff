var contents = document.getElementById("hidee");
var hide = document.getElementById("hide");
hide.onclick = function(){
	if(contents.className == "hideen"){
	   	contents.className = "";
		hide.innerHTML = "show";
	}else{
		contents.className = "hideen";
		hide.innerHTML = "hide";
	}
};