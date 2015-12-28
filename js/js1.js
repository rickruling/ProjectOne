/**
 * 
 */
function showContent(str) {
	if (str.length == 0) {
		document.getElementById("questionArea").innerHTML = "";
		return;
	} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {

			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("questionArea").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET", "http://" + document.domain
				+ "/ProjectOne/php/questionServer.php?page_id=" + str, true);
		xmlhttp.send();
	}
}