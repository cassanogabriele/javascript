Normal1 = new Image();
Normal1.src = "Images/bouton1.gif";     /* premier graphique standard  */
Highlight1 = new Image();
Highlight1.src = "Images/bouton1h.gif"; /* premier graphique �clair� */

Normal2 = new Image();
Normal2.src = "Images/bouton2.gif";     /* deuxi�me graphique standard  */
Highlight2 = new Image();
Highlight2.src = "Images/bouton2h.gif"; /* deuxi�me graphique �clair�  */

Normal3 = new Image();
Normal3.src = "Images/bouton3.gif";     /* troisi�me graphique standard */
Highlight3 = new Image();
Highlight3.src = "Images/bouton3h.gif"; /* troisi�me graphique �clair� */

function change_image(image_no,objet_image) 
{
	 window.document.images[image_no].src = objet_image.src;
}
