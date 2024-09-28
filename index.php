<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>I Love JavaScript</title>
        <meta name="description" content="Site pour jeune développeur désireux d'apprendre le JavaScript et le jQuery">
        <meta name="author" content="Gabriele Cassano">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">   
        <link rel="stylesheet" href="css/bootstrap.css">        
        <link rel="stylesheet" href="css/font-awesome.min.css">        
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="owl-carousel/owl.theme.css">        
        <link rel="stylesheet" href="lightbox/nivo-lightbox.css">
        <link rel="stylesheet" href="lightbox/default/default.css">                 
        <link rel="stylesheet" href="css/main.css">        
        <link rel="stylesheet" href="css/colorscheme-0.css">        
        <link rel="stylesheet" href="css/animate.css">       
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'> 
		
		<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script>
		//Fonction appelée quand on descend la page
		jQuery(function(){
			$(function () {
				$(window).scroll(function () { 
					// Quand on est à 50 pixels du haut de page,
					if ($(this).scrollTop() > 50 ) {  
						// Replacer à 10 pixels de la droite l'image
						$('#scrollUp').css('right','10px'); 
					} else { 
						// Enlève les attributs CSS affectés par javascript
						$('#scrollUp').removeAttr( 'style' ); 
					}
				});
			});
		});
		</script>
		<script type="text/javascript" src="/js/demos.js"></script>		
        <script type="text/javascript" src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>  			
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> 		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.26/angular.min.js" integrity="sha256-oIEEIL0cM7gTPY0QAD20Zogx1ebn9nqHpjrsZmh31Fc=" crossorigin="anonymous"></script>
    </head> 
	
	<body>
		<!-- Bouton qui permet de remonter tout en haut du site, quand on est dans une partie du site. -->
		<div id="scrollUp">
			<a href="#top"><img src="img/to_top.png"/></a>
		</div>
		
		<nav class="navbar navbar-expand-md navbar-light bg-light" id="menu">
			
			
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
				<div class="navbar-nav">
					<a href="#presentation" class="nav-item nav-link active"><i class="fa fa-file-text" aria-hidden="true"></i> Théorie</a>
						
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-code"></i> Applications</a>
							
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#événements">Les événements</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#dynamicbuttons">Des boutons dynamiques</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#calculatrice">Une calculatrice</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#catalogue">Un catalogue</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#catalogue">Les animations</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#compteurs">Les compteurs</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#fenetres">Les fenêtres</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#menus">Les menus</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#formulaires">Les formulaires</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#dom">Le DOM</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#css">Manipuler le CSS</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#horloge">Horloge animée</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#jeux">Les jeux</a>
							</div>
					</div>
						
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i> &nbsp;jQuery</a>
							
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#selecteurs">Les sélecteurs</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#filtres">Les filtres</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#attributs">Les attributs</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#contenu">Création de contenu</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#affichage">Affichage</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#fonctions">Les fonctions</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#evenements">Les événements</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#animationsjquery">Les animations</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#menudyn">Menu dynamique</a>							
						</div>
					</div>
						
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file"></i> &nbsp;Ajax</a>
							
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#concept">Présentation</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#objet">L'objet XMLHttpRequest</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#dynamic">Le Dynamic Script Loading</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#implementation">L'implémentation DOM</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#iframe">L'iFrame Loading</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#cookies">Les cookies</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#panier">Un système de panier</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#autocompletion">Un système d'auto-complétion</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#chargement">Charger le contenu de fichiers</a>								
						</div>
					</div>
						
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-adn"></i> &nbsp;Angular JS</a>
							
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#theorieajs">Théorie</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#miniprojet">Mini projet</a>									
						</div>
					</div>
						
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks"></i> &nbsp;Node JS</a>
							
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#conceptnodejs">Présentation</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#appnodejs">Applications</a>									
						</div>
					</div>
						
					<a href="#cgu" class="nav-item nav-link"><i class="fa fa-file-text" aria-hidden="true"></i> CGU</a>
						
					<a href="#mi" class="nav-item nav-link"><i class="fa fa-file-text" aria-hidden="true"></i> Mentions légales</a>
				</div>					
			</div>
		</nav>		
		
		<!-- En-tête du site -->
		<section id="head" class="fill" style="background-color: yellow;height:150px !important;">
			<div class="container" onclick="$.scrollTo( '#about', 800, {easing:'easeOutExpo', axis:'y'} );">
				<div class="row head-small">
					<div class="col-xs-12">
						<img class="img-circle img-responsive" src="img/angular-mobile.jpg" alt="" />
					</div>
				</div>
															
				<div class="row headTag" >
					<div class="col-md-12 text-center" >
						<div class="headText">
							<div id="carousel-head" class="carousel slide carousel-fade">
								<div>
									<div class="item active">
										<h3>Pour jeune développeurs</h3>
									</div>
										
									<div class="item">
										<h3>passionnés</h3>
									</div>									
								</div>
							</div>
						</div>
						
						<div class="social-icons">
							<div class="text-center">
								<h5 id="writer">PAR GABRIELE CASSANO</h5>
							</div>
								<a href="https://www.facebook.com/profile.php?id=100010505551221" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>							
								<a href="https://be.linkedin.com/in/gabriele-cassano-57403958" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="https://plus.google.com/108809628727284696980" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="https://twitter.com/jaymbo78" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div> 
			</div>
		</section>
    
		<!-- Présentation théorique du site -->
		<section id="presentation">
	    	<div class="container">
	    		<div class="hero">
					<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="titles-paragraphs">A propos</h3>
						<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
					  </div>
					  
					  <div class="panel-body">
						<p><blockquote><dfn>Ce site est destiné à vous faire découvrir le JavaScript et apprécié ce langage.</dfn></blockquote></p>
						
						<p class="paragraphs-size">
						Il reprend la plupart des fonctionnalités que j'ai apprises en JavaScript.
						</p>
					 </div>
					</div>
					<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="titles-paragraphs">Qu'est-ce que le JavaScript ?</h3>
						<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
					  </div>
					  
					  <div class="panel-body">
						<p><blockquote><dfn>C'est un langage de script, contenu dans une page HTML qui permet de la dynamise : il permet d'ajouter des interactions avec l'utilisateur, des animations, de l'aide à la navigation.</dfn></blockquote></p>
						
						<p class="paragraphs-size">
						Le JavaScript est un langage dit <em><b>client-side</i></b> : les scripts sont exécutés par le navigateur chez l'internaute qui est <em><b>le client</b><em>. Cela diffère des langages de script dit <em><b>server-side</b></em>
						qui sont exécuteé par les serveur Web. C'est le cas des langages comme le PHP.
						</p>
						
						<p class="paragraphs-size">
						La finalité n'est pas la même. Un script <em><b>server-side</b></em> va s'occuper de créer la page Web qui sera envoyé au navigateur. Il va alors afficher la page puis exécuter les scripts <em><b>client-side</b></em> tel que le
						JavaScript.
						</p>
					 </div>
					</div>
					
					<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="titles-paragraphs">Les propriétés</h3>
							<div class="spacer"><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></div>
						  </div>
					  
					  <div class="panel-body">
						<p>
							<blockquote>Les objets ont des propriétés <cite>(exemple : un chat à une fourrure)</cite>.</blockquote>
						</p>
						
						<p class="paragraphs-size">	
						Dans l'univers du JavaScript, les fenêtres ont un titre et les formulaires peuvent contenir des cases à cocher.
						</p>
						
						<p class="paragraphs-size">
						Le fait de modifier la propriété d'un objet affecte cet objet. La même propriété peut être associée à des objets complètements différents
						</p>
						
						<p class="paragraphs-size">
						Une propriété peut donc être appliquée partout ou elle s'aplique <cite>(exemple : le bolt du chat peut être vide, de même que le ventre du chat aussi)</cite>.
						</p>
						
						<div class="alert alert-danger" role="alert">
							<span class="subtitles">Objects avec propriétés</span>
							<div class="spacer"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></div>
						</div>
						
						<p>
							<ul class="list-unstylled paragraphs-size">
                                <li>velo.roues</li>
                                <li>chat.pattes.devant.gauche</li>
                                <li>guitare.manche</li>
                                <li>voiture.volant</li>                                
                            </ul>  
						</p>
						
						</div>	
					 </div>					
					
					<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="titles-paragraphs">Les méthodes</h3>
							<div class="spacer"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></div>
						  </div>
					  
					  <div class="panel-body">
						<p>
							<blockquote>
							Les actions que les objets peuvent réaliser sont appelées des méthodes (exemple : les chats ronronnent). Les objets JavaScript possèdent aussi leurs méthodes : les boutons se cliquent (click()),
							les fenêtres s'ouvrent (open()) et le texte peut être sélectionné (selected()).							
							</blockquote>
						</p>							
						
						<p class="paragraphs-size">
						Les parenthèses signalent qu'il s'agit de méthodes et non de propriétés
						On peut considérer les objets et les propriétés comme des noms et les méthodes comme des verbes. Les premiers correspondent à des choses, les secondes à des actions que ces choses
						peuvent réaliser ou dont elle peuvent faire l'objet.
						</p>
						
						<p class="paragraphs-size">
						On peut rassembler des objets, des propriétés et des méthodes pour obtenir une meilleure description d'un objet ou pour décrire un processus. En JavaScript, ces éléments sont séparés
						par des points (syntaxe à points). 
						</p>
						
						<div class="alert alert-warning" role="alert">
							<span class="subtitles">Objets et méthodes</span>
							<div class="spacer"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></div>
						</div>
						
						<p>
							<ul class="list-unstylled paragraphs-size">
                                <li>chat.ronronner</li>
                                <li>document.ecrire</li>
                                <li>voiture.rouler</li>
                                <li>navigateur.afficher</li>                                
                            </ul>  
						</p>
					 </div>	
	    		</div>
				
				<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="titles-paragraphs">Le DOM : Document Object Model</h3>
							<div class="spacer"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
						  </div>
					  
					  <div class="panel-body">		
						<p class="paragraphs-size">
						Dans les pages Web, les objets qui composent le document sont représentés sous forme d'une structure arborescente. En construisant les pages HTML , le niveau supérieur de la page est
						contenu dans la balise <html>. A l'intérieur se trouvent les balises <head> et <body>. Certains navigateurs permettent d'afficher une réprésentation de ces structures arborescentes.
						Le JavaScript considère chacun des éléments de l'arbre du document comme des objets et peut ainsi les manipuler.
						</p>
						
						<p class="paragraphs-size">
						La représentation des objets dans le document est appelée modèle objet du document (DOM : Document Object Model). Chacun des objets de l'arbre est aussi appelé "noeud". Le JavaScript
						peut être utilisé pour modifier n'importe quel aspect de l'arbre, notamment en ajoutant et supprimant des noeuds, en y accédant ou en les modifiant. Si le noeud contient une balise
						HTML, on l'appelle noeud "élément", sinon il s'agit d'un noeud "texte". Les noeuds éléments peuvent contenir des noeuds texte.
						</p>
					 </div>	
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Gérer des événements</h3>
						<div class="spacer"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></div>
					</div>
					  
					<div class="panel-body">		
						<p class="paragraphs-size">
						Les événements correspondent aux actions réalisées par les utilisateurs pendant qu'ils visitent les pages. L'envoi d'un formulaire et le survol d'une image avec la souris sont
						des exemples d'événements. Le JavaScript gère les événements à l'aide d'une commande appelées gestionnaire d'événements. Telle action de l'utilisateur dans la page peut ainsi
						déclencher un gestionnaire d'événements dans le script. 
						</p>	

						<div class="alert alert-success" role="alert">
							<span class="subtitles">Les 12 gestionnaires d'événements principaux</span>
							<div class="spacer"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></div>
						</div>
								
						<div>
							<center>
								<table class="table table-bordered table-hover table-responsive paragraphs-size"> 
									<thead>
										<tr> 
											<th class="center ">Evénement</th>
											<th class="center">Signification</th>                                          
										</tr>
									</thead>
									
									<tbody>
										<tr>
											<td>onabort</td>   
											<td>l'utilisateur a annulé le chargement de la page</td> 
										</tr>

										<tr>
											<td>onblur</td>   
											<td>l'utilisateur a quitté l'objet</td>                                            
										</tr>

										<tr>
											<td>onchange</td>   
											<td>l'utilisateur a changé l'objet</td>
										</tr>

										<tr>
											<td>onclick</td>   
											<td>l'utilisateur a cliqué sur un objet</td> 
										</tr>
													
										<tr>
											<td>onerror</td>   
											<td>le script a rencontré une erreur</td> 
										</tr>
													
										<tr>
											<td>onfocus</td>   
											<td>l'utilisateur a activé un objet</td> 
										</tr>
													
										<tr>
											<td>onload</td>   
											<td>l'objet a fini de se charger</td> 
										</tr>
													
										<tr>
											<td>onmouseover</td>   
											<td>le curseur est passé au-dessus d'un objet</td> 
										</tr>
													
										<tr>
											<td>onmouseout</td>   
											<td>le curseur à cessé de survoler un objet</td> 
										</tr>
										
										<tr>
											<td>onselect</td>   
											<td>l'utilisateur a sélectionné le contenu d'un objet</td> 
										</tr>
										
										<tr>
											<td>onsubmit</td>   
											<td>l'utilisateur a soumis un formulaire</td> 
										</tr>
										
										<tr>
											<td>onsubmit</td>   
											<td>l'utilisateur a soumis un formulaire</td> 
										</tr>
										
										<tr>
											<td>onunload</td>   
											<td>l'utilisateur a quitté la page</td> 
										</tr>
									 </tbody>
								</table>
							</center>
						</div>	
									 
							<div class="alert alert-danger" role="alert">
								<p class="paragraphs-size">
								Si l'utilisateur clique sur un bouton, le gestionnaire d'événements onclick détecte l'action et réalise les tâches qui lui ont été confiées. Lorsqu'on écrit un script, on à pas 
								à anticiper toutes les actions possibles de l'utilisateur mais uniquement celles en réponse auxquelles on souhaite que quelque chose de spécial se produise.
								La commande onload peut être utilisée si on souhaite déclencher un script dès que la page se charge.
								</p>
							</div>
					</div>
				</div>	
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Valeurs et variables</h3>
						<div class="spacer"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
					</div>
					  
					  <div class="panel-body">		
						<p class="paragraphs-size">
						En JavaScript, chaque élément d'information est appelé une valeur, il existe différents types de valeurs, les plus courantes sont les nombres. Les valeurs de chaînes correspondent à 
						des mots entourrés de guillemets.
						</p>
						
							<div class="alert alert-success" role="alert">
								<span class="subtitles">Autres types</span>
								<div class="spacer"><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i></div>
							</div>
					
							<div>
								<center>
									<table class="table table-bordered table-hover table-responsive paragraphs-size">  
										<tbody>
											<tr>
											   <td>Nombre</td>   
											   <td>toute valeur numérique</td> 
											</tr>

											<tr>
												<td>Chaîne</td>   
												<td>
												<p>
												caractères entre guillemets
												</p>
												
												<p>
												<code><b>var text = "Mon premier texte";</b></code>
												</p>											
												</td>                                            
											</tr>

											<tr>
												<td>Boolean</td>   
												<td>
												<p>
												vraie(true) ou faux(false)
												</p>
												
												<p>
												<code><b>var isTrue = true;</b></code>
												<br/>
												<code><b>var isFalse = false;</b></code>
												</p>											
												</td>
											</tr>

											<tr>
												<td>Null</td>   
												<td>vide et sans signification</td> 
											</tr>
											
											<tr>
												<td>Objet</td>   
												<td>toute valeur associée à un objet</td> 
											</tr>
											
											<tr>
												<td>Fonction</td>   
												<td>l'utilisateur a activé un objet</td> 
											</tr>
										 </tbody>
									 </table> 
								</center>			
							 </div>	
						</div>
						
						<div class="alert alert-danger" role="alert">
							<span class="subtitles">Déclarer une variable</span>
							
							<div class="spacer"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i><i class="fa fa-arrow-circle-up" aria-hidden="true"></i><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></div>
							
							<p>
								<ul class="list-group paragraphs-size">
									<li class="list-group-item">
									<p>
									Le mot clé var est présent pour indiquer qu'on déclare une variable, un fois qu'elle est déclarée on en a plus besoin.
									</p>
									
									<p>
									<code><b>var myVariable;</b></code>
									</p>
									</li>
																		
									<li class="list-group-item">
									<p>
									On assigne une valeur à une variable avec le signe "=".
									</p>
									
									<p>
									<code><b>myVariable = 2;</b></code>
									</p>
									</li>								
									
									<li class="list-group-item">
									<p>
									Les nombres à virgule s'écrivent avec un point.
									</p>
									
									<p>
									<code><b>var myVariable = 5.5;</b></code>
									</p>
									</li>	

									<li class="list-group-item">
									<p>
									On peut déclarer et assigner des variables sur une seule ligne.
									</p>
									
									<p>
									<code><b>var myVariable1, myVariable2, myVariable3;</b></code>
									</p>
									</li>	
									
									<li class="list-group-item">
									<p>
									Assigner la valeur d'une variable à une autre variable pour qu'elle aient toutes les deux la même valeur.
									</p>
									
									<p>
									<code><b>myVariable1 = myVariable2 = 2;</b></code>
									</p>
									</li>	
								</ul>
							</p>	
						</div>						
						
				</div>	
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Les opérateurs arithmétiques</h3>
						<div class="spacer"><i class="fa fa-certificate" aria-hidden="true"></i><i class="fa fa-certificate" aria-hidden="true"></i><i class="fa fa-certificate" aria-hidden="true"></i></div>
					</div>
					  
					  <div class="panel-body">		
						<p class="paragraphs-size">
						En JavaScript, chaque élément d'information est appelé une valeur, il existe différents types de valeurs, les plus courantes sont les nombres. Les valeurs de chaînes correspondent à 
						des mots entourrés de guillemets.
						</p>			
						
							<div>								
								<ul class="list-group paragraphs-size">
									<li class="list-group-item">	
										<code><b>x + y (numérique) : additionne x et y</b></code>
										<br/>
										<code><b>var result = 3 + 3;</b></code>
										<br/>
										<code><b>alert(result);</b></code>
										<br/>
										<br/>
										<a href="#" onclick="addition1()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>	
									</li>
									
									<li class="list-group-item">
										<code><b>var number = 3;</b></code>
										<br/>
										<code><b>number = number + 5; </b></code>
										<br/>
										<code><b>alert(number);</b></code>
										<br/>
										<br/>	
										<a href="#" onclick="addition2()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>
									</li>
									
									<li class="list-group-item">
										<code><b>x + y (chaîne) : concatène x et y</b></code>
										<br/>
										<code><b>var hi = 'Bonjour', name = 'toi', result;</b></code>
										<br/>
										<code><b>result = hi + name;</b></code>
										<br/>
										<code><b>alert(result);</b></code>
										<br/><br/>
										Affichera "Bonjourtoi"
										<br/>
										<br/>											
										<a href="#" onclick="concat1()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>
										<br/>
										<br/>
										<code><b>var text = 'Bonjour';</b></code>
										<br/>
										<code><b>text += ' toi';</b></code>
										<br/>
										<code><b>alert(text);</b></code>
										<br/><br/>
										Affichera "Bonjour toi"
										<br/>
										<br/>
										<a href="#" onclick="concat2()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>	
									</li>									
								</ul>
								
								<div class="panel-heading">
									<h3 class="titles-paragraphs">Combiner les opérateurs</h3>
									<hr/>
									
									<p class="paragraphs-size">
									<code><b>var condition1, condition2, result;</b></code>
									<br/>
									<code><b>condition1 = 2 > 8;</b></code> // retourne "false"
									<br/>
									<code><b>condition2 = 8 > 2;</b></code> // retourne "true"
									<br/>
									<code><b>result = condition1 && condition2;</b></code>
									<br/>
									<code><b>alert(result);</b></code>
									<br/>
									<br/>
									<a href="#" onclick="combinaison()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>
									</p>
								</div>								
							</div>	
							 
							<div class="alert alert-danger" role="alert" id="div-exc">
								<p class="paragraphs-size">
								x++ et ++x ajoutent toutes deux une unité à x amis elles ne sont pas identiques. x++ incrémente x a près que l'attribution de sa valeur ait été effectuée, ++x le fait avant.
								Si x vaut 5, y = x++, positionne y à 5 et x à 6 alors que y = ++x positionne x et y à 6. L'opérateur -- focntionne de la même manière. Si on mélange des valeurs numériques et des 
								valeurs de chaîne lorsqu'on additionne deux valeurs, le résultat obtenu est une chaîne (chat +5 donne pour résultat : chat5).
								</p>	
							</div>
					</div>
				</div>

				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Attributions et comparaisons</h3>
						<div class="spacer"><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i></div>
					</div>
					  
					  <div class="panel-body">		
						<p class="paragraphs-size">
						Lorsqu'on place une valeur dans une variable, on attribue cette valeur à la variable et on utilise un opérateur d'attribution à cet effet. L'opérateur égalité est utilisé pour réaliser
						des attributions comme sonNom = "Tom". Il existe tout un ensemble d'opérateurs d'attribution.
						</p>

						<div class="alert alert-success" role="alert">
							<h3 class="titles-paragraphs">Opérateurs d'attribution</h3>
							<div class="spacer"><i class="fa fa-code" aria-hidden="true"></i><i class="fa fa-code" aria-hidden="true"></i><i class="fa fa-code" aria-hidden="true"></i></div>
						</div>
						
						<div>
							<center>
								<table class="table table-bordered table-hover table-responsive paragraphs-size">  
									<tbody>
										<tr>
											<td>x = y</td>   
											<td>postionne x à la valeur de y</td> 
										</tr>

										<tr>
											<td>x += y</td>   
											<td>équivaut à x = x + y</td>                                            
										</tr>

										<tr>
											<td>x -= y</td>   
											<td>équivant à x = x - y</td>
										</tr>

										<tr>
											<td>x *= y</td>   
											<td>équivant à x = x * y</td> 
										</tr>
											
										<tr>
											<td>x /= y</td>   
											<td>équivaut à x= x / y</td> 
										</tr>
											
										<tr>
											<td>x %= y</td>   
											<td>équivaut à x : x % y</td> 
										</tr>
									 </tbody>
								</table>  
							</center>
					    </div>	
							 
							<div class="alert alert-danger" role="alert">
								<p class="paragraphs-size">
								A l'exception du signe =, les autres opérateurs d'attribution servent de raccourci pour modifier la valeur des variables. x = x + 5 peut être écrit sous forme abrégée x +=5.
								</p>
							</div>
					</div>
				</div>

				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Comparaisons</h3>
						<div class="spacer"><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i><i class="fa fa-asterisk" aria-hidden="true"></i></div>
					</div>
					  
					  <div class="panel-body">		
						<p class="paragraphs-size">
						On aura souvent besoin de comparer la valeur d'une variable avec celle d'une autre ou avec une valeur littérale (une valeur tapée directement dans l'expression).
						</p>

						<div class="alert alert-success" role="alert">
							<h3 class="titles-paragraphs">Liste complète des comparaisons</h3>
							<div class="spacer"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></div>
						</div>
						
							<div>
								<center>
									<table class="table table-bordered table-hover table-responsive paragraphs-size">  
										<tbody>
											<tr>
											   <td>x == y</td>   
											   <td>retourne true si x est y sont égaux</td> 
											</tr>

											<tr>
												<td>x |= y</td>   
												<td>retourne true si x et y ne sont pas égaux</td>                                            
											</tr>

											<tr>
												<td>x > y</td>   
												<td>retourne true si x est supérieur à y</td>
											</tr>

											<tr>
												<td>x >= y</td>   
												<td>retourne true si x est supérieur ou égal à y</td> 
											</tr>
											
											<tr>
												<td>x < y</td>   
												<td>retourne true si x est inférieur à y</td> 
											</tr>
											
											<tr>
												<td>x <= y</td>   
												<td>retourne true si x est inférieur ou égal à y</td> 
											</tr>
											
											<tr>
												<td>x && y</td>   
												<td>retourne true si x et y valent tous les deux true</td> 
											</tr>
											
											<tr>
												<td>x || y</td>   
												<td>retourne true si x ou y vaut true</td> 
											</tr>
											
											<tr>
												<td>!x</td>   
												<td>retourne true si x vaut false</td> 
											</tr>
										 </tbody>
									</table>
								</center>
							 </div>	
					</div>
				</div>	
				
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Ecrire du HTML adapté au JavaScript</h3>
						<div class="spacer"><i class="fa fa-arrow-right" aria-hidden="true"></i><i class="fa fa-arrow-right" aria-hidden="true"></i><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
					</div>
					  
					<div class="panel-body">		
					<p class="paragraphs-size">
					Puisqu'on utilise du JavaScript pour manipuler des objets des documents, il faut programmer le HTML de manière à ce qu'il puissent aisément être utilisé par les scripts.
					On doit donc écrire du XHTML moderne et comptabile avec les standards et utiliser des feuilles de style CSS pour séparer la structure du document de sa présentation.
					Les documents doivent non seulement passer par la validation du W3C (validator.w3.org) mais il convient également de réfléchir par avance à ce qu'on risque de réaliser avec
					nos pages et d'ajouter les balises et attributs appropriés qui permettront d'accéder aisément aux objets depuis le code JavaScript. 
					</p>
					</div>
				</div>	
				
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Structure, présentation et comportement</h3>
						<div class="spacer"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></div>
					</div>
					  
					<div class="panel-body">		
						<p class="titles-paragraphs">
						Il faut des feuilles de style CSS externes, ainsi que des fichiers JavaScript externes. Lorsqu'on effectue cette séparation, les sites contiendront trois types de fichiers texte :
							<ul class="list-group paragraphs-size">
							  <li class="list-group-item">fichiers XHTML : définissent le contenu de la structure de la page</li>
							  <li class="list-group-item">fichiers CSS : contrôlent l'apparence et la présentation des pages</li>
							  <li class="list-group-item">fichiers JavaScript : contrôlent le comportement des pages</li>					 
							</ul>										
						</p>
						
						<div class="alert alert-danger" role="alert">
							<p class="paragraphs-size">
							Lorsqu'on procède de cette manière, il devient très simple d'apporter des modifications au site, même lorsqu'elles doivent affecter le site tout entier.
							</p>
						</div>
					</div>
				</div>					
				
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Ou placer les scripts ?</h3>
						<div class="spacer"><i class="fa fa-cog" aria-hidden="true"></i><i class="fa fa-cog" aria-hidden="true"></i><i class="fa fa-cog" aria-hidden="true"></i></div>
					</div>
					  
					<div class="panel-body">		
						<p class="paragraphs-size">
						Ils peuvent être placés à deux endroits : 
							<ul class="list-group paragraphs-size">
							  <li class="list-group-item">dans les pages HTML : entre les balises <head> et </head> (script d'en-tête)</li>
							  <li class="list-group-item">entre les balises <body></body></li>							  				 
							</ul>										
						</p>
					</div>
				</div>
				
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Ecrire un script</h3>
						<div class="spacer"><i class="fa fa-angle-double-right" aria-hidden="true"></i><i class="fa fa-angle-double-right" aria-hidden="true"></i><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
					</div>
					
					<br/>
					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Script interne</h3>
						<div class="spacer"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					</div>
					  
					<div class="panel-body">						
						<p class="paragraphs-size">						
						La balise d'ouverture du script : elle indique au navigateur qu'il doit s'attendre à lire du code JavaScript et non du code HTML.
						L'attribut language = "JavaScript" indique au navigateur quel language est utilisé.
						L'attribut type="text/JavaScript" signale que le script est en texte brut, organisé sous forme de JavaScript.															
						</p>
						
						<p class="paragraphs-size">
						<b><i>document.write("Hello world !");</i></b>
						<br/>
						La première ligne de code JavaScript : elle récupère la fenêtre du document et y écrit "Hello world !". Le ";" indique à l'interpréteur JavaScript du navigateur que la ligne se
						termine.
						La balise "script" termine le bloc JavaScript et indique au navigateur qu'il peut s'attendre à rencontrer du HTML à nouveau.
						</p>
						
						<div class="col-md-6">						
							<div class="row skills">
								<script type="text/javascript">										
								function open_infos_15(){
									window.open('img/script_interne.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}					
								</script>		
							</div>
						</div>	
						
						<div class="alert alert-info" role="alert">
							<p class="paragraphs-size">
								<a href="#null" onclick="javascript:open_infos_15();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>					 
							</p>
						</div>
					</div>
					
					<div class="alert alert-danger" role="alert">
						<p>
							<ul class="list-group paragraphs-size">
								<li class="list-group-item">il n'est pas nécessaire d'ajouter le type à la balise de fermeture</li>
								<li class="list-group-item">l'utilisation du ";" à la fin des lignes de JavaScript est facultative si on n'inclue qu'une seule instruction par ligne</li>		
								<li class="list-group-item">les pages HTML peuvent inclure autant de scripts qu'on le souhaite</li>		
							</ul>	
						</p>
					</div>
					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Script externe</h3>
						<div class="spacer"><i class="fa fa-fast-forward" aria-hidden="true"></i><i class="fa fa-fast-forward" aria-hidden="true"></i><i class="fa fa-fast-forward" aria-hidden="true"></i></div>
					</div>
					
					<div class="panel-body">
						<p class="paragraphs-size">	
						Le problème d'utilisation des scripts dans la page HTML est qu'ils ne sont disponibles que pour la page concernée).
						Souvent, on souhaitera que plusieurs pages HTML partagent un script. Il faut alors inclure un réglage à un script externe, à un fichier séparé qui ne contient que du code JavaScript.
						Les pages individuelles appelent le fichier .js en ajoutant simplement un nouvel attribut src à la balise script. Lorsqu'on doit apporter des changements à un script, on n'a qu'à 
						changer le fichier .js pour que toutes les pages HTML qui le référence soit automatiquement mise à jour. 
						L'attribut src de la balise script indique aux navigateurs qui supportent le JavaScript ou rechercher le fichier. La page web résultante a la même apparence que si le script se
						trouvait à sa place habituelle dans les balises 'script' de la page, alors qu'il se trouve dans un fichier .js externe.
						</p>
						
						<div class="col-md-6 paragraphs-size">						
							<div class="row skills ">
								<script type="text/javascript">										
								function open_infos_13(){
									window.open('img/script_externe.jpg','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}					
								</script>		
							</div>
						</div>
						
						<div class="alert alert-info" role="alert">
							<p class="paragraphs-size">
								<a href="#null" onclick="javascript:open_infos_13();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>					 
							</p>
						</div>
					</div>
					
					<div class="alert alert-danger" role="alert">
						<p class="paragraphs-size">
						La balise "no script" sert pour les navigateurs qui ne supportent pas le JavaScript, un message apparaît et indique que cette page requiert le JavaScript.						 
						</p>
						
						<div class="col-md-6 paragraphs-size">						
							<div class="row skills">
								<script type="text/javascript">										
								function open_infos_14(){
									window.open('img/script_externe.jpg','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}					
								</script>		
							</div>
						</div>			
					</div>
						
					<div class="alert alert-info" role="alert">
						<p>
							<a href="#null" onclick="javascript:open_infos_14();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>					 
						</p>
					</div>	
				</div>
								
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Les fonctions</h3>
						<div class="spacer"><i class="fa fa-spinner" aria-hidden="true"></i><i class="fa fa-spinner" aria-hidden="true"></i><i class="fa fa-spinner" aria-hidden="true"></i></div>
					</div>
					  
					<div class="panel-body">		
					<p class="paragraphs-size">
					On fera souvent appel à des fonctions en JavaScript. Une fonction est un ensemble d'instructions JavaScript qui réalisent une tâche. Chaque fonction doit se voir attribuer un nom, à
					une rare exception près, et peut être invoquée ou appelée par d'autres parties du script. Les fonctions peuvent être appelées autant de fois que nécessaire durant l'exécution d'un script.  
					Le retrait de la deuxième ligne facilite la lecture du code. Toutes les instructions entre l'accolade ouvrant et l'accolade fermante font partie de la fonction. 
					</p>
					</div>
					
					<div class="alert alert-success" role="alert">
						<p class="paragraphs-size">
						<code>
						<b>
						function direQuelqueChose(){
							alert("Attention ceci est une alerte");
						}
						</b>
						</code>
						</p>
						
						<br/>
						
						<p class="paragraphs-size">
						<a href="#" onclick="direQuelqueChose()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>
						</p>						
					</div>				
				
														
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Pour rediriger un utilisateur à l'aide d'une fonction</h3>
						<div class="spacer"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><i class="fa fa-dot-circle-o" aria-hidden="true"></i><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div>
					</div>
					
					<div class="alert alert-success" role="alert">
						<p class="paragraphs-size">
						<code>
						<b>
						function initRedirect(){
							<br/>
							window.location = 'https://openclassrooms.com/dashboard';
							<br/>
							return false;
							<br/>
						}
						</b>
						</code>
						</p>
						
						<br/>
						
						<p class="paragraphs-size">
							<a href="#" onclick="initRedirect()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>						
						</p>						
					</div>	

					<div class="panel-heading">
						<h3 class="titles-paragraphs">Pour rediriger un utilisateur directement à l'aide d'un lien, sans fonction</h3>
						<div class="spacer"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i><i class="fa fa-caret-square-o-up" aria-hidden="true"></i><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
					</div>
					
					<div class="alert alert-danger" role="alert">
						<p class="paragraphs-size">
						Le retrait de la deuxième ligne facilite la lecture du code. Toutes les instructions entre l'accolade ouvrant et l'accolade fermante font partie de la fonction. 	
						</p>
						
						<p class="paragraphs-size">
						window.location : renvoie un objet Location contenant des informations concerant l'url actuelle du document et fournit des méthodes pour modifier cette url. 	
						</p>
					</div>				
				</div>	
				
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Tester l'existence de variables avec "typeof"</h3>
						<div class="spacer"><i class="fa fa-bars" aria-hidden="true"></i><i class="fa fa-bars" aria-hidden="true"></i><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
					  
					<div class="panel-body">		
						<p class="paragraphs-size">
						<code>
						<b>
						var number = 2;
						<br/>
						alert(typeof number);
						<br/>
						Affichera "number".
						</b>
						</code>
						</p>
						
						<br/>
					
						<p class="paragraphs-size">
							<a href="#" onclick="typeOfDisplay()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>					
						</p>
					</div>	
				</div>
		
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Conversion</h3>
						<div class="spacer"><i class="fa fa-circle-thin" aria-hidden="true"></i><i class="fa fa-circle-thin" aria-hidden="true"></i><i class="fa fa-circle-thin" aria-hidden="true"></i></div>
					</div>
					  
					<div class="panel-body">					
						<h3 class="titles-paragraphs">Conversion d'une chaîne de caractère en nombre</h3>
						
						<hr/>
						
						<p class="paragraphs-size">
						<code>
						<b>
						var text = '1337', number;
						<br/>
						number = parseInt(text);
						<br/>
						alert(number);
						</b>
						</code>
						</p>
						
						<br/>
						
						<p class="paragraphs-size">
							<a href="#" onclick="convertToNumber()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>					
						</p>
					</div>	
					
					<div class="panel-body">
						<h3 class="titles-paragraphs">Convertir un nombre en chaîne de caractères</h3>
						
						<hr/>
					
						<p class="paragraphs-size">
						<code>
						<b>
						var text, number1 = 4, number2 = 2;
						<br/>
						text  = number1 + '' + number2;
						<br/>
						alert(text);
						</b>
						</code>
						</p>
						
						<br/>
						
						<p>
							<a href="#" onclick="convertToString()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>	
						</p>
						</p>
					</div>
				</div>
				
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">Les instructions conditionnelles</h3>
						<div class="spacer"><i class="fa fa-plus-square" aria-hidden="true"></i><i class="fa fa-plus-square" aria-hidden="true"></i><i class="fa fa-plus-square" aria-hidden="true"></i></div>
					</div>					
										
					<div class="panel-body">
						<p class="paragraphs-size">
						Elles se décomposent en trois parties : la section if ou s'effectue le test, la section alors ou intervient la partie du script à réaliser si le résultat est true et la section 
						facultative else qui contient la partie du script à exécuter si le test retourne false. Le contenu du test dans la section if est entourré de paranthèses. Le contenu des deux autres
						section est entourré d'accolades.
						</p>
						
						<h3>Le structure "if"</h3>
						
						<hr/>
						
						<p class="paragraphs-size">
						Une condtion est est constituée de : 
						
							<ul class="list-group paragraphs-size">
								<li class="list-group-item">De la structure conditionnelle</li>
								<li class="list-group-item">De parenthèses qui contiennent la condition à analyser, ou plus précisément le booléen retourné par les opérateurs conditionnels</li>
								<li class="list-group-item">D'accolades qui permettent de définir la portion de code qui sera exécutée si la condition se vérifie. Si on place ici la première accolade à la fin de la première ligne de condition, mais vous on peut très bien la placer comme on le souhaite.</li>
							</ul> 
											
							<br/>
						
						<p>
							<h3 class="titles-paragraphs">Pour confirmer un choix</h3>
							
							<hr/>
							
							<p class="paragraphs-size">
							La méthode confirm() prend en paramètre la question qu'on souhaite poser à l'utilisateur et retourne true ou false selon la réponse de l'utilisateur.
							Si l'utilisateur à cliqué "ok", confirm() retourne true et une alerte s'affiche avec le message "You said yes". Il s'agit de la section alors du code, bine qu'il n'existe pas d'
							opérateur then en JavaScript, les accolades permettent de délimiter cette section. Cette accolade termine la partie qui s'exécute lorsque la commande confirm() retourne la valeur
							true.
							</p>
						</p>					
						
						<p class="paragraphs-size">
						<code>
						<b>
						if(confirm("Are you sure you want to do that ?" )) {
						<br/>
							alert("You said yes");
						<br/>
						} else {
						<br/>
							alert("You said no");
						<br/>
						}		
						</b>
						</code>
						</p>
						
						<br/>
						
						<p class="paragraphs-size">
							<a href="#" onclick="cond1()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>						
						</p>
						
						<hr/>
						
						<p class="paragraphs-size">
						<code>
						<b>
						var floor = parseInt(prompt("Entrez l'étage où l'ascenseur doit se rendre (de -2 à 30) :"));
						<br/>	
						if (floor == 0) {
						<br/>
						alert('Vous vous trouvez déjà au rez-de-chaussée.');
						<br/>
						} else if (-2 <= floor && floor <= 30) {
						<br/>
						alert("Direction l'étage n°" + floor + ' !');
						<br/>
						} else {
						<br/>
						alert("L'étage spécifié n'existe pas.");
						<br/>
						}
						</b>
						</code>
						</p>
						
						<br/>
						
						<p class="paragraphs-size">
							<a href="#" onclick="cond2()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>					
						</p>					
					</div>
					
					<hr/>	
					
					<div class="panel-body">
						<h3 class="titles-top titles-paragraphs">Le switch case</h3>
					
						<hr/>
					
						<p class="paragraphs-size">
						L'instruction switch est utilisée pour effectuer différentes actions en fonction de différentes conditions. On l'utilise en général lorsqu'il y a trop de conditions imbriquées, cela simplifie l'écriture.
						<br/><br/>
						<code>
						<b>
						var car = prompt("Quelle marque de voiture aimez-vous ?");
						<br/>
						var text;
						<br/>
						switch(car){	
							<br/>
							case "BMW":
							<br/>
								text="j'aime bien";
							<br/>
								break;
							<br/>
							case "Mercedes":
							<br/>
								text="j'aime bien aussi";
							<br/>
								break;
							<br/>
							case "Opel":
							<br/>
								text="j'aime moyennement bien";
							<br/>
								break;
							<br/>
							case "Audi":
							<br/>
								text="j'aime pas";
							<br/>
								break;
							<br/>
							default:
							<br/>
								text="Ah ben je connais pas";
						}
						<br/>
						alert(text);
						</b>
						</code>
						</p>
						
						<br/>
					
						<p class="paragraphs-size">
							<a href="#" onclick="switch_case()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>				
						</p>
					</div>
					
					<hr/>
					
					<div class="panel-body">
						<h2 class="titles-top titles-paragraphs">Les ternaires</h2>
					
						<hr/>
					
						<p class="paragraphs-size">
						Le dernier type de condition sont les ternaires, elle sont très particulières, parce qu'elles très rapides à écrire mais peu lisibles et surtout elles renvoient une valeur.
						<br/>
						<br/>
						<code>
						<b>
						var startMessage = 'Votre catégorie : ',
						<br/>
						endMessage,
						<br/>
						adult = confirm('Êtes-vous majeur ?');
						<br/>
						endMessage = adult ? '18+' : '-18';
						<br/>
						alert(startMessage + endMessage);
						</b>
						</code>
						</p>
						
						<br/>
						
						<p class="paragraphs-size">
							<a href="#" onclick="ternaires()" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>					
						</p>
					</div>
				</div>
				
				<div class="panel panel-default">					
					<div class="panel-heading">
						<h3 class="titles-paragraphs">La portée des variables</h3>
						<div class="spacer"><i class="fa fa-undo" aria-hidden="true"></i><i class="fa fa-undo" aria-hidden="true"></i><i class="fa fa-undo" aria-hidden="true"></i></div>
					</div>					
										
					<div class="panel-body">
						<p class="paragraphs-size">
						La portée correspond au niveau auquel les variables sont la référence par défaut (la référence à laquelle on pensera automatiquement si aucune information d'identification supplémentaire
						n'est fournie). Si la portée est locale : à l'interieur d'une fonction, si la portée est globale : partout.
						Dans le code JavaScript, le moyen le plus simple d'éviter toute confusion concerant la portée des variables consiste à éviter d'utiliser deux variables du même nom à deux endroits
						différents pour réaliser deux choses différentes.
						</p>
					</div>
				</div>				
				</div>					
	    	</div>  		
    	</section>	
		
		<section id="événements">
	    	<div class="container">
	    		<div class="hero">					
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h3 class="titles-paragraphs">Les événements</h3>
							<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
						</div>
						
						<h3 class="titles-paragraphs">Les événements sans gestionnaires d'événements</h3>
						
						<hr/>
						
						<h3 class="titles-paragraphs">Afficher une message avant une redirection</h3>
						
						<hr/>		
						  
						<div class="panel-body">		
							<p class="paragraphs-size">
							Parfois, on peut souhaiter réaliser une action particulière après que l'utilisateur clique sur un lien mais avant que la navigateur n'atteigne la destination du lien. Ce peut 
							être le cas si on souhaite afficher une alerte avant que l'utilisateur n'accède à une page particulière du site ou pour indiquer clairement que l'utilisateur est sur le point deq
							quitter le site. 
							</p>
							
							<p class="paragraphs-size">
								<a href="#" onLoad="setTimeout('RedirectionJavascript()',-8000)" class="btn btn-primary btn-lg" onclick="redirect()"><i class="fa fa-code"></i> Essayez</a>									
							</p>
							
							<p class="paragraphs-size">
								<script type="text/javascript">  
								function open_infos_9(){
									window.open('img/redirection.jpg','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>
								<a href="#null" onclick="javascript:open_infos_9();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>												
							</p>
						</div>
						
						<h3 class="titles-paragraphs">Afficher un message quand on clique sur une image</h3>
						
						<hr/>	
						
						<div class="panel-body">		
							<p class="paragraphs-size">
							On applique une fonction au click sur une image. Lorsque l'on clique sur l'image, le nom de l'artiste apparaît en-dessous de l'image.
							</p>
							
							<p class="paragraphs-size">
								<div class=" picture-frame">						
									<img src="img/secretfaces.png" class="img-responsive centered-img" id="artist" alt="white background" onclick="toggle_text('span_txt2');"/><span id="span_txt2">Nom de l'artiste : Secret Faces</span>					
								</div>
							</p>
						</div>	

						<h3 class="titles-paragraphs">Afficher un texte</h3>
						
						<hr/>	
						
						<div class="panel-body">		
							<p class="paragraphs-size">
							On applique une fonction au click sur une image. Lorsque l'on clique sur l'image, le nom de l'artiste apparaît en-dessous de l'image.
							</p>
							
							<p class="paragraphs-size">
							"document.write('message');"
							</p>
							
							<script type="text/javascript">  									
							document.write("<h3 style='color:#FF4000;'>Affichage de texte avec la méthode write</h3>");
							</script>
						</div>	
						
						<h3 class="titles-paragraphs">Afficher un texte en cliquant sur un bouton</h3>
						
						<hr/>

						<p class="paragraphs-size">
						A partir d'un switch case, on va afficher un message différent selon le bouton cliqué.
						</p>
									
						<script>
						window.onload = initAll;

						function initAll(){
							for(var i=0; i<document.forms[0].elements.length;i++) {
								var thisElement = document.forms[0].elements[i];
											
								if(thisElement.type = "button") {
									thisElement.onclick = saySomething;
								}
							}
						}

						function saySomething(){
							switch(this.value) {
								case "Lincoln": 
									alert("Bonjour, je m'apelle Lincoln");
									break;
								case "Kennedy": 
									alert("Bonjour moi c'est Kennedy");
									break;
								case "Nixon": 
									alert("Et moi c'est Nixon");
									break;
								default:
									return("I don't know!");
									break;
							}
						}
						</script>
						
						<div class="form-group">
							<form action="#">
								<input type="button" value="Lincoln" id="inp1" class="btn btn-success paragraphs-size form-control" onclick="initAll();" />
								<input type="button" value="Kennedy" id="inp2" class="btn btn-warning paragraphs-size form-control" onclick="initAll();"/>
								<input type="button" value="Nixon" id="inp3" class="btn btn-info paragraphs-size form-control" onclick="initAll();"/>
							</form>	
						</div>
						
						<p class="paragraphs-size">
							<script type="text/javascript">  
							function open_infos_12(){
								window.open('img/buttons.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
									
							<a href="#null" onclick="javascript:open_infos_12();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>							
						</p>					
					</div>
				</div>					
	    	</div>  	
		</section>	

		<section id="dynamicbuttons">
	    	<div class="container">
	    		<div class="hero">					
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h3 class="titles-paragraphs">Des boutons dynamiques</h3>
							<div class="spacer"><i class="fa fa-power-off"></i><i class="fa fa-power-off"></i><i class="fa fa-power-off"></i></div>
						</div>
						
						<h3 class="titles-paragraphs">Afficher une message avant une redirection</h3>
						
						<hr/>		
						  
						<div class="panel-body">		
							<p class="paragraphs-size">
							Il est possible de réaliser facilement une page web contenant des boutons dynamiques, qui change d'aspect lorsque l'on survole le bouton avec les souris,
							des boutons renvoyant vers différents sites. Il suffit de créer des liens en y ajoutant des images ayant l'aspect de boutons. Un script s'occupera de remplacer
							l'image au survol du bouton.
							</p>						
							
							<p class="paragraphs-size">
								<script type="text/javascript">										
								function dynamic_buttons(){
									window.open('http://ilovejs.gabriel-cassano.be/bouton_dynamique.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>	
								
								<a href="#null" onclick="dynamic_buttons();"  class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayer</a>		
	
								<script type="text/javascript">										
								function db(){
									window.open('http://ilovejs.gabriel-cassano.be/codes/db.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>

								<br/>
								<br/>
													
								<a href="#null" onclick="db();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
							</p>
						</div>			
					</div>
				</div>					
	    	</div>  	
		</section>	

		<section id="calculatrice">
	    	<div class="container">
	    		<div class="hero">					
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h3 class="titles-paragraphs">Une calculatrice</h3>
							<div class="spacer"><i class="fa fa-calculator"></i><i class="fa fa-calculator"></i><i class="fa fa-calculator"></i></div>
						</div>
												  
						<div class="panel-body">		
							<p class="paragraphs-size">
							La calculatrice est une application de base en JavaScript, en définissant quelques fonctions, on y arrive facilement.
							</p>						
							
							<p class="paragraphs-size">
								<script type="text/javascript">										
								function calculatrice(){
									window.open('http://ilovejs.gabriel-cassano.be/calculatrice.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>	

								<br/>
								
								<a href="#null" onclick="calculatrice();" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayer</a>
								
								<br/>

								<script type="text/javascript">										
								function calc(){
									window.open('http://ilovejs.gabriel-cassano.be/codes/calculatrice.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>
								
								<br/>
														
								<a href="#null" onclick="calc();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
							</p>
						</div>			
					</div>
				</div>					
	    	</div>  	
		</section>	

		<section id="catalogue">
	    	<div class="container">
	    		<div class="hero">					
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h3 class="titles-paragraphs">Une catalogue</h3>
							<div class="spacer"><i class="fa fa-book" aria-hidden="true"></i><i class="fa fa-book" aria-hidden="true"></i><i class="fa fa-book" aria-hidden="true"></i></div>
						</div>
												  
						<div class="panel-body">		
							<p class="paragraphs-size">
							A l'aide de tableau, on peut rapidement et facilement créer une gallerie d'articles en JavaScript.
							</p>						
							
							<p class="paragraphs-size">
								<script type="text/javascript">										
								function catalogue(){
									window.open('http://ilovejs.gabriel-cassano.be/catalogue.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>	
								
								<br/>
								
								<a href="#null" onclick="catalogue();" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayer</a>
								
								<br/>

								<script type="text/javascript">										
								function cat(){
									window.open('http://ilovejs.gabriel-cassano.be/codes/catalogue.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>
								
								<br/>
														
								<a href="#null" onclick="cat();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
							</p>
						</div>			
					</div>
				</div>					
	    	</div>  	
		</section>	
	
		<!-- Applications : les animations -->  
    	<section id="animations">
			<div class="container">
				<div class="row">
					<div class="panel panel-default">
						  <div class="panel-heading">
							<h1 class="center titles-paragraphs">Les animations</h1>
							<div class="spacer center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
						  </div>
					  
						  <div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Une bannière dynamique</h2>
									</div>
									
									<hr/>
										
									<p class="paragraphs-size">
									Il existe plusieurs manières de réaliser des bannières dynamiques : défilement de texte. On peut aussi choisir l'endroit de l'affichage, soit dans 
									une boîte, soit dans la barre d'état du navigateur, etc. Dans chacun des scripts, il y a 3 paramètres à changer :
										<ul class="list-group paragraphs-size">
											<li class="list-group-item center">Du texte de la bannière</li>
											<li class="list-group-item center">De la vitesse : banniere1(100)</li>
											<li class="list-group-item center">De la longueur de la boîte : size = 40</li>
										</ul>
									</p>
								</div>
							</div>	
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Un alert personnalisé</h2>
									</div>
									
									<hr/>
										
									<p class="paragraphs-size">
									Les boîtes d'alert permettent d'afficher un message lors d'un clic sur un bouton par exemple, il est tout à fait possible d'afficher une boîte d'alert personnalisée
									à l'aide du CSS. Il faut donc en JavaScript, créer une variable qui affichera le message, mais également un bouton permettant de fermer cette boîte de dialogue stylisée.
									On crée alors à l'aide d'une fonction une boîte de dialogue, qui permettra de redesigner l'alerte de base. La zone d'alerte est un objet set n'est pas soumise au CSS. Il 
									faut donc créer un élément HTML et imiter la fonctionnalité alert(). 
									</p>
									
									<div>
										<script type="text/javascript">  
										function open_alert_script(){
											window.open('http://ilovejs.gabriel-cassano.be/alert.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>
										
										<a href="#null" onclick="javascript:open_alert_script();" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>
										
										<script type="text/javascript">  
										function open_alert(){
											window.open('http://ilovejs.gabriel-cassano.be/codes/alert_perso.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>
																			
										<a href="#null" onclick="javascript:open_alert();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																	
									</div>
								</div>
							</div>
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Bannière dans une boîte avec texte de défilement</h2>
									</div>
									
									<hr/>
									
									<script type="text/javascript">  
									function open_ban(){
										window.open('http://ilovejs.gabriel-cassano.be/bannière.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
										
									<a href="#null" onclick="javascript:open_ban();" class="btn btn-primary btn-lg"><i class="fa fa-code"></i> Essayez</a>										
									
									<script type="text/javascript">  
									function open_infos_7(){
										window.open('img/bannière.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
										
									<a href="#null" onclick="javascript:open_infos_7();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
								</div>
							</div>	
											
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Afficher une image aléatoire (slider)</h2>
									</div>
									
									<hr/>
									
									<p class="paragraphs-size">
									Un slider est un élément présentant du contenu de façon ergonomique, souvent sous forme de diaporama, avec ou sans
									navigation, il permet d'afficher des images de manière aléatoire. On peut également l'appeller carroussel, il peut 
									être automatique (les images changent automatiquement ou manuel).
									</p>
									
									<div id="aleatoire">
										<img class="mySlides img-responsive center-block img-width" src="img/katassamalass.png">
										<img class="mySlides img-responsive center-block img-width" src="img/sflogo.png">
										<img class="mySlides img-responsive center-block img-width" src="img/invokingdemonos.jpg">
									</div>									
								
									<script>
									var myIndex = 0;
									carousel();

									function carousel(){
										var i;
										var x = document.getElementsByClassName("mySlides");
										
										for (i = 0; i < x.length; i++) {
										   x[i].style.display = "none";  
										}
										
										myIndex++;
										if (myIndex > x.length) {myIndex = 1}    
										x[myIndex-1].style.display = "block";  
										setTimeout(carousel, 2000); 
									}
									</script>	

									<script type="text/javascript">  
									function open_infos_6(){
										window.open('img/slider.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
										
									<br/>
									
									<a href="#null" onclick="javascript:open_infos_6();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
								</div>
							</div>	
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Un carrousel d'images</h2>
									</div>
									
									<hr/>
									
									<p class="paragraphs-size">
									Le carroussel d'image montré ici présente le même principe que le slider, sauf qu'ici les images doivent être changées
									manuellement.
									</p>								
								
									<script language=JavaScript1.2>
									function reapply(){
										setTimeout("slideit()",2000)
										return true
									}
									</script>
			
									<script language=JavaScript1.1>
									window.onload = initLinks;

								    var jsDiapo = new Array("img/katassamalass.png","img/sflogo.png","img/invokingdemonos.jpg");
									var jsCompteur = new Array("1/4","2/4","3/4");

									var jsGalerie = 0;

									function initLinks(){
										document.getElementById("precedent").onclick = activePrecedent;
										document.getElementById("suivant").onclick = activeSuite;
									}

									function activePrecedent(){
										changeOpacite(0)
										
										if (jsGalerie == 0) {
											jsGalerie = jsDiapo.length;
										}
										jsGalerie--;
										
										document.getElementById("diapoJavaScript").src = jsDiapo[jsGalerie];
										document.getElementById('compteurDiapo').innerHTML = jsCompteur[jsGalerie];
										opacityShow()
										return false;
									}

									function activeSuite(){
										changeOpacite(0)
										jsGalerie++;
										
										if(jsGalerie == jsDiapo.length){
											jsGalerie = 0;
										}
										
										document.getElementById("diapoJavaScript").src = jsDiapo[jsGalerie];
										document.getElementById('compteurDiapo').innerHTML = jsCompteur[jsGalerie];
										opacityShow()
										return false;
									}


									function opacityFade() {
										timer = 300;
										for(i = 100; i >= 0; i--) {
											setTimeout("changeOpacite(" + i + ")",(timer));
											timer=timer+2;
										}
									}
									function opacityShow(){
										timer = 500;
										
										for(i = 0; i <= 100; i++){
											setTimeout("changeOpacite(" + i + ")",(timer));
										timer=timer+2;
										}
									}

									function changeOpacite(opacity){
										var object = document.getElementById('diapoJavaScript').style;
										object.opacity = (opacity / 100);
										object.MozOpacity = (opacity / 100);
										object.KhtmlOpacity = (opacity / 100);
										object.filter = "alpha(opacity=" + opacity + ")";
									}
									</script>

									<div class="diapo_js">
										<div class="diapo">
											<img src="img/katassamalass.png" class="img-responsive" id="diapoJavaScript" alt="Slideshow">
											<div id="compteurDiapo">1/3</div>
											<div id="precedent" class="img-responsive"></div>
											<div id="suivant" class="img-responsive"></div>
										</div>
									</div>
									
									<script type="text/javascript">  
									function open_infos_1(){
										window.open('http://ilovejs.gabriel-cassano.be/codes/carrousel.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
									
									<br/>
									
									<a href="#null" onclick="javascript:open_infos_1();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>									
							</div>									
						</div>
						
						<div class="panel-body">
							<div class="cv-wrapper">
								<div class="center">
									<h2 class="titles-paragraphs">Créer des survols</h2>
								</div>
										
								<hr/>			
								
								<h3 class="titles-paragraphs"> Manipulation des images</h3>
								
								<hr/>
											
								<h4 class="titles-paragraphs">Changement d'une image</h4>
								
								<hr/>
										
								<p class="paragraphs-size">
								Il est possible de changer une image au survol de la souris.										
								</p>
									
								<p class="center paragraphs-size">Passer la souris <a href="javascript:;" onMouseOver="changeimage('img/rouge.jpg')" onMouseOut="changeimage('img/blanc.jpg')">ICI</a> pour le rouge.</p>
																
								<p class="center paragraphs-size">Passer la souris <a href="javascript:;" onMouseOver="changeimage('img/bleu.jpg')" onMouseOut="changeimage('img/blanc.jpg')">ICI</a> pour le bleu.</p>
						
								<p class="center paragraphs-size">Passer la souris <a href="javascript:;" onMouseOver="changeimage('img/vert.jpg')" onMouseOut="changeimage('img/blanc.jpg')">ICI</a> pour le vert.</p>
										
								<p><img id="images-redim" class="img-responsive center-block" name="image" src="img/blanc.jpg"></p>
																					
								<script type="text/javascript">  
								function open_infos_5(){
									window.open('img/survol.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>
								
								<br/>
											
								<a href="#null" onclick="javascript:open_infos_5();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																		
							</div>
						</div>	
					</div>					
		    	</div>				
			</div>
		</section>
		
		<section id="compteurs">
			<div class="container">
				<div class="row">
					<div class="panel panel-default">
						  <div class="panel-heading">
							<h1 class="center titles-paragraphs">Les compteurs</h1>
							<div class="spacer center"><i class="fa fa-plus-square-o" aria-hidden="true"></i><i class="fa fa-plus-square-o" aria-hidden="true"></i><i class="fa fa-plus-square-o" aria-hidden="true"></i></div>
						  </div>
					  
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Un compteur de visites de pages avec des cookies</h2>
									</div>
									
									<hr/>
										
									<p class="paragraphs-size">
									Les cookies ou témoins de connexion sont une possibilité pour un compteur de visites de pages en JavaScript. Ils permettent au JavaScript de sauvegarder des données 
									sur le disque dur de l'utilisateur. Cela contrôle le navigateur de l'utilisateur. Mais les cookies ne peuvent pas écrire des quantités de données incontrôlées sur 
									l'ordinateur de l'utilisateur mais un nombre limité de lignes. Chacune de ces lignes définit une variable et lui affecte une valeur. Un témoin de connexion peut donc
									être comparé à une inscription dans un fichier de configuration avec la différence que le cookie ne peut adresser des données de configuration sur l'ordinateur de l'
									utilisateur.	
									</p>	

									<p class="paragraphs-size">
									Le comptage des visites des pages personnelles diffère du comptage de toutes les visites des pages. Pour gérer tous les accès à une page, le programme doit avoir son compteur 
									sur l'ordinateur serveur. Ce script ne compte que les visites d'un utilisateur déterminé à une page déterminée.
									</p>

									<script type="text/javascript">										
									function cherche_valeur(){
										var valeur = "";
										
										if(document.cookie){
											var valeur_depart = document.cookie.indexOf("=") + 1;
											var valeur_fin = document.cookie.indexOf(";");
										  
											if (valeur_fin == -1){
												valeur_fin = document.cookie.length;
												valeur = document.cookie.substring(valeur_depart,valeur_fin);
											}
										 
											return valeur;
										}
									}

									function fixer_valeur(indicateur, valeur, expire){
										var maintenant = new Date();
										var temps = new Date(maintenant.getTime() + expire);
										document.cookie = indicateur+"="+valeur+"; expires="+temps.toGMTString()+";";
									}

									function etat_compteur(){
										var peremption = 1000*60*60*24*365;
										var nombre = cherche_valeur();
										var compteur = 0;
											
										if(nombre != "") compteur = parseInt(nombre);
											if(document.cookie){
												compteur = compteur + 1;
												fixer_valeur("compteur",compteur,peremption);
											} else{
												compteur = 1;
												fixer_valeur("compteur",compteur,peremption);
										}
										
										return(compteur);
									}										
									</script>
										
									<hr/>

									<div class="center">
										<h2 class="titles-paragraphs">Nombre de visites sur ce site</h2>
											
										<hr/>

										<script type="text/javascript">										
										var x = etat_compteur();
										document.write("<p class='paragraphs-size'>Ceci est votre <b>" + x + "ème<\/b> visite sur cette page!<\/p>");										
										</script>
											
										<p class="paragraphs-size">Utilisez donc la fonction actualiser/recharger de votre navigateur ...</p>
											
										<script type="text/javascript">  
										function open_infos_4(){
											window.open('http://ilovejs.gabriel-cassano.be/codes/visites.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>
											
										<br/>
										
										<a href="#null" onclick="javascript:open_infos_4();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>		
									</div>									
								</div>								
							</div>	
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Une minuterie</h2>
									</div>
									
									<hr/>
										
									<p class="paragraphs-size">
									On peut créer un simple compteur numérique qui s'incrément e et qu'on peut lancer, stopper puis redémarrer d'un clic.											
									</p>										

									<div class="center">
										<h2 class="titles-paragraphs">Cliquez pour lancer la minuterie.</h2>

										<script type="text/javascript">										
										var compteur = 1;
										var interv;
										var encours;

										function incrementer(){
											compteur++;
											document.formulaire.heure.value=compteur;
										}

										function appui(){
											if(encours == 1){
												clearInterval(interv);
												document.formulaire.bouton.value = "Reprendre";
												encours = 0;
											} else{
												interv = setInterval("incrementer()",100);
												document.formulaire.bouton.value = "Arrêter";
												encours = 1;
											}
										}

										function init(){
											// pas de démarrage automatique : interv = setInterval("incrementer()",100);
											document.formulaire.bouton.value = "Commencer";
										}									
										</script>
											
										<form name="formulaire" id="formulaire-minuterie">
											<input type="text" value="" name="heure" onclick="incrementer();" id="input-style"/>												
											<input type="button" value="Arreter" class="btn btn-success btn-lg" onclick="appui();" name="bouton" />
										</form>
										
										<script type="text/javascript">  
										function open_infos_3()
										{
											window.open('http://ilovejs.gabriel-cassano.be/codes/minuterie.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>
										
										<br/>
										
										<a href="#null" onclick="javascript:open_infos_3();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>		
									</div>									
								</div>							
						</div>
					</div>				
				</div>
			</div>
		</section>
		
		<section id="fenetres">
			<div class="container">
				<div class="row">
					<div class="panel panel-default">
						  <div class="panel-heading">
							<h1 class="center titles-paragraphs">Les fenêtres</h1>
							<div class="spacer center"><i class="fa fa-windows" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></div>
						  </div>
					  
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Ouvrir une nouvelle fenêtre pop-up</h2>
									</div>
									
									<hr/>
										
									<p class="paragraphs-size">
									Ouvrir une pop-up n'est pas nécessaire utilisé pour faire de la publicité, les pop-up servent surtout à séparer de différents contenus, lorsque, par exemple, 
									on veut afficher une image grand format, il est plus adapté de l'ouvrir dans une nouvelle fenêtre ou quand on clique sur un bouton d'aide, il est plus adapté
									d'avoir une fenêtre différente.
									</p>	

									<p class="paragraphs-size">
									La méthode JavaScript pour ouvrir une fenêtre est "window.open", cette méthode peut avoir plusieurs arguments :
										
										<ul class="list-group center paragraphs-size">
											<li class="list-group-item"><span class="font-weigth">L'url de la fenêtre :</span> l'url qui sera chargée dans la nouvelle fenêtre</li>
											<li class="list-group-item">
												<span class="font-weigth">Le nom de la nouvelle fenêtre :</span> 
												le nom de la nouvelle fenêtre, c'est très utile pour que deux fenêtres puissent communiquer entre 
												elles.
											</li>
											 <li class="list-group-item"><span class="font-weigth">Les options :</span> différentes options permettant de configurer la nouvelle fenêtre : sa taille, sa position,...</li>
										</ul> 				
									</p>
										
									<p class="paragraphs-size">
									Il existe différentes options, certaines sont désactivées dans les navigateurs pour des raisons de sécurité :
										
										<ul class="list-group center paragraphs-size">
											<li class="list-group-item"><span class="font-weigth">with :</span>la largeur de la fenêtre en px</li>
											<li class="list-group-item"><span class="font-weigth">height :</span> la hauteur de la fenêtre en px</li>											  
											<li class="list-group-item"><span class="font-weigth">left :</span>la position de la fenêtre à partir de la droite en px</li>
											<li class="list-group-item"><span class="font-weigth">top :</span>la position de la fenêtre à partir du haut en px</li>
											<li class="list-group-item"><span class="font-weigth">top :</span>la position de la fenêtre à partir du haut en px</li>
											<li class="list-group-item"><span class="font-weigth">menubar :</span>affichage du menu, yes pour oui, no pour non</li>
											<li class="list-group-item"><span class="font-weigth">toolbar :</span>affichage de la barre d'outils, yes pour oui, no pour non</li>
											<li class="list-group-item"><span class="font-weigth">scrollbars :</span>affichage de la barre de défilement, yes pour oui, no pour non</li>
										</ul> 				
									</p>

									<script type="text/javascript">										
									function open_infos()
									{
										window.open('https://gabriel-cassano.be/','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}					
									</script>

									<div class="center paragraphs-size">
										<a href="#null" onclick="javascript:open_infos();" class="btn btn-success btn-lg"><i class="fa fa-windows" aria-hidden="true"></i>&nbsp; Ouvrir la Pop-Up</a>											
										<hr/>
										
										<script type="text/javascript">										
										function open_infos_code()
										{
											window.open('img/popup.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}					
										</script>
										<a href="#null" onclick="open_infos_code();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>
										<hr/>
									</div>									
								</div>								
							</div>
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs top-title">Ouvrir plusieurs fenêtres pop-up simultanément</h2>
									</div>
										
									<p class="paragraphs-size">
									On peut ouvrir plusieurs fenêtres popup simultanément mais au risque d'agacer l'utilisateur qui navigue sur le site. 										 
									</p>

									<script type="text/javascript">										
									function popupmulti()
									{
										window.open('http://eltc.gabriel-cassano.be/','w1','menubar=no, scrollbars=no, top=70, left=500, width=900, height=800');
										window.open('http://movieslibrary.gabriel-cassano.be/#/list','w2','menubar=no, scrollbars=no, top=100, left=500, width=900, height=800'); 
										window.open('https://gabriel-cassano.be/','w3','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}					
									</script>
									
									<hr/>

									<div class="center">
										<a href="#null" onclick="popupmulti();" class="btn btn-success btn-lg"><i class="fa fa-windows" aria-hidden="true"></i> Ouvrir des popup</a>											
									</div>	

									<hr/>

									<div class="center">
										<script type="text/javascript">										
										function open_popups()
										{
											window.open('img/multiple_popup.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}					
										</script>
										<a href="#null" onclick="open_popups();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>											
									</div>	
									
									<hr/>
								</div>
							</div>
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs top-title">Ouvrir et fermer une fenêtre</h2>
									</div>
										
									<p class="paragraphs-size">
									On peut ouvrir une fenêtre en JavaScript, à l'aide d'un bouton, par exemple, cela ouvrira la page dans un nouvel onglet et dans
									cette page nous aurons un lien pour fermer la fenêtre. 										 
									</p>
									
									<hr/>

									<script type="text/javascript">										
									function ouvrirPopup()
									{
										maPopup = window.open("http://ilovejs.gabriel-cassano.be/close_window.html");
										maPopup.focus();
										maPopup.onbeforeunload = function(){fermeturePopup();};
									}             					
									</script>
									
									</p>								

									<div class="center">
										<a href="#null" onclick="ouvrirPopup();" class="btn btn-success btn-lg"><i class="fa fa-windows" aria-hidden="true"></i> Ouvrir la fenêtre</a>											
										<hr/>
									</div>									
								</div>
								
								<div class="center">
									<script type="text/javascript">										
									function open_close()
									{
										window.open('img/open_close.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}					
									</script>
									
									<a href="#null" onclick="open_close();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>												
								</div>								
							</div>
					</div>				
				</div>
		</section>
		
		<section id="menus">
			<div class="container">
				<div class="row">
					<div class="panel panel-default">
						  <div class="panel-heading">
							<h1 class="center titles-paragraphs">Les menus</h1>
							<div class="spacer center"><i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-bars" aria-hidden="true"></i></div>
						  </div>
					  
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Construire un menu déroulant</h2>
									</div>
									
									<hr/>
										
									<p class="paragraphs-size">
									Lorsqu'il s'agit de construire un menu consistant, il vaut mieux utiliser un "select" pour y placer les différents liens qui composent le menu.
									On peut par exemple s'appuyer sur l'indice de chaque option à laquelle "value" n'a pas été attribué.
									</p>
										
										
									<script type="text/javascript">										
									function Lien() {
										i = document.Choix.Liste.selectedIndex;
										if (i == 0) return;
										url = document.Choix.Liste.options[i].value;
										parent.location.href = url;
									}				
									</script>

									<div class="center paragraphs-size">
										<form name="Choix">
											<select name="Liste" onChange="Lien()" id="deroulant">
												<option value="">Choisir un site
												<option value="http://www.secretfaces.be/">Secret Faces
												<option value="https://gabriel-cassano.be/">Profil professionnel
												<option value="http://www.homesweethomedesign.be/">Titans club
											</select>
										</form>											
									</div>	

									<script type="text/javascript">										
									function menu_deroulant()
									{
										window.open('img/menu_deroulant.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}					
									</script>
									
									<a href="#null" onclick="menu_deroulant();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>
									
									<hr/>
									
									<div class="cv-wrapper">
										<div class="center">
											<h2 class="titles-paragraphs">Afficher une option lors d'un choix d'un menu déroulant</h2>
										</div>
										
										<hr/>
											
										<p class="paragraphs-size">
										On peut également afficher un texte lorsqu'une option est choisie dans un menu déroulant.
										</p>										
										
										<script type="text/javascript">										
										function savoir(){
											var indice_selectionne=document.pige.compris.selectedIndex;
											var chango=document.pige.compris.options[indice_selectionne].value;
												switch (chango){
													case "ni":document.pige.texter.value="Développement application";break;
													case "na":document.pige.texter.value="Missions helpdesk";break;
													case "ne":document.pige.texter.value="Développement Java";break;
													case "nu":document.pige.texter.value="Création de mails";break;
													case "no":document.pige.texter.value="Installation et config";break;
													case "ny":document.pige.texter.value="Concerts";break;
													default:document.pige.texter.value="Repos";break;
												}
										}			
										</script>

										<div class="center paragraphs-size">
											<form name="pige">
												<select name="compris" onchange="savoir()" class="selectday">
													<option value="ni">lundi</option>
													<option value="na">mardi</option>
													<option value="ne">mercredi</option>
													<option value="nu">jeudi</option>
													<option value="no">vendredi</option>
													<option value="ny">samedi</option>
													<option value="nm">dimanche</option>
												</select>
												<input type="text" name="texter" size="25" value="Vivement les vacances !" class="selectday">
											</form> 										
										</div>	

										<script type="text/javascript">										
										function choice_menu()
										{
											window.open('img/choice_menu.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}					
										</script>
												
										<a href="#null" onclick="choice_menu();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>									
									</div>	
								</div>
							</div>
					</div>						
				</div>	
			</div>				
			</div>			
		</section>		
		
		<section id="formulaires">
			<div class="container">
				<div class="row">
					<div class="panel panel-default">
						  <div class="panel-heading">
							<h1 class="center titles-paragraphs">Les formulaires</h1>
							<div class="spacer center"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <i class="fa fa-cloud-upload" aria-hidden="true"></i> <i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
						  </div>
						  
						  <div class="panel-body">
							<div class="cv-wrapper">
								<div class="center">
									<h2>La validation d'un formulaire complet</h2>
								</div>										
									
								<p class="paragraphs-size">
								La validation de formulaire normalement utilisée sur un serveur, après que l'utilisateur (le client) a entré toutes les données nécessaires, puis 
								appuyé sur le bouton de soumission. Si les données entrée par l'utilisateur ne sont pas correctes ou sont manquantes, le serveur doit renvoyer toutes 
								les données à l'utilisateur et demander que le formulaire soit soumis à nouveau avec des informations correctes. C'est un long processus qui est fardeau
								pour le serveur. JavaScript fournit un moyen de valider les données du formulaire sur l'ordinateur de l'utilisateur avant de l'envoyer au serveur web. 
								La validation remplit généralement deux fonctions :
										
									<ul class="list-group paragraphs-size">
										<li class="list-group-item">
										La validation de base : tout d'abord, le formulaire doit être vérifié pour s'assurer que tous les champs obligatoires soient remplis. Il faudrait simplement 
										faire une boucle dans chaque champ du formulaire et vérifier les données.
										</li>
										  
										<li class="list-group-item">
										La validation du format des données : deuxièmement, les données entrées doivent être vérifiées, on doit vérifier que ce sont des valeurs correctes. Le code 
										doit inclure une logique appropriée pour tester l'exactitude des données.
										</li>										
									</ul>
								</p>
									
								<script language="javascript">									
								function validate(){
								    if(document.myForm.Name.value == "" ){
										alert("Entre votre nom, svp !" );
										document.myForm.Name.focus() ;
										return false;
									}
											 
									if(document.myForm.EMail.value == "" ){
										alert("Entrez votre email, svp !" );
										document.myForm.EMail.focus() ;
										return false;
									}
											 
									if(document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) || document.myForm.Zip.value.length != 5 ){
										alert("Entrez votre code postal, svp !" );
										document.myForm.Zip.focus() ;
										return false;
									}
											 
									if(document.myForm.Country.value == "-1" ) {
										alert("Entrez votre pays, svp!" );
										return false;
									}
										
									return( true );
								}
								</script>										
										
								<div class="center paragraphs-size">
									<form action="/cgi-bin/test.cgi" name="myForm" onsubmit="return(validate());">
										<table class="table table-inverse">
											<thead>
												<tr>
													<td align="right">Nom</td>
													<td><input type="text" name="Name" /></td>
												</tr>														
											</thead>
												  
											<tbody>
												<tr>
													<td align="right">EMail</td>
													<td><input type="text" name="EMail" /></td>
												</tr>
													
												<tr>
													<td align="right">Code postal</td>
													<td><input type="text" name="Zip" /></td>
												</tr>
													
												<tr>
													<td align="right">Pays</td>
													<td>
														<select name="Country">
															<option value="-1" selected>[choisissez votre pays]</option>
															<option value="1">Belgique</option>
															<option value="2">Allemagne</option>
															<option value="3">Russie</option>
														</select>
													</td>
												</tr>
													
												<tr>
												   <td align="right"></td>
												   <td><input class="btn btn-success btn-lg" type="submit" value="Envoyer" /></td>
												</tr>
										 </tbody>
										</table>
									</form>
								</div>
										
								<script type="text/javascript">										
								function form()
								{
									window.open('http://ilovejs.gabriel-cassano.be/codes/form.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>
								
								<a href="#null" onclick="form();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																							
							</div>
							
							<hr/>
										
							<div class="panel-heading">
								<h1 class="center titles-paragraphs">Les propriétés</h1>							
							</div>
						  
						  <div class="panel-body">
							<div class="cv-wrapper">
								<p class="paragraphs-size">
								Les formulaire sont simple à utiliser, il faut d'abord mémoriser quelques propriétés de base. Il est possible d'accéder à n'importe quel
								propriété d'un élément HTML juste en tapant son nom, c'est pareil pour les propriétés spécifiques aux élements d'un formulaire comme 
								"value","disabled","checked".
								</p>												

								<div class="center">
									<h2 class=" titles-paragraphs">Lire une valeur dans une zone de texte</h2>
								</div>	

								<hr/>
								
								<p class="paragraphs-size">
								Quand on entre une valeur et qu'on appuie sur le bouton pour contrôle celle-ci, elle affiche la valeur entrée dans un alert.
								</p>										
										
								<script language="JavaScript">
								function controle(form1) {
									var test = document.form1.input.value;
									alert("Vous avez tapé : " + test);
								}
								</script>										

								<div class="center paragraphs-size">
									<form name="form1" class="selectday">
										<div class="form-group">
											<label for="nom">Entrez un texte</label>
											<input type="text" class="paragraphs-size" name="input" class="form-control">												
										</div>							
												
										<input type="button" class="btn btn-success btn-lg paragraphs-size" name="but" value="Afficher" onClick="controle(form1)">	
									</form>	
											
									<script type="text/javascript">										
									function form_controle()
									{
										window.open('img/lecture.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>											
									
									<a href="#null" onclick="form_controle();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
								</div>	
							</div>
							
							<hr/>												
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="center titles-paragraphs">Les booléens avec "disabled", "checked" et "readonly"</h2>
									</div>		
									
									<p class="paragraphs-size">
									Contrairement à la propriété value, ces 3 propriétés ne s'utilisent pas de la même manière qu'en HTML où il suffit d'écrire, par exemple,
									"disabled=disabled" pour désactiver un champ texte. En JavaScript, ces 3 propriétés deviennent booléennes, on peut donc attribuer une valeur 
									"true" ou "false" à chacun de ces propriétés pour activer ou désactiver un champ de texte.	
									Pour vérifier quel bouton radio à été coché, il faudra utiliser une boucle "for".
									</p>	

									<p class="paragraphs-size">Les boutons radio possèdent des propriétés qui s'appliquent aussi aux checkbox.</p>

										<center>										
											<table class="table table-bordered table-hover table-responsive paragraphs-size"> 
												<thead>
													<tr> 
														<th class="center">Propriété</th>
														<th class="center">Description</th>                                          
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<td>name</td>   
														<td>indique le nom du contrôle. Tous les boutons portent le même nom</td> 
													</tr>

													<tr>
														<td>index</td>   
														<td>l'index ou le rang du bouton radio en commençant par 0</td>                                            
													</tr>

													<tr>
														<td>checked</td>   
														<td>indique l'état en cours de l'élément radio</td>
													</tr>

													<tr>
														<td>defaultchecked</td>   
														<td>indique l'état du bouton sélectionné par défaut</td> 
													</tr>
																
													<tr>
														<td>value</td>   
														<td>indique la valeur de l'élément radio</td> 
													</tr>
												 </tbody>
											</table> 
										</center>											
										
										<script language="JavaScript">			
										function choixprop(form3) {
											if (form3.choix[0].checked) { alert("Vous avez choisi la proposition " + form3.choix[0].value) };
											if (form3.choix[1].checked) { alert("Vous avez choisi la proposition " + form3.choix[1].value) };
											if (form3.choix[2].checked) { alert("Vous avez choisi la proposition " + form3.choix[2].value) };
										}
										</script>

										<div class="center">	
											<span class="paragraphs-size">Entrez votre choix :</span>
											
											<br/>
											
											<form name="form3">
												<p class="paragraphs-size">
													<input type="radio" name="choix" value="1">Choix numéro 1
													<br/>
													<input type="radio" name="choix" value="2">Choix numéro 2
													<br/>
													<input type="radio" name="choix" value="3">Choix numéro 3
													<br/><br/>													
													<input type="button" class="btn btn-success btn-lg paragraphs-size" name="choix" value="Quel et votre choix" onClick="choixprop(form3);">													
												</p>
											</form>
										</div>	

														
										<script type="text/javascript">										
										function form_radio()
										{
											window.open('img/radio.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>
										
										<br/>
										
										<a href="#null" onclick="form_radio();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>

										<hr/>										
								</div>
							</div>
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Ecrire une valeur dans une zone de texte</h2>
									</div>
									
									<p class="paragraphs-size"> 
									Quand on entre une valeur et qu'on appuie sur le bouton pour contrôle celle-ci, elle s'affiche dans la zone de texte de sortie.
									</p>

									<div class="center">									
										<form name="form2" class="paragraphs-size">
											<label for="nom">Entrez un texte</label>
											<br/><br/>
											<label for="nom">Zone de texte d'entrée</label>
											<br/>
											<input type="text" class="paragraphs-size" name="entered" class="form-control">										
											<br><br>
											<label for="nom">Zone de texte de sortie</label>
											<br/>			
											<input type="text" class="paragraphs-size" name="output" class="form-control">
											<br/><br/>
											<input type="button" name="bouton" value="Afficher" onClick="afficher(form2);" class="btn btn-success btn-lg">
										</form>
									</div>	
										
									<script language="JavaScript">			
									function afficher(form2){ 
										var formcontent = document.form2.entered.value;		
										document.form2.output.value = formcontent;
									}
									</script>

									<script type="text/javascript">										
									function form_ecrire()
									{
										window.open('img/ecrire.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
									
									<br/>

									<a href="#null" onclick="form_ecrire();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
									
									<hr/>
								</div>
							</div>							
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Les listes déroulantes</h2>
									</div>	
									
									<p class="paragraphs-size">
									Les listes déroulantes possèdent leurs propriétés, il faut retenir que deux parmis toutes celles qui existent sont importantes :
									slectedIndex, qui donne l'index, donc l'identifiant de la valeur sélectionné et options, qui liste dans un tableau les éléments 
									"option" de la liste déroulante. 
									</p>
										
									<div class="center paragraphs-size">												
										<select id="list">
											<option>Sélectionnez votre sexe</option>
												<option>Homme</option>
												<option>Femme</option>
										</select>
									</div>	
										
									<script language="JavaScript">			
									 var list = document.getElementById('list');
											
										list.addEventListener('change', function() {
										// On affiche le contenu de l'élément <option> ciblé par la propriété selectedIndex
										alert(list.options[list.selectedIndex].innerHTML);
									});
									</script>										

									<script type="text/javascript">										
									function form_list()
									{
										window.open('img/list.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
									
									<br/>
												
									<a href="#null" onclick="form_list();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>
									
									<hr/>
								</div>
							</div>						
					  
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Marquer un champs requis</h2>
									</div>	
									
									<p class="paragraphs-size">
									Lors du remplissage d'un formulaire, il arrive parfois que des champs particuliers doivent obligatoirement être remplis par l'utilisateur
									avant que le formulaire soit transmis. Un script JavaScript peut permettre de vérifier que certains champs sont bien remplis. Dans l'exemple, 
									nous utiliserons le CSS directement dans le script pour mettre en évidence les champs qui ne sont pas remplis, en leur donnant une couleur de 
									fond et on affichera une message d'avertissement à l'utilisateur, à l'aide d'une fenêtre d'alerte. La vérification survient lorsque l'utilisateur
									clique sur le bouton d'envoi du formulaire. Le principe de base est que les attributs class dans le code HTML déterminent les champs qu'on souhaite
									vérifier mais ici, on utilisera l'attribut name des champs texte pour atteindre les champs avec le JavaScript.
									</p>										
										
									<script language="JavaScript">
									function couleur(obj) {
										obj.style.backgroundColor = "#FFFFFF";
									}
										
									function check() {
										var msg = "";
											
										if (document.nom_du_formulaire.nom_du_champ_email.value != ""){
											indexAroba = document.nom_du_formulaire.nom_du_champ_email.value.indexOf('@');
											indexPoint = document.nom_du_formulaire.nom_du_champ_email.value.indexOf('.');
											
											if ((indexAroba < 0) || (indexPoint < 0))      {
												document.nom_du_formulaire.nom_du_champ_email.style.backgroundColor = "#FE642E";
												 msg += "Le mail semble incorrect\n";
											 }
									    } else{
											document.nom_du_formulaire.nom_du_champ_email.style.backgroundColor = "#FE642E";
											msg += "Vous avez devez entrer un email .\n";
									    }
											
										if (document.nom_du_formulaire.nom_du_champ_à_vérifier.value == ""){
											msg += "Le champ est vide!\n";
											document.nom_du_formulaire.nom_du_champ_à_vérifier.style.backgroundColor = "#FE642E";
										}

										if (msg == "") return(true);
										else{
											alert(msg);
											return(false);
										  }
									}
									</script>

									<div class="center">
										<form name="nom_du_formulaire" class="paragraphs-size" method="post" action="test.php" onSubmit="return check();">
											<div class="form-group">
												<label for="nom">Votre Nom (obligatoire)</label>
												<input id="inp" name="nom_du_champ_à_vérifier" type="text" class="form-control" onKeyUp="javascript:couleur(this);" >												
											</div>
												
											<div class="form-group">
												<label for="email">Votre email (obligatoire)</label>
												<input name="nom_du_champ_email" type="text" class="form-control" onKeyUp="javascript:couleur(this);" >
											</div>
												
											<div class="form-group">
												<label for="email">Votre date de naissance (facultatif)</label>
												<input name="nom_du_champ_facultatif" class="form-control" type="text" >
											</div>
												
											<button type="submit" class="btn btn-success btn-lg selectday">Envoyer</button>
										</form>

										<script type="text/javascript">										
										function form_js()
										{
											window.open('img/form_js.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}	

										function form_html()
										{
											window.open('img/form_html.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}	
										</script>
											
										<a href="#null" onclick="form_js();" class="btn btn-info btn-lg selectday"><i class="fa fa-download"></i> Code Javascript</a>
										
										<br/>
										
										<a href="#null" onclick="form_html();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code HTML</a>
										
										<hr/>
									</div>											
								</div>
							</div>
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Comparer deux champs</h2>
									</div>
									
									<p class="paragraphs-size">
									C'est quasi systématique : les formulaires d'inscription demandent une double saisie de mot de passe et alert en cas de non correspondance.
									Une première sécurité face à l'oubli possible d'un caractère. Voici un script qui se charge de prendre le contenu des deux champs de type
									"password", de vérifier qu'ils sont tous les deux bien remplis, puis de les comparer. Si et seulement si ils sont identiques, le script 
									valide le formulaire, sinon l'utilisateur revient à la case départ.
									</p>										
										
									<script language="JavaScript">
									function validation(f) {
										if (f.mdp1.value == '' || f.mdp2.value == '') {
											alert('Tous les champs ne sont pas remplis');
											f.mdp1.focus();
											return false;
										} else if (f.mdp1.value != f.mdp2.value) {
											alert('Ce ne sont pas les mêmes mots de passe!');
											f.mdp1.focus();
											return false;
										} else if (f.mdp1.value == f.mdp2.value) {
											return true;
										} else {
											f.mdp1.focus();
											return false;
										}
									}
									</script>

									<div class="center paragraphs-size">
										<form method="post" onSubmit="return validation(this)" >
											<div class="form-group">
												<label for="nom">Entrez votre mot de passe</label>
												<input name="mdp1" type="password" class="form-control">												
											</div>
												
											<div class="form-group">
												<label for="email">Entrez ce mot de passe à nouveau</label>
												<input name="mdp2" type="password" class="form-control" >
											</div>												
												
											<button type="submit" class="btn btn-success btn-lg selectday">Envoyer</button>
										</form>	
											
										<script type="text/javascript">										
										function form_js()
										{
											window.open('img/compare.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>
										
										<a href="#null" onclick="form_js();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
									
										<hr/>
									</div>	
								</div>
							</div>
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Les cases à cocher</h2>
									</div>
									
									<p class="paragraphs-size">
									Les boutons case à cocher sont utilisés pour noter un ou plusieurs choix (pour rappel avec les boutons radio un seul choix) parmi un ensemble
									de propositions. A part cela, sa syntaxe et son usage est tout à fait semblable aux boutons radio sauf en ce qui concerne l'attribut name.
									</p>										
										
									<script language="JavaScript">
									function reponse(form4) {
										if((form4.check1.checked) == true && (form4.check2.checked) == true && (form4.check3.checked) == false && (form4.check4.checked) == true){ 
											alert("C'est la bonne réponse! ") 
										} else{
											alert("Désolé, continuez à chercher.")}
									}
									</script>
										
									<div class="center paragraphs-size">
										Entrez votre choix :
										
										<br/>
										
										<form name="form4" class=" paragraphs-size selectday">
											<input type="checkbox" id="inp" name="check1" value="1"> Choix numéro 1<br/>
											<input type="checkbox" name="check2" value="2"> Choix numéro 2</span>
											<br/>
											<input type="checkbox" name="check3" value="3"> Choix numéro 3
											<br/>
											<input type="checkbox" name="check4" value="4"> Choix numéro 4
											<br/>											
											<br/>											
												
											<input type="button" name="but" value="Corriger" onClick="reponse(form4)" class="btn btn-success btn-lg">											
										</form>
											
										<script type="text/javascript">										
										function form_checkbox()
										{
											window.open('img/checkbox.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>
										
										<a href="#null" onclick="form_checkbox();"class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
									
										<hr/>
									</div>
								</div>
							</div>						

							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Valider une url</h2>
									</div>
									
									<p class="paragraphs-size">
									La validation d'url en JavaScript présente quelques avantages para rapport à la validation d'une url en utilisant le PHP car le 
									processus de validation se déroule dans le navigateur, cela signifie qu'aucune demande de serveur ou de rechargement du navigateur
									est nécessaire.
									</p>										
										
									<script language="JavaScript">
									function url_validate(userUrl){
										var regUrl = /^(((ht|f){1}(tp:[/][/]){1})|((www.){1}))[-a-zA-Z0-9@:%_\+.~#?&//=]+$/;

										if(regUrl.test(userUrl) == false){
											document.getElementById("status").innerHTML = "L'url que vous avez entré n'est pas valide";
										} else{
											document.getElementById("status").innerHTML = "Vous avez entré une url valide";
										}
											
									}
									</script>
										
									<div class="center">
										<span id="status" class="paragraphs-size">Veuillez entre une url de site web</span>
										<br/><br/>
										<input type="text" name="website_url" onkeyup="url_validate(this.value);" class="paragraphs-size selectday">
									</div>									

									<script type="text/javascript">										
									function form_url()
									{
										window.open('img/url.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
									
									<br/>
									
									<a href="#null" onclick="form_url();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	

									<hr/>
								</div>
							</div>	
							
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Les méthodes spécifiques à l'élément "form"</h2>
									</div>	
									
									<p class="paragraphs-size">
									Un formulaire possède deux méthodes intéressantes : submit(), qui permet d'effectuer l'envoi d'un formulaire sans l'intervention de l'utilisateur
									et reset(), qui permet de réinitialiser tous les champs d'un formulaire. Ces deux méthodes ont le même rôle que les éléments "input" de type 
									submit ou reset. L'utilisation de ces deux méthodes est simple, il suffit juste de les appeler sans aucun paramètre.
									</p>
																				
									<div class="center">
										<form id="myForm" class="selectday">
											<input type="text" class="center paragraphs-size" value="Entrez un texte" />
											<br />
											<br />
											<input type="submit" value="Soumettre" class="btn btn-success btn-lg" />
											<input type="reset" value="Effacer" class="btn btn-info btn-lg" />
										</form>
									</div>
										  
									<script>
									var myForm = document.getElementById('myForm');
										  
									myForm.addEventListener('submit', function(e) {
										alert('Vous avez envoyé le formulaire !');
										e.preventDefault();
									});
										  
									myForm.addEventListener('reset', function(e) {
										alert('Vous avez réinitialisé le formulaire !');
									});
									</script>	
										
									<script type="text/javascript">										
									function form_submit()
									{
										window.open('img/submit.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
										
									<br/>
										
									<a href="#null" onclick="form_submit();"class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	

									<hr/>
								</div>
							</div>						
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs" >La gestion du focus et de la sélection</h2>
									</div>	

									<p class="paragraphs-size">
									Il existe 2 méthodes, focus() et blur(), permettant respectivement de donner et retirer le focus à un élément.
									</p>
									
									<div class="center paragraphs-size">
										<input id="text" type="text" value="Entrez un texte" class="center" />
										<br><br>
										<input type="button" value="Donner le focus" class="btn btn-success btn-lg selectday" onclick="document.getElementById('text').focus();" />
										<input type="button" value="Retirer le focus" onclick="document.getElementById('text').blur();" class="btn btn-primary btn-lg selectday" />	
									</div>	
										
									<script type="text/javascript">										
									function form_focus()
									{
										window.open('img/focus.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
									
									<br/>
									
									<a href="#null" onclick="form_focus();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																						
																					
									<hr/>
								</div>
							</div>
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">La méthode select()</h2>
									</div>	

									<p class="paragraphs-size">
									Dans le même genre, il existe la méthode select() qui, en plus de donner le focus à l'élément, sélectionne le texte si cela est 
									possible.
									</p>
																				
									<div class="center">
										<input class="center" id="text-select" type="text" value="Entrez un texte" />
										<br /><br />
										<input type="button" value="Sélectionner le texte" onclick="document.getElementById('text-select').select();" class="btn btn-success btn-lg selectday"/>	
									</div>	
										
									<script type="text/javascript">										
									function form_select()
									{
										window.open('img/select.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
									
									<br/>
									
									<a href="#null" onclick="form_select();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	

									<hr/>
								</div>
							</div>
							

							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">La validation d'un email</h2>
									</div>	
									
									<p class="paragraphs-size">
									C'est un point très important lors de la valiation d'un formulaire HTML. Une email est une chaîne, un sous-ensemble de caractères ASCII, 
									séparée en deux parties par le symbole "@", et un domaine. La longeur de la partie "texte" peut comporte jusqu'à 64 caractères et le nom 
									du domaine peut comporter jusqu'à 253 caractères. La partie "texte" peut contenir : des lettres majuscules (A-Z) et/ou minuscules (a-z),
									des chiffres (0-9), des caractères.
									</p>
									
									<script language="javascript">
									function checkEmail(inputvalue){	
										var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
										
										if(pattern.test(inputvalue)){         
											alert("Adresse email valide");   
										}else{   
											alert("Format de l'adresse email pas valide."); 
										}
									}
									</script>
										
									<div class="center">
										<form name="signupform" class="selectday">
											<input name="email" type="text" class="paragraphs-size inputs center selectday" id="email_address" value="Entrez une adresse email" size="35" maxlength="255">
											<br/>
											<input name="summit" class="btn btn-success btn-lg" type="submit" value="Vérifier" onClick="checkEmail(document.signupform.email.value)">    
										</form>		
									</div>
									
									<script type="text/javascript">										
									function form_email()
									{
										window.open('img/form.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
									
									<br/>
												
									<a href="#null" onclick="form_email();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																							
									
									<hr/>
								</div>
							</div>
							
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Exemple de formulaire complet</h2>
									</div>
									
									<p class="paragraphs-size">
									Voici un exemple de la vérification d'un formulaire complet
									</p>
									
									<div id="dragandrop">
										<script type="text/javascript">										
										function complete_form()
										{
											window.open('http://ilovejs.gabriel-cassano.be/formulaire_inscription.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>				
									
										<br/>
										
										<a href="#null" onclick="complete_form();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
										
										<script type="text/javascript">										
										function fc()
										{
											window.open('http://ilovejs.gabriel-cassano.be/codes/cf.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<br/>
										<br/>
																
										<a href="#null" onclick="db();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
									</div>
								</div>
							</div>									
					</div>				
				</div>
			</div>
	</section>
 
	<section id="dom">
		<div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="center titles-paragraphs">Le DOM</h1>
						<div class="spacer center"><i class="fa fa-html5" aria-hidden="true"></i> <i class="fa fa-html5" aria-hidden="true"></i> <i class="fa fa-html5" aria-hidden="true"></i></div>
					</div>
						  
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Ajouter un noeud : la méthode appendChild()</h2>
							</div>										
							
							<p class="paragraphs-size">
							La méthode appendChild(nouveau noeud) de l'objet Node permet d'insérer un noeud enfant à la fin des noeuds enfants d'un noeud parent.
							Cette méthode accepte comme paramètre "nouveau noeud" qui représente le nouveau noeud. Elle renvoie l'objet Node qui représente le nouveau 
							noeud enfant inséré.
							</p>
										
							<div class="center paragraphs-size">
								<select size="5"  id="affiche">
									<option>Option 0</option>
									<option>Option 1</option>
								</select>
								<br><br>
								<p><a href="javascript:addfils()" class="btn btn-success btn-lg">Ajouter</a></p>		
							</div>
										
							<script type="text/javascript">
							var conteneur= document.getElementById("affiche");
							var fragment=document.createDocumentFragment();
							var xmlli = document.createElement("option");
							var texte=document.createTextNode("option 2");
							xmlli.appendChild(texte);
										
							function addfils(){
								var xmlli2 = xmlli.cloneNode(true);
								var nodeList= conteneur.getElementsByTagName("option");
								conteneur.appendChild(xmlli2)
							}
							</script>	
										
							<script type="text/javascript">										
							function add_node()
							{
								window.open('img/add_node.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							<a href="#null" onclick="add_node();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
							<hr/>
						</div>
					</div>
					
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Supprimer un noeud : la méthode appendChild()</h2>
							</div>										
						
							<p class="paragraphs-size">
							Pour supprimer un noeud, il faut utiliser la méthode removeChild() de l'objet Node qui permet de supprimer un noeud enfant. Cette méthode 
							removeChild(Noeudenfant) accepte comme paramètre Noeudenfant, qui représente le noeud enfant à supprimer. Cette méthode renvoie le noeud 
							supprimé.
							</p>
										
							<script type="text/javascript">
							function supprimer(){
								document.getElementById("divexecution").removeChild(document.getElementById("monimage3"));
							}
							</script>
										
							<div class="center">
								<div class="execution" id="divexecution">
									<img src="img/sf.png" id="monimage3" />
									<br><br>
												
									<p>
										<input type="button" value="Supprimer l'image" onClick="supprimer()" class="btn btn-success btn-lg"/>
									</p>
								</div>		
							</div>	
										
							<script type="text/javascript">										
							function del_node()
							{
								window.open('img/del_node.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							
							<a href="#null" onclick="del_node();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>

							<hr/>									
						</div>
					</div>

					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Remplacer un noeud : la méthode replaceChild()</h2>
							</div>										
						

							<p class="paragraphs-size">
							La méthode replaceChild() remplace un noeud enfant par un nouveau noeud. Le nouveau noeud peut être un noeud existant dans le document, 
							ou on peut créer un nouveau noeud. 
							</p>
										
							<p class="paragraphs-size">
							On peut par exemple remplacer un noeud de texte "li" dans une liste avec un nouveau noeud de texte.	On va créer un nouveau noeud texte 
							et ensuite, on va remplacer le premier noeud enfant du premier élément de la liste par le noeud de texte nouvellement créé.
							</p>
										
							<div class="center">
								<span class="paragraphs-size"><ul id="myList"><li>Coffee</li><li>Tea</li><li>Milk</li></ul></span>
										
								<button onclick="myFunction();" class="btn btn-success btn-lg selectday">Remplacer</button>	
							</div>
									
							<script type="text/javascript">	
							function myFunction() {								
								// Création d'un nouveau noeud de texte "Water"
								var textnode = document.createTextNode("Water");
							
								// Récupère le premier noeud enfant d'un élément.
								var item = document.getElementById("myList").childNodes[0];
								
								// Remplace le premier noeaud enfant de liste par le nouveau noeud texte.
								item.replaceChild(textnode, item.childNodes[0]);
							}
							</script>
									
							<script type="text/javascript">										
							function replace_node()
							{
								window.open('img/replace_node.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							
							<a href="#null" onclick="replace_node();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																							
		
							<hr/>
							</div>
					</div>
					
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Créer des pages dynamiques</h2>
							</div>										
						
							<p class="paragraphs-size">
							Pour que les pages soient agérables à consulter, elles doivent respecter un certain nombre de critères, en proposant notamment un bon 
							contenu, une conception de qualité, un soin des détails et une bonne vitesse de chargement. L'une des méthodes pour accélérer le chargement 
							des pages et proposer à l'utilisateur une interface intéressante et interactive, en utilisant le JavaScript pour mettre à jour les éléments 
							de la page dans le navigateur. Au lieu que le serveur Web restitue les pages telles que l'utilisateur doit les apercevoir, il fournit un script
							au navigateur, qui exploite la puissance de l'ordinateur pour donner vie à la page. Les pages contrôlées par des scripts de ce genre sont appelés 
							des pages dynamiques. En déplaçant le traitement du côté serveur vers le côté client, sur l'ordinateur de l'utilisateur, on obtient de meilleures
							performances et on peut personnaliser les interactions de l'utilisateur dans une certaine mesure.
							</p>
							
							<hr/>
									
							<div class="center">
								<h2 class="titles-paragraphs">Manipulation des dates/heures</h2>
							</div>
							
							<hr/>
									
							<ul class="list-unstylled">
								<li>
									<div class="center">
										<h2 class="titles-paragraphs">L'objet Date</h2>
												
										<p class="paragraphs-size">
										Il permet d’accéder et de manipuler le format date et heure. Les méthodes sont très semblables au Java, elles enregistrent en milliseconde depuis le 1er Janvier 1970 00 :00 :00, 
										Pour manipuller une date ou obtenir la date du jour vous devez créer un objet date. Il y a quatre façons de faire.
										</p>
												
										<ul class="list-unstylled paragraphs-size">
											<li>
											NomObjet = new Date() : permet d'obtenir la date du jour dans le format MM/JJ/AA
											<br/>
											<b>var dAujourdhui = new Date();</b>												
											</li>
													
											<li>
											NomObjet = new Date("mois Jour, année heures:minutes:secondes") : permet de forcer une date avec l'heure
											<br/>
											<b>var dNoel = new Date("February 5, 2001 18:15:00");</b>
											</li>
																									
											<li>
											Les formats integer : en n'initialisant pas l'heure (heures, minutes, secondes), leur valeur sera à 0.											<br/>
											<b>NomObjet = new Date(année, mois, jour)</b>
											<br/>
											<b>NomObjet = new Date(année, mois, jour, heures, minutes, secondes)</b>
											</li>											
										</ul>
									</div>	
									
									<hr/>
									
									<div class="center">
										<h2 class="titles-paragraphs">Les méthodes</h2>
												
										<p class="paragraphs-size">
										Une fois votre objet crée ou la date du jour obtenu, vous pouvez utiliser les méthodes suivantes pour manipuler l'objet.
										</p>
												
										<ul class="list-unstylled paragraphs-size">
											<li>
											<b>getDate() :</b> retourne le jour du mois pour une date spécifique.																								
											</li>
													
											<li>
											<b>getDay() :</b> retourne le jour de la semaine pour une date spécifique. Zéro pour dimanche, 1 pour lundi et ainsi de suite.																						
											</li>
													
											<li>
											<b>getHours() :</b> retourne l’heure d’une date spécifique. Entre 0 et 23.																						
											</li>
													
											<li>
											<b>getMinutes() :</b> retourne les minutes d’une date spécifique. Nombre entre 0 et 59.													
											</li>
													
											<li>
											<b>getMonth() :</b> retourne le mois d’une date spécifique. Nombre entre 0 et 11.													
											</li>
													
											<li>
											<b>getSeconds() :</b> retourne les secondes d’une date spécifique. Nombre entre 0 et 59.
											</li>
													
											<li>
											<b>getTime() :</b> retourne l’heure selon la norme "Greenwich Mean Time GMT" en minute.
											</li>
													
											<li>
											<b>getYear :</b> retourne l’année d’une date spécifique. À partir de 1900.
											</li>

											<li>
											<b>setDate() :</b> change la date d’un mois. Entre 1 et 31
											</li>
												
											<li>
											<b>setHours() :</b> change l’heure d’une date
											</li>																			
										</ul>
									</div>	
								<hr/>
						</div>								
					</div>
					
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Définition d'une date spécifique</h2>
							</div>	
								
							<p class="paragraphs-size">
							On peut définir une date spécifique en passant une chaîne de date au constructeur.
							</p>
									
							<div class="center">
								<script type="text/javascript">	
								var dt = new Date();
								var day = dt.getDate()-16;
								var month = dt.getMonth();
								var year = dt.getFullYear();
												
								document.write("<p class='selectday js-paragraphs-size'>Concert de Cannibal Corpse, le : " + "0" + day + "/" + "0" + month + "/" + year+"</p>");
								</script>	
							</div>
									
							<script type="text/javascript">										
							function specific_date()
							{
								window.open('img/specific_date.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							
							<br/>
							
							<a href="#null" onclick="specific_date();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																					
									
						</div>
					</div>
					
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Ajout et soustraction des jours, des mois et des années </h2>
							</div>	
								
							<p class="paragraphs-size">
							On peut utiliser les méthodes getX et setX de l'objet Date pour définir des dates et des heures spécifiques. On peut 
							définir une date à celle du jour précédent, si nécessaire les valeurs des mois et des années sont également modifiées.
							</p>									
									
							<div class="center">
								<script type="text/javascript">	
								var myDate = new Date("01/01/2018");
								var dayOfMonth = myDate.getDate();
								myDate.setDate(dayOfMonth - 1);

								document.write("<p class='selectday js-paragraphs-size'>"+myDate+"</p>");
								</script>
							</div>
									
							<script type="text/javascript">										
							function modified_date()
							{
								window.open('img/modified_date.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							
							<br/>
							
							<a href="#null" onclick="modified_date();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																					
						</div>
					</div>
					
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Utiliser des jours de la semaine</h2>
							</div>	
							
							<p class="paragraphs-size">
							La méthode getDay obtient le jour de la semaine en tant que nombre compris entre 0(dimanche) et 6(samedi). Elle est différente de la méthode 
							getDate, qui obtient le jour du mois sous forme d'un nombre compris entre 1 et 31. On va définir la date du jour de Thanksgiving aux Etats-Unis, 
							comme étant le quatrième jeudi du mois de novembre. Le script recherche le 1er novembre de l'année actuelle, détermine le premier jeudi puis ajoute 
							3 semaines.
							</p>									
									
							<div class="center">
								<script type="text/javascript">	
								var myDate = new Date();
								myDate.setHours(21, 05, 07, 0);
								myDate.setYear(2017);

								// Détermine qu'on est le 1er novembre
								myDate.setDate(1);
								myDate.setMonth(10);

								// Trouve que c'est un jeudi
								var thursday = 4;
								
								while(myDate.getDay() != thursday) {
									myDate.setDate(myDate.getDate() + 1);
								}

								// Ajoute 3 semaines
								myDate.setDate(myDate.getDate() + 21);

								document.write("<p class='selectday js-paragraphs-size'>"+myDate+"</p>");
								</script>
							</div>
							
							<script type="text/javascript">										
							function weeks()
							{
								window.open('img/weeks.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
								
							<br/>
							
							<a href="#null" onclick="weeks();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																					
							
							<hr/>
						</div>
					</div>
					
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Calcul du temps écoulé</h2>
							</div>	
								
							<p class="paragraphs-size">
							La méthode getTime() retourne le nombre de millisecondes qui se sont écoulées depuis le 1er janvier 1970 à 0h00. Pour toute date antérieure, 
							elle retourne un nombre négatif. On peut utiliser cette méthode pour définir une heure de début et de fin lors du calcul d'un temps écoulé. Il 
							peut être utilisé pour mesurer de petites unités, telles que des secondes et des grandes unités, telles que des jours. 
							</p>

							<p class="paragraphs-size">
							On va obtenir le nombre de millisecondes depuis la date zéro. Pour utiliser des unités plus pratiques, on peut diviser les millisecondes fournies
							par la méthode getTime() par un nombre approprié. Pour convertir des millisecondes en jours, il faut diviser le nombre par 86 400 000 : 1000 millisecondes
							x 60 minutes x 24heures. 
							On va indiquer le temps qui s'est écoulé depuis le premier jour de l'année spécifiée, il utilise des opérations de division pour calculer le temps écoulé en 
							jours, heures, minutes et secondes. Il ne tient pas compte de l'heure d'été.
							</p>
									
							<div class="center">
								<script type="text/javascript">	
								// Transforme les valeurs unitaires en millisecondes 
								var msecPerMinute = 1000 * 60;
								var msecPerHour = msecPerMinute * 60;
								var msecPerDay = msecPerHour * 24;

								// Définit une date et donne les millisecondes 
								var date = new Date('6/15/1990');
								var dateMsec = date.getTime();

								// Définit la date du 1er janvier, à 0h00, de l'année spécifique
								date.setMonth(0);
								date.setDate(1);
								date.setHours(0, 0, 0, 0);

								// Donne la différence en millisecondes
								var interval = dateMsec - date.getTime();
										
								// Calcule combien de jours d'intervalle. Soustrait quelques jours de l'intervalle 
								// déterminer le reste
								var days = Math.floor(interval / msecPerDay );
								interval = interval - (days * msecPerDay );

								// Calcule les heures, les minutes et les secondes 
								var hours = Math.floor(interval / msecPerHour );
								interval = interval - (hours * msecPerHour );

								var minutes = Math.floor(interval / msecPerMinute );
								interval = interval - (minutes * msecPerMinute );

								var seconds = Math.floor(interval / 1000 );

								// Affiche le résultat
								document.write("<span style='color:red;font-weight:bold;font-size:15px;'>Résultat obtenu :</span><span class='js-paragraphs-size'> " + days + " jours, " + hours + " heures, " + minutes + " minutes, " + seconds + " secondes."+"</span>");
								</script>
							</div>
									
							<script type="text/javascript">										
							function time_elapsed()
							{
								window.open('img/time_elapsed.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							
							<br/>
							
							<a href="#null" onclick="time_elapsed();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>

							<hr/>										
						</div>
					</div>
					
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Déterminer l'âge d'un utilisateur</h2>
							</div>	
								
							<p class="paragraphs-size">
							On va utiliser l'anniversaire de l'utilisateur et calculer l'âge en années. Il soustrait l'année de naissance de l'année actuelle, puis 
							soustrait 1 si la date d'anniversaire n'a pas été dépassée dans l'année en cours. Si on veut que ce code s'applique dynamiquement, il faut 
							utiliser un champ texte permettant à l'utilisateur d'entrer sa date d'anniversaire et la récupérer en JavaScript. On remplacera la date 
							par la variable JavaScript qui récupère l'âge entré par l'utilisateur.
							</p>
									
							<div class="center">
								<script type="text/javascript">	
								var birthday = new Date("8/10/1978");
								var today = new Date();
								var years = today.getFullYear() - birthday.getFullYear();

								// Remet la date d'anniversaire à la date courante
								birthday.setFullYear(today.getFullYear());

								// Si l'anniversaire de l'utilisateur ne s'est pas encore produit cette année, on soustrait "1"										
								if (today < birthday)
								{
									years--;
								}
										
							    // On peut inclure du css dans le JavaScript pour l'affichage
								document.write("<span style='color:red;font-weight:bold;font-size:17px;'>Résultat obtenu :</span> <span class='js-paragraphs-size'>Vous avez :  " + years + " ans.</span>");
								</script>
							</div>
							
							<script type="text/javascript">										
							function birthday()
							{
								window.open('img/birthday.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							
							<br/>
							
							<a href="#null" onclick="birthday();" class="btn btn-info btn-lg topbutton"><i class="fa fa-download"></i> Code</a>

							<hr/>									
						</div>
					</div>
						
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Comparaison des dates</h2>
							</div>	
								
							<p class="paragraphs-size">
							Lorsqu'on comparer des dates en JavaScript, il faut garder à l'esprit que l'opérateur == retourne "true" uniquement si les dates des 
							deux côtés de l'opérateur font référence au même objet. Si on définit deux objets Date distincts à la même date, date1 == date2 retourne 
							"false". Un objet Date défini avec uniquement la date mais pas l'heure est initialisé à cette même date à minuit. Si on compare une Date 
							spécifique avec le paramètre Date.now, si on doit savoir que la première date est définie à 0h00 et que le paramètre Date.now ne l'est pas.
							On va vérifier si la date actuelle est la même qu'une date spécifiée ou si elle est antérieur ou postérieure. Pour définir la date actuelle 
							dans todayAtMidn, le script crée un objet 
							</p>
									
							<div class="center">
								<script type="text/javascript">	
								// Donne la date actuelle à 0h00
								var now = new Date(); 
								var todayAtMidn = new Date(now.getFullYear(), now.getMonth(), now.getDate());

								// Définit une date spécifiée à 0h00
								var specificDate = new Date("9/21/2009");

								// Compare les deux dates en comparant les représentations de millisecondes										
								if (todayAtMidn.getTime() == specificDate.getTime())
								{
									document.write("<span style='color:red;font-weight:bold;font-size:17px;'>Résultat obtenu :</span> <span class='js-paragraphs-size'>La date actuelle est la même que celle spécifiée.</span>");
								} else{
									document.write("<span style='color:red;font-weight:bold;font-size:17px;'>Résultat obtenu :</span> <span class='js-paragraphs-size'>La date actuelle est différente de celle spécifiée.</span>");
								}
								</script>
							</div>
									
							<script type="text/javascript">										
							function compareDate()
							{
								window.open('img/compareDate.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							
							<br/>
							
							<a href="#null" onclick="compareDate();" class="btn btn-info btn-lg topbutton"><i class="fa fa-download"></i> Code</a>																					
							
							<hr/>
						</div>
					</div>
						
					<div class="panel-body">
						<div class="cv-wrapper">
							<div class="center">
								<h2 class="titles-paragraphs">Vérifier si la date fournie appartient à une plage spécifique</h2>
							</div>
							
							<p class="paragraphs-size">
							En modifiant l'exemple précédent, on peut vérifier si une date fourni appartient à une plage spécifique.
							</p>
								
							<div class="center">
								<script type="text/javascript">	
								// Donne la date actuelle à 0h00
								var now = new Date();
								var todayAtMidn = new Date(now.getFullYear(), now.getMonth(), now.getDate());

								// Définission de la date de début et la date de fin à une date spécifiée (format ISO)
								var startDate = new Date("2009-06-09T15:20:00Z");
								var endDate = new Date("2011-06-09T15:20:00Z");

								// Comparaison des deux dates en comparant les réprésentations en millisecondes
								if (todayAtMidn.getTime() > startDate.getTime() && 
									todayAtMidn.getTime() < endDate.getTime()) {
									document.write("<span style='color:red;font-weight:bold;font-size:17px;>Résultat obtenu :</span><span class='js-paragraphs-size'>La date fournie est dans la plage spécifique.</span>");
								} else {
									document.write("<span style='color:red;font-weight:bold;font-size:17px;'>Résultat obtenu :</span> <span class='js-paragraphs-size'>La date fournie n'est pas dans la plage spécifique.</span>");
								}
								</script>
							</div>
									
							<script type="text/javascript">										
							function specific()
							{
								window.open('img/specific.png','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>
							
							<br/>
							
							<a href="#null" onclick="specific();" class="btn btn-info btn-lg topbutton"><i class="fa fa-download"></i> Code</a>	
						</div>
					</div>						
				</div>
			</div>
	</section>
	
    <section id="horloge">
		<div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="center titles-paragraphs">Horloge animée en s'aidant du CSS3</h1>
						<div class="spacer center"><i class="fa fa-css3" aria-hidden="true"></i> <i class="fa fa-css3" aria-hidden="true"></i> <i class="fa fa-css3" aria-hidden="true"></i></div>
					</div>
						  
					 <div class="panel-body">
						<div class="cv-wrapper">
							<p class="paragraphs-size">
							En s'aidant du CSS3, le JavaScript permet de créer une horloge animée. Il faudra s'occuper de la compatibilité de cette horloge.
							</p>
									
							<p class="paragraphs-size">
							Le fonctionnement de l'horloge se base sur les propriétés CSS3 transform, qui transforme un élément de la page et transform-origin, qui 
							permet des transformations comme la mise à l'échelle, la rotation et la translation. A l'aide du CSS, on va mettre le cadran comme fond de 
							l'horloge, on va arrondir les bords du div conteneur de l'horloge pour qu'il fasse un cercle entourrant le cadran et on va placer l'horloge 
							en position relative pour pouvoir positionner les aguilles en fonction de la position de l'horloge.
							</p>
									
							<p class="paragraphs-size">
							Avec le JavaScript, on va commencer par déterminer le nombre de secondes écoulées depuis le début de la journée. Ensuite, on va faire tourner 
							les agiuilles pour qu'elles indiquent l'heure du chargement de la page. Toutes les secondes, on va incrémenter le nombre de secondes écoulées, 
							puis replacer les aiguilles en conséquences.
							</p>							
							
							<div id="dragandrop">
								<br/>
								<a href="#null" onclick="horloge();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
								
								<script type="text/javascript">										
								function horloge()
								{
									window.open('horloge/index.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>
								
								<script type="text/javascript">										
								function horl()
								{
									window.open('http://ilovejs.gabriel-cassano.be/codes/horloge.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>	

								<br/><br/>
								
								<p>			
								<a href="#null" onclick="horl();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	<section id="jeux">
		<div class="container" >
			<div class="row" >
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="center titles-paragraphs">Les jeux</h1>
						<div class="spacer center"><i class="fa fa-gamepad" aria-hidden="true"></i> <i class="fa fa-gamepad" aria-hidden="true"></i> <i class="fa fa-gamepad" aria-hidden="true"></i></div>
					</div>
					
					<div class="panel-heading">
						<h1 class="center titles-paragraphs">Un simple jeu de base en JavaScript</h1>
					</div>
						  
					<div class="panel-body">
						<div class="cv-wrapper">
							<p class="paragraphs-size">
							Il faut d'abord créer une arborescence de dossiers : un dossier "css" contenant le style du jeu, un dossier "js" contenant tous les fichiers JavaScript, 
							un dossier maps qui comportera les fichiers définissant les carte du jeu, un dossier "sprites" pour le personnage du jeu, un dossier "classes" pour les 
							classes et un dossier "tilesets" pour les tilesets.
							</p>
									
							<p class="paragraphs-size">
							Il faut aussi utiliser la balise "canvas" du HTML5 qui permet de dessiner via du code JavaScript. On aura également un fichier css qui sera inclut dans la 
							page HTML. 
							</p>
									
							<p class="paragraphs-size">
							Au niveau du JavaScript, on créera un premier fichier, lié au ficher HTML, qui permettra de récupérer l'élément DOM du "canvas". Ensuite, on réaliser un 
							traitement des images à l'aide de méthodes de dessin permettant de dessiner une iamge, de dessiner une iamge avec une taille différente, de dessiner une 
							partie de l'image. Une carte (map) est consituée de cases qu'on nomme "tiles" (tuiles), c'est en plaçant plusieurs tuiles les uns à côté des autres qu'on 
							générera le monde du jeu. Chaque tile est une image carrée. L'objectif du "tileset" est de combiner plusieurs "tiles" sur une seule image, même si cela n'a 
							pas d'impact en terme de taille, ça en aura en performances car il n'y aura qu'une seule image à charger.
							</p>
							
							<p class="paragraphs-size">
							Il faudra découper le "tileset" avant de le code, on peut numéroter le découpage.
							</p>
														
							<p class="paragraphs-size">
							Il faudra une classe JavaScript, dans son constructeur, on ajoutera un attribut à l'objet image afin qu'il sache à quel objet Tileset il appartient. On 
							pourra alors terminer le constructeur du "tileset" de manière asynchrone, quand l'image sera chargée. Pour pouvoir déterminer les coordonées (x,y) d'un tile 
							précis dans le "tileset" à partir de son numéro, on aura besoin de connaître la largeur en "tiles" du "tileset". Il manquera les coordonnées x et y du "tile" 
							demandé dans le "tilset", il faut donc détrerminer sa position (x,y) en nombre de "tiles".
							</p>
							
							<p class="paragraphs-size">
							On va structurer les cartes : dans le fichier, on va devoir stocker pour le moments les éléments suivants : le terrain présent sur chaque case, les "tilesets"
							qu'on va utiliser, la taille de la carte. Pour la taille de la carte, les cases seront stockées dans des tableaux, il suffira donc de récupérer la taille 
							des tableaux.
							</p>
							
							<p class="paragraphs-size">
							Quand on crée la classe Map dans le fichier, il faut donc l'inclure dans le HTML. Le constructeur chargera les données de la carte et interprétera le code 
							JSON, on va donc utiliser Ajax, on va réutiliser la fonction existante de l'Ajax.
							</p>
							
							<div class="col-md-6">						
								<div class="row skills">																		
									<script type="text/javascript">										
									function rpg()
									{
										window.open('rpg/index.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>
									
									<script type="text/javascript">										
									function jeu()
									{
										window.open('http://ilovejs.gabriel-cassano.be/codes/jeu.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>						
								</div>
							</div>
							
							<div id="dragandrop">
								<br/>
								<a href="#null" onclick="rpg();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
								
								<script type="text/javascript">										
								function jeu()
								{
									window.open('http://ilovejs.gabriel-cassano.be/codes/jeu.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>	

								<br/>
														
								<a href="#null" onclick="jeu();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																
							</div>							
						</div>
						
						<hr/>
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Un jeu plus évolué</h1>
						</div>
					
						<div class="panel-body">
							<div class="cv-wrapper">
								<p class="paragraphs-size">
								On va maintenant créer un jeu qui permet autre chose que de déplacer un personnage et qui a un vrai but, un premier jeu basique mais efficace, il consiste à 
								casser des blocs à l'aide d'une balle.
								</p>
										
								<p class="paragraphs-size">
								Pour garder constamment à jour le dessin sur chaque image, on doit définir une fonction de dessin qui fonctionnera encore et encore, avec un ensemble différent 
								de valeurs variables chaque fois pour changer les positions des sprites. On peut exécuter une fonction encore et encore à nouveau en utilisant une fonction de 
								synchronisation JavaScript, telle que setInterval() ou requestAnimationFrame.
								<br/><br/>
								<code><b>function draw() {  // code du dessin }</b></code>
								<br/>
								<code><b>setInterval(draw, 10);</b></code>
								</p>
										
								<p class="paragraphs-size">
								Grâce à la nature infinie de setInterval, la fonction draw() sera appelée toutes les 10 millisecondes jusqu'à ce qu'on l'arrête. Ensuite, on dessinera la
								balle dans la fonction draw().
								<br/><br/>
								<code>
								<b>
								ctx.beginPath();
								ctx.arc(50, 50, 10, 0, Math.PI*2);
								ctx.fillStyle = "#0095DD";
								ctx.fill();
								ctx.closePath();
								</b>
								</code>
								</p>							
							
								<p class="paragraphs-size">
								La balle est repeinte en permanence car elle ne bouge pas, il faudra donc changer cela, au lieu d'une position codée en dur (50,50), on définira un point 
								de départ dans la partie centrale inférieur du Canevas dans les variables appelées x et y et puis les utilisera pour définir la position dans laquelle le cercle 
								est dessiné.
								<br/><br/>
								<code>
								<b>
								var x = canvas.width/2;
								var y = canvas.height-30;
								</b>
								</code>
								</p>
															
								<p class="paragraphs-size">
								La partie importante arrive : on doit ajouter une petite valeur à x et à y après que chaque image a été dessinée pour faire croire que la balle bouge.
								On va définir ces petites valeurs.
								<br/><br/>
								<code>
								<b>
								var dx = 2;
								var dy = -2;
								</b>
								</code>
								</p>
								
								<p class="paragraphs-size">
								La balle laisse une trace parce qu'on peint un nouveau cercle sur chaque image sans enlever la précédente. Il existe une méthode pour effacer le contenu du 
								canvas : clearRect(). Toute la zone couverte par ce rectangle sera effacée de tout contenu précédemment peint là.
								</p>
								
								<p class="paragraphs-size">
								On va ajouter de plus en plus de commandes à la fonction draw(), on va déplacer le code de dessin vers une fonction séparée.
								</p>
								
								<div class="col-md-6">						
									<div class="row skills">																		
										<script type="text/javascript">										
										function jeu_balle()
										{
											window.open('balle.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>
															
									</div>
								</div>
								
								<div id="dragandrop">
									<br/>
									<a href="#null" onclick="jeu_balle();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
									
									<script type="text/javascript">										
									function balle()
									{
										window.open('http://ilovejs.gabriel-cassano.be/codes/balle.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>			
															
									<a href="#null" onclick="balle();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>																
								</div>							
							</div>
						</div>						
					</div>					 
				</div>
			</div>
		</div>
	</section>	

	<section id="selecteurs">
			<div class="container">
				<div class="hero">
					<h1 class="titles-paragraphs">jQuery</h1>
					<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
				</div>
				
				<div class="container">
					<div class="row">
						<div class="panel panel-default" id="selecteurs">
							<p class="paragraphs-size">
							jQuery est la bibliothèque JavaScript la plus utilisée qui permet de créer des effets dynamiques sur les pages web comme des changements de couleur,
							des animations, et des effets de fondu. Les combinaisons sont illimitées.  Il faut connaître un petit peu de JavaScript pour pouvoir utiliser jQuery, mais
							jQuery permet d'économiser énormément d'énergie en effectuant des choses qui prendraient une éternité en JavaScript ordinaire.
							Utiliser jQuery permet de profiter d'une plus grande compatibilité avec les différents navigateurs. Le JavaScript pur est réputé pour avoir des spécificités
							dans chaque navigateur comme Internet Explorer, Chrome, Safari, etc, qui vont potentiellement exécuter votre code JavaScript différemment les uns des autres. 
							Cette compatibilité est rendue possible par l'utilisation que fait jQuery des sélecteurs CSS. Sélectionner des éléments devient plus rapide et plus direct qu'en JavaScript classique,
							et puisque la plupart des développeurs web comprennent déjà les sélecteurs CSS, ils n'ont aucun mal à se servir de jQuery.
							</p>
						
							<div class="panel-heading">
								<h1 class="center titles-paragraphs">Les sélecteurs CSS</h1>
								<div class="spacer center"><i class="fa fa-css3" aria-hidden="true"></i></div>
							</div>						  
						
							<p class="paragraphs-size">
							Pour agir sur la page, il va falloir sélectionner les divers éléments la composant. L'une des grandes forces de jQuery réside tout justement en sa simplicité
							de sélection des éléments des pages. La bibliothèque réutilise le potentiel des sélecteurs CSS en les complétant de sélecteurs additionnels.
						
							Ils ont le même rôle qu'en CSS : ils permettent de cibler précisément n'importe quel élément d'une page. La librairie Sizzle de JavaScript permettant la 
							sélection des éléments avec les sélecteurs CSS est donc intégrée à jQuery.
							</p>
						  
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">1. Sélectionner tous les paragraphes contenant un <code><b>span</b></code> et leur mettre une bordure rouge</h2>
									</div>
									
									<hr/>
									
									<br/>
									
									<script>
									(function($){
										$('document').ready(function(){	
											// Sélectionner les paragraphes contenant un 'span' et leur mettre une bordure rouge
											$('p span').css('border', '2px solid red');
											// Sélection l'élément (ul) qui à l'id 'list1' et lui mettre une bordure rouge 
											$('#list1').css('border','2px solid red');
											// Sélectionner tous les éléments qui ont pour classe "a" et leur mettre une bordure rouge 
											$('.a').css('border','2px solid red');
											// Sélectionner tous les paragraphes et les élements de la liste ayant pour class "b" et leur mettre une bordure
											$('p .d, li.b').css('border', '2px solid red');																					
										});
									})(jQuery);
									</script>
										
									<div class="center paragraphs-size" class="top" class="top">
										<div id="container">											
											<p><span>Ceci est un 1er paragraphe</span></p>
											<p>Ceci est un 2ème paragraphe</p>
											<p><span>Ceci est un 3ème paragraphe</span></p>
											<p>Ceci est un 4ème paragraphe</p>											
										</div>
									</div>									
									
									<hr/>
										
									<div class="center">
										<h2 class="titles-paragraphs">2. Sélectionner tous les éléments d'une liste ayant pour <code><b>id</code></b> celui sélectionné par jQuery et leur mettre une bordure rouge</h2>
									</div>
									
									<hr/>
									
									<br/>
										
									<div class="center paragraphs-size" class="top">
										<div id="container">											
											<ul id="list1">
												<li>Élément de liste 1</li>
												<li>Élément de liste 2</li>
												<li>Élément de liste 3</li>
												<li>Élément de liste 4</li>
												<li></li>
											</ul>
										</div>
									</div>
									
									<hr/>
										
									<div class="center">
										<h2 class="titles-paragraphs">3. Sélectionner tous les éléments qui ont pour classe <code><b>a</b></code> et leur mettre une bordure rouge</h2>
									</div>
									
									<hr/>
										
									<div class="center paragraphs-size" class="top">
										<div id="container">											
											<p class="a">Ceci est un 1er paragraphe</p>
											<p>Ceci est un 2ème paragraphe</p>
											<p>Ceci est un 3ème paragraphe</p>
											<p class="a">Ceci est un 4ème paragraphe</p>											
										</div>
									</div>
									
									<hr/>
									
									<div class="center">
										<h2 class="titles-paragraphs">4. Sélectionner tous les élements de la liste ayant pour class "b" et leur mettre une bordure</h2>
									</div>
									
									<hr/>
										
									<br/>
										
									<div class="center paragraphs-size" class="top">
										<div id="container">
											<ul id="list2">
												<li class="b">Élément de liste 1</li>
												<li>Élément de liste 2</li>
												<li class="b">Élément de liste 3</li>
												<li>Élément de liste 4</li>											
											</ul>											
										</div>
									</div>	
									
									<hr/>
																								
									<div class="center">
										<h2 class="titles-paragraphs">5. Sélectionner l'élément <code><b>p</b></code> directement précédé d'un élément ul et leur mettre une bordure rouge</h2>
									</div>
										
									<script type="text/javascript">										
									function listelement()
									{
										window.open('http://ilovejs.gabriel-cassano.be/listelement.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>

									<div id="elements-in-read">
										<br/>
										<a href="#null" onclick="listelement();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
										
										<script type="text/javascript">										
										function listetelem()
										{
											window.open('http://ilovejs.gabriel-cassano.be/codes/listetelem.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>	
										
										<br/>
												
										<a href="#null" onclick="listetelem();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>
									</div>									
										
									<hr/>
																			
									<div class="center">
										<h2 class="titles-paragraphs">Modifier la position d'un élément</h2>
									</div>
									
									<hr/>
									
									<p class="paragraphs-size">
									Il est possible de spécifier une nouvelle position à un élément, en passant par les méthodes précédentes. Il suffit de passer un
									objet en tant qu'argument, en donnant les nouvelles valeurs (en pixels) aux identifiants left et top.									
									</p>
										
									<div class="center">
										<code>
										<span class="bold code">
										$('p').offset({
											left : 30,
											top : 200
										});
											
										$('p').position({
											left : 200
										});
										</span>
										</code>
									</div>
									
									<hr/>
									
									<div class="center">
										<h2 class="titles-paragraphs">Gérer les dimensions</h2>
									</div>
									
									<hr/>
										
									<p class="paragraphs-size">
									Les positions d'un élément, les dimensions peuvent être gérées directement avec css(). Cependant,
									plusieurs autres méthodes sont très pratiques pour gérer la hauteur et la largeur d'un bloc. Il s'agit des fonctions suivantes :

										<ul class="list-group paragraphs-size">
											<li class="list-group-item">height() : retourne la hauteur formatée en pixels</li>
											<li class="list-group-item">width() : fait la même chose avec la largeur ;</li>
											<li class="list-group-item">innerHeight() et innerWidth() : prennent en compte les marges intérieures</li>
											<li class="list-group-item">outerHeight() et outerWidth() : prennent en compte les marges intérieures et la bordure d'un élément.</li>
										</ul> 
									</p>
										
									<div class="center">
										<span class="bold">
										<code class="code">$('p').height();</code> // retourne la hauteur stricte du paragraphe
										<br/>
										<code class="code">$('p').innerWidth();</code> // retourne la largeur (avec marges intérieures) du paragraphe
										<br/>
										<code class="code">$('p').outerWidth();</code> // retourne la largeur (avec marges intérieures + bordures) du paragraphe
										<br/>
										<code class="code">$('p').outerHeight(true);</code> // retourne la hauteur (avec marges intérieures + bordures + marges extérieures) du paragraphe
										</span>
									</div>
								</div>
							</div>
					</div>				
				</div>
			</div> 
		</section>		
				
		<section id="filtres">
			<div class="container">	
				<div class="container">
					<div class="row">
						<div class="panel panel-default">					
							<div class="panel-heading">
								<h1 class="center titles-paragraphs">Les filtres</h1>
								<div class="spacer center"><i class="fa fa-filter" aria-hidden="true"></i> <i class="fa fa-filter" aria-hidden="true"></i> <i class="fa fa-filter" aria-hidden="true"></i></div>
							</div>						  
						
							<p class="paragraphs-size">
							jQuery permet de filtrer des éléments du DOM afin de cibler très spécifiquement un élément selon sa position ou selon un certain critère.
							</p>
							
							<p class="paragraphs-size">
							Les méthodes first() et last() vont respectivement retourner le premier et le dernier élément d'une collection d'éléments. Ces deux méthodes 
							n'ont pas besoin d'argument pour fonctionner.
							</p>
							  
							<p class="paragraphs-size">
							La méthode odd() sélectionne chaque élément avec un numéro d'index impair et la méthode even() sélectionne chaque élément avec un numéro d'index 
							pair.
							</p>
							
							<p class="paragraphs-size">
							La méthode lt() sélectionne tous les éléments ayant un index inférieur à l'index dans l'ensemble correspondant, la méthode gt() sélectionne tous les 
							éléments supérieur à l'index dans l'ensemble correspondant.
							</p>
							
							<p class="paragraphs-size">
							La méthode eq() réduit l'ensemble des éléments correspondants à celui de l'index spécifié, la méthode not(eq()) sélectionne tous les éléments qui ne 
							correspondent pas au sélecteur donné.
							</p>	

							<hr/>
						 
							<div class="panel-body">
									<div class="cv-wrapper">
										<div class="center">
											<h2 class="titles-paragraphs">Sélectionner le premier paragraphe et lui mettre une bordure rouge</h2>
										</div>
										
										<script type="text/javascript">										
										function first_paragraph()
										{
											window.open('http://ilovejs.gabriel-cassano.be/paragraph1.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<div id="dragandrop">
											<br/>
											<a href="#null" onclick="first_paragraph();" class="btn btn-primary btn-lg btn-large selectday"><i class="fa fa-download"></i> Essayer</a>
											
											<script type="text/javascript">										
											function fp()
											{
												window.open('http://ilovejs.gabriel-cassano.be/codes/fp.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
											}
											</script>			
												
											<a href="#null" onclick="fp();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>		
										</div>					
										
																			
										<hr/>
										
										<div class="center">
											<h2 class="titles-paragraphs">Sélectionner le dernier paragraphe et lui mettre une bordure rouge</h2>
										</div>
										
										<script type="text/javascript">										
										function last_paragraph()
										{
											window.open('http://ilovejs.gabriel-cassano.be/paragraph2.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<div id="dragandrop">
											<br/>
											
											<a href="#null" onclick="last_paragraph();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
											
											<script type="text/javascript">										
											function lp()
											{
												window.open('http://ilovejs.gabriel-cassano.be/codes/lp.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
											}
											</script>			
												
											<a href="#null" onclick="lp();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>		
										</div>	

										<hr/>
										
										<br>
										
										<div class="center">
											<h2 class="titles-paragraphs">Sélectionner le deuxième élément, le quatrième élément et ainsi de suite (cela se base sur l'index qui commence à "0")</h2>
										</div>
										
										<script type="text/javascript">										
										function second_element()
										{
											window.open('http://ilovejs.gabriel-cassano.be/second.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<div id="dragandrop">
											<br/>
											<a href="#null" onclick="second_element();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
											
											<script type="text/javascript">										
											function se()
											{
												window.open('http://ilovejs.gabriel-cassano.be/codes/se.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
											}
											</script>
											
												
											<a href="#null" onclick="se();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
										</div>										

										<hr/>
										
										<br>									
										
										<div class="center">
											<h2 class="titles-paragraphs">Sélectionne le premier élément et le troisième élément et ainsi de suite (cela se base sur l'index qui commence à "0")</h2>
										</div>
										
										<script type="text/javascript">										
										function third_element()
										{
											window.open('http://ilovejs.gabriel-cassano.be/third.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<div id="dragandrop">									
											<br/>
											
											<a href="#null" onclick="third_element();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
												
											<script type="text/javascript">										
											function te()
											{
												window.open('http://ilovejs.gabriel-cassano.be/codes/te.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
											}
											</script>			
													
											<a href="#null" onclick="te();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
										</div>														
										
										<hr/>
									
										<br>									
										
										<div class="center">
											<h2 class="titles-paragraphs"><code><b>lt(less than)</b> :</code> sélectionner tous les éléments à indice inférieur à l'index</h2>
										</div>
										
										<script type="text/javascript">										
										function then_element()
										{
											window.open('http://ilovejs.gabriel-cassano.be/then.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<div id="dragandrop">
											<br/>
											<a href="#null" onclick="then_element();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
											
											<script type="text/javascript">										
											function te()
											{
												window.open('http://ilovejs.gabriel-cassano.be/codes/then.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
											}
											</script>			
												
											<a href="#null" onclick="te();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>		
										</div>	

										<hr/>
										
										<br>
										
										<div class="center">
											<h2 class="titles-paragraphs"><code><b>gt(great than) :</b></code> sélectionner tous les éléments à indice supérieur à l'index</h2>
										</div>
										
										<script type="text/javascript">										
										function g_element()
										{
											window.open('http://ilovejs.gabriel-cassano.be/g.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<div id="dragandrop">
											<br/>
											<a href="#null" onclick="g_element();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
											
											<script type="text/javascript">										
											function ge()
											{
												window.open('http://ilovejs.gabriel-cassano.be/codes/g.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
											}
											</script>			
												
											<a href="#null" onclick="te();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>
										</div>	
											
										<hr/>
										
										<br>
										
										<div class="center">
											<h2 class="titles-paragraphs"><code><b>eq :</b></code> sélectionne un élément ayant un numéro d'index spécifique</h2>
										</div>
										
										<script type="text/javascript">										
										function eq_element()
										{
											window.open('http://ilovejs.gabriel-cassano.be/eq.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<div id="dragandrop">
											<br/>
											<a href="#null" onclick="eq_element();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
											
											<script type="text/javascript">										
											function eqe()
											{
												window.open('http://ilovejs.gabriel-cassano.be/codes/eq.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
											}
											</script>			
												
											<a href="#null" onclick="te();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
										</div>
										
										<hr/>
										
										<br>																
										
										<div class="center">
											<h2 class="titles-paragraphs">Sélectionne tous les paragraphes sauf celui qui à l'indice 2 (ici, c'est le troisième paragraphe) </h2>
										</div>
										
										<script type="text/javascript">										
										function not_eq_element()
										{
											window.open('http://ilovejs.gabriel-cassano.be/noteq.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>

										<div id="dragandrop">
											<br/>
											<a href="#null" onclick="not_eq_element();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
											
											<script type="text/javascript">										
											function noteqe()
											{
												window.open('http://ilovejs.gabriel-cassano.be/codes/noteq.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
											}
											</script>			
												
											<a href="#null" onclick="noteqe();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
										</div>	
									</div>
							</div>				
					</div>
				</div> 
			</div>
		</section>	
		
		<section id="attributs">
			<div class="container">					
					<div class="row">
						<div class="panel panel-default">					
							<div class="panel-heading">
								<h1 class="center titles-paragraphs">Les attributs</h1>
								<div class="spacer center"><i class="fa fa-paperclip" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i></div>
							</div>

							<br/>
						
							<p class="paragraphs-size">
							En HTML, les attributs sont contenus dans des balises, ils définissent comment le navigateur doit interpréter un élément d'une page web. 		
							</p>									

							<hr/>
						 
							<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2 class="titles-paragraphs">Sélectionner les paragraphes qui ont un attribut <code><b>class</b></code> et leur mettre une bordure rouge</h2>
									</div>
										
									<script>
									(function($){
									$('document').ready(function(){	
										// Sélectionner les paragraphes qui ont un attribut 'class' et leur mettre une bordure rouge
										$("p[class=attributs]").css("border","2px solid red");
										});
									})(jQuery);		
									</script>
										
									<br/>

									<div class="center paragraphs-size">																
										<p class="attributs">Ceci est un 1er paragraphe</p>
										<p>Ceci est un 2ème paragraphe</p>
										<p  class="attributs">Ceci est un 3ème paragraphe</p>
										<p>Ceci est un 4ème paragraphe</p>
										<p  class="attributs">Ceci est un paragraphe caché</p>				
									</div>

									<div id="dragandrop">											
										<script type="text/javascript">										
										function attributs1()
										{
											window.open('http://ilovejs.gabriel-cassano.be/codes/attributs1.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>	

										<br/>
												
										<a href="#null" onclick="attributs1();" class="btn btn-info btn-lg bottom"><i class="fa fa-download"></i> Code</a>		
									</div>					
										
																			
									<hr/>
										
									<div class="center">
										<h2 class="titles-paragraphs">Sélectionner tous les paragraphes qui ont l'id <code><b>para</b></code> et leur mettre une bordure</h2>
									</div>
										
									<script>
									(function($){
										$('document').ready(function(){	
										// Sélectionne les paragraphes qui ont un attribut 'class' et leur mettre une bordure rouge
										$("p[id=para]").css("border","2px solid red");
										});
									})(jQuery);		
									</script>
										
									<br/>
										
									<div class="center paragraphs-size">																
										<p id="para">Ceci est un 1er paragraphe</p>
										<p id="para">Ceci est un 2ème paragraphe</p>
										<p>Ceci est un 3ème paragraphe</p>
										<p>Ceci est un 4ème paragraphe</p>
										<p>Ceci est un paragraphe caché</p>				
									</div>

									<div id="dragandrop">											
										<script type="text/javascript">										
										function attributs2()
										{
											window.open('http://ilovejs.gabriel-cassano.be/codes/attributs2.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>			
												
										<a href="#null" onclick="attributs2();" class="btn btn-info btn-lg bottom"><i class="fa fa-download"></i> Code</a>		
									</div>	
								</div>
							</div>				
						</div>
				</div> 				
			</div>
		</section>	
				
		<section id="contenu">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Création de contenu à l'extérieur de l'élément</h1>
							<div class="spacer center"><i class="fa fa-floppy-o" aria-hidden="true"></i> <i class="fa fa-floppy-o" aria-hidden="true"></i> <i class="fa fa-floppy-o" aria-hidden="true"></i></div>
				    	</div>	
						
						<div class="panel-body">
								<div class="cv-wrapper">
									<div class="center">
										<h2>Mettre le texte ":INPUT" devant chaque champs de formulaire "input" </h2>
									</div>
									
									<script type="text/javascript">										
									function input()
									{
										window.open('http://ilovejs.gabriel-cassano.be/input.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>

									<div id="dragandrop">
										<br/>
										<a href="#null" onclick="input();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
										
										<script type="text/javascript">										
										function inputelem()
										{
											window.open('http://ilovejs.gabriel-cassano.be/codes/input.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>			
											
										<a href="#null" onclick="inputelem();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>
									</div>	

									<hr/>
																
									<br><br>
									
									<div class="center">
										<h2>Mettre le texte ":TEXT" devant chaque champs de formulaire de type "text"</h2>
									</div>
									
									<script type="text/javascript">										
									function textelement()
									{
										window.open('http://ilovejs.gabriel-cassano.be/text.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>

									<div id="dragandrop">
										<br/>
										<a href="#null" onclick="textelement();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
										
										<script type="text/javascript">										
										function textelem()
										{
											window.open('http://ilovejs.gabriel-cassano.be/codes/text.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>			
											
										<a href="#null" onclick="textelem();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
									</div>								
									
									<hr/>
			
									<br>
									
									<div class="center">
										<h2>Mettre le texte "RADIO" devant chaque champs de formulaire de type "radio"</h2>
									</div>
									
									<script>
									(function($){
										$('document').ready(function(){	
											// Sélectionne les paragraphes qui ont un attribut 'class' et leur mettre une bordure rouge
											$(":radio").before(":RADIO ");
										});
									})(jQuery);		
									</script>
									
									<div class="center paragraphs-size">														
										<input type="radio" id="radioButton">
										<br/>
										<input type="radio" id="radioButton">												
									</div>	

									<hr/>
									
									<br>
									
									<div class="center">
										<h2>Mettre le texte "CHECKED" devant chaque champs de formulaire de type "checkbox" à l'état "checked"</h2>
									</div>
									
									<script type="text/javascript">										
									function cb()
									{
										window.open('http://ilovejs.gabriel-cassano.be/cb.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>

									<div id="dragandrop">
										<br/>
										<a href="#null" onclick="cb();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
										
										<script type="text/javascript">										
										function cbelem()
										{
											window.open('http://ilovejs.gabriel-cassano.be/codes/cbelem.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
										}
										</script>			
											
										<a href="#null" onclick="cbelem();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
									</div>	
									
								</div>
						</div>
					</div>				
				</div>
			</div> 
		</section>	
		
		<section id="affichage">
			<div class="container" id="content">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">On peut également utiliser jQuery pour l'affichage</h1>
							<div class="spacer center"><i class="fa fa-play-circle" aria-hidden="true"></i> <i class="fa fa-play-circle" aria-hidden="true"></i> <i class="fa fa-play-circle" aria-hidden="true"></i> </div>
				    	</div>	
						
						<div class="panel-body">
								<div class="cv-wrapper">									
									<div class="center">
										<h2>Affichage du nombre de paragraphes présents dans le document html</h2>
									</div>
									
									<script>
									(function($){
										$('document').ready(function(){	
											$("p[id=affichage]").text('Il y a ' + $("p").length + ' paragraphes');
										});
									})(jQuery);		
									</script>
									
									<div class="center"><p id="affichage"></p></div>

									
									<script type="text/javascript">										
									function textelement()
									{
										window.open('http://ilovejs.gabriel-cassano.be/text.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
									}
									</script>				
									
									<hr/>
			
									<br>
									
									<div class="center">
										<h2>Affichage du nombre de paragraphe(s) caché(s)</h2>
									</div>	
									
									<script>
									(function($){
										$('document').ready(function(){	
											// Sélectionne les paragraphes qui ont un attribut 'class' et leur mettre une bordure rouge
											$("p[id=display]").text('Il y a ' + $("p:hidden").length + ' paragraphe cachés');
										});
									})(jQuery);		
									</script>
									
									<div class="center"><p class="hidden"></p><p id="display"></p></div>									
								</div>
								
								<script type="text/javascript">										
								function affichage()
								{
									window.open('http://ilovejs.gabriel-cassano.be/codes/affichage.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
								}
								</script>			
													
								<a href="#null" onclick="affichage();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
						</div>
					</div>				
				</div>
			</div> 
		</section>	
		
		<section id="fonctions">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Les fonctions</h1>
							<div class="spacer center"><i class="fa fa-sort-desc" aria-hidden="true"></i> <i class="fa fa-sort-desc" aria-hidden="true"></i> <i class="fa fa-sort-desc" aria-hidden="true"></i></div>
						</div>
						
						<br/>

						<p class="paragraphs-size"> 						
						En programmation, une fonction est un sous-programme qui permet d’exécuter un ensemble d’instructions dans le corps du programme principal.
						Les fonctions permettent d'exécuter dans plusieurs parties du programme une série d’instructions. Ce procédé permet une simplicité du code et donc une taille de programme minimale.
						Par ailleurs, une fonction peut faire appel à elle-même. On parle alors de fonction récursive.
						</p>	

						<hr/>
						
						<div class="panel-body">
							<div class="cv-wrapper">
								<div class="center">
									<h2 class="titles-paragraphs">Le sélecteur $(this)</h2>
								</div>
									
								<br/>
								
								<p class="paragraphs-size">
								Il représente, dans la plupart des langages orienté objet, l'objet courant, celui qui est actuellement traité par une fonction, jQuery permet la
								sélection d'objet.
								Outre le fait de sélectionner des éléments avec jQuery, il ne faut pas négliger le reste. La performance est un point primordial dans un code. 
								Il faudra s'assurer que le code est le plus rapide, le plus optimisé et le plus ergonomique possible. 									
								</p>
									
								<div class="center paragraphs-size">
									<span class="bold ">
									<code>									
									$('p').each(function(){
										$(this).html('Hello World !'); // $(this) représente le paragraphe courant
									});
									</code>									
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">Les sélecteurs les plus rapides</h2>
								</div>
									
								<p class="paragraphs-size">
								Il y a une certaine différence de rapidité lorsqu'il s'agit de cibler des éléments de différentes façons car certains sélecteurs profitent de 
								fonctions natives implémentées par JavaScript, car ils en descendent directement. 
								Le sélecteur par identifiant, qui est le plus rapide des sélecteurs : c'est normal, il utilise directement la fonction getElementById().
								Il est caractérisé par une rapidité 5 fois supérieure au deuxième sélecteur le plus rapide, qui est le sélecteur par balise. Vient ensuite le
								sélecteur par classe, les autres enregistrant une forte baisse de performance à l'utilisation.
								Ces différences proviennent en fait du parcours du DOM : alors que l'identifiant, étant normalement unique, est ciblé directement
								par jQuery à cause de sa singularité, les classes vont être traitées une à une, en parcourant tout le document HTML pour les
								trouver. Pour optimiser au maximum une requête par classe, il suffit de cibler tout d'abord le parent de l'élément avec un
								identifiant.
								</p>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#menu .sections');
										// sélection plus rapide que :
									$('.sections');
									</code>
									</span>
								</div>
							</div>
						</div>							
					</div>	
				</div>
			</div> 
		</section>
		
		<section id="evenements">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Les événements</h1>
							<div class="spacer center"><i class="fa fa-calendar" aria-hidden="true"></i> <i class="fa fa-calendar" aria-hidden="true"></i> <i class="fa fa-calendar" aria-hidden="true"></i></div>
				    	</div>	
						
						<p class="paragraphs-size">
						Les évenements existent aussi en jQuery, comme en JavaScript : on lance un bout de code quand une action est remplie. 
						</p>
						
						<hr/>
						
						<div class="panel-body">
							<div class="cv-wrapper">
								<div class="center">
									<h2 class="titles-paragraphs">Ecoute de la souris</h2>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">click : quand on clique avec la souris</h2>
								</div>
																
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$(document).keyup(function(touche){
										// on écoute l'évènement keyup()
										if(appui == 13){
											<br/>
											// si le code de la touche est égal à 13 (Entrée), on affiche une alerte 
											alert('Vous venez d\'appuyer sur la touche Entrée !');
										}
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">dbclick : quand on double click avec la souris</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#uneDiv').dbclick(function(){
										alert('I like Cannibal Corpse');
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">hover : au passage avec la souris</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#uneDiv').hover(function(){
										alert('Survol de la souris');
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">dbclick : quand on double click avec la souris</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#uneDiv').dbclick(function(){
										alert('I like Cannibal Corpse');
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">mousenter() : quand on rentre dans l'élément</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#uneDiv').mouseenter(function(){
										$('p:first', this).text('mouse enter');
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">mouseleave() : quitter un élément</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#uneDiv').mouseleave(function(){
										$('p:first', this).text('mouse leave');
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">mousedown() : presser un bouton de la souris</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#target').mousedown(function(){
										alert('Vous avez cliqué sur un bouton de la souris');
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">mouseup : relâcher un bouton de souris</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('button').on({
										click : function(){
											alert('Vous avez cliqué');
										},
										mouseup: function(){
											alert('Vous avez relâché le bouton');
										}
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">scroll : quand on utilise la roulette</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('div').scroll(function(){
										$('span').text(x += 1);
									});
									</code>
									</span>
								</div>
									
								<br><br>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">Ecoute du clavier</h2>
								</div>
								
								<br/>
									
								<div class="center">
									<h2 class="titles-paragraphs">keydown() : qui se lance lorsqu'une touche du clavier est enfoncée</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#target').keydown(function(){
										alert('On appelle la fonction keydown');
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">keypress() : qui se lance lorsqu'on maintient une touche enfoncée</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('#maDiv').keypress(function(){
										alert('Vous avez pressé une touche');
									});	
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">keyup : qui se lance lorsqu'on relâche une touche préalablement enfoncée</h2>
								</div>
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('document').keyup(function(touche){
										var appui = touche.wich || touche.keyCode;
											
										if(appui == 13){
											alert('Vous avez appuyé sur la touche Enter');
										}
									});
									</code>
									</span>
								</div>
								
								<hr/>		
									
								<div class="center">
									<h2 class="titles-paragraphs">Le déclenchement virtuel</h2>
								</div>
									
								<p class="paragraphs-size">
								jQuery permet de simuler le déclenchement d'évènements grâce à une simple méthode. On n'a pas besoin
								d'attendre que l'utilisateur remplisse une action précise pour lancer du code : on peut exécuter virtuellement un évènement
								grâce à trigger(), il suffit de donner le type de l'évènement en tant qu'argument.
								</p>									
									
								<div class="center paragraphs-size">
									<span class="bold">
									<code>
									$('p').click(function(){
										alert('Cliqué !');
									});
									
									<br/>
									
									$('p').trigger('click'); // déclenche l'action au chargement du	script
									</code>
									</span>
								</div>
								
								<hr/>
							
								<div class="center">
									<h2 class="titles-paragraphs">Annuler le comportement d'un élément par défaut</h2>
								</div>
									
								<p class="paragraphs-size">
								Chaque évènement possède son propre groupe d'éléments spécifiques à traiter : la soumission de formulaire ne
								s'applique pas à tous les cas. Cependant, certains éléments ont un comportement par défaut, défini par le navigateur. Le cas le
								plus courant est le lien hypertexte : son comportement va être de rediriger l'utilisateur vers l'adresse donnée.
								Une méthode en jQuery permet d'annuler tous comportement par défaut. Il s'agit de preventDefault().
								</p>									
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('a').click(function(e){
										e.preventDefault(); // annule l'action du lien
									});
									</code>
									</span>
								</div>
								
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">Les gestionnaires d'événements</h2>
								</div>
									
								<p class="paragraphs-size">
								En jQuery, et même plus globalement en JavaScript, on peut faire appel aux gestionnaires d'évènements. Ce sont des fonctions
								auxquelles on donne un type d'évènement à écouter, ainsi qu'une fonction à exécuter à chaque fois que l'évènement est
								déclenché.
								</p>									
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('button').on('click',function(){
										alert('Ce code fonctionne');
									});
									</code>
									</span>
								</div>
									
								<hr/>
									
								<div class="center">
									<h2 class="titles-paragraphs">La délégation</h2>
								</div>
									
								<p class="paragraphs-size">
								Ce concept permet de créer un écouteur d'évènements sur un élément, et de s'adapter automatiquement aux éléments similaires créés plus tard, 
								de façon dynamique. Si on a un paragraphe simple, sur lequel on veut appliquez un évènement. Si on créez d'autres paragraphes dans la page,
								ceux-ci ne seront pas pris en compte par l'écouteur.
								</p>	
								
								<hr/>

								<div class="center">
									<h2 class="titles-paragraphs">La suppression</h2>
								</div>	
									
								<div class="center">
									<span class="bold paragraphs-size">
									<code>
									$('p').on('click', function(){
										alert('Ecoute événement');
									});
										
									<br/>
									$('p').off('click');
									<br/>
									$('p').off();
									</code>
									</span>
								</div>
							</div>							
						</div>	
				</div>
			</div> 
		</section>		
		
		<section id="animationsjquery">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Les animations</h1>
							<div class="spacer center"><i class="fa fa-comment-o" aria-hidden="true"></i> <i class="fa fa-comment-o" aria-hidden="true"></i> <i class="fa fa-comment-o" aria-hidden="true"></i></div>
				    	</div>

						<br/>
						
						<p class="paragraphs-size">
						C'est une des plus puissantes fonctionnalités de jQuery, le framework permet de lancer des effets sur absolument tout, le mécanisme est très simple : 
						c'est simplement une propriété CSS qui se déroulera pendant un interval de temps.
						</p>
						
						<p class="paragraphs-size">
						La fonction animate() est très puissante car elle peut recevoir un nombre inimaginable d'arguments différents. Le principe d'utilisation le plus fréquent 
						qu'on aura à appliquer sera de passer un objet à la méthode contenant les propriétés CSS à animer. animate() peut définir : 
							
							<br/>
						
							<ul class="list-group paragraphs-size">
								<li class="list-group-item">duration : le temps de déroulement de l'animation, toujours en millisecondes</li>
								<li class="list-group-item">easing : la façon d'accélerer de l'animation, c'est-à-dire comment va-t-elle évoluer au cours du temps</li>
								<li class="list-group-item">complete : une fonction de callback, qui est l'action appelée lorsque l'animation est terminée</li>
							</ul> 						
						</p>
						
						<br/>
						
						<div class="center">
							<span class="bold paragraphs-size">
							<code>
							$('p[id="anim"]').animate({
								width : '150px',
								fontSize : '35px', 
								marginTop : '50px'
							});
							</code>
							</span>
						</div>
						
						<hr/>
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">duration</h1>
				    	</div>

						<p class="paragraphs-size">
						Il est important de définir le temps de déroulement d'une animation : si l'animation est trop rapide, l'utilisateur risque de ne pas la voir mais si 
						elle est trop lente, il s'ennuiera et trouvera le site web lourd et sans intérêt. Il faut donc trouver la bonne durée pour lancer l'animation. L'argument 
						peut prendre deux types de valeur : une chaîne de caractère (string) ou un nombre entier (int) qui représentera le nombre de millisecondes. La chaîne de 
						caractères ne peut être qu'un des trois mots : 
						
							<ul class="list-group">
								<li class="list-group-item">slow : équivaut à une durée de 600 millisecondes</li>
								<li class="list-group-item">normal : la valeur par défaut, qui est égale à 400 millisecondes</li>
								<li class="list-group-item">fast : représente une durée de 200 millisecondes seulement.</li>
							</ul> 						
						</p>
						
						<br/>
						
						<div class="center">
							<span class="bold paragraphs-size">
							<code>
							$('p').animate({
								width : '150px'
							}, 'fast'); // premier exemple avec la valeur fast (200ms)
							
							<br/>
							
							$('p').animate({
								width : '150px'
							}, 1000); // second exemple avec 1000ms (= 1s)
							</code>
							</span>							
						</div>
						
						<hr/>
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">easing</h1>
				    	</div>
						
						<br/>

						<p class="paragraphs-size">
						Il s'agit de l'évolution de l'animation, qui est la manière dont elle va se dérouler.
						
							<ul class="list-group paragraphs-size">
								<li class="list-group-item">swing : valeur par défaut, fait aller l'animation de plus en plus vite au cours du temps et ralentit à la fin</li>
								<li class="list-group-item">linear : force l'animation à se dérouler à la même vitesse durant toute l'opération</li>								
							</ul> 	
						</p>

						<br/>
						
						<div class="center">
							<span class="bold paragraphs-size">
							<code>
							$('p').animate({
							width : '150px'
							}, 'linear'); // l'animation se déroulera de façon linéaire
							</code>
							</span>
						</div>
						
						<hr/>
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">complete</h1>
				    	</div>

						<p class="paragraphs-size">
						C'est la fonction de retour, appelée callback, qui est une action qui se lancera une fois l'animation terminée, il suffit de donner une fonction 
						anonyme en guise d'argument.						
						</p>
						
						<hr/>
						
						<div class="center">
							<span class="bold paragraphs-size">
							<code>
							$('p').animate({
								width : '150px'
							}, function(){
								alert('Animation terminée !');
							});
							</code>
							</span>
						</div>
						
						<hr/>
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">step et queue</h1>
				    	</div>

						<p class="paragraphs-size">
						Ce sont deux arguments qui ne peuvent être modifiés qu'avec une certaine manière de régler les arguments de la méthode animate(), ils ne sont pas directement 
						accessibles, il faudra passer par un objet comme second argument.
						step lancera une fonction à chaque étape de l'animation, à chaque propriété CSS traitée, queue déterminera si une animation doit se terminer avant d'en 
						lancer une seconde et prendra un booléen en tant que valeur.
						</p>						
						
						<div class="center">
							<span class="bold paragraphs-size">
							<code>
							$('p').animate({
								width : '150px'
							}, 1000, 'linear', function(){
								alert('Animation terminée !');
							});
							</code>
							</span>
						</div>
						
						<hr/>
						
						<br/>
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Exemples d'animations</h1>
				    	</div>
						
						<br/>
						
						<p class="paragraphs-size">
						Voici comment créer des effets en jQuery.
						</p>
						
						<br/>
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Animer des carrés en cliquant sur un bouton</h1>
				    	</div>
						
						<br/>
						
						<div id="dragandrop">
							<script type="text/javascript">										
							function effects()
							{
								window.open('http://ilovejs.gabriel-cassano.be/effects.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>				
						
							<br/>
							
							<a href="#null" onclick="effects();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
							
							<script type="text/javascript">										
							function effect1()
							{
								window.open('http://ilovejs.gabriel-cassano.be/codes/effect1.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>

							<br/><br/>
													
							<a href="#null" onclick="effect1();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
						</div>	
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Démarrer une animation et la gérer au clic sur un bouton</h1>
				    	</div>
						
						<div id="dragandrop">
							<script type="text/javascript">										
							function animate_square()
							{
								window.open('http://ilovejs.gabriel-cassano.be/animate_square.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>				
						
							<br/>
							
							<a href="#null" onclick="animate_square();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
							
							<script type="text/javascript">										
							function as()
							{
								window.open('http://ilovejs.gabriel-cassano.be/codes/as.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>

							<br/><br/>
													
							<a href="#null" onclick="as();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
						</div>	
						
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Dessiner un carré à partir de dimension entrées</h1>
				    	</div>
						
						<div id="dragandrop">
							<script type="text/javascript">										
							function drawing_square()
							{
								window.open('http://ilovejs.gabriel-cassano.be/drawing_square.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>				
						
							<br/>
							
							<a href="#null" onclick="drawing_square();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
							
							<script type="text/javascript">										
							function ds()
							{
								window.open('http://ilovejs.gabriel-cassano.be/codes/ds.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>

							<br/><br/>
													
							<a href="#null" onclick="ds();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
						</div>	
					</div>
				</div>	
			</div>			
		</section>
		
		<section id="menudyn">
			<div class="container" id="menu-section">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="panel-heading">
							<h1 class="center titles-paragraphs">Un menu dynamique</h1>
							<div class="spacer center"><i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
						
						<br/>

						<p class="paragraphs-size">
						&nbsp; Il est très facile de créer un menu dynamique en jQuery avec très peu de code.&nbsp;								
						</p>

						<hr/>
						
						<div id="dragandrop">
							<script type="text/javascript">										
							function calculatrice()
							{
								window.open('http://ilovejs.gabriel-cassano.be/menu.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>				
						
							<br/>
							
							<a href="#null" onclick="calculatrice();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
							
							<script type="text/javascript">										
							function db()
							{
								window.open('http://ilovejs.gabriel-cassano.be/codes/calculatrice.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>

							<br/><br/>
													
							<a href="#null" onclick="db();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
						</div>							
					</div>	
				</div>
			</div> 
		</section>	
	
		<section id="concept">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="hero">
							<h1 class="titles-paragraphs">Ajax</h1>
							<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
							<hr/>
						</div>					

						<div class="hero" id="title-top">
							<h1 class="titles-paragraphs">Le concept d'Ajax</h1>
						</div>
						
						<p id="paragraph-top">
						AJAX est l'acronyme d'Asynchronous JavaScript And XML, autrement dit JavaScript Et XML Asynchrones.
						AJAX n'est ni une technologie ni un langage de programmation; AJAX est un concept de programmation Web reposant sur plusieurs technologies comme le
						JavaScript et le XML, le XML tend à être délaissé au profit du JSON. L'idée même d'AJAX est de faire communiquer une page Web avec un serveur Web sans occasionner le rechargement 
						de la page. C'est la raison pour laquelle JavaScript est utilisé, car c'est lui qui va se charger d'établir la connexion entre la page Web et le serveur.
						Le principe de fonctionnement d'AJAX a toujours existé, et ce par le biais de certaines astuces JavaScript, comme l'ajout d'un élément "script" après le
						chargement de la page. Mais il a fallu attendre l'arrivée de l'objet XMLHttpRequest pour que l'utilisation de l'AJAX se démocratise. L'objet XMLHttpRequest
						est un objet natif JavaScript, développé à l'origine en tant qu'ActiveX dans Internet Explorer, qui facilite grandement la communication JavaScript – Serveur.
						</p>
						
						<hr/>
						
						<div class="panel-body">
							<div class="cv-wrapper">
								<div class="center">
									<h1 class="titles-paragraphs">Différence entre une page web et une application web</h1>
								</div>
								
								<br/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Site web</h1>	
								</div>	
								
								<br/>
									
								<p class="paragraphs-size">
								Tout d'abord le navigateur envoie une requête – via une URL – au serveur. Le serveur répond en renvoyant au navigateur le code HTML de la page ainsi que 
								tout ce qui lui est associé comme les scripts JavaScript, les images ou les éventuels médias et autres objets embarqués – donc la réponse du serveur est
								beaucoup plus volumineuse que la requête. Le navigateur affiche la page et l'utilisateur peut la parcourir quelques instants avant de cliquer sur un lien
								hypertexte qui enverra une nouvelle requête au serveur qui lui-même renverra le HTML correspondant et ainsi de suite.
								D'un point de vue purement pratique, c'est assez aberrant comme principe car c'est extrêmement inefficace et couteux puisque le serveur va à chaque fois
								renvoyer tout, ce qui prend du temps et ce qui occasionne une charge pour le serveur.
								Ce principe de fonctionnement montre que le navigateur n'intervient pas dans le processus si ce n'est que pour afficher la page. Le gros du travail se fait
								du côté du serveur. Le pendule balance donc du côté du serveur.
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Application Ajax</h1>	
								</div>	
								
								<br/>
																		
								<p class="paragraphs-size">
								Quand on utilise le concept d'AJAX dans une page Web, on parle d'application Web (ou application AJAX).La première requête est la même – ça on ne sait rien y 
								faire. La différence va résider dans le fait que quand l'utilisateur cliquera sur un lien – ou un autre élément cliquable – la page ne se rechargera pas et
								le navigateur enverra une requête au serveur, lequel renverra les données demandées dans un format léger – comme le format JSON. Dans ce cas, le serveur 
								n'aura renvoyé qu'un minimum de données ce qui est beaucoup plus léger et donc plus rapide. Le navigateur, par le biais de JavaScript, peut alors mettre
								à jour une petite partie de la page avec les données reçues du serveur.
								</p>
							</div>
						</div>							
					</div>	
				</div>
			</div> 
		</section>			
		
		<section id="objet">
			<div class="container">
				<div class="panel-heading">
					<h1 class="center titles-paragraphs" id="xml">L'objet XMLHttpRequest</h1>							
				</div>						  
						
				<p class="paragraphs-size" id="p-top">
				Le principe de fonctionnement d'XMLHttpRequest est d'envoyer une requête HTTP vers le serveur, et une fois la requête envoyée, les données renvoyées par 
				le serveur peuvent être récupérées. Pour ce faire, il faut disposer d'un objet disposant de cette fonctionnalité. 						
				</p>
				
				<hr/>
						
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Instancier un objet XHR</h1>							
				</div>

				<p class="paragraphs-size">
				Il y a deux façons d'instancier un objet XHR : avec contrôle XHR et avec un contrôle ActiveX et elles dépendent de la version d'XMLHTTP utilisée, on va 
				donc utiliser un try...catch, l'instanciation indiquée dans le try est la plus récente.				
				</p>
				
				<div class="center">
					<span class="bold paragraphs-size">
					<code>
					<span class="code-left-1">try {</span>
						<br/>
						&nbsp;&nbsp;var xhr = new ActiveXObject("Msxml2.XMLHTTP"); <br/>
						
					<span id="code-left-2">} catch(e){</span><br/>
						var xhr = new ActiveXObject("Microsoft.XMLHTTP");
					<br/>
					<span class="code-left-1">}</span>
					</code>
					</span>
				</div>
				
				<br/>
				
				<p class="paragraphs-size">
				Pour faire un script homogène, il faut rassembler ce code en un seul, en prenant soin de tester la prise en charge des différentes méthodes d'instanciation.			
				</p>
				
				<br/>
				
				<div class="center">
					<span class="bold paragraphs-size">
					<code>
					<span id="code-left-4">var xhr = null;</span>
					<br/>
					
					<span id="code-left-5">
					if(window.XMLHttpRequest || window.ActiveXObject) {
					</span>
						<br/>
						<span class="code-left-3">if(window.ActiveXObject) {</span>
							<br/>
							<span class="code-left-3">try {
								<br/>
								<span id="code-left-6">xhr = new ActiveXObject("Msxml2.XMLHTTP");</span>
							<br/><span class="code-left-3">}</span>catch(e){</span>
								<br/><span id="code-left-7">xhr = new ActiveXObject("Microsoft.XMLHTTP");</span>
								<br/>
							<span id="code-left-8">}</span>
						<br/>
						<span id="code-left-9">} else {</span>
							<br/>
							<span id="code-left-10">xhr = new XMLHttpRequest();</span>
							<br/>
						<span id="code-left-11">}else{</span>
						<br/>
						<span id="code-left-12">alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");</span>
						<br/>
						<span id="code-left-13" style="">return;</span>
						<br/>
					<span id="code-left-14">}</span>
					</code>
					</span>
				</div>
				
				<br/>
				
				<p class="paragraphs-size">
				Il est également plus pratique d'utiliser une fonction qui retournera l'objet XMLHTTRequest instancié.
				</p>
				
				<br/>
				
				<div class="center paragraphs-size">
					<img class="img-responsive center-block" src="img/codes/xmlhttprequest_fct.png" alt="fonction xmlhttprequest">
				</div>

				<br/><br/>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Envoi d'une requête HTTP</h1>							
				</div>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Définir et envoyer</h1>							
				</div>
				
				<p class="paragraphs-size">
				Il faut d'abord définir les modalités d'envoie avec la méthode "open" et on l'enverra ensuite avec la méthode "send".					
				</p>
				
				<div class="center">
					// Voir la fonction getXMLHttpRequest() définie dans la partie précédente
					<span class="bold paragraphs-size">					
					<code>
					<br/>
					<span id="code-1">var xhr = getXMLHttpRequest(); </span>
					<br/>
					<span id="code-2">xhr.open("GET", "handlingData.php", true);</span>
					<br/>
					<span id="code-3">xhr.send(null);</span>
					</code>
					</span>
				</div>
				
				<br/>
				
				<p class="paragraphs-size">
				open s'utilise de cette façon : open(sMethod, sUrl, bAsync).

					<ul class="list-group paragraphs-size">
					  <li class="list-group-item">sMethod : la méthode de transfert : GET ou POST</li>
					  <li class="list-group-item">sUrl : la page qui donnera suite à la requête. Ça peut être une page dynamique (PHP, CFM, ASP) ou une page statique (TXT, XML...);</li>
					  <li class="list-group-item">bAsync : définit si le mode de transfert est asynchrone ou non (synchrone). Dans ce cas, mettez true . Ce paramètre est optionnel et vaut true par défaut, mais il est courant de le définir quand même (je le fais par habitude).</li>
					</ul> 				
				</p>
				
				<br/><br/>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Passer des variables</h1>							
				</div>
				
				<p class="paragraphs-size">
				On a la possibilité de passer des variables au serveur. Suivant la méthode d'envoi utilisée une petite différence fait son apparition.
				Dans le cas de GET les variables sont transmises directement dans l'URL.				
				</p>
				
				<div class="center">
					<img class="img-responsive center-block" src="img/codes/passage_variable.png" alt="passage variable">
				</div>	
				
				<br/>
				
				<p class="paragraphs-size">
				Pour POST, il faut spécifier les variables dans l'argument de "send".				
				</p>
				
				<div class="center">					
					<img class="img-responsive center-block" src="img/codes/spécification_variable.png" alt="spécification_variable">
				</div>
				
				<br/>

				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Protéger les caractères</h1>							
				</div>		

				<p class="paragraphs-size">
				Avant de passer des variables, il est important de les protéger pour conserver les caractères spéciaux pour les espaces. Pour cela, il faut utiliser la 
				fonction globale "encodeURIComponent".				
				</p>				
				
				<div class="center">					
					<img class="img-responsive center-block" src="img/codes/protection_caractères.png" alt="protection_caractères">
				</div>	
				
				<br/><br/>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Le changement d'état</h1>							
				</div>
				
				<p class="paragraphs-size">
				Quand on envoie une requête HTTP via XMLHTTPRequest, elle passe par plusieurs état différents.
				
				 <ul class="list-group paragraphs-size">
				  <li class="list-group-item">0 : L'objet XHR a été créé, mais pas encore initialisé (la méthode open n'a pas encore été appelée)</li>
				  <li class="list-group-item">1 : L'objet XHR a été créé, mais pas encore envoyé (avec la méthode send )</li>
				  <li class="list-group-item">2 : La méthode send vient d'être appelée</li>
				  <li class="list-group-item">3 : Le serveur traite les informations et a commencé à renvoyer des données</li>
				  <li class="list-group-item">4 : Le serveur a fini son travail, et toutes les données sont réceptionnées</li>
				</ul> 				
				</p>
				
				<p class="paragraphs-size">
				Il va donc falloir détecter les changements d'état pour savoir oùen est la requête, il faut utiliser la propriété "onreadystatechange" et à 
				chaque changement d'état, on regardera duquel il s'agit.				
				</p>
				
				<div class="center">					
					<img class="img-responsive center-block" src="img/codes/onreadystatechange.png" alt="onreadystatechange">
				</div>

				<br/>
				
				<p class="paragraphs-size">
				On utiliser readyState pour connaître l'état de la requête. En plus, on doit aussi vérifier le code de l'état de la requête pour vérifier si tout s'est 
				bien passé. On utilise pour cela la propriété "status" : si elle vaut 200 ou 0, tout est ok.
				</p>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Récupération des données</h1>							
				</div>
				
				<p class="paragraphs-size">
				Il suffit d'utiliser deux propriétés disponibles : 

					<ul class="list-group paragraphs-size">
						<li class="list-group-item">responseText : pour récupérer les données sous forme de texte brut</li>
						<li class="list-group-item">responseXML : pour récupérer les données sous forme d'arbre XML</li>				  
					</ul> 	
				</p>
				
				<br/><br/>
				
				<hr/>
								
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">La fonction de callback</h1>							
				</div>
				
				<p class="paragraphs-size">
				Le alert; à part vérifier si la réception est bonne, ne sert à rien. Si on récupére des données, c'est pour les traiter. Le traitement peut se faire directement dans la fonction anonyme définie dans onreadystatechange.
				Mais il vaut mieux séparer les codes pour avoir deux fonctions concises plutôt qu'une grosse. On va donc définir ce qu'on appelle une fonction dite "de callback". Une fonction de callback est une fonction de rappel, 
				exécutée généralement après qu'un script a été exécuté. Il s'agit de passer à une fonction A le nom d'une fonction B qui sera lancée une fois que la fonction A aura été exécutée.							
				</p>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Récupération d'un fichier XML</h1>							
				</div>
				
				<p class="paragraphs-size">
				On lira simplement le contenu d'un fichier XML.
				</p>
				
				<script type="text/javascript">										
				function recuperation()
				{
					window.open('http://ilovejs.gabriel-cassano.be/recuperation.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
				}
				</script>

				<div id="dragandrop">
					<br/>
					<a href="#null" onclick="recuperation();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function recup()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/recup.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>			
											
					<a href="#null" onclick="recup();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>
			</div>						
		</section>	
		
		<section id="dynamic">
			<div class="container">
				<div class="panel-heading dynamic-title">
					<h1 class="center titles-paragraphs">Le Dynamic Script Loading</h1>							
				</div>		

				<p class="paragraphs-size">
				Le JavaScript permet de charger un fichier .js à partir d'un autre et à n'importe quel moment, il est donc possible de charger une autre page de script à 
				partir d'une première en insérant un élément "script", pour lequel on utilisera le DOM. Le script créera et insérera un élément "script" avec un attribut 
				src pointant vers la page JS dans le body de la page HTML. Ce bout de code, placé appele le le fichier JS exactement comme si l'élément "script" avait été 
				écrit en HTML brutl, le script contenu dans ce fhcier JS est alors exécuté. On ajoute la fonction "callback" qui sera appelée par le fichier JS dès qu'il sera 
				chargé, c'est la réponse que le script de départ attend.
				</p>
								
				<script type="text/javascript">										
				function loadjs()
				{
					window.open('http://ilovejs.gabriel-cassano.be/loadjs.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
				}
				</script>

				<div id="dragandrop">
					<br/>
					<a href="#null" onclick="loadjs();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function ljs()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/ljs.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>			
											
					<a href="#null" onclick="ljs();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Charger un objet statique JSON</h1>							
				</div>
				
				<p class="paragraphs-size">
				JSON est un format de structuration des données, comme le XML, la syntaxe est identique à la syntaxe objet de JavaScript. Il est très facile de récupérer une variable 
				et cette variable peut être un objet JSON, il y a deux avantages à cette importation d'un objet JSON via le Dynamic Script Loading : 
				
					<ul class="list-group paragraphs-size">
						<li class="list-group-item">Facilité de mise en place</li>
						<li class="list-group-item">L'objet récupér est de type object et non de type string, il n'y a donc pas besoin d'utiliser "eval", ou l'objet natif JSON pour parser
						la chaîne de caractères.</li>						
					</ul> 				
				</p>
				
				<p class="paragraphs-size">
				Pour charger l'objet statique JSON, on va utiliser la fonction "callback", il suffira ensuite de traiter les données et de les afficher.				
				</p>
				
				<script type="text/javascript">										
				function loadjson()
				{
					window.open('http://ilovejs.gabriel-cassano.be/loadjson.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
				}
				</script>

				<div id="dragandrop">
					<br/>
					<a href="#null" onclick="loadjson();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function ljson()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/ljson.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>			
											
					<a href="#null" onclick="ljson();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>
			</div>						
		</section>
		
		<section id="implementation">
			<div class="container">
				<div class="panel-heading perso-titles">
					<h1 class="center titles-paragraphs">L'implémentation DOM</h1>							
				</div>		

				<p class="paragraphs-size">
				L'objet XMLHttpRequest est pratique pour récupérer n'importe quoi comme type de données mais il est généralement un peu lourd à utiliser. Si on veut justement
				récupérer une source de données au format XML, on peut le faire via le DOMImplementation. Cette interface est supporté par la plupart des navigateurs. 
				On créera une fonction générique qui ira récupérer une source XML à l'adresse sUrl et qui renverra le contenu dans une fonction de callback "fCallback", ainsi 
				on disposera d'une fonction qui ne s'occupera que de la gestion de DOMImplementation.
				</p>			
				
				
				<script type="text/javascript">										
				function gestionBD()
				{
					window.open('http://ilovejs.gabriel-cassano.be/gestionBD.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
				}
				</script>

				<div id="dragandrop">
					<br/>
					<a href="#null" onclick="gestionBD();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function gbd()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/gbd.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>			
											
					<a href="#null" onclick="gbd();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>			
			</div>						
		</section>	
		
		<section id="iframe">
			<div class="container">
				<div class="panel-heading perso-titles">
					<h1 class="center titles-paragraphs">L'iFrame Loading</h1>							
				</div>		

				<p class="paragraphs-size">
				Un iframe peut être symbolisé comme un document dans un document. Pour accéder au document contenu dans l'iframe, il faut d'abord accéder à l'iframe, puis à son 
				contenu.
				</p>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Chargement de contenu</h1>							
				</div>

				<p class="paragraphs-size">
				Pour charger un fichier dans un iframe, il y a 3 façons : 
				
				
					<ul class="list-group paragraphs-size">
					  <li class="list-group-item">En remplissant l'attribut src directement en HTML. Le fichier est alors chargé à l'ouverture de la page contenant l'iframe</li>
					  <li class="list-group-item">En modifiant avec JavaScript l'attribut src</li>
					  <li class="list-group-item">En ouvrant un lien dans l'iframe, au moyen de l'attribut target, lui aussi invalide XHTML.</li>
					</ul> 
				</p>
				
				<br/>
				
				<p class="paragraphs-size">
				Les deux dernières méthodes sont efficcaces dans le cas d'une utilisation de type Ajx, la méthode avec target, étant invalide, peut pourtant être très pratique.
				</p>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">L'événement onLoad</h1>							
				</div>
				
				<p class="paragraphs-size">
				Il se déclenche quand le contenu de l'iframe vient d'être chargé. A chaque chargement de contenu, onload est déclenché, c'est un moyen efficace pour savoir si le
				document est chargé et ainsi pouvoir le récupérer.				
				</p>				
				
				<script type="text/javascript">										
				function loadcontent()
				{
					window.open('http://ilovejs.gabriel-cassano.be/chargement_contenu.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
				}
				</script>

				<div id="dragandrop">
					<br/>
					<a href="#null" onclick="loadcontent();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function lcontent()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/lcontent.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>			
											
					<a href="#null" onclick="lcontent();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Récupérer du contenu</h1>							
				</div>
				
				<p class="paragraphs-size">
				Elle est assez simple : maintenant qu'on sait accéder à l'iframe, il n'y a plus qu'à ajouter quelques points supplémentaires.				
				</p>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Récupérer des données textuelles : HTML et txt</h1>							
				</div>
				
				<p class="paragraphs-size">
				Si on veut récupérer des données au format texte, on doit utiliser innerHTML. Un document chargé dans l'iframe possède un objet "body". Même si c'est un fichier 
				texte, un élément "body" est présent vrituellement, c'est lui qui englobe la totalité des informations disponibles. Ainsi, on doit passer par le body pour 
				utiliser innerHTML car il est impossible de faire innerHTML directement sur l'objet document. Si le fichier est un fichier HTML, tout ce qui est dans l'élément body
				est récupéré. En revanche, si c'est un fichier texte, le contenu est récupéré, mais est placé dans un élément "pre".
				Pour utiliser ce contenu, il suffit de faire un substring pour éliminer les balises d'ouverture et de fermeture de l'élément "pre".
				</p>
				
				<div class="center">
					<span class="bold paragraphs-size">
					<code>
					var sContent = window.idFrame.document.body.innerHTML;
					<br/>
					sContent = sContent.substring(5, sContent.length - 6);					
					</code>
					</span>
				</div>	
				
				<script type="text/javascript">										
				function loadcontenttxt()
				{
					window.open('http://ilovejs.gabriel-cassano.be/loadcontenttxt.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
				}
				</script>
				
				<br/>

				<div id="dragandrop">
					<br/>
					<a href="#null" onclick="loadcontenttxt();" class="btn btn-primary btn-lg selectday"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function lcontenttxt()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/lcontenttxt.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>			
											
					<a href="#null" onclick="lcontenttxt();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>				
			</div>						
		</section>			
		
		<section id="cookies">
			<div class="container">
				<div class="panel-heading">
					<h1 class="center perso-titles titles-paragraphs">Les cookies</h1>							
				</div>		

				<p id="first-p-cookies" class="paragraphs-size">
				Les cookies sont un système qui permet à un site web de stocker les informations textuelles au sein du navigateur. La navigateur enregistre ces données dans 
				des fichiers sur le disque dur de l'ordinateur. Les cookies peuvent être utilisés pour mettre en place un système Ajax. Il existe un objet cookie, sous-objet 
				de document qui contient la liste des cookies enregistrés pour le domaine visité. Cette liste de cookies est données sous la forme d'une chaîne de caractères 
				et JavaScript ne possède pas de méthodes, ni de propriétés pour récupérer la valeur d'un cookie présent dans cette chaîne de caractères.
				</p>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Ecrire un cookie</h1>							
				</div>

				<p class="paragraphs-size">
				C'est une chose assez simple : on formate une chaîne de caractères de façon à ce qu'elle corresponde au format de stockage d'un cookie, cette chaîne contient le 
				nom du cookie et sa valeur. Il est important, lorsque l'on crée un cookie, de spécifier sa date d'expiration, elle est calculée en récupérant la date d'aujourd'hui 
				en lui ajoutant un an de millisecondes. Pour que la da te d'expiration soit reconnue par le navigateur, elle doit être écrite au format GMT (méthode toGMTString).
				</p>
				
				<br/>
				
				<div class="center">				
					<img class="img-responsive center-block" src="img/codes/ecriture_cookie.png" alt="ecriture_cookie">
				</div>
				
				<br/><br/>
				
				<hr/>
								
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">La fonction setCookie</h1>							
				</div>
				
				<div class="center">
					<img class="img-responsive center-block" src="img/codes/setcookie.png" alt="setcookie">
				</div>
				
				<br/><br/>
				
				<hr/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Lire un cookie</h1>							
				</div>

				<p class="paragraphs-size">
				C'est plus compliqué : il va falloir analyser une chaîne de caractères contenu dans "document.cookie", il faut récupérer l'emplacement du point virgule et se 
				débrouilller pour extraire la valeur du cookie recherché. Si il n'y a pas de cookie enregistré, la chaîne est simple à parcourir mais s'il y a plusieurs 
				cookies, c'est plus compliqué. Il y a deux manières de récupérer la valeur d'un cookie donné : avec une analyse de chaîne simple ou avec une expression régulière.
				</p>
				
				<br/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Avec une analyse normale</h1>							
				</div>
							
				<div class="center">					
					<img class="img-responsive center-block" src="img/codes/lecture_cookie_analyse_normale.png" alt="lecture_cookie_analyse_normale">
				</div>
				
				<br/>
				
				<div class="panel-heading">
					<h1 class="center titles-paragraphs">Avec une expression régulière</h1>							
				</div>
							
				<div class="center">					
					<img class="img-responsive center-block" src="img/codes/lecture_cookie_expression_reguliere.png" alt="lecture_cookie_expression_reguliere">
				</div>
			</div>						
		</section>	
		
		<section id="panier">
			<div class="container">
				<div class="panel-heading">
					<h1 class="center titles-paragraphs dynamic-title">Un système de panier</h1>							
				</div>				

				<p class="paragraphs-size p-top">
				L'utilisateur dispose d'un formulaire pour valider le panier d'une boutique en ligne, mais il faut au préalable s'être identifié, la page sait s'il l'est en stockant 
				cette information dans un champ caché ou dans une variable. S'il n'est pas encore identifié, l'application lui propose de le faire à travers un autre formulaire dédié
				à cela. L'utilisateur remplit le petit formulaire et le valide. L'application interroge alors le serveur sans demander une nouvelle page. En attendant la réponse, si 
				le serveur est lent, l'utilisateur peut changer la quantité des articles qu'il a choisit. Il faut alors l'avertir visuellement que la requête en cours de traitement, de 
				même qu'il faudra l'avertir quand elle sera terminée. Un moyen simple pour réaliser cela consiste à changer l'apparence du bouton de validation, en remplaçant le texte par 
				une image animée suggérant le chargement. Il faut en outre donner à l'utilisateur la possiblité d'abandonner la requête, comme pour le web classique, c'est le bouton "Annuler", 
				qui s'en charge, qui devient activé. Si l'utilisateur annule la requête, le bouton "S'identifier", affiche à nouveau le texte initial, et le bouton "Annuler" est désactivé.
				S'il laisse le traitement se poursuivre, une fois qu'il est terminé, le bouton "Annuler" est à nouveau désactivé. Si l'utilisateur a saisi les bons identifiant et mot de passe,
				l'application l'en avertir, lui permettant de valider son panier en modifiant l'information correspondante stockée au niveau de la page. Dans le cas contraire, elle affiche un 
				message d'erreur.
				</p>
				
				<div id="dragandrop">
					<script type="text/javascript">										
					function panier_ajax()
					{
						window.open('panier.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>				
				
					<br/>
					
					<a href="#null" onclick="panier_ajax();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function panier()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/panier.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>

					<br/><br/>
											
					<a href="#null" onclick="panier();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>
				
			</div>						
		</section>			
		
		<section id="autocompletion">
			<div class="container">
				<div class="panel-heading">
					<h1 class="center perso-titles titles-paragraphs">Un système d'auto-complétion</h1>							
				</div>				

				<p class="paragraphs-size" id="p-top">
				En partant d'un formulaire dans lequel on a inséré une liste de choix, cette liste force l'utilisateur à choisir une des 
				valeurs qu'on lui propose. Mais ce qui peut être intéressant, c'est d'aider l'utilisateur en lui proposant une liste de choix, 
				tout en lui permettant d'effectuer une saisie libre. C'est ce que l'on appelle le principe de l'auto-complétion : dès que l'utilisateur 
				tape un caractère dans le champ, une recherche est immédiatement effectuée et retournée au navigateur, il affiche les résultats dans un 
				petit cadre situé sous le champ de recherche, les résultats peuvent alors être parcourus, soit par le biais des touches fléchées du 
				clavier, soit par le biais du curseur de la souris. Si on choit un des résultats listés, il est alors automatiquement écrit dans le 
				champ de recherche en lieu et place de ce qui avait été écrit par l'utisateur et il ne reste plus qu'à lancer la recherche. Cela 
				permet de gagner du temps, la recherche peut s'effecteur en tapant seulement quelques caractères.
				</p>
				
				<p class="paragraphs-size">
				On a besoin d'un champ de texte pour écrire les mots-clé mais le navigateur enregistrement généralement ce qui a été écrit dans les 
				champs de texte pour le reproposer plus tard sous forme d'auto-complétion, il est possible de désactiver cela en utilisant l'attribut 
				autocomplete dans la champ "input". Il faut ajouter un élément capable d'englober les suggestions de recherche, ce sera une balise "div"
				contenant autant de "div" que de résultats. Il suffit ensuite d'effectuer une requête à chaque caractère afin de proposer une liste de suggestions,
				il faudra une fonction liée à l'événement "keyup" du champ de recherche, qui sera chargée d'effectuer une nouvelle requête à chaque caractère 
				tapé mais avec les multiples requêtes, on aura des suggestions qui ne seront plus en accord avec les caractères tapés dans le champ de recherche.
				Il faut donc utiliser la méthode abort() sur la précédente requête effectuée si elle n'est pas terminée, ainsi cela ne risque pas de renvoyer 
				des informations dépassées par la suite.
				</p>
				
				<p class="paragraphs-size">
				On peut donc faire un script de recherche baisque en PHP dont le principe consiste à rechercher les villes, par exemple, qui correspondent aux lettres 
				entrées dans le champ de recherche. Le nom des villes se trouvent dans un tableau PHP contenant les plus grandes villes de France. Il faudra donc récupérer 
				les données du fichier contenant ce talbeau grâce à la fonction "unserialize()", le tableau doit être parcouru à la recherche de résultats en cohérence 
				avec les caractères tapés par l'utilisateur dans le champ de recherche. On aura donc besoin d'une boucle ainsi que de la fonction count() pour obtenir le nombre 
				d'éléments contenus dans le tableau. Pour vérifier si un indexu de tableau correspond à la recherche il faudra utiliser la fonction "stripos()" qui permet 
				de vérifier si une chaîne de caractères contient certains caractères et ce sans tenir compte de la casse. Si on trouve un résultat en cohérence avec la 
				recherche, on l'ajoute à un tableau préalablement créé, grâce à la fonction "array_push()". Une fois le tableau parcouru, il faut trier les résultats avec la fonction "sort()"
				puis renvoyer les données au client. Comme on ne renvoit que le nom de la ville, ici, on va devoir choisir le caractère de séparation "/", jamais utilisé dans le nom d'une ville.
				On utilisera ensuite la fonction "implode()" de PHP pour concaténer toues les valeurs d'un tableau dans une chaîne de caractère avec un ou plusieurs caractère de séparation. 
				Et ensuite, il ne reste plus qu'à retourner le tout au client en PHP.
				</p>
				
				<div id="dragandrop">
					<script type="text/javascript">										
					function autoc_ajax()
					{
						window.open('autocompletion.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>				
				
					<br/>
					
					<a href="#null" onclick="autoc_ajax();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function autocompletion()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/autocompletion.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>

					<br/><br/>
											
					<a href="#null" onclick="autocompletion();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>
				
			</div>						
		</section>		
		
		<section id="chargement">
			<div class="container">
				<div class="panel-heading">
					<h1 class="center perso-titles titles-paragraphs">Chargement de fichiers</h1>							
				</div>				

				<p class="paragraphs-size" id="p-top-2">
				On peut créer une page qui va s'occuper de charger le contenu de deux autres fichiers selon le choix de l'utilisateur.
				</p>			
				
				<div id="dragandrop">
					<script type="text/javascript">										
					function chargement_ajax()
					{
						window.open('chargement_ajax.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>				
				
					<br/>
					
					<a href="#null" onclick="chargement_ajax();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
					
					<script type="text/javascript">										
					function chargement()
					{
						window.open('http://ilovejs.gabriel-cassano.be/codes/chargement.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
					}
					</script>

					<br/><br/>
											
					<a href="#null" onclick="chargement();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
				</div>
				
			</div>						
		</section>		
		
		<section id="theorieajs">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="hero">
							<h1 class="titles-paragraphs">Angular JS : les bases</h1>
						<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
					</div>

					<div class="hero" id="title-top">
						<h1 class="titles-paragraphs">Définition</h1>
					</div>
					
					<br/>
						
					<p id="paragraph-top">
					Angular JS est un framework JavaScript open-source développé par Google. Il facilite grandement le dévéloppement d'application web selon le modèle MVC. 
					On produire du code HTML, JavaScript et CSS. Angular va permettre de rajouter des attributs aux balises HTML, ces nouveaux attributs commenceront par "ng-".						
					</p>
						
					<p class="paragraphs-size">
					On va utiliser 2 attributs apportés par Angular JS : ng-app et ng-controller mais il existe beaucoup d'autres attributs. On va introduire des variables directement 
					dans le code HTML, qui pourront être contrôlées par le JavaScript, ce qui rendra la page HTML dynamique, les données affichées pourront évoluer au cours du temps. Ces 
					variables seront facilement reconnaissalbes car elles seront encadrées par des accolade.
					
						<br/>
						
						<div>
							<h1 class="center titles-paragraphs">Premier exemple</h1>
						</div>
					
						<br/>
						
						<img class="img-responsive center-block" src="img/ex1ajs.png" alt="exercice 1">
					
						<div id="dragandrop">
							<script type="text/javascript">										
							function first_sample_angular()
							{
								window.open('first_sample_angular.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>	
							
							<br/><br/>	
							
							<a href="#null" onclick="first_sample_angular();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
						</div>				
													
						<ul class="list-unstylled paragraphs-size" id="list-top">
							<li>
							Il faut d'abord télécharger le frawework sur le site officiel : https://angularjs.org/, choisir "stable" et "minified" et cliquer sur Download. 
							Ensuite récupérer le fichier "angular.min.js" et le place dans un dossier (ex : lib) et ensuite l'appeler dans la page HTML, cela permettra d'utiliser 
							Angular JS.
							</li>
										
							<li>
							L'attribut ng-app dans la balise body signifie qu'Angular JS sera actif dnas la balise <code><b>"body"</b></code> jusqu'à la balise <code><b>"/body"</b></code>.
							</li>
										
							<li>
							L'attribut ng-controller dans la balise h1 va permettre de définir un contrôleur, il sera actif de la balise "h1" à la balise "/h1". Tout ce qui se trouve 
							entre ses 2 balises sera soumis à la surveillance du contrôleur "monControl" dans cette zone, c'est lui qui dirige tout. Un contrôleur correspond à une fonction 
							JavaScript, la fonction "monControl" possède un argument <code><b>"$scope"</b></code> qui est fondamental, c'est un des principes de base et une des forces d'Angular JS, qui est le 
							data-binding. Le data-binding, c'est la capacité à échanger des données entre la partie HTML et la partie JavaScript, cet échange peut se faire dans les 2 sens : 
							du HTML vers le JavaScript et du JavaScript vers le HTML. Pour transporter ces données, Angular JS utilise un objet qui est l'argument de la fonction "monControl",
							<code><b>"$scope"</b></code>.
							</li>
									
							<li>
							<code><b>$scope.maVariable="Hello World !"; :</b></code> On a <code><b>{{maVariable}}</b></code> du côté HTML et <code><b>"$scope.maVariable"</b></code> du côté JavaScript, on pourra considérés ces 2 entités comme identiques. 
							L'objet <code><b>"$scope"</b></code> n'arrête pas de faire des "aller-retour" entre le HTML et le JavaScript. Comme tous les objets, il possède des propriétés, "maVariable" est une  
							de ses propriétés. 
							</li>
						</ul>	
					</p>
					
					<hr>
					
					<div>
						<h1 class="center titles-paragraphs">Manipulation des objets</h1>
					</div>
					
					<br/>
						
					<div>
						<h1 class="center titles-paragraphs">Exemple</h1>
					</div>
					
					<br/>
						
					<img class="img-responsive center-block" src="img/ex2ajs.png" alt="exercice 1">	
					
					<div id="dragandrop">
						<script type="text/javascript">										
						function second_sample_angular()
						{
							window.open('second_sample_angular.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
						}
						</script>	
							
						<br/><br/>	
						
						<a href="#null" onclick="second_sample_angular();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
					</div>		
								
					<p class="paragraphs-size p-top-5">
					Au lieu d'une simple variable, on manipule ici un objet "infoPerso" côté HTML et "$scope.infoPerso" coté serveur, le contrôleur qui est la fonction "monControl" 
					ne compose qu'une ligne «$scope.infoPerso=maFiche;». Un objet1 est = à un objet2, cela permet d'attribuer à objet1 toutes les propriétés d'objet2, méthodes et 
					attributs. Après exécution de la ligne, "infoPerso" se retrouve avec les attributs : id, nom, prenom, date de naissance, les attributs de l'objet maFiche.
					</p>
					
					<hr/>
						
					<div>
						<h1 class="center titles-paragraphs">Utilisation de ng-repeat</h1>
					</div>
						
					<p class="paragraphs-size">
					ng-repeat est la direction qui permet de dupliquer du code HTML automatiquement et intelligemment. 
					</p>
						
					<div>
						<h1 class="center titles-paragraphs">Exemple : afficher une liste de fruits</h1>												
					</div>
					
					<img class="img-responsive center-block" src="img/ex3ajs.png" alt="exercice 3">	
					
					<div id="dragandrop">
						<script type="text/javascript">										
						function third_sample_angular()
						{
							window.open('third_sample_angular.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
						}
						</script>	
							
						<br/><br/>	
							
						<a href="#null" onclick="third_sample_angular();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
					</div>		
					
					<p class="paragraphs-size p-top-5">
					ng-repeat va permettre de répéter la balise "li" autant de fois que nécessaire pour que tous les éléments du tableau "mesFruits" soit traités. {{fruit}}
					sera successivement remplacé par banane, pomme, ananas, pêche et fraise.
					</p>
					
					<hr/>

					<div>
						<h1 class="center titles-paragraphs">Utilisation de ng-src</h1>
					</div>
						
					<p class="paragraphs-size">
					Les objets peuvent aussi contenir des URL, notamment des URL d'images.
					</p>
						
					<div id="dragandrop">
						<script type="text/javascript">										
						function ex5()
						{
							window.open('http://ilovejs.gabriel-cassano.be/ex5.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
						}
						</script>			
					
						<br/>		
						
						<a href="#null" onclick="ex5();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayez</a>
							
						<script type="text/javascript">										
						function ex5code()
						{
							window.open('http://ilovejs.gabriel-cassano.be/codes/ex5.txt','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
						}
						</script>			

						<br/><br/>	

						<a href="#null" onclick="ex5code();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
					</div>
					
					<br/>
						
					<p class="paragraphs-size p-top-5">
					La balise image "img" avec l'attribut classique "src" classique ne fonctionnera pas, il faut systèmatiquement utiliser "ng-src" à la place de "src".
					</p>
						
					<hr/>
					
					<div>
						<h1 class="center titles-paragraphs">L'interaction avec ng-click</h1>
					</div>
						
					<p class="paragraphs-size">
					Grâce à ng-click, il est possible de réagir au clic de l'utilisateur en appelant la fonction de notre choix, la balise qui aura pour attribut ng-click
					deviendra cliquable, un clic sur le contenu de la balise entraînera l'exécution de la fonction.
					</p>
					
					<hr/>
						
					<div>
						<h1 class="center titles-paragraphs">ng-show et ng-hide</h1>
					</div>
						
					<p class="paragraphs-size">
					Il est possible de masquer le contenu d'une balise en utilisant la directive ng-show dans la balise. Si dans le contrôleur, la variable "$scope.isVisible" est 
					égale à "true", le contenu de la balise sera visible, si "$scope.isVisible" est égale à "false", le contenu de la balise sera invisible. La directive ng-hide 
					fonctionne exactement de la même façon, mais à l'envers : visible si "false" et invisible si "true".
					</p>
					
					<img class="img-responsive center-block" src="img/ng-show_and_ng-hide.png" alt="ng-show/ng-hide">
					
					<div id="dragandrop">
						<script type="text/javascript">										
						function fourth_sample_angular()
						{
							window.open('fourth_sample_angular.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
						}
						</script>	
							
						<br/><br/>	
							
						<a href="#null" onclick="fourth_sample_angular();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
					</div>	
					
					<hr/>
						
					<div>
						<h1 class="center titles-paragraphs">La balise input et la directive ng-model</h1>
					</div>
						
					<p class="paragraphs-size">
					Les sites n'utilisant pas, à un moment ou à un autre, la balise input sont très rares. AngularJS va énormément simplifier la gestion des données entrées par
					le visiteur du site. La directive ng-model pourra être associé à une balise input : " ng-model="maValeur".
					</p>
					
					<br/>
									
					<img class="img-responsive center-block" src="img/ex5ajs.png" alt="exercice 5">	
					
					<div id="dragandrop">
						<script type="text/javascript">										
						function fifth_sample_angular()
						{
							window.open('fifth_sample_angular.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
						}
						</script>	
							
						<br/><br/>	
							
						<a href="#null" onclick="fifth_sample_angular();" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
					</div>										
				</div>	
			</div>
			</div> 
		</section>		
		
		<section id="miniprojet">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="hero">
							<h1 class="titles-paragraphs">Mini projet</h1>
							<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
						</div>
						
						<p id="paragraph-top" class="paragraphs-size">
						Mise en place d'une application de saisie de nouveaux élèves dans un lycée, l'application devra proposer : le nom, le prénom, la date de naissance, la 
						classe, il faut choisir une classe parmis une liste (utilisation de la balise select). La validation du formulaire devra se faire par l'intermédiaire d'un 
						bouton. Les élèves nouvellement saisis devront apparaître sur la page au fur et à mesure de la saisie.
						</p>
						
						<div id="dragandrop">
							<script type="text/javascript">										
							function mini_projet()
							{
								window.open('miniprojet/miniprojet.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>	
								
							<br/><br/>	
								
							<a href="#null" onclick="mini_projet()" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Essayer</a>
							
							<script type="text/javascript">										
							function mini_projet_code()
							{
								window.open('http://ilovejs.gabriel-cassano.be/codes/miniprojet.rar','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>			

							<br/><br/>	

							<a href="#null" onclick="mini_projet_code()" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>
						</div>	
						
						<hr/>					
										
						<div class="hero">
							<h1 class="titles-paragraphs">Checkbox</h1>							
						</div>
						
						<p id="paragraph-top" class="paragraphs-size">
						Il est possible d'utiliser une checkbox (balise input avec un « type="checkbox" »)						
						Si la checkbox est cochée, on aura alors checked=true si elle est décochée on aura checked=false (vous pouvez utiliser
						un autre nom que «checked» pour la variable.
						</p>
						
						<hr/>
						
						<div class="hero">
							<h1 class="titles-paragraphs">Les filtres</h1>							
						</div>
						
						<p class="paragraphs-size" id="p-top-4">
						AngularJS prévoit l'application de filtres qui permet de sélectionner ou de mettre en forme l'information. En ajoutant un filtre à une directive ng-repeat,
						seuls les éléments correspondant au filtre seront affichés .
						</p>
					</div>						
				</div>	
			</div>			
		</section>		
		
		<section id="conceptnodejs">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="hero">
							<h1 class="titles-paragraphs">Node JS</h1>
						<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
					</div>

					<div class="hero" id="title-top">
						<h1 class="titles-paragraphs">JavaScript côté serveur</h1>
					</div>
						
						<p id="paragraph-top" class="paragraphs-size">
						JavaScript avait toujours été utilisé du côté du client, c'est-à-dire du côté du visiteur qui navigue sur me site. Le navigateur web du visiteur exécute le code JavaScript et 
						effectue des actions sur la page web. Node.js offre un environnement côté serveur qui permet aussi d'utiliser le JavaScript pour générer des pages web : il vient en remplacement
						de langages serveur comme PHP. Node JS est basé, comme le JavaScript sur les événements, c'est toute la façon d'écrire des applications web qui change, c'est grâce à cela que Node JS
						est puissant et rapide. 
						</p>
						
						<p class="paragraphs-size">
						Pour utiliser Node JS, il faut d'abord l'installer sur sa machine, sur le site officiel de <a href="https://nodejs.org/en/">Node JS</a>. Lorsque l'installation est terminée, 
						on verra deux programmes installés : 
						
						<br/>
						
							<ul class="list-group paragraphs-size">
								<li class="list-group-item">
									<b>Node JS :</b> interpréteur de commandes, on l'utilise peu en pratique, il sert à tester des commandes JavaScript.
								</li>

								<li class="list-group-item">
									<b>Node Js command prompt :</b> console de Windows configurée pour reconnaître Node JS, c'est par là qu'on passera pour lancer les programmes, c'est ce qu'on utilisera
									le plus souvent.			
								</li>                                                        
							</ul>
						</p>
						
						<hr/>
						
						<div class="panel-body">
							<div class="cv-wrapper">
								<div class="center">
									<h1 class="titles-paragraphs">Construction d'un serveur HTTP</h1>
								</div>

								<br/>
									
								<p>			
									<img class="img-responsive center-block" src="img/serverhttp.png" alt="server http" />	
									
									<br/>
									
									<ul class="list-group paragraphs-size">
										<li class="list-group-item">
											<b>var http = require('http' :</b> require effectue un appel à la bibliothèque Node JS "http" qui permet de créer un serveur web, il existe 
											beaucoup de librairies semblables, dont la plupart peuvent être téléchargées avec NPM, le gestionnaire de paquets de Node JS. 
										</li>

										<li class="list-group-item">
											<b>var server = http.createServer() :</b> La variable "http" représente un objet JavaScript qui va permettre de lancer un serveur web. On appelle 
											la fonction createServer() prend un paramètre qui est une fonction, c'est pour ça que l'instruction est un peu plus compliquée, elle s'étend sur plusieurs 
											lignes. 
										</li>  

										<li class="list-group-item"i>
											<b>req : </b> La requête du visiteur est un objet qui contient toutes les informations sur ce que le visiteur a demandé. On y trouve le nomm de la page appelée, 
											les paramètres et les éventuels champs de formulaire remplis.
										</li>
										
										<li class="list-group-item">
											<b>res : </b> La réponde est un objet qu'il faut remplir pour donner un retour au visiteur, "res" contiendra en général le code HTML de la page à renvoyer au 
											visiteur.
										</li>
										
										<li class="list-group-item">
											<b>res.writeHead(200); : </b> On renvoie le code 200 dans l'en-tête de la réponse, qui dit au navigateur que tout va bien, en plus du code HTML, le serveur renvoie 
											en général tout un tas de paramètres dans en en-tête. Il faut connaître la norme HTTP qui indique comment clients et serveurs doivent communiquer pour bien l'utiliser.										
										</li>
										
										<li class="list-group-item">
											<b>res.end('Salut tout le monde !'); : </b> On termine la réponse avec "end()" en envoyant le message de notre choix au navigateur, dans l'exemple, on envoie du texte brut et 
											non pas du HTML.
										</li>
									</ul>										
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Tester serveur HTTP</h1>
								</div>	
									
								<p class="paragraphs-size">
								Il suffit d'exécuter la commande : "node fichier_a_executer.js"; il faut ensuite ouvrir le navigateur et se rendre à l'adresse : http://localhost:8080.
								On se connecte alors sur notre propre machine sur le port 8080 sur lequel le programme Node JS est en train d'écouter.
								<p>	
								
								<hr/>

								<div class="center">
									<h1 class="titles-paragraphs">Récupérer la page demandée par le visiteur</h1>
								</div>	
									
								<p class="paragraphs-size">
								Pour récupérer la page demandée par le visiteur, il faut faire appel à un nouveau module Node JS appelé "url", on demande son inclusion : 
								<br/>
								<p class="center paragraphs-size"><code><b>var url = require("url");</b></code></p>
								<br/>
								<p class="paragraphs-size">
								Ensuite, il faut parser la requête du visiteur pour obtenir le nom de la page demandée.
								<br/>
								url.parse(req.url).pathname;
								<br/>
								Code qui permettra de tester : 								
								<br/><br/>
								<img class="img-responsive center-block" src="img/requestpage.png" alt="test request page" />	
								</p>	
									
								<hr/>
								
								<div class="center">
									<h1 class="titles-paragraphs">Code complet affichant notre nom et notre prénom</h1>
								</div>	
									
								<br/>
								
								<p>
									<img class="img-responsive center-block" src="img/displayname.png" alt="displayname" />
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Emettre des événements</h1>
								</div>
								
								<br/>
									
								<p class="paragraphs-size">
								Si on veut émettre des événements, il faut inclure le module EventEmitter et créer un objet basé sur EventEmitter.
								<br/>
								<img class="img-responsive center-block" src="img/emitter.png" alt="événement emitter" />
								<br/>
								Pour émettre un événement dans le code, il faut faire appel à "emit()" depuis l'objet basé sur EventEmitter et indiquer :
									
									<ul class="list-group paragraphs-size">
										<li class="list-group-item">Le nom de l'événement qu'on veut générer</li>
										<li class="list-group-item">Un ou plusieurs éventuels parmaètres à passer</li>
									</ul>
									
								<br/>
									<img class="img-responsive center-block" src="img/emit.png" alt="événement node js">
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Code complet pour tester l'émission d'événements</h1>
								</div>	
									
								<p class="paragraphs-size">
								Ce code se contente d'émettre un événement, les événements seront émis depuis des fonctions imbriquées dans d'autres fonctions. 
								<img class="img-responsive center-block" src="img/evnodejs.png" alt="événement node js" />
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Les modules Node JS et NPM</h1>
								</div>	
									
								<p class="paragraphs-size">
								Node JS est très riche grâce à son extensibilité : ces extensions sont les modules. Il en existe des miliers qui offrent des fonctionnalités 
								variées. 
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Créer des modules</h1>
								</div>	
									
								<p class="paragraphs-size">
								Les modules sont des fichier ".js", si on veut créer un module "first module", on doit créer un fichier "first_module.js" dans le même dossier 
								que l'application et l'appeler : 
								<br/>
								var test = require('./test'); 
								<br/>
								
								<hr/>
								
								
								<div class="center">
									<h1 class="titles-paragraphs">Création d'un module simple</h1>
								</div>	
								
								<br/>
								
								<p class="paragraphs-size">
								On crée des fonctions qu'on place dans des varaiables : var direBonjour = function(), ensuit on exporte ces fonctions pour qu'elles soient utilisables 
								de l'extérieur : exports.direBonjour = direBonjour;.
								<img class="img-responsive center-block" src="img/module.png" alt="module" />
								</p>
								
								<hr/>								
								
								<div class="center">
									<h1 class="titles-paragraphs">Faire apel aux fonctions du module</h1>
								</div>
								
								<br/>
								
								<img class="img-responsive center-block" src="img/appelfonctions.png" alt="module" />
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Utiliser NPM pour installer des modules</h1>
								</div>	
								
								<br/>
								
								<p class="paragraphs-size">
								Une simple commande suffit pour télécharger et installer un module avec NMP, qui gère les dépendances : si un module a besoin d'un autre module pour 
								fonctionner, NPM ira le télécharger automatiquement. 
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Trouver un module</h1>
								</div>
									
								<p class="paragraphs-size">
								Si on sait ce qu'on cherche, le site web de NPM permet de faire une recherche mais on peut aussi faire une recherche dans la console avec la commande :
								npm search postgresql. Cela aura pour effet de chercher tous les modules en rapport avec la base de données PostgreSQL. 
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Installer le module</h1>
								</div>
									
								<p class="paragraphs-size">
								Pour installer un module, il faut se placer dans le dossier du projet et taper : npm install "nom_du_module". Le module sera installé localement pour le projet.
								Si on a un autre projet, il faudra donc relancer la commande pour l'installer à nouveau pour cet autre projet, cela permet d'utiliser des versions différentes 
								d'un même module en fonction des projets. 
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Mettre à jour un module</h1>
								</div>
									
								<p class="paragraphs-size">
								Cela se fait avec la commande : npm update, qui va checher sur les serveurs s'il y a de nouvelles versions des modules puis va mettre à jour les modules installés 
								sur la machine et il supprimera les anciennes versions.
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Express.JS</h1>
								</div>
									
								<p >
								Pour aller plus vite, on peut utiliser un framework, pour installer le framework Express.js, il faut taper la commande : npm install express.
								</p>
								
								<hr/>
								
								<div class="center">
									<h1 class="titles-paragraphs">Les routes</h1>
								</div>
									
								<p class="paragraphs-size">
								Quand on crée une application web, on manipule des routes, ce sont les différentes URL auxquelles l'application doit répondre. La gestion des routes doit être traité 
								sérieusement. 
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Les routes simples</h1>
								</div>
									
								
								<div class="center">
									<h1 class="titles-paragraphs">Application basique utilisant Express</h1>
								</div>
										
								<br/>
								
								<img class="img-responsive center-block" src="img/appexpress.png" alt="application basique express" />
								
								<br/>
								
								<p class="paragraphs-size">
								Il ne faut pas oublier : npm install express pour faire fonctionner le code. On commence par demander l'inclusion d'Express et on créer un objet app en appelant 
								la fonction express(). Ensuite, il faut indiquer les différentes routes à laquelle l'application doit répondre (ici, on créer une seule route, la racine "/"). Une 
								fonction de callback est appelée quand quelqu'un demande cette route.
								</p>
								
								<br/>
								
								<img class="img-responsive center-block" src="img/routes.png" alt="routes" />
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Les routes dynamiques</h1>
								</div>
									
								<p class="paragraphs-size">
								Express permet de gérer les routes dynamiques, des routes dont certaines portions peuvent varier, on doit écrire : nom_variable dans l'url de la route, ce qui aura pour effet 
								de créer un paramètre accessible depuis req.params.nom_variable.
									
								<br/>
								
									<img class="img-responsive center-block" src="img/routesdyn.png" alt="routes dynamiques" />									
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">socket.io</h1>
								</div>
									
								<p class="paragraphs-size">
								Cette bibliothèque permet de faire très simplement de la communication synchrone dans une application, la communication en temps réel. Les possiblités offertes par socket.io sont 
								immenses : tout ce qui nécessite une communication immédiate entre les visiteurs du site. 
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Installer socket.io</h1>
								</div>
									
								<p class="paragraphs-size">
								Cela se fait avec la commande : npm install socket.io.
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Le serveur app.js</h1>
								</div>
									
								<br/>
								
								<img class="img-responsive center-block" src="img/appjs.png" alt="app.js" />
									
								<br/>
									
								<p class="paragraphs-size">
								Le code fait 2 choses : 
									
									<ul class="list-group paragraphs-size">
										<li class="list-group-item">Il renvoie le fichier "index.html" quand un client demande à charger la page dans son navigateur</li>
										<li class="list-group-item">Il se préparer à recevoir des requêtes via socket.io, on s'attend ici à recevoir un seul type de message : connexion. Lorsqu'on se 
										connecte via socket.io, on logge ici l'information dans la console
										</li>
									</ul>
									
									Le client effectue 2 types de connexion :
									
									<ul class="list-group paragraphs-size">
										<li class="list-group-item">Une connexion classique au serveur en HTTP pour charger la page "index.html"</li>
										<li class="list-group-item">Une connexion "temps réel" pour ouvrir un tunnel via les WebSockets</li>
									</ul>
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 >Le client</h1>
								</div>
									
								<p class="paragraphs-size">
								Le fichier "index.html" est envoyé par le serveur node.js, c'est un fichier HTML classique mais il contient un peu de code JavaScript qui permettre 
								ensuite de communiquer avec le serveur en temps réel via socket.io.
									
								<br/>
								
									<img class="img-responsive center-block" src="img/client.png" alt="client" />
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Emettre et recevoir des messages</h1>
								</div>
									
								<p class="paragraphs-size">
								Le client est connecté, on peut échanger des messages entre le client et le serveur, il y deux possiblités : 
									
									<ul class="list-group paragraphs-size">
										<li class="list-group-item">Le serveur veut envoyer un message au client</li>
										<li class="list-group-item">Le client veut envoyer un message au serveur</li>
									</ul>
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">Le serveur envoi un message au client</h1>
								</div>
									
								<p class="paragraphs-size">
								Le serveur enverra un message au client lorsqu'il vient de se connecter pour lui confirmer que la connexion a bien fonctionné. Il faut rajouter ce 
								code dans "app.js".
									
								<br/>
									
									<img class="img-responsive center-block" src="img/msgclient.png" alt="client" />
								
								<br/>
								Lorsqu'on détecte une connexion, on émet un message au client avec socket.emit(), la fonction prend 2 paramètres : 
									
									<ul class="list-group paragraphs-size">
										<li class="list-group-item">Le type de message qu'on veut transmettre, cela permet de distinguer les différents types de message</li>
										<li class="list-group-item">Le contenu du message, on peut transmettre ce qu'on veut</li>
									</ul>
								</p>
								
								<hr/>
									
								<div class="center">
									<h1 class="titles-paragraphs">L'index.html</h1>
								</div>
									
								<p class="paragraphs-size">
								On va écouter l'arrivée de messages de type "message".
								
								<br/><br/>
								
								<img class="img-responsive center-block" src="img/message.png" alt="message" />
								</p>									
							</div>
						</div>							
					</div>	
				</div>
			</div> 
		</section>	
		
		<!-- ARRIVE ICI -->
		
		<section id="appnodejs">
			<div class="container">	
				<div class="row">
					<div class="panel panel-default">					
						<div class="hero">
							<h1 class="titles-paragraphs">Le chat</h1>
						<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
					</div>
					
						<p id="instructions" class="paragraphs-size">
						Pour tester les application, le plus simple est de télécharger le fichier de code, ensuite le décompresser et placer le dossier dans 
						<code><b>C:\Users\votre_nom_d_utilisateur\nom_de_l_application</b></code>, le nom de l'application sera le nom du dossier qui contient l'application.
						Ensuite pour lancer l'application, ouvrez une console, à l'aide de la commande "cmd", que l'on tape dans l'explorateur de fichier, ensuite 
						rendez-vous dans le dossier de l'application en tapant cd ./nom_de_l_application", ensuite tapez la commande 
						<code><b>node index.js</b></code>. Rendez-vous à l'url <code><b>http://localhost:8888/</b></code> (qui correspond à la configuration serveur du cas présent, comme je l'ai configurée).
						</p>
					
						<br/>
						
						<hr/>				

					<div class="hero">
						<h1 class="titles-paragraphs">Un système de chat avec socket.io</h1>
					</div>
						
					<div class="hero" id="title-top">
						<h1 class="titles-paragraphs">Le fichier app.js</h1>
					</div>
						
						<p id="paragraph-top" class="paragraphs-size">
						Il renvoie une page web lorsqu'on appelle le serveur, on va renvoyer le fichier "index.html" aux visiteurs qui se connectent sur le site. En plus d'une page 
						web classique, le serveur Node JS devra gérer les événements de socket.io, on a besoin de gérer deux événements :
							
							<ul class="list-group paragraphs-size">
								<li class="list-group-item">nouvel_utilisateur : signale qu'un nouveau client vient de se connecter au Chat, il doit transmettre un pseudo pour pouvoir informer l'utilisateur 
								avec des messages.
								</li>								
								<li class="list-group-item">message : signale qu'un nouveau message a été posté, le rôle en tant que serveur sera de le redistribuer aux autres clients connectés avec un broadcast. On récupèrera
								le pseudo du posteur dans une variable de session
								</li>
								</ul>
						</p>
						
						<br/>
					
					<div class="hero">
						<h1 class="titles-paragraphs">L'index.html</h1>
					</div>
						
						<p id="p-top-6" class="paragraphs-size">
						Son code doit contenir : 
							
							<ul class="list-group paragraphs-size">
								<li class="list-group-item">une connexion à socket.io</li>
								<li class="list-group-item">Demander le pseudo au visiteur lors du chargement de la page via un prompt() en JS et envoyer un signal nouvel_utilisateur.</li>
								<li class="list-group-item">Gérer la réception de signaux de type nouveau_client envoyés par le serveur. Cela signifie qu'un nouveau clientvient de se connecter. 
								Afficher son nom dans un message
								</li>								
								<li class="list-group-item">Gérer la réception de signaux de type message envoyés par le serveur. Cela signifie qu'un autre client vient d'envoyer un message sur le Chat 
								et donc qu'il vous faut l'afficher dans la page.
								</li>
								<li class="list-group-item">
								Gérer l'envoi du formulaire, lorsque le client veut envoyer un message aux autres personnes connectées. Il faudra récupérer le message saisi dans le
								formulaire en JavaScript, émettre un signal de type message au serveur pour qu'il le distribue aux autres clients, et aussi insérer ce message dans 
								notre propre page. 
								</li>
							</ul>
						</p>

						<div id="dragandrop">
							<script type="text/javascript">										
							function chat()
							{
								window.open('http://ilovejs.gabriel-cassano.be/codes/chat.rar','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>			
							
							<br/>		

							<a href="#null" onclick="chat();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
						</div>		
					</div>
				</div>

				<div class="row">
					<div class="panel panel-default">					
						<div class="hero">
							<h1 class="titles-paragraphs">Un formulaire de transfert de fichiers</h1>
						<div class="spacer"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
					</div>
					
						<p class="title-para">
							<div class="hero">
								<h1 class="titles-paragraphs">Cas d'utilisation de l'application</h1>
							</div>
						
							<ul class="list-group paragraphs-size" id="instructions">
								<li class="list-group-item">L'utilisateur doit pouvoir utiliser l'application depuis un navigateur</li>
								<li class="list-group-item">L'utisateur doit voir une page d'accueil affichant un formulaire de transfert de fichier</li>
								<li class="list-group-item">En soumettant le formulaire après avoir choisit une image, elle doit être uploadée à la même adrese, qui l'affichera une fois 
								le transfert terminé.</li>							
							</ul>
						</p>
						
						<br/><br/>
						
						<hr/>
						
						<p>
							<div class="hero">
								<h1 class="titles-paragraphs">Les couches de l'application</h1>
							</div>
							
							<br/></br>
						
							<ul class="list-group p-top-7 paragraphs-size" id="instructions"> 
								<li class="list-group-item">On a besoin d'un serveur HTTP pour servir des pages web</li>
								<li class="list-group-item">
								Le serveur devra répondre différemment en fonction de l'URL demandée, on a besoin d'un routeur pour attribuer 
								aux requêtes les bonnes réponses.
								</li>
								<li class="list-group-item">
								Pour satisfaire les requêtes reçues sur le servuer et qui ont été dirigées grâce au routeur, il faudra un gestionnaire 
								de requêtes.
								</li>
								<li class="list-group-item">
								Le routeur va aussi devoir traiter les données reçues par POST et les transmettre au gestionnaire de requête de façon appropriée, on aura besoin d'un 
								gestionnaire de données pour cela.
								</li>
								<li class="list-group-item">
								On ne souhaite pas uniquement traiter les URL reçues, on veut aussi afficher du contenu lorque ces URL sont appelées, il faudra donc un modèle de vue 
								qui sera utilisé par le gestionnaire de requêtes des éléments au navigateur.</li>
								<li class="list-group-item">
								L'utilisateur devra pouvoir transférer des images, il faudra donc un gestionnaire d'upload pour gérer cela.
								</li>
							</ul>
						</p>
						
						<br/><br/>
						
						<hr/>
						
						<div class="hero">
							<h1 class="titles-paragraphs">Le serveur "server.js"</h1>
						</div>
						
						<p id="p-top-6" class="paragraphs-size">
						Node.js récupère dans une requête POST par paquets, les fonctions de rappels régaissant à différents événements, ces événements sont "data", lorsqu'un nouveau paquet 
						est disponible et "end" lorsque toutes les données ont été reçues. On doit indiquer à Node.js quelles fonctions lorques ces événements sont déclenchés, c'est réalisé 
						en ajoutant des écouteurs à l'objet "request" passés à la fonction de rappel onRequest, chaque fois qu'une requête HTTP est reçue. On n'a accès à l'objet "request"
						qu'au niveau du serveur puisqu'on ne le passe pas au routeur et donc pas au gestionnaire de requête non plus. C'est une tâche dévolue au serveur de fournir au reste de 
						l'application les données de la requête utilie au reste du traitement. C'est pour cela qu'il est préférable que les données POST soient traitées au niveau du serveur et 
						de passer le résultat au routeur et au gestionnaire de requêtes qui pourront décider ce qu'il faut en faire. L'idée est donc de placer les fonctions de rappel liées à 
						"data" et "end" au niveau du serveur. On utilise "data" pour réunir les paquets de données et "end" pour transmettre les données collectées au gestionnaire de requêtes 
						en passant par le routeur. On fait principalement 3 choses. D'abord, on précise qu'on attend des données au format utf-8, ensuite on ajoute un écouteur pour l'événement 
						"data" qui remplit au fur et à mesure la variable "postData" avec les paquets reçus, on déplace l'appel au routeur au niveau de la fonction de rappel de l'écouteur de l'
						événment "end" pour être sûr qu'il ne sera appelé que lorsque toutes les données auront été reçues. On en profite aussi pour transmettre les données POST au routeur puisque 
						on en aura besoin dans le gestionnaire de requêtes. Ajouter une inscription dans la console n'est pas nécessairement opportun mais cela est utile pour voir ce qu'il se passe.						
						</p>
						
						<br/><br/>
						
						<img class="img-responsive center-block" src="img/server.png" alt="client" />
						
						<br/><br/>
						
						<hr/>
						
						<div class="hero title-para2">
							<h1 class="titles-paragraphs perso-title">La gestion de transfert de fichier dans le fichier "requestHandlers"</h1>
						</div>
						
						<p class="paragraphs-size" id="p-top-4">
						L'objectif est de permettre à l'utilisateur d'uploader une image puis d'afficher cette image dans le navigateur. On va pour cela utiliser un module externe de Node.js, on utilisera
						"node-formidable" qui permet de se passer de tous les détails pénibles liés à la réception de fichiers. Recevoir des fichiers revient presque au même que de recevoir des données POST 
						mais les détails deviennent trop pénible, il vaut mieux se servir d'une solutions clés en main. 
						</p>
						
						<hr/>
						
						<div class="hero title-para2">
							<h1 class="titles-paragraphs perso-title">Utilisation du module "formidable </h1>
						</div>
						
						<p class="title-para paragraphs-size" id="p-top-4">
						Pour pouvoir ce servir du module "formidable", Node.js incorpore un gestionnaire de paquetage appelé NPM qui permet d'installer des modules externes de façon très simple, il faut 
						juste de taper la commande : "npm install formidable". Le module sera ensuite disponible dans le code, il suffira de l'importe en écrivant : "var formidable = require("formidable");".
						Ce module rend tous les éléments de formulaire reçus depuis une requête HTTP de type POST facilement accessibles depuis Node.js. Il reste à créer un objet "incomingForm" qui est une 
						réprésentation du formulaire reçu et qui peut être parcouru depuis l'objet "request" du serveur HTTP, autant pour les champs du formulaire que pour les fichier. On doit aussi trouver 
						comment renvoyer l'image récupérée, qui est sauvegardée dans le répertoire "/tmp", au navigateur. On doit désormais : ajouter un champ de formulaire de type fichier sur la page "/start",
						intégrer "node-formidable" au gestionnaire upload pour sauvegarder le fichier reçu à l'emplacement "/tmp/test.png" et renvoyer l'image dans le contenu HTML de "/upload". La première étape 
						est simple : on créer un formulaire d'upload d'image. Ensuite, on veut gérer la récupération de l'image dans le gestionnaire upload, on doit donc passer l'objet "request" à la méthode 
						"form.parse" de "node-formidable". On va donc devoir passer l'objet "request" du serveur au routeur puis au gestionnaire de requêtes. 
						</p>
						
						<br/><br/>
						
						<img class="img-responsive center-block" src="img/rh1.png" alt="client" />
						<img class="img-responsive center-block" src="img/rh2.png" alt="client" />
						
						<br/>
						
						<hr/>
							
						<div class="hero">
							<h1 class="titles-paragraphs">Le routeur "router.js"</h1>
						</div>
						
						<p class="paragraphs-size p-top-8">
						L'objet "request" est disponible pour le gestionnaire "upload", c'est "node-formidable" qui se charge de sauvegarder le fichier reçu dans le répertoire local "/tmp" mais on doit se charger 
						de le renommer en "test.png", on simplifie fortement en considérant que seuls les fichiers PNG seront transmis. Sous Windows, Node.js n'est pas capable d'écraser un fichier existants, dans ce cas 
						si le renommage soulève une erreur, on doit d'abord supprimer le fichier déjà présent avaznt de renommer le nouveau. Ce travail sera cependant réalisé dans le fichier "requestHandlers.js".
						</p>
						
						<br/><br/>
						
						<img class="img-responsive center-block" src="img/router.png" alt="client" />
						
						<hr/>
						
						<div class="hero">
							<h1 class="titles-paragraphs">Le point de départ de l'application "index.js"</h1>
						</div>
						
						<p class="paragraphs-size p-top-8">
						On transmet la liste des gestionnaires à utiliser sous forme d'objet et pour pouvoir avoir une couplage faible, on tranmset cet objet par "route()". Il est simple d'utiliser le même gestionnaire pour 
						des URL différentes, en précisant le chemin "/" associé à requestHandlers.start, on peut indiquer que la requête "/start" et la requête "/" doivent être traitées par le gestionnaire "start". Après avoir 
						défini l'objet, on le transmet au serveur comme paramètre supplémentaire. On a ajouté le paramètre "handle" à la fonction "start()" et on a transmis l'objet "handle" à la fonction de rappel "route()" comme 
						premier paramètre.
						</p>
						
						<br/><br/>
						
						<img class="img-responsive center-block" src="img/index.png" alt="client" />


						<div id="dragandrop">
							<script type="text/javascript">										
							function transfert()
							{
								window.open('http://ilovejs.gabriel-cassano.be/codes/upload.rar','nom_de_ma_popup','menubar=no, scrollbars=no, top=130, left=500, width=900, height=800');
							}
							</script>			
							<br/>		
							<a href="#null" onclick="transfert();" class="btn btn-info btn-lg"><i class="fa fa-download"></i> Code</a>	
						</div>		
					</div>
				</div>
			</div>				
		</section>
		
		<!-- Conditions générales d'utilisation -->
		<section id="cgu">
	    	<div class="container">
	    		<div class="hero">
					<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="titles-paragraphs">Conditions générales d'utilisation</h3>
						<div class="spacer"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
					  </div>
					  
					  <div class="panel-body">
						<p class="paragraphs-size"><blockquote><dfn>Ce site applique :</dfn></blockquote></p>
						
						<p>
							<ul class="list-group paragraphs-size">
							  <li class="list-group-item">- La Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique et notamment l’article 6.</li>
							  <li class="list-group-item">- La Loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés pour les questions de traitement de données à caractère personnel.</li>						
							</ul>
						</p>
						
						<p class="paragraphs-size">
						La structure générale du site, ainsi que les textes, images, sont la propriété de l’éditeur ou de ses partenaires.
						Toute représentation, reproduction et/ou reproduction et/ou exploitation partielle ou totale des contenus et services 
						proposés par le site, par quelque procédé que ce soit, sans l’autorisation préalable et par écrit de Cassano Gabriele est
						strictement interdite et serait susceptible de constituer une contrefaçon.	
						</p>
						
						<p class="paragraphs-size">
						Tous les éléments de ces site, y compris les documents téléchargeables, sont libres de droit. La reproduction des pages ne
						peuvent être utilisées à des fins commerciales, y compris l’utilisation du logo.
						</p>
						
						<p class="paragraphs-size">
						Le site peut contenir des liens hypertextes vers d’autres sites présents sur le réseau internet, les liens vers ces autres 
						ressources vous font quitter le site. Il est possible de créer un lien vers la page de présentation de ce site sans 
						autorisation expresse de l’éditeur.
						</p>
						
						<p class="paragraphs-size">
						L’éditeur se réserve le droit de demander la suppression d’un lien qu’il estime non conforme à l’objet du site.
						</p>
						
						<p class="paragraphs-size">
						Les informations et/ou documents figurant sur ce site sont susceptibles de contenir des inexactitudes techniques et des
						erreurs typographiques. L’éditeur se réserve le droit de les corriger, dès que ces erreurs sont portées à sa connaissance.
						</p>
						
						<p class="paragraphs-size">
						Les informations et/ou documents disponibles sur ce site sont susceptibles d’être modifiées à tout moment, et peuvent avoir fait l’objet de mises à jour. 
						En particulier, ils peuvent avoir fait l’objet d’une mise à jour entre le moment de leur téléchargement et celui ou l’utilisateur en prend 
						connaissance.
						</p>
						
						<p class="paragraphs-size">
						L’utilisation des informations et/ou documents disponibles sur ce site se fait sous l’entière et seule responsabilité de 
						l’utilisateur, qui assume la totalité des conséquences pouvant en découler, sans que l’éditeur puisse être recherché à ce 
						titre, et sans recours contre ce dernier.
						</p>
						
						<p class="paragraphs-size">
						L’éditeur ne pourra en aucun cas être tenu responsable de tout dommage de quelque nature qu’il soit résultant de l’
						interprétation ou de l’utilisation des informations et/ou documents disponibles sur ce site.
						</p>
						
						<p class="paragraphs-size">
						L’éditeur s’efforce de permettre l’accès au site 24 heures sur 24, 7 jours sur 7, sauf en cas de force majeure ou d’un 
						événement hors du contrôle de l’éditeur, et sous réserve des éventuelles pannes et interventions de maintenance nécessaires 
						au bon fonctionnement du site et des services.
						</p>
						
						<p class="paragraphs-size">
						Par conséquent, l’éditeur ne peut garantir une disponibilité du site et/ou des services, une fiabilité des transmissions et
						des performances en terme de temps de réponse ou de qualité. Il n’est prévu aucune assistance technique vis à vis de 
						l’utilisateur que ce soit par des moyens électronique ou téléphonique.
						</p>
						
						<p class="paragraphs-size">
						La responsabilité de l’éditeur ne saurait être engagée en cas d’impossibilité d’accès à ce site et/ou d’utilisation des 
						services. Par ailleurs, l’éditeur peut être amené à interrompre le site ou une partie des services, à tout moment sans
						préavis, le tout sans droit à indemnités. L’utilisateur reconnaît et accepte que l’EDITEUR ne soit pas responsable des 
						interruptions, et des conséquences qui peuvent en découler pour l’utilisateur ou tout tiers.
						</p>
						
						<p class="paragraphs-size"><blockquote><dfn>L’utilisateur déclare accepter les caractéristiques et les limites d’Internet, et notamment reconnaît que :</dfn></blockquote></p>
						
						<p>
							<ul class="list-group paragraphs-size">
							  <li class="list-group-item">
							  - L’éditeur n’assume aucune responsabilité sur les services accessibles par Internet et n’exerce aucun contrôle 
							  de quelque forme que ce soit sur la nature et les caractéristiques des données qui pourraient transiter par l’intermédiaire de son centre
							  serveur.
							  </li>
							  
							  <li class="list-group-item">
							  - L’utilisateur reconnaît que les données circulant sur Internet ne sont pas protégées notamment contre les 
							  détournements éventuels. La présence du logo de Secret Faces institue une présomption simple de validité. 
							  La communication de toute information jugée par l’utilisateur de nature sensible ou confidentielle se fait à ses 
							  risques et périls.
							  </li>		
							  
							  <li class="list-group-item">
							  - L’utilisateur reconnaît que les données circulant sur Internet peuvent être réglementées en termes d’usage ou
							  être protégées par un droit de propriété.
							  </li>	
							  
							  <li class="list-group-item">
							  - L’utilisateur reconnaît que l’EDITEUR ne dispose d’aucun moyen de contrôle sur le contenu des services accessibles sur Internet
							  </li>	
							</ul>
						</p>
					 </div>
					</div>						
				</div>					
	    	</div>  		
    	</section>	
		
		<!-- Mentions légales -->
		<section id="mi">
	    	<div class="container">
	    		<div class="hero">
					<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="titles-paragraphs">Mentions légales</h3>
						<div class="spacer"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
					  </div>
					  
					  <div class="panel-body">
						<p class="paragraphs-size"><blockquote><dfn>Je me réserve le droit de modifier les mentions légales de ce site en fonction d’éléments nouveaux concernant cette activité.Le site est édité et mis à jour par :</dfn></blockquote></p>
						
						<p>
							<ul class="list-group paragraphs-size">
							  <li class="list-group-item">Cassano Gabriele</li>
							  <li class="list-group-item">Domicilié à l’adresse suivante : Rue Saint-Alphonse, n°180, 7110 Strépy-Bracquegnies (Belgique).</li>						
							  <li class="list-group-item">Téléphone: 0497/62.10.10</li>
							  <li class="list-group-item">Adresse e-mail: gabriel_cassano@hotmail.com</li>
							</ul>
						</p>
						
						<p class="paragraphs-size"><blockquote><dfn>Ce site est hébergé par :</dfn></blockquote></p>
						
						<p class="paragraphs-size">
						Kimsufi
						</p>
						
						<p class="paragraphs-size">
						Dont le siège est situé à l’adresse suivante : 2 rue Kellermann – 59100 Roubaix (France).
						</p>
						
						<div class="panel-heading">
							<h3 class="titles-paragraphs">Accessibilité</h3>	
							<hr/>
						</div>						
						
						<p class="paragraphs-size">
						Le site est par principe accessible aux utilisateurs 24/24h et 7/7j, sauf interruption, programmée ou non, pour des besoins 
						de maintenance ou en cas de force majeure.
						</p>
						
						<div class="panel-heading">
							<h3 class="titles-paragraphs">Données de propriétés intelectuelles</h3>	
							<hr/>
						</div>						
						
						<p class="paragraphs-size">
						Le contenu de ce site web est ses pages sont protégés par les droits d’auteur applicables, les droit de marque et/ou tout
						autre droit de propriété intellectuelle. Aucun de ces droits ne peut être transféré à l’utilisateur de ce site internet.Vous 
						pouvez utiliser ce site internet pour bénéficier des services offerts à des fins personnelles non-commerciales.
						</p>
						
						<p class="paragraphs-size">
						Aucune autre utilisation, comme par exemple et sans limitation, la modification, la copie, la reproduction, la redistribution
						ou la circulation n’est permise sur un support qu’il soit électronique ou autre, sans notre accord préalable et écrit 
						de Cassano Gabriele.
						</p>
						
						<p class="paragraphs-size">
						Tous les droits de reproduction sont donc réservés, ce inclut le logo, les documents téléchargeables, les textes et tout
						autre représentation graphique et textuelle.
						</p>
						
						<p class="paragraphs-size">
						Toute reproduction pour laquelle une autorisation aura été délivrée devra inclure la source suivante: http://ilovejs.gabriel-cassano.be.
						</p>						
						
						<div class="panel-heading">
							<h3 class="titles-paragraphs">Liens</h3>
							<hr/>							
						</div>							
						
						<p class="paragraphs-size">
						Les sites reliés directement ou indirectement au site I Love JavaScript sont relatifs au ce projet. En cas d’un lien externe vers un site
						non développé pour le projet, le groupe n’est pas responsable quant aux informations publiées sur ces sites.
						</p>
						
						<div class="panel-heading">
							<h3 class="titles-paragraphs">Responsabilités</h3>	
							<hr/>
						</div>
						
						<p class="paragraphs-size">
						Vous acceptez que votre accès et l’utilisation de ce site internet et des pages se font à votre propre risque. Les
						informations fournies sur ce site internet et sur les pages ne peuvent être utilisées à des fins de commercialisation.
						</p>
						
						<p class="paragraphs-size">
						Je fournirais des efforts raisonnables pour donner des informations exactes sur ce site Internet et sur les pages et 
						pouvons les modifier et les mettre à jour de temps en temps sans préavis. Je ne supporte aucune responsabilité et 
						n’assurons aucune garantie explicite ou implicite en ce qui concerne l’absence d’erreur, de virus ou de fonctionnement
						défectueux de ces sites internet et des pages et/ou sur le caractère correct, raisonnable, à jour et complet du contenu 
						de ce site et des pages et je rejette explicitement toute responsabilité pour tout dommage direct ou indirect dans le sens 
						le plus large, qui surviendrait de ou serait lié à l’usage de ce site internet ou de ses pages.
						</p>
					 </div>
					</div>						
				</div>					
	    	</div>  		
    	</section>	
		
		<section >
			<div class="container">
				<div class="hero">
					
					
				</div>
			</div><!--container-->
			<div id="map-container"></div>
			<div class="banding"></div>
		</section>	
		
		<footer class="yellow">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="copy black" id="coordonnees">
							<p class="paragraphs-size coord">
							Cassano Gabriele 
							</p>
						</p>
						
						<p class="copy black paragraphs-size" id="copyright">
							&copy; <a class="black" href="https://gabriel-cassano.be" target="_blank">Gabriele Cassano</a> 2017 
						</p>
					</div>
					<div class="col-md-6" id="social">
						<div class="social-icons pull-right">
							<a href="https://www.facebook.com/profile.php?id=100010505551221" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>							
							<a href="https://be.linkedin.com/in/gabriele-cassano-57403958" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
							<a href="https://plus.google.com/108809628727284696980" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a>
							<a href="https://twitter.com/jaymbo78" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
			<a href="http://invokingdemons.gabriel-cassano.be/" style="display:none;">invoking demons</a>
		</footer>
				
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> 		
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script type="text/javascript" src="owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/vendor/nivo-lightbox.min.js"></script>		
	</body>
</html>