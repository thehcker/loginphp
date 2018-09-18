<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function insert(){
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();

	}else{
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readystate == 4 && xmlhttp.status ==200) {
			document.getElementById('message').innerHTML = xmlhttp.responseText;

		}
	}
	parameters = 'text=hello!';

	xmlhttp.open('POST','update.inc.php', true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(parameters);
}
</script>
</head>
<body>
Insert:<input type="text" id="text">
<input type="button" name="submit" value="Submit" onclick="insert();">
<div id="message"></div>
</body>
</html>


<?php




?>