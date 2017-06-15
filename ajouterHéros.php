<?php
	if (!empty($_POST)) {

		include	'ConnexionFE.php';

		extract($_POST);

		$nomF = addslashes($nom);
		$titreF = addslashes($titre);
		$descriptionF = addslashes($description);

		$sql = "INSERT INTO `héros_ajout` 
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
		
		mysqli_query($link, $sql);
		
		header('location: index.php');
	}

	include	'ConnexionFE.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ajouter un Héros</title>

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
	    							<h1>Ajouter un Héros</h1>
	    							<form action="ajouterHéros.php" method="post" accept-charset="utf-8">
	    								<div class="row">
		    								<div class="col-md-4">
		    									<label for="nom">Nom :</label><br/>
		    									<input type="text" name="nom" value="" id="nom"/>
		    								</div> <!-- ./end div.col-md-4 -->
		    								<div class="col-md-4">
		    									<label for="titre">Titre :</label><br/>
		    									<input type="text" name="titre" value="" id="titre"/>
		    								</div> <!-- ./end div.col-md-4 -->
	    								</div> <!-- ./end div.row -->
	    								<div class="row">
	    									<div class="col-md-4">
	    										<label for="description">Description : </label><br/>
												<textarea cols="50" rows="5" name="description" id="description"></textarea>
	    									</div> <!-- ./end div.col-md-4 -->
	    								</div> <!-- ./end div.row -->
	    								<div class="row">
	    									<div class="col-md-4">
	    										<label for="arme">Arme : </label><br/>
												<select name="arme">
													<option value="0">-- Arme --</option>
													<?php
														$sql = "SELECT * FROM `héros_arme` ORDER BY `ID_Arme :`";
														$Arme = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Arme)) {?>
															<option value=" <?php echo $data['ID_Arme :']; ?>"> <?php echo $data['Arme :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    									<div class="col-md-4">
	    										<label for="couleur">Couleur : </label><br/>
												<select name="couleur">
													<option value="0">-- Couleur --</option>
													<?php
														$sql = "SELECT * FROM `héros_couleur` ORDER BY `ID_Couleur :`";
														$Couleur = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Couleur)) {?>
															<option value=" <?php echo $data['ID_Couleur :']; ?>"> <?php echo $data['Couleur :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    									<div class="col-md-4">
	    										<label for="deplacement">Déplacement : </label><br/>
												<select name="deplacement">
													<option value="0">-- Déplacement --</option>
													<?php
														$sql = "SELECT * FROM `héros_déplacement` ORDER BY `ID_Déplacement :`";
														$Déplacement = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Déplacement)) {?>
															<option value=" <?php echo $data['ID_Déplacement :']; ?>"> <?php echo $data['Déplacement :']; ?></option>
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
													<option value="0">-- Obtention --</option>
													<?php
														$sql = "SELECT * FROM `héros_obtention` ORDER BY `ID_Obtention :`";
														$Obtention = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Obtention)) {?>
															<option value=" <?php echo $data['ID_Obtention :']; ?>"> <?php echo $data['Obtention :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    									<div class="col-md-4">
	    										<label for="origine">Origine : </label><br/>
												<select name="origine">
													<option value="0">-- Origine --</option>
													<?php
														$sql = "SELECT * FROM `héros_origine` ORDER BY `ID_Origine :`";
														$Origine = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Origine)) {?>
															<option value=" <?php echo $data['ID_Origine :']; ?>"> <?php echo $data['Origine :']; ?></option>
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
													<option value="0">-- Doubleur --</option>
													<?php
														$sql = "SELECT * FROM `héros_voix` ORDER BY `Voix :`";
														$Voix = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Voix)) {?>
															<option value=" <?php echo $data['ID_Voix :']; ?>"> <?php echo $data['Voix :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
	    									</div> <!-- ./end div.col-md-4 -->
	    									<div class="col-md-4">
	    										<label for="dessinateur">Dessinateur : </label><br/>
												<select name="dessinateur">
													<option value="0">-- Dessinateur --</option>
													<?php
														$sql = "SELECT * FROM `héros_dessinateur` ORDER BY `Dessinateur :`";
														$Dessinateur = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Dessinateur)) {?>
															<option value=" <?php echo $data['ID_Dessinateur :']; ?>"> <?php echo $data['Dessinateur :']; ?></option>
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