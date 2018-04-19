//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5
function replyForm(e)
{
	var target = document.getElementById('reply'+e.id);
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
