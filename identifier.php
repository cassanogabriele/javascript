<?php
sleep(1);

if (array_key_exists("login", $_POST)&& array_key_exists("motPasse", $_POST)){
// Les parametres ont bien ete transmis
$user = get_user($_POST["login"], $_POST["motPasse"]);

if ($user) {
	connecter_user($user);
}
	repondre($user);
} else {
	print "usage : $_SERVER[PHP_SELF]?login=...&motPasse=...";
}

function get_user($login, $motPasse) {
// Le seul utilisateur valide sera Haddock/Archibald
$user = null;

if ($login == "Gabriele" && $motPasse == "Radwane6") {
	$user = array("id" => 1, "login" => "Gabriele");
}
	return $user;
}

function connecter_user($user) {
	// Enregistrer l'utilisateur dans la session web
}

function repondre($user) {
	if ($user) {
		print "Utilisateur '$user[login]' connect&eacute;";
	} else {
		print "Utilisateur inconnu ou mot de passe invalide";
	}
}
?>
