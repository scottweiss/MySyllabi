function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","php/getClassesfromSchools.php?q="+str,true);
xmlhttp.send();
}

function getClassList(str)
{
if (str=="")
  {
  document.getElementById("classTable").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("classTable").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","php/getClassesfromSubject.php?s="+str,true);
xmlhttp.send();
}


function addClassList(str)
{
if (str=="")
  {
  document.getElementById("addSubjectSelect").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("addSubjectSelect").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","php/addClassesfromSubject.php?s="+str,true);
xmlhttp.send();
}




function addSubject(str)
{
if (str=="")
  {
  document.getElementById("addSubjectSelect").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("addSubjectSelect").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","php/addClassesfromSchools.php?q="+str,true);
xmlhttp.send();
}

function showAddClassForm(str)
{
if (str=="")
  {
  document.getElementById("addClassForm").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("addClassForm").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","php/addClassForm.php?q="+str,true);
xmlhttp.send();
}


















