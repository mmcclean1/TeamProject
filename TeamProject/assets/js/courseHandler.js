//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5
window.onload = function()
{
	document.getElementById('newCourse').onclick=function(){
		createForm();
	}
}

function createForm()
{
	var target = document.getElementById('newCourseDiv');
	if(target.style.display === "none"){
		target.style.display = "block";
	}
	else{
		target.style.display = "none";
	}
}