function mfValidation(f)
 {
	ok = true ;
	var nom = f.nom_txt.value ;
	var prenom = f.prenom_txt.value ;
	var email = f.email_txt.value ;
	
		if (nom=="")
		{
			alert("Le champ nom est obligatoire") ;
			ok = false ;
		}
		
			if (prenom=="") 
			{
				alert("Le champ prénom est obligatoire") ;
				ok = false ;
			}
			
			if (email=="") 
			{
				alert("Le champ e-mail est obligatoire") ;
				ok = false ;
			}
			
				else if ((p1 = email.indexOf("@")) == -1) 
				{
					alert("Il n'y a pas d'arrobas dans cette adresse") ;
					ok = false ;
				} 
					else if (( p2 = email.indexOf(".")) == -1)
					{
						alert("Il n'y a pas de point dans cette adresse") ;
						ok = false ;
					}
	return ok ;
}