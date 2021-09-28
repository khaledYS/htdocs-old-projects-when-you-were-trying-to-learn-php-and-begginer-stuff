// loading div
let loading = document.getElementById("loading");
let content = document.getElementById("all");
let dotWait = document.getElementById("loadingwait");
loading.style.display = "block";
content.style.display = "none";
dotWait.innerHTML = "";
setTimeout(function(){
	loading.style.display = "none";
	content.style.display = "block";
}, 6000);
setTimeout(function(){
	dotWait.innerHTML = ".";
}, 1000);
setTimeout(function(){
	dotWait.innerHTML = "..";
}, 2000);
setTimeout(function(){
	dotWait.innerHTML = "...";
}, 3000);
setTimeout(function(){
	dotWait.innerHTML = ".";
}, 4000);
setTimeout(function(){
	dotWait.innerHTML = "..";
}, 5000);
setTimeout(function(){
	dotWait.innerHTML = "...";
}, 5500);