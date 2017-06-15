<?php
	if (!empty($_POST)) {

		include	'ConnexionFE.php';
		
		extract($_POST);

		$nomF = addslashes($nom);
		$titreF = addslashes($titre);
		$descriptionF = addslashes($description);
		
		$sql = "INSERT INTO `héros_modifier` 
				(`Nom :`, `Titre :`, `Description :`, `Arme :`, `Couleur :`, `Déplacement :`, `Origine :`, `Voix :`, `Dessinateur :`, `Obtention :`) 
				VALUES 
				('$nomF',
					'$titreF',
					'$descriptionF',
					'$arme',
					'$couleur',
					'$deplacement',
					'$origine',
					'$voix',
					'$dessinateur',
					'$obtention')
			";
		
		mysqli_query($link, $sql) OR die(mysqli_error($link));
		
		header('location: index.php');
	}

	$lien = $_GET['lien'];

	include	'ConnexionFE.php';

    $select = "SELECT * FROM héros
    LEFT JOIN `héros_arme` ON `héros_arme`.`ID_Arme :` = `héros`.`Arme :`
    LEFT JOIN `héros_couleur` ON `héros_couleur`.`ID_Couleur :` = `héros`.`Couleur :`
    LEFT JOIN `héros_déplacement` ON `héros_déplacement`.`ID_Déplacement :` = `héros`.`Déplacement :`
    LEFT JOIN `héros_origine` ON `héros_origine`.`ID_Origine :` = `héros`.`Origine :`
    LEFT JOIN `héros_voix` ON `héros_voix`.`ID_Voix :` = `héros`.`Voix :`
    LEFT JOIN `héros_dessinateur` ON `héros_dessinateur`.`ID_Dessinateur :` = `héros`.`Dessinateur :`
    LEFT JOIN `héros_obtention` ON `héros_obtention`.`ID_Obtention :` = `héros`.`Obtention :`
    WHERE `Lien :` = '$lien'";

    $infos = mysqli_query($link, $select) OR die (mysqli_error($link));

    $data = mysqli_fetch_assoc($infos);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Modifier <?php echo $data['Nom :']?></title>

		<!-- CSS Bootstrap -->
	    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	    <!-- CSS Perso' -->
	    <link href="css/general.css" type="text/css" rel="stylesheet">
	    <link href="css/ajout.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<!-- ******************************** HEADER ******************************** -->
    	<!-- ************************************************************************ -->
    	<header>
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-3">
    					<img src="images/imgs/Logo.png" title="Logo" alt="Logo" class="logo"/>
    				</div> <!-- ./end div.col-md-3 -->
    			</div> <!-- ./end div.row -->
    		</div> <!-- ./end div.container-fluid -->
    	</header>
		<!-- ******************************** SECTION.ajoutHéros ******************************** -->
    	<!-- ******************************************************************************* -->
    	<section class="ajoutHéros">
    		<div class="container-fluid">
    			<div class="row">
    				<!-- ******************************** ASIDE ******************************** -->
    				<div class="col-md-1" id="menu">
    					<aside class="nav">
                        <!-- ******************************** Collapse Nav ******************************** -->
                            <a href="#">
                                <div data-toggle="collapse" href="#liens_heros" aria-expanded="false">
                                    <span class="glyphicon glyphicon-menu-down" aria-hidden="true" aria-controls="liens_heros"></span>Héros
                                </div>
                            </a>
                            <div class="collapse text-center" id="liens_heros">
                                <div>
                                    <ul>
                                        <li><a href="index.php">Accueil</a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr/>
                            <a href="#">
                                <div data-toggle="collapse" href="#liens_aptitudes" aria-expanded="false">
                                    <span class="glyphicon glyphicon-menu-down" aria-hidden="true" aria-controls="liens_aptitudes"></span>Aptitudes
                                </div>
                            </a>
                            <div class="collapse text-center" id="liens_aptitudes">
                                <div>
                                    <ul>
                                        <li><a href="listeArmes.php">Armes</a></li>
                                        <li><a href="listeSoutiens.php">Soutiens</a></li>
                                        <li><a href="listeSpéciales.php">Spéciales</a></li>
                                        <li><a href="listePassifs.php">Passifs</a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr/>
                            <a href="#">
                                <div data-toggle="collapse" href="#liens_guides" aria-expanded="false">
                                    <span class="glyphicon glyphicon-menu-down" aria-hidden="true" aria-controls="liens_guides"></span>Guides
                                </div>
                            </a>
                            <div class="collapse text-center" id="liens_guides">
                                <div>
                                    <ul>
                                        <li><a href="guideInvocation.html">Invocation</a></li>
                                    </ul>
                                </div>
                            </div>
    					</aside> <!-- ./end aside.nav -->
    				</div> <!-- ./end div.col-md-1 #menu -->
    				<div class="col-md-11" id="contenu">
    					<div class="row">
    					<!-- ******************************** Liens Rapides ******************************** -->
    						<div class="col-md-12 text-center" id="liensPrincipaux">
                                <div class="col-md-4 liensRapides">
                                    <img src="images/menu/Icon_Cercle_Alfonse.png" alt="Menu_Alfonse" title="Menu_Héros">
                                    <a href="index.php">Héros</a>
                                </div> <!-- ./end div.col-md-4 -->
                                <div class="col-md-4 liensRapides">
                                    <img src="images/menu/Icon_Cercle_Sharena.png" alt="Menu_Sharena" title="Menu_Aptitudes">
                                    <a href="listeSpéciales.php">Aptitudes</a>
                                </div> <!-- ./end div.col-md-4 -->
                                <div class="col-md-4 liensRapides">
                                    <img src="images/menu/Icon_Cercle_Lucina.png" alt="Menu_Lucina" title="Menu_Autre">
                                    <a href="#">Guide</a>
                                </div> <!-- ./end div.col-md-4 -->
    						</div> <!-- ./end div.col-md-12 -->
    					</div> <!-- ./end div.row -->
    					<div class="row">
    						<div class="col-md-12">
	    						<div id="container">
	    							<h1>Modifier <?php echo $data['Nom :'] ?></h1>
	    							<form action="modifierHéros.php" method="post" accept-charset="utf-8">
	    								<div class="row">
		    								<div class="col-md-4">
		    									<label for="nom">Nom :</label><br/>
	    									<input type="text" name="nom" value="<?php echo $data['Nom :']?>" id="nom"/>
		    								</div> <!-- ./end div.col-md-4 -->
		    								<div class="col-md-4">
		    									<label for="titre">Titre :</label><br/>
		    									<input type="text" name="titre" value="<?php echo $data['Titre :']?>" id="titre"/>
		    								</div> <!-- ./end div.col-md-4 -->
	    								</div> <!-- ./end div.row -->
	    								<div class="row">
	    									<div class="col-md-4">
	    										<label for="description">Description : </label><br/>
												<textarea cols="50" rows="5" name="description" id="description"><?php echo $data['Description :']?></textarea>
	    									</div> <!-- ./end div.col-md-4 -->
	    								</div> <!-- ./end div.row -->
	    								<div class="row">
	    									<div class="col-md-4">
	    										<label for="arme">Arme : </label><br/>
												<select name="arme">
													<?php
														$sql = "SELECT * FROM `héros_arme` ORDER BY `ID_Arme :`";
														$Arme = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Arme)) {
															$selected = ($data['ID_Arme :'] == $menu['ID_Arme :']) ? 'selected' : '';
															?>
															<option value="<?php echo $menu['ID_Arme :']; ?>"<?php echo $selected ?>>
																<?php echo $menu['Arme :']; ?>
															</option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    									<div class="col-md-4">
	    										<label for="couleur">Couleur : </label><br/>
	    										<select name="couleur">
	    											<?php
														$sql = "SELECT * FROM `héros_couleur` ORDER BY `ID_Couleur :`";
														$Couleur = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Couleur)) {
															$selected = ($data['ID_Couleur :'] == $menu['ID_Couleur :']) ? 'selected' : '';
															?>
															<option value="<?php echo $menu['ID_Couleur :']; ?>"<?php echo $selected ?>>
																<?php echo $menu['Couleur :']; ?>
															</option>
															<?php $i++;
														}
													?>
	    										</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    									<div class="col-md-4">
	    										<label for="deplacement">Déplacement : </label><br/>
												<select name="deplacement">
													<?php
														$sql = "SELECT * FROM `héros_déplacement` ORDER BY `ID_Déplacement :`";
														$Déplacement = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Déplacement)) {
															$selected = ($data['ID_Déplacement :'] == $menu['ID_Déplacement :']) ? 'selected' : '';
															?>
															<option value="<?php echo $menu['ID_Déplacement :']; ?>"<?php echo $selected ?>>
																<?php echo $menu['Déplacement :']; ?>
															</option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    								</div> <!-- ./end div.row -->
	    								<div class="row">
	    									<div class="col-md-4">
	    										<label for="obtention">Obtention : </label><br/>
												<select name="obtention">
													<?php
														$sql = "SELECT * FROM `héros_obtention` ORDER BY `ID_Obtention :`";
														$Obtention = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Obtention)) {
															$selected = ($data['ID_Obtention :'] == $menu['ID_Obtention :']) ? 'selected' : '';
															?>
															<option value="<?php echo $menu['ID_Obtention :']; ?>"<?php echo $selected ?>>
																<?php echo $menu['Obtention :']; ?>
															</option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    									<div class="col-md-4">
	    										<label for="origine">Origine : </label><br/>
												<select name="origine">
													<?php
														$sql = "SELECT * FROM `héros_origine` ORDER BY `ID_Origine :`";
														$Origine = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Origine)) {
															$selected = ($data['ID_Origine :'] == $menu['ID_Origine :']) ? 'selected' : '';
															?>
															<option value="<?php echo $menu['ID_Origine :']; ?>"<?php echo $selected ?>>
																<?php echo $menu['Origine :']; ?>
															</option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    								</div> <!-- ./end div.row -->
	    								<div class="row">
	    									<div class="col-md-4">
	    										<label for="voix">Doubleur Anglais : </label><br/>
												<select name="voix">
													<?php
														$sql = "SELECT * FROM `héros_voix` ORDER BY `Voix :`";
														$Voix = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Voix)) {
															$selected = ($data['ID_Voix :'] == $menu['ID_Voix :']) ? 'selected' : '';
															?>
															<option value="<?php echo $menu['ID_Voix :']; ?>"<?php echo $selected ?>>
																<?php echo $menu['Voix :']; ?>
															</option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    									<div class="col-md-4">
	    										<label for="dessinateur">Dessinateur : </label><br/>
												<select name="dessinateur">
													<?php
														$sql = "SELECT * FROM `héros_dessinateur` ORDER BY `Dessinateur :`";
														$Dessinateur = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Dessinateur)) {
															$selected = ($data['ID_Dessinateur :'] == $menu['ID_Dessinateur :']) ? 'selected' : '';
															?>
															<option value="<?php echo $menu['ID_Dessinateur :']; ?>"<?php echo $selected ?>>
																<?php echo $menu['Dessinateur :']; ?>
															</option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    								</div> <!-- ./end div.row -->
	    								<div class="row">
	    									<input type="submit" name="submit" value=":: Ajouter ::"/>
	    								</div> <!-- ./end div.row -->
	    							</form>
	    						</div> <!-- ./end div#container -->
    						</div>
    					</div> <!-- ./end div.row -->
    				</div> <!-- ./end div.col-md-11 #contenu -->
    			</div> <!-- ./end div.row -->
    		</div> <!-- ./end div.container-fluid -->
    	</section> <!-- ./end section.ajoutHéros -->
		<!-- ******************************** FOOTER ******************************** -->
        <!-- ************************************************************************ -->
        <footer class="text-right">
            <p>Développé par : HiroStar</p>
        </footer>
        <!-- SCRIPT BOOTSTRAP -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
	</body>
</html>