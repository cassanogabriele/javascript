function typeOfDisplay(){
	var number = 2;
	alert(typeof number); 
}

function convertToNumber(){
	var text = '1337', number;
	number = parseInt(text);	
	alert(number); 
}

function convertToString(){
	var text, number1 = 4, number2 = 2;
	text  = number1 + '' + number2;
	alert(text); 
}

function addition1(){
	var result = 3 + 3;
	alert(result);
}

function addition2(){
	var number = 3;
	number = number + 5;
	alert(number);
}

function concat1(){
	var hi = 'Bonjour', name = 'toi', result;
	result = hi + name;
	alert(result);
}

function concat2(){
	var text = 'Bonjour';
	text += ' toi';
	alert(text);
}

function division(){
	var divisor = 2, number = 6;
	result = number / divisor;
	alert(result);
}

function direQuelqueChose() {
	alert("Attention ceci est une alerte");
}

function initRedirect() {							
	window.location = 'https://openclassrooms.com/dashboard';
	return false;
}

function combinaison() {							
	var condition1, condition2, result;
	condition1 = 2 > 8; 
	condition2 = 8 > 2;
	result = condition1 && condition2;
	alert(result);
}

function switch_case() {							
	var car = prompt("Quelle marque de voiture aimez-vous ?");
	var text;

	switch(car){	
		case "BMW":
			text="j'aime bien";
			break;
		case "Mercedes":
			text="j'aime bien aussi";
			break;
		case "Opel":
			text="j'aime moyennement bien";
			break;
		case "Audi":
			text="j'aime pô";
			break;
		default:
			text="Ah ben je connais pas";
	}

	alert(text);
}

function cond1(){
	if(confirm("Are you sure you want to do that?" )) {
		alert("You said yes");
	} else {
		alert("You said no");
	}	
}

function cond2(){
	var floor = parseInt(prompt("Entrez l'étage où l'ascenseur doit se rendre (de -2 à 30) :"));

	if (floor == 0) {
		alert('Vous vous trouvez déjà au rez-de-chaussée.');
	} else if (-2 <= floor && floor <= 30) {
		alert("Direction l'étage n°" + floor + ' !');
	} else {
		alert("L'étage spécifié n'existe pas.");
	}	
}

function ternaire(){
	var startMessage = 'Votre catégorie : ',
    endMessage,
    adult = confirm('Êtes-vous majeur ?');
	endMessage = adult ? '18+' : '-18';
	alert(startMessage + endMessage);	
}

function redirect(){
	alert('Vous allez être redirigé');
	document.location.href = 'http://www.secretfaces.be/';
}

function toggle_text(id) {
	  var span = document.getElementById(id);
	  if(span.style.display == "none") {
		span.style.display = "inline";
	  } else {
		span.style.display = "none";
	  }
} 

function RedirectionJavascript(){
  document.location.href="bannière.html"; 
}

function changeimage(url) {
	document.getElementById('images-redim').src=url; //Avec l'identité
	//Ou avec le nom : document.image.src=url;
}







