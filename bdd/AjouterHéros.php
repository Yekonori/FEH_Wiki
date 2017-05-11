<?php
	if (!empty($_POST)) {
		include 'ConnexionFE.php';

		extract($_POST);

		$nomF = addslashes($nom);
		$titreF = addslashes($titre);
		$descriptionF = addslashes($description);

		$sql = "INSERT INTO `héros` (`Nom :`, `Titre :`, `Description :`, `Couleur :`, `Arme :`, `Déplacement :`, `Obtention :`) VALUES
			('$nomF',
				'$titreF',
				'$descriptionF',
				'$couleur',
				'$arme',
				'$deplacement',
				'$obtention')
		";

		mysqli_query($link, $sql);

		header('location: ListeHéros.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ajouter un Héros</title>
		<!-- <link rel="stylesheet" href="styles.css" type="text/css" /> -->
		<!-- onclick="document.getElementById('arme_hache').classList.toggle('cache')" -->
	</head>

	<body>
		<div id="container">
			<h1>Ajouter un Héros</h1>
			<form action="AjouterHéros.php" method="post" accept-charset="utf-8">
				<p>
					<label for="nom">Nom : </label><br/>
					<input type="text" name="nom" value="" id="nom"/>
				</p>
				<p>
					<label for="titre">Titre : </label><br/>
					<input type="text" name="titre" value="" id="titre"/>
				</p>
				<p>
					<label for="description">Description : </label><br/>
					<textarea cols="50" rows="5" name="description" id="description"></textarea>
				</p>
				<p>
					<label for="couleur">Couleur : </label><br/>
					<input type="radio" name="couleur" value="Rouge" id="couleur_rouge"/> Rouge
					<input type="radio" name="couleur" value="Vert" id="couleur_vert"/> Vert
					<input type="radio" name="couleur" value="Bleu" id="couleur_bleu"/> Bleu
					<input type="radio" name="couleur" value="Gris" id="couleur_gris"/> Gris
				</p>
				<p>
					<label for="arme">Arme : </label><br/>
					<input type="radio" name="arme" value="Épée" id="arme_epee"/> Épée
					<input type="radio" name="arme" value="Hache" id="arme_hache"/> Hache
					<input type="radio" name="arme" value="Lance" id="arme_lance"/> Lance
					<input type="radio" name="arme" value="Tome" id="arme_tome"/> Tome
					<input type="radio" name="arme" value="Souffle" id="arme_souffle"/> Souffle
					<input type="radio" name="arme" value="Arc" id="arme_arc"/> Arc
					<input type="radio" name="arme" value="Dague" id="arme_dague"/> Dague
					<input type="radio" name="arme" value="Bâton" id="arme_baton"/> Bâton
				</p>
				<p>
					<label for="deplacement">Déplacement : </label><br/>
					<input type="radio" name="deplacement" value="Fantassin" id="deplacement_fantassin"/> Fantassin
					<input type="radio" name="deplacement" value="Cuirassé" id="deplacement_cuirasse"/> Cuirassé
					<input type="radio" name="deplacement" value="Cavalier" id="deplacement_cavalier"/> Cavalier
					<input type="radio" name="deplacement" value="Volant" id="deplacement_volant"/> Volant
				</p>
				<p>
					<label for="obtention">Obtention : </label><br/>
					<input type="radio" name="obtention" value="Tirage" id="obtention_tirage"/> Tirage
					<input type="radio" name="obtention" value="Grande Bataille" id="obtention_grandeBataille"/> Grande Bataille
				</p>
				<p class="submit"><input type="submit" name="submit" value=":: Ajouter ::"/></p>
			</form>
		</div>
	</body>
</html>