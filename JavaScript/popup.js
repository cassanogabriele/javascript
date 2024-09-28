noms = new Array(
	"-",
					"OMG TORRENT",
					"C'EST PAS BIEN",
					"ZONE TELECHARGEMENT",
					"9DIVX",
					"TORRENT 411"
)


urls = new Array(
	"" ,
					"http://www.omgtorrent.com/",
					"http://www.cpasbien.pe/",
					"http://www.zone-telechargement.com/",
					"http://www.9divx.com/",
					"http://www.t411.me/"
) ;

function mfPopUp(leSelect) {
	var url = leSelect.value ;
	if (url != "" ) {
		window.open(url, "lemusee") ;
	}
}

function mfCreateSelect() {
	var n = urls.length ;
	document.write("<select style='margin-left:680px;margin-top:35px;' onchange='mfPopUp(this)'>");
	
	for (var i = 0 ; i < n ; i++) {
		buf = "<option value=\"" + urls[i] + "\">" + noms[i] + "</option>" ;
		document.write(buf) ;	
	}
	document.write("</select>") ;
}