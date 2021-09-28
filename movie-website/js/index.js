// to hide and show the upper content
let upperHideContent = document.getElementById("hide-for-upper-content");
let upperContent = document.getElementById("upper-content");

upperHideContent.onclick = function(){
	if(upperContent.className == "hideuppercontent"){
		upperContent.className = "";
		upperHideContent.innerHTML = "إخفاء";
	}else{
		upperContent.className = "hideuppercontent";
		upperHideContent.innerHTML ="إظهار";
	}
};

// the loading page to hide after 6sec
var content = document.getElementById("load");
var con = document.getElementById("all");
content.style.display="block";
con.style.display="none";
setTimeout(function(){
  content.style.display="none";
  con.style.display="block";
}, 6000);

// loading page loading...
let loading = document.getElementById("loading");
loading.innerHTML = "loading";
setTimeout(function(){
	loading.innerHTML = "loading.";
}, 500);
setTimeout(function(){
	loading.innerHTML = "loading..";
}, 1000);
setTimeout(function(){
	loading.innerHTML = "loading...";
}, 1500);
setTimeout(function(){
	loading.innerHTML = "loading.";
}, 2000);
setTimeout(function(){
	loading.innerHTML = "loading..";
}, 2500);
setTimeout(function(){
	loading.innerHTML = "loading...";
}, 3000);
setTimeout(function(){
	loading.innerHTML = "loading.";
}, 3500);
setTimeout(function(){
	loading.innerHTML = "loading..";
}, 4000);
setTimeout(function(){
	loading.innerHTML = "loading...";
}, 4500);
setTimeout(function(){
	loading.innerHTML = "loading.";
}, 5000);
setTimeout(function(){
	loading.innerHTML = "loading..";
}, 5500);
setTimeout(function(){
	loading.innerHTML = "loading...";
}, 6000);