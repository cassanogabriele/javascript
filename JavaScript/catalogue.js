// Affichage d'un catalogue d'une boutique en ligne

/* Au départ, on ne connaît pas les noms des fichiers contenant les photos, il s'agit de fichiers .jpg nommés "photo1,photo2,etc".
   Pour construire le catalogue, on créer un tableau HTML. Pour afficher l'ensemble des photos, on doit utiliser une boucle qui 
   gère les noms de fichier en concaténant le mot "photo" et un compteur de boucle i. On dispose de 9 photos, on va alors utiliser
   une boucle "for" allant de 1 à 9 y compris (car on connaît le nombre d'éléments).
*/

var photos = new Array("sony a.jpg",
"nikon1 j4.jpg",
"canon eos.jpg",
"panasonic lumix.jpg",
"fujifilm.jpg",
"panasonic lumix2.jpg",
"olympus.jpg",
"samsung.jpg",
"sony2.jpg"
) ;

var marque = new Array();
marque[0] = "SONY Sony a ( ILCE-6000 ) KIT Noir s1pro";
marque[1] = "NIKON 1 J4 18.4 Mp HD 1080p Noir + 10-30MM VR PD WH ";
marque[2] = "CANON EOS M Full HD 18 Mp + 18 - 55 mm objectif Noirolympus";
marque[3] = "PANASONIC Lumix DMC-G6HEG + Vario 14 - 140 mm 16 Mp noir";
marque[4] = "FUJI FUJIFILM X-E2 Appareil photo hybride / Boîtier / 16 Mp noir ";
marque[5] = "PANASONIC Lumix DMC-GM1KEG G Vario 12 - 32 mm argenté ";
marque[6] = "OLYMPUS PEN E-PM2 + EZ-M1442 II R Argenté";
marque[7] = "SAMSUNG Appareil photo numérique compact NX Mini Objectif 9mm vert ";
marque[8] = "SONY NEX5T + 16-50MM PZ argenté ";

document.write("<h1 style='color:red;font-weight:bold;text-align:center;'>NOTRE SELECTION</h1>");

for (var i = 0 ; i < photos.length ; i++)
 {
	
	document.write("<tr>");
	document.write("<td>") ;
	var chemin = "Images/" + photos[i] ;
	document.write("<img src=\"" + chemin + "\" />") ;
	document.write("</td>");
	document.write("<td style='width:450px;text-align:center;font-weight:bold;'>") ;
	document.write(marque[i]," ");
	document.write("</td>");
	document.write("</tr>") ;
} 



