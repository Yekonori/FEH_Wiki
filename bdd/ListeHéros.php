<?php
	#1. Connexion à la base de donnée
	include("ConnexionFE.php");



	#2. Execution de la requete
	
	$sql = "SELECT * FROM `héros` ORDER BY `ID :`";

	$mesHéros = mysqli_query($link, $sql);

	if (mysqli_connect_errno($link)) {
		die("Erreur de connexion : ".mysqli_connect_error($link));
	}

	echo '<p><a href="AjouterHéros.php">Ajouter un Héros</a></p>';



	#3. Traitement des données (facultatif)
	$i = 0;

	while ($data = mysqli_fetch_assoc($mesHéros)) {
		// if ($i%3 === 0) $couleur = 'yellow';
		// elseif ($i%3 === 1) $couleur = 'lime';
		// else 			$couleur = 'pink';
		
		if ($data['Couleur :'] === "Rouge") {
			$couleur = 'red';
		} elseif ($data['Couleur :'] === "Vert") {
			$couleur = 'green';
		} elseif ($data['Couleur :'] === "Bleu") {
			$couleur = 'blue';
		} elseif ($data['Couleur :'] === "Gris") {
			$couleur = 'grey';
		}

		echo '<div>
				<p style="background-color:'.$couleur.'; padding:10px; margin:3px; font-size:24px; font-weight:bold;">
					<img src="images/icons/Icon_'.$data['Nom :'].'.png" style="margin-right:25px; border-radius:100px; border-width:2px; border-style:solid;"/>
					'.$data['Nom :'].' - - - '.$data['Titre :'].'
				</p>
			</div>';

		// echo "<a style='margin:0 20px; float: right; color: black;' href = 'supprimer.php?id=".$data['ID :']."'>Supprimer</a>";
		// echo "<a style='margin:0 20px; float: right; color: black;' href = 'modifier.php?id=".$data['ID :']."'>Modifier</a>";
		$i++;
	}
?>