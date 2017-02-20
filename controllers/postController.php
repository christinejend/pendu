<!-- CODED by Christine Jendrzejczyk
	PHP - pendu
		controllers/postController.php
			Gère si la requete post
-->
<?php

// DECLARER CHAMPS CACHE POUR UTILISER DANS VIEWS
$serialize = $_POST['serialize'];
$triedLetter = $_POST['triedLetter'];
$triedLetters = $_POST['triedLetters'];
$chooseWord = $_POST['chooseWord'];
$lettersCount = $_POST['lettersCount'];
$remplacedLetters = $_POST['remplacedLetters'];
$chance = $_POST['chance'];

$wordFile = getWordFile(); // ETRANGE
$word = getWord($wordFile, $chooseWord);

$lettersArray= uncoded($serialize);
$lettersArray[$triedLetter]= false;

$serialize = coded($lettersArray);

$triedLetters .= $triedLetter;
$letterFound = false;


// CR2ER REMPLACEMENT mot par -- + NB d'essais restant
for ($i=0; $i <$lettersCount; $i++) { 
	if( substr($word, $i, 1) === $triedLetter){ // SUBSTR Retourne un segment de chaîne
		$letterFound = true;
		$remplacedLetters = substr_replace($remplacedLetters, $triedLetter, $i, 1);
	}
}

//CREER AFFICHAGe lettre ok dans le mot caché

if ($word === $remplacedLetters) {
    $wordFound = 1;
} else {
    if (!$letterFound) {
        $chance += 1;
    }
    $remainingChance = MAX_CHANCE - $chance;
}

