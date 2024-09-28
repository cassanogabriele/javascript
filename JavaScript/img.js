function Img(src)
 {
	var obj = this; // Référe,ce vers l'objet "Img"
	this.originalImg = new Image(); // Instanciation de l'objet original, le wrapper servira alors d'intermédiaire	
	this.complete = false;
	this.onload = function() {}; // C'est l'événement que les développeurs pourront modifier	
	this.originalImg.onload = function() {
	obj.complete = true; // L'image est chargée 
	obj.onload(); // Exécution de l'événement éventuellement spécifié par le développeur
	};
	
		if (src)
		{
			this.originalImg.src = src; // Si elle est spécifiée : définition de la propriété "src"			
		}
	}
		Img.prototype.set = function(name, value) 
		{
			var allowed = ['width', 'height', 'src'], // Spécification des propriétés dont on autorise la modification
			wrapperProperties = ['complete', 'onload'];
				if (allowed.indexOf(name) != -1) 
				{
					this.originalImg[name] = value; // Si la propriété est autorisée, alors on la modifie
					
				}
					else if(wrapperProperties.indexOf(name) != -1)
					{
						this[name] = value; // Ici, la propriété appartient au wrapper et non pas à l'objet original					
					}
		};
		
			Img.prototype.get = function(name)
			{
				// Si la propriété n'existe pas sur le wrapper, on essaye alorscsur l'objet original :			
				return typeof this[name] != 'undefined' ? this[name] :
				this.originalImg[name];
			};