function checkit()
{
	// Rassemblement des donn�es qui sont finalement �crites dans le "textarea"
	var textstring = '';
	/*
		On v�rifie si toutes les zones ont �t�s remplies ? Toutes les cases et leurs valeurs sont dans "textstring"
	
	*/
	for (i=0;i<4;i++)
	{
		var box = document.forms['example'].elements[i];
		if (!box.value) 
		{
			alert('Vous n\'avez pas remplit : ' + box.name + '!');
			box.focus()
			return;
		}
			textstring += box.name + ': ' + box.value + '\n';
	}
	
	// On r�cup�re la valeur des "pourquoi" des boutons radios
	user_input = '';
	for (i=0;i<document.forms['example'].why.length;i++) 
	{
		if (document.forms['example'].why[i].checked) 
		{
			user_input = document.forms['example'].why[i].value;
		}
	}
		textstring += 'Pourquoi apprendre le JavaScript ? : ' + user_input + '\n';

	// On r�cup�re les valeurs du "comment" de la bo�te de s�lection
	user_input = document.example.refer.options[document.example.refer.selectedIndex].value
	textstring += 'Source du site ?: ' + user_input + '\n';

	// On r�cup�re les cases coch�es

	textstring += 'Vous voulez plus d\'informations sur : ';
	for (i=9;i<13;i++) 
	{
		if (document.example.elements[i].checked)
		{
			textstring += document.example.elements[i].name + ' ';
		}
	}

	// Ecriture de toutes les valeurs r�cup�r�es dans "textstring" dans "textarea"

	document.forms['example'].output.value = textstring;
}
