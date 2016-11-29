function loadXML(url){
	var xmlHttp, cd, data, i, txt;

	if (window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	} else {
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status ==200) {
			txt = "<table><tr><th>Title</th><th>Artist</th></tr>";

			cd = xmlHttp.responseXML.documentElement.getElementsByTagName("CD");

			for(i=0;i<cd.length;i++){
				txt += "<tr>";

				data = cd[i].getElementsByTagName("TITLE");
				try {
					txt += "<td>" + data[0].firstChild.nodeValue + "</td>";
				}
				catch(er) {
					txt += "<td></td>";
				}

				data = cd[i].getElementsByTagName("ARTIST");
				try {
					txt += "<td>" + data[0].firstChild.nodeValue + "</td>";
				}
				catch(er) {
					txt += "<td></td>";
				}

				txt += "</tr>";
			}

			txt += "</table>";
			document.getElementById("CDInfo").innerHTML = txt;

		}
	}
	xmlHttp.open("GET",url,true);
	xmlHttp.send();
}
