<!-- CODED by Christine Jendrzejczyk
	PHP - pendu
		views/view.php
-->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Description">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
	<title><?= SITE_TITLE ?></title>
</head>
<body class="text-center">
	<div>
		<h1 role="heading" aria-level="1" class="text-primary">Le pendu</h1>
		<p>Tu as <?= MAX_CHANCE ?> chance pour trouver 		le mot caché, bonne chance !
		</p>
		<p>
			Le mot contient&nbsp;<?= $lettersCount ?> lettres
		</p>
		<p>Tu as déjà essayé les lettres suivantes&nbsp;: <?= $triedLetters ?>
		<br>Il te reste <?= $remainingChance ?> essais
		</p>
	</div>
	<?php if ($wordFound): ?>
            <div class="alert alert-success text-center" role="alert">
                <p class="muted" style="width: 50%">Chapeau &nbsp;! Tu as trouvé le mot
                    «&nbsp;<b><?php echo $word; ?></b>&nbsp;». <a href="index.php">On refait une part&nbsp;?</a>
                </p>
       		</div>
	 <?php elseif ($remainingChance == 0): ?>
            <div class="alert alert-danger text-center" role="alert" >
                <p class="muted" style="width: 50%">Tu as perdu&nbsp;! Le mot à trouver était «&nbsp;<b><?php echo $word ?></b>&nbsp;». <a href="index.php">On refait une part&nbsp;?</a>
                </p>
            </div>
     <?php else: ?>
		<form action="index.php" method="post" class="form-horizontal">
		<legend> <?= $remplacedLetters ?></legend>
			<fieldset class="scheduler-border"> 
				<label for="triedLetter" class="control-label">Choisir une lettre</label>
		    	<select name="triedLetter"
	                    id="triedLetter" 
	                    class="input-small">
				    		<!-- Afficher liste sous foreach selon l'état -->
				    		<?php foreach ($lettersArray as $letter => $status): ?>
				    			<?php if ($status): ?>
				    				<option value="<?= $letter; ?>"><?= $letter; ?></option>
				    			<?php endif; ?>
				   			<?php endforeach; ?>
		   		</select>
	   			<input type="hidden"
	   					name="chance"
	   					value="<?= $chance ?>">
	   			<input type="hidden"
	   					name="triedLetters"
	   					value="<?= $triedLetters ?>">
				<input type="hidden"
	   					name="serialize"
	   					value="<?= $serialize ?>">
	   			<input type="hidden"
	                    name="chooseWord"
	                    value="<?= $chooseWord; ?>">
	   			<input type="hidden"
	                    name="remplacedLetters"
	                    value="<?= $remplacedLetters; ?>">
	            <input type="hidden"
	                    name="lettersCount"
	                    value="<?= $lettersCount; ?>">
				<input type="submit" value="Tester la lettre" class="btn btn-mini btn-primary">    	
	    	</fieldset>
		</form>
	<?php endif; ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<!--  -->