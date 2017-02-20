<!-- CODED by Christine Jendrzejczyk
	PHP - pendu
		models/model.php

-->
<?php 

function getLettersArray() {

	 return [
        'a' => true,
        'b' => true,
        'c' => true,
        'd' => true,
        'e' => true,
        'f' => true,
        'g' => true,
        'h' => true,
        'i' => true,
        'j' => true,
        'k' => true,
        'l' => true,
        'm' => true,
        'n' => true,
        'o' => true,
        'p' => true,
        'q' => true,
        'r' => true,
        's' => true,
        't' => true,
        'u' => true,
        'v' => true,
        'w' => true,
        'x' => true,
        'y' => true,
        'z' => true,
    ];
};

function coded($lettersArray){
	return urlencode(serialize($lettersArray)); // URLENCODE : code toutes string pour pvr etre utiliser comme url par ex.
                                                //SERIALIZE : pour stocker ou passer des valeurs PHP entre scripts, sans perdre leur structure ni leur type.
}

function uncoded($serializedLetters){
	 return unserialize(urldecode($serializedLetters)); //URLDECODE : Decode tous charactère, aide adr champs caché
}                                                      //UNSERIALIZE : récupérer une variable linéarisée et retrouver
                                                                        // une valeur PHP
function getWordFile(){ // Inclut notre fichier mots
	return @file(SOURCE_NAME)?:false;

}

function getChooseWord($wordFile){ // CHoisis un mot entre 0 et le nb max de mots dans la liste
	return rand(0, count($wordFile));
}

function getWord( $wordFile, $chooseWord){	// Prends le mots et lui enleve maj ou espace av ou ap
	return strtolower(trim( $wordFile[$chooseWord]));
}

// FCT pour 
function getRemplacedLetters($lettersCount){
	return str_pad('', $lettersCount, RPL_VALUE);
}