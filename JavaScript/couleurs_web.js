function mfToHex(n) 
{ 
	hex = n.toString(16) ;
	
	if (hex.length == 1) {
		hex = '0' + hex ;
	} 
	return hex ; 
} 

function mfTableauCouleurs() 
{ 		
	document.write('<table style="width:50%;">') ;
	for (var Rouge = 0; Rouge <= 0xFF; Rouge+=0x33){

		for (var Vert = 0; Vert <= 0xFF; Vert+=0x33){ 
		
			for (var Bleu = 0; Bleu <= 0xFF; Bleu+=0x33) { 

				var qteRouge = mfToHex(Rouge) ; 
				var qteVert  = mfToHex(Vert) ; 
				var qteBleu  = mfToHex(Bleu) ; 

			
				var couleurFond = "#" + qteRouge + qteVert + qteBleu ; 
				var txtCouleur = qteRouge + '.' + qteVert + '.' + qteBleu ;

				document.write(' <tr>') ; 
				document.write('<td style="background-color:' + couleurFond + ';">' + txtCouleur + '</td>'); 
				document.write('</tr>') ; 
			} 
		}
	}
	document.write('</table>') 	 
}