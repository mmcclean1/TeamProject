//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5
window.onload=function()
{
	document.getElementById('newTopic').onclick=function(){
		createForm();
	}
}

function createForm()
{
	var target = document.getElementById('div');
	var title = document.getElementById('title');
	if(target.style.display === "none"){
		target.style.display = "block";
	}
	else
	{
		target.style.display = "none";
		title.value='';
	}
}
