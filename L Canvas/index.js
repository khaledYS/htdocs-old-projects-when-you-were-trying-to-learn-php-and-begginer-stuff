// set date to default
var DateD = new Date().toUTCString();

document.getElementById("maindate").value = DateD;
var mainDate = document.getElementById("maindate").value;

function addTask() {
	
	var mainText = document.getElementById("mainSubj").value;
	

	
	// make the whole container
	var thetask = document.createElement("DIV");
  	document.getElementById("tasks").appendChild(thetask);	
  	thetask.className = "thecon bg-danger";
	thetask.setAttribute("ondblClick", "cTS()");
	localStorage.setItem("thetask", thetask);
	localStorage.getItem("thetask");
	sessionStorage.setItem
	
	// put a id name to the whole container to control it
  	thetask.setAttribute("id","hi");
	
	// MAke the delelte button
	var theDel = document.createElement("BUTTON");
	document.getElementById("hi").appendChild(theDel);
	theDel.className = "del btn btn-danger fas fa-minus";
	// put func to delete the task
	theDel.setAttribute("onclick", "delefunc()");
	
	// make the subj
	var theSubj = document.createElement("H3");
	document.getElementById("hi").appendChild(theSubj);
	theSubj.className = "subj";
	theSubj.innerHTML = mainText;
	
	// ADD THe Date
	var Date = document.createElement("SMALL");
	document.getElementById("hi").appendChild(Date);
	Date.className = "date";
	Date.setAttribute("id", "dater");
	Date.innerHTML = mainDate;
	
	
	
	// put this at the eEnd
	thetask.setAttribute("id", "done");
	Date.setAttribute("id", "donned");
};

function delefunc() {
	document.getElementById("done").remove();
}


function cTS() {
	var theTask = document.getElementById("done");
	if(theTask.className = "bg-success"){
		theTask.className -= " bg-success";
		theTask.className += " bg-danger";
		theTask.className = "thcon bg-danger"
	}else{
		theTask.className += " bg-success";
		theTask.className -= " bg-danger";
	}
}