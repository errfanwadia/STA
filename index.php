<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>String Tokenize Sort</title>

<script>
function sort()
{
	var st=document.getElementById("string").value;
	if(st==""){
		alert("Please enter the string");
		return;
	}
	var xmlhttp;
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
		document.getElementById("output").innerHTML=xmlhttp.responseText;
		document.getElementById("string").value="";
    }
  }
xmlhttp.open("get","procString.php?st="+st,true);
xmlhttp.send();
}

</script>


</head>

<body>
<table align="center">
	<tr>
    	<td><input type="text" id="string" name="string"></td>
        <td><input type="button" value="Output" onclick="sort()">
        </td>
    </tr>
</table>


<table align="center">
	<tr>
    	<td><font color="#00CC00"><div id="output"></div></font></td>
    </tr>
</table>
</body>
</html>