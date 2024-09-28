function Img(src)
 {
	var obj = this; // R�f�re,ce vers l'objet "Img"
	this.originalImg = new Image(); // Instanciation de l'objet original, le wrapper servira alors d'interm�diaire	
	this.complete = false;
	this.onload = function() {}; // C'est l'�v�nement que les d�veloppeurs pourront modifier	
	this.originalImg.onload = function() {
	obj.complete = true; // L'image est charg�e 
	obj.onload(); // Ex�cution de l'�v�nement �ventuellement sp�cifi� par le d�veloppeur
	};
	
		if (src)
		{
			this.originalImg.src = src; // Si elle est sp�cifi�e : d�finition de la propri�t� "src"			
		}
	}
		Img.prototype.set = function(name, value) 
		{
			var allowed = ['width', 'height', 'src'], // Sp�cification des propri�t�s dont on autorise la modification
			wrapperProperties = ['complete', 'onload'];
				if (allowed.indexOf(name) != -1) 
				{
					this.originalImg[name] = value; // Si la propri�t� est autoris�e, alors on la modifie
					
				}
					else if(wrapperProperties.indexOf(name) != -1)
					{
						this[name] = value; // Ici, la propri�t� appartient au wrapper et non pas � l'objet original					
					}
		};
		
			Img.prototype.get = function(name)
			{
				// Si la propri�t� n'existe pas sur le wrapper, on essaye alorscsur l'objet original :			
				return typeof this[name] != 'undefined' ? this[name] :
				this.originalImg[name];
			};