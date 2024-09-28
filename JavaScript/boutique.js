// Affichage d'un catalogue d'une boutique en ligne

// Création du tableau en boucle
document.write("<table>") ;
for (var i = 1 ; i <= 9 ; i++) {

document.write("<tr>");
document.write("<td>") ;
document.write("<img src='images/photo" + i + ".jpg' />") ;
document.write("</td>") ;
document.write("</tr>") ;
}

document.write("</table>") ; 

var photos = new Array("ap-s1pro.jpg",
"ap-pentax.jpg",
"ap-olympus.jpg",
"ap-nikon.jpg",
"ap-kodak.jpg",
"ap-finepix.jpg",
"ap-epson.jpg",
"ap-canon90.jpg",
"ap-canon.jpg"
) ; 