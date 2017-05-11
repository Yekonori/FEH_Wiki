<?php
	#1. Connexion à la base de donnée
	
						//	Hote		user	pass	BDD
	$link = mysqli_connect('localhost', 'root', '', 'fire_emblem_heroes');

	if (mysqli_connect_errno()) {
		die("Erreur de connexion : ".mysqli_connect_error());
	}

	mysqli_set_charset($link, 'utf8');



	#2. Execution de la requete
	
	$sql = "SELECT * FROM `armes` ORDER BY `ID :`";

	$mesHéros = mysqli_query($link, $sql);

	if (mysqli_connect_errno($link)) {
		die("Erreur de connexion : ".mysqli_connect_error($link));
	}

	echo '<p><a href="AjouterArmes.php">Ajouter une Arme</a></p>';



	#3. Traitement des données (facultatif)
	$i = 0;

	while ($data = mysqli_fetch_assoc($mesHéros)) {

		if ($data['Type :'] == "Épée") {
			$fondCouleur = 'red';
			$couleur = 'black';
		} elseif ($data['Type :'] == "Lance") {
			$fondCouleur = 'blue';
			$couleur = 'black';
		} elseif ($data['Type :'] == "Hache") {
			$fondCouleur = 'green';
			$couleur = 'black';
		} elseif ($data['Type :'] == "Arc" || $data['Type :'] == "Dague" || $data['Type :'] == "Bâton"){
			$fondCouleur = 'grey';
			$couleur = 'black';
		} else {

			if ($data['Type :'] == "Souffle") {
				$fondCouleur = 'orange';
			} else {
				$fondCouleur = 'black';
			}
			

			if ($data['Couleur :'] === "Rouge") {
				$couleur = 'red';
			} elseif ($data['Couleur :'] === "Bleu") {
				$couleur = 'blue';
			} elseif ($data['Couleur :'] === "Vert") {
				$couleur = 'green';
			} elseif ($data['Couleur :'] != "Rouge") {
				$couleur = 'white';
			}
		}

		echo '<div>
				<p style="color: '.$couleur.'; background-color:'.$fondCouleur.'; padding:10px; margin:3px; font-size:24px; font-weight:bold;">
					'.$data['Nom :'].' : Dmg '.$data['Dmg :'].' - - - - Por '.$data['Por :'].'
				</p>
			</div>';

		// echo "<a style='margin:0 20px; float: right; color: black;' href = 'supprimer.php?id=".$data['ID :']."'>Supprimer</a>";
		// echo "<a style='margin:0 20px; float: right; color: black;' href = 'modifier.php?id=".$data['ID :']."'>Modifier</a>";
		$i++;
	}
?>