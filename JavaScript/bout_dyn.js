Normal1 = new Image();
Normal1.src = "Images/bouton1.gif";     /* premier graphique standard  */
Highlight1 = new Image();
Highlight1.src = "Images/bouton1h.gif"; /* premier graphique éclairé */

Normal2 = new Image();
Normal2.src = "Images/bouton2.gif";     /* deuxième graphique standard  */
Highlight2 = new Image();
Highlight2.src = "Images/bouton2h.gif"; /* deuxième graphique éclairé  */

Normal3 = new Image();
Normal3.src = "Images/bouton3.gif";     /* troisième graphique standard */
Highlight3 = new Image();
Highlight3.src = "Images/bouton3h.gif"; /* troisième graphique éclairé */

function change_image(image_no,objet_image) 
{
	 window.document.images[image_no].src = objet_image.src;
}
