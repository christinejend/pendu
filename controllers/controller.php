<!-- CODED by Christine Jendrzejczyk
	PHP - pendu
		controllers/controller.php
			Gère si la requete est en post ou get
-->
<?php

if ( $_SERVER['REQUEST_METHOD'] === 'POST'){
	require('controllers/postController.php');

}elseif( $_SERVER['REQUEST_METHOD'] === 'GET'){
	require('controllers/getController.php');
}else{
	$error = "La requete HTTP n'est pas valide";
}