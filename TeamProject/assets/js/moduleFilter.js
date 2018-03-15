//Matthew McClean L00137316
//LYIT Team Project 2018
//BSc 5
window.onload=function()
{
	//When filter button is clicked, run getAjaxData()
	document.getElementById('filter').onclick=function(){
		getAjaxData();
	}
}

//Pass values of year & semester drop-downs, courseNo to generate json
function getAjaxData()
{
	if (window.XMLHttpRequest)
    	xmlhttp=new XMLHttpRequest();
  	else
   		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  	xmlhttp.onreadystatechange = showJSONData;
  	var year = document.getElementById('year');
    var semester = document.getElementById('semester');
    var courseNo = document.getElementById('course');
  	xmlhttp.open("GET", "moduleFilter.php?year="+year.value+"&semester="+semester.value+"&courseNo="+courseNo.value, true);
 	xmlhttp.send();
}

function showJSONData()
{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		var data = JSON.parse(xmlhttp.responseText);
		//Generate table
		var output = "<table class=table table-striped>";
		output += "<thead><tr class=text-success><th>Modules</th><th>Lectures</th><th>Year</th></tr></thead><tbody>";
		for(var i=0;i<data.modules.length;i++)
		{
			output += "<tr><td><a href=module.php?ModuleNo=" + data.modules[i].ModuleNo + ">" + data.modules[i].ModuleName + "</a></td>";
			output += "<td>" + data.modules[i].Lecturer + "</td><td>" + data.modules[i].Year + "</td></tr>"
		}

		output += "</tbody></table>";
		//Print table
		document.getElementById("modulesDiv").innerHTML=output;
	}
}
//L00137316