function controleur($scope)
{
	$scope.eleves = [];
	$scope.eleve = {nom: '', prenom: ''};
	
	$scope.soumission = function (valid) 
				{
					if(valid)
					{
						$scope.eleves.push($scope.eleve);
						$scope.eleve = {nom: '', prenom: '', datenaiss:'', classe:''};
					}
				else {
						$scope.messageClass ='alert-danger';
						$scope.message = 'D�sol� mais il y a des donn�es non valides !';
					}
				};
}