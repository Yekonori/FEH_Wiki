<?php
	if (!empty($_POST)) {
		include	'ConnexionFE.php';

		extract($_POST);

		$nomF = addslashes($nom);
		$possesseurF = addslashes($possesseur);

		$sql = "INSERT INTO `soutiens_modification` 
		(`Type :`, `Nom :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Restriction :`) 
			VALUES 
			('$type',
				'$nomF',
				'$effet',
				'$coutPA',
				'$coutTransmission',
				'$possesseurF',
				'$restriction')
		";
		
		mysqli_query($link, $sql);
		
		header('location: index.php');
	}

    include 'ConnexionFE.php';

    $nom = $_GET['nom'];

    $select = "SELECT * FROM soutiens
    LEFT JOIN `soutiens_type` ON `soutiens_type`.`ID_Type :` = `soutiens`.`Type :`
    LEFT JOIN `soutiens_cout_pa` ON `soutiens_cout_pa`.`ID_Coût_PA :` = `soutiens`.`Coût_PA :`
    LEFT JOIN `soutiens_cout_transmission` ON `soutiens_cout_transmission`.`ID_Coût_Transmission :` = `soutiens`.`Coût_Transmission :`
    LEFT JOIN `soutiens_restriction` ON `soutiens_restriction`.`ID_Restriction :` = `soutiens`.`Restriction :`
    WHERE `Nom :`='$nom'";

    $infos = mysqli_query($link, $select) OR die (mysqli_error($link));

    $data = mysqli_fetch_assoc($infos);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Modifier <?php echo $data ['Nom :']?></title>

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
    	<!-- ******************************** SECTION.ajoutSoutien ******************************** -->
    	<!-- ******************************************************************************* -->
    	<section class="ajoutSoutien">
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
									<h1>Modifier <?php echo $data['Nom :']?></h1>
									<form action="modifierSoutien.php" method="post" accept-charset="utf-8">
										<div class="row">
											<div class="col-md-4">
												<label for="nom">Nom : </label><br/>
												<input type="text" name="nom" value="<?php echo $data['Nom :']?>" id="nom"/>
											</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div class="row">
											<div class="col-md-4">
												<label for="effet">Effet : </label><br/>
												<textarea cols="50" rows="5" name="effet" id="effet"><?php echo $data['Effet :']?></textarea>
											</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div class="row">
											<div class="col-md-4">
                                				<label for="coutPA">Coût PA : </label><br/>
												<select name="coutPA">
													<?php
														$sql = "SELECT * FROM `soutiens_cout_pa` ORDER BY `ID_Coût_PA :`";
														$Coût_PA = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Coût_PA)) {
                                                            $selected = ($data['ID_Coût_PA :'] == $menu['ID_Coût_PA :']) ? 'selected' : '';
                                                            ?>
                                                            <option value="<?php echo $menu['ID_Coût_PA :']; ?>"<?php echo $selected ?>>
                                                                <?php echo $menu['Coût_PA :']; ?>
                                                            </option>
                                                            <?php $i++;
                                                        }
													?>
												</select>
                                			</div> <!-- ./end div.col-md-4 -->
                                			<div class="col-md-4">
                                				<label for="coutTransmission">Coût Transmission : </label><br/>
												<select name="coutTransmission">
													<?php
														$sql = "SELECT * FROM `soutiens_cout_transmission` ORDER BY `ID_Coût_Transmission :`";
														$Coût_Transmission = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Coût_Transmission)) {
                                                            $selected = ($data['ID_Coût_Transmission :'] == $menu['ID_Coût_Transmission :']) ? 'selected' : '';
                                                            ?>
                                                            <option value="<?php echo $menu['ID_Coût_Transmission :']; ?>"<?php echo $selected ?>>
                                                                <?php echo $menu['Coût_Transmission :']; ?>
                                                            </option>
                                                            <?php $i++;
                                                        }
													?>
												</select>
                                			</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div class="row">
											<div class="col-md-4">
												<label for="possesseur">Possesseur : </label><br/>
												<textarea cols="50" rows="5" name="possesseur" id="possesseur"><?php echo $data['Possesseur :']?></textarea>
											</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div class="row">
											<div class="col-md-4">
												<label for="restriction">Restriction : </label><br/>
												<select name="restriction">
													<?php
														$sql = "SELECT * FROM `soutiens_restriction` ORDER BY `ID_Restriction :`";
														$Restriction = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Restriction)) {
                                                            $selected = ($data['ID_Restriction :'] == $menu['ID_Restriction :']) ? 'selected' : '';
                                                            ?>
                                                            <option value="<?php echo $menu['ID_Restriction :']; ?>"<?php echo $selected ?>>
                                                                <?php echo $menu['Restriction :']; ?>
                                                            </option>
                                                            <?php $i++;
                                                        }
													?>
												</select>
											</div> <!-- ./end div.col-md-4 -->
											<div class="col-md-4">
												<label for="type">Type : </label><br/>
												<select name="type">
													<?php
														$sql = "SELECT * FROM `soutiens_type` ORDER BY `ID_Type :`";
														$Type = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Type)) {
                                                            $selected = ($data['ID_Type :'] == $menu['ID_Type :']) ? 'selected' : '';
                                                            ?>
                                                            <option value="<?php echo $menu['ID_Type :']; ?>"<?php echo $selected ?>>
                                                                <?php echo $menu['Type :']; ?>
                                                            </option>
                                                            <?php $i++;
                                                        }
													?>
												</select>
											</div> <!-- ./end div.col-md-4 -->
										</div> <!-- ./end div.row -->
										<div clas="row">
                                			<input type="submit" name="submit" value=":: Ajouter ::"/>
                                		</div> <!-- ./end div.row -->
									</form>
								</div> <!-- ./end div#container -->
	                    	</div> <!-- ./end div.col-md-12 -->
	    				</div> <!-- ./end div.row -->
    				</div> <!-- ./end div.col-md-11 #contenu -->
    			</div> <!-- ./end div.row -->
    		</div> <!-- ./end div.container-fluid -->
    	</section> <!-- ./end section.ajoutSoutien -->
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