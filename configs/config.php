<!-- CODED by Christine Jendrzejczyk
	PHP - pendu
		configs/config.php
-->

<?php 
	define('SOURCE_NAME', 'datas/words.txt');
	define("SITE_TITLE", "Le jeu du pendu");
	define("MAX_CHANCE", 8);
	define("RPL_VALUE", "-");
	
$error= '';
$chance= 0;
$lettersCount= 0;
$triedLetters = '';
$wordFound = 0;
$remainingChance = MAX_CHANCE;
$remplacedLetters = '';