<?php
	if (!empty($_POST)) {
		include 'ConnexionFE.php';

		extract($_POST);

		$nomF = addslashes($nom);
		$effetF = addslashes($effet);
		$possesseurF = addslashes($possesseur);
		$transmissionF = addslashes($transmission);

		$sql = "INSERT INTO `armes` (`Couleur :`, `Type :`, `Nom :`, `Dmg :`, `Por :`, `Effet :`, `Possesseur :`, `Transmission :`) VALUES
			('$couleur',
				'$type',
				'$nomF',
				'$dmg',
				'$por',
				'$effetF',
				'$possesseurF',
				'$transmissionF')
		";

		mysqli_query($link, $sql);

		header('location: ListeArmes.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ajouter une Arme</title>
	</head>

	<body>
		<div id="container">
			<h1>Ajouter une Arme</h1>
			<form action="AjouterArmes.php" method="post" accept-charset="utf-8">
				<p>
					<label for="couleur">Couleur : </label><br/>
					<input type="radio" name="couleur" value="Rouge" id="arme_rouge"/> Rouge
					<input type="radio" name="couleur" value="Bleu" id="arme_bleu"/> Bleu
					<input type="radio" name="couleur" value="Vert" id="arme_vert"/> Vert
					<input type="radio" name="couleur" value="Gris" id="arme_gris"/> Gris
				</p>
				<p>
					<label for="type">Type : </label><br/>
					<input type="radio" name="type" value="Épée" id="type_epee"/> Épée
					<input type="radio" name="type" value="Lance" id="type_lance"/> Lance
					<input type="radio" name="type" value="Hache" id="type_hache"/> Hache
					<input type="radio" name="type" value="Tome" id="type_tome"/> Tome
					<input type="radio" name="type" value="Souffle" id="type_souffle"/> Souffle
					<input type="radio" name="type" value="Arc" id="type_arc"/> Arc
					<input type="radio" name="type" value="Dague" id="type_dague"/> Dague
					<input type="radio" name="type" value="Bâton" id="type_baton"/> Bâton
				</p>				
				<p>
					<label for="nom">Nom : </label><br/>
					<input type="text" name="nom" value="" id="nom"/>
				</p>
				<p>
					<label for="dmg">Dmg : </label><br/>
					<input type="number" name="dmg" value="" id="dmg" min="2" max="16"/>
				</p>
				<p>
					<label for="por">Por : </label><br/>
					<input type="number" name="por" value="" id="por" min="1" max="2"/>
				</p>
				<p>
					<label for="effet">Effet : </label><br/>
					<textarea cols="50" rows="5" name="effet" id="effet"></textarea>
				</p>
				<p>
					<label for="possesseur">Possesseur : </label><br/>
					<textarea cols="50" rows="5" name="possesseur" id="possesseur"></textarea>
				</p>
				<p>
					<label for="transmission">Transmission : </label><br/>
					<input type="radio" name="transmission" value="-" id="arme_rouge"/> -
					<input type="radio" name="transmission" value="Possible" id="arme_vert"/> Possible
					<input type="radio" name="transmission" value="Impossible" id="arme_bleu"/> Impossible
				</p>
				<p class="submit"><input type="submit" name="submit" value=":: Ajouter ::"/></p>
			</form>
		</div>
	</body>
</html>