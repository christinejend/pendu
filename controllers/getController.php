<!-- CODED by Christine Jendrzejczyk
	PHP - pendu
		controllers/getcontroller.php
			Gère si la requete get
-->
<?php

$lettersArray = getLettersArray();
$serialize = coded($lettersArray);

$wordFile = getWordFile(); // ETRANGE

$chooseWord = getChooseWord($wordFile);
$word = getWord($wordFile, $chooseWord);

$lettersCount = strlen($word); // Retourne la taille du mot.
$remplacedLetters = getRemplacedLetters($lettersCount);