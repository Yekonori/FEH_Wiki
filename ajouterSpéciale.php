<?php
	if (!empty($_POST)) {
		include	'ConnexionFE.php';

		extract($_POST);

		$nomF = addslashes($nom);
		$effetF = addslashes($effet);
		$possesseurF = addslashes($possesseur);

		$sql = "INSERT INTO `aptitudes_spéciales_ajout` 
			(`Nom :`, `Compteur :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Restriction :`, `Type :`) 
			VALUES 
			('$nomF',
				'$compteur',
				'$effetF',
				'$coutPA',
				'$coutTransmission',
				'$possesseurF',
				'$restriction',
				'$type')
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
		<title>Ajouter une Apt. Spéciale </title>

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
    	<!-- ******************************** SECTION.ajoutSpéciale ******************************** -->
    	<!-- ******************************************************************************* -->
    	<section class="ajoutSpéciale">
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
									<h1>Ajouter une Aptitude Spéciale</h1>
									<form action="ajouterSpéciale.php" method="post" accept-charset="utf-8">
										<div class="row">
											<div class="col-md-4">
												<label for="nom">Nom : </label><br/>
												<input type="text" name="nom" value="" id="nom"/>
											</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div class="row">
											<div class="col-md-4">
												<label for="compteur">Compteur : </label><br/>
												<select name="compteur">
													<option value="0">-- Compteur --</option>
													<?php
														$sql = "SELECT * FROM `aptitudes_spéciales_compteur` ORDER BY `ID_Compteur :`";
														$Compteur = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Compteur)) {?>
															<option value=" <?php echo $data['ID_Compteur :']; ?>"> <?php echo $data['Compteur :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
											</div> <!-- ./end div.col-md-4 -->
											<div class="col-md-4">
												<label for="effet">Effet : </label><br/>
												<textarea cols="50" rows="5" name="effet" id="effet"></textarea>
											</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div class="row">
											<div class="col-md-4">
                                				<label for="coutPA">Coût PA : </label><br/>
												<select name="coutPA">
													<option value="0">-- Coût PA --</option>
													<?php
														$sql = "SELECT * FROM `aptitudes_spéciales_cout_pa` ORDER BY `ID_Coût_PA :`";
														$Coût_PA = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Coût_PA)) {?>
															<option value=" <?php echo $data['ID_Coût_PA :']; ?>"> <?php echo $data['Coût_PA :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
                                			</div> <!-- ./end div.col-md-4 -->
                                			<div class="col-md-4">
                                				<label for="coutTransmission">Coût Transmission : </label><br/>
												<select name="coutTransmission">
													<option value="0">-- Coût Transmission --</option>
													<?php
														$sql = "SELECT * FROM `aptitudes_spéciales_cout_transmission` ORDER BY `ID_Coût_Transmission :`";
														$Coût_Transmission = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Coût_Transmission)) {?>
															<option value=" <?php echo $data['ID_Coût_Transmission :']; ?>"> <?php echo $data['Coût_Transmission :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
                                			</div> <!-- ./end div.col-md-4 -->
                                		</div> <!-- ./end div.row -->
										<div class="row">
											<div class="col-md-4">
												<label for="possesseur">Possesseur : </label><br/>
												<textarea cols="50" rows="5" name="possesseur" id="possesseur"></textarea>
											</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div class="row">
											<div class="col-md-4">
												<label for="restriction">Restriction : </label><br/>
												<select name="restriction">
													<option value="0">-- Restriction --</option>
													<?php
														$sql = "SELECT * FROM `aptitudes_spéciales_restriction` ORDER BY `ID_Restriction :`";
														$Restriction = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Restriction)) {?>
															<option value=" <?php echo $data['ID_Restriction :']; ?>"> <?php echo $data['Restriction :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
											</div> <!-- ./end div.col-md-4 -->
											<div class="col-md-4">
												<label for="type">Type : </label><br/>
												<select name="type">
													<option value="0">-- Type --</option>
													<?php
														$sql = "SELECT * FROM `aptitudes_spéciales_type` ORDER BY `ID_Type :`";
														$Type = mysqli_query($link, $sql);
														$i = 0;
														while ($data = mysqli_fetch_assoc($Type)) {?>
															<option value=" <?php echo $data['ID_Type :']; ?>"> <?php echo $data['Type :']; ?></option>
															<?php $i++;
														}
													?>
												</select>
											</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div clas="row">
                                			<input type="submit" name="submit" value=":: Ajouter ::"/>
                                		</div> <!-- ./end div.row -->
								</div> <!-- ./end div#container -->
							</div> <!-- ./end div.col-md-12 -->
    					</div> <!-- ./end div.row -->
    				</div> <!-- ./end div.col-md-11 #contenu -->
    			</div> <!-- ./end div.row -->
    		</div> <!-- ./end div.container-fluid -->
    	</section> <!-- ./end section.ajoutSpéciale -->
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