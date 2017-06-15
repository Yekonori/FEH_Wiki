<?php
	$link = mysqli_connect('localhost', 'root', '', 'fire_emblem_heroes');

	if (mysqli_connect_errno()) {
		die("Erreur de connexion : ".mysqli_connect_error());
	}

	mysqli_set_charset($link, 'utf8');
?>