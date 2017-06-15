<?php
	if (!empty($_POST)) {
		include	'ConnexionFE.php';

		extract($_POST);

		$nomF = addslashes($nom);
		$possesseurF = addslashes($possesseur);

		$sql = "INSERT INTO `armes_modification` 
		(`Couleur :`, `Type :`, `Nom :`, `Dmg :`, `Por :`, `Effet :`, `Coût_PA :`, `Coût_Transmission :`, `Possesseur :`, `Exclusif :`) 
			VALUES 
			('$couleur',
				'$type',
				'$nomF',
				'$dmg',
				'$por',
				'$effet',
				'$coutPA',
				'$coutTransmission',
				'$possesseurF',
				'$exclusif')
		";
		
		mysqli_query($link, $sql);
		
		header('location: index.php');
	}

	$lien = $_GET['lien'];

    include 'ConnexionFE.php';

    $select = "SELECT * FROM armes
    LEFT JOIN `armes_type` ON `armes_type`.`ID_Type :` = `armes`.`Type :`
    LEFT JOIN `armes_dmg` ON `armes_dmg`.`ID_Dmg :` = `armes`.`Dmg :`
    LEFT JOIN `armes_por` ON `armes_por`.`ID_Por :` = `armes`.`Por :`
    LEFT JOIN `armes_effet` ON `armes_effet`.`ID_Effet :` = `armes`.`Effet :`
    LEFT JOIN `armes_cout_pa` ON `armes_cout_pa`.`ID_Coût_PA :` = `armes`.`Coût_PA :`
    LEFT JOIN `armes_cout_transmission` ON `armes_cout_transmission`.`ID_Coût_Transmission :` = `armes`.`Coût_Transmission :`
    LEFT JOIN `armes_exclusif` ON `armes_exclusif`.`ID_Exclusif :` = `armes`.`Exclusif :`
    WHERE `Lien :`='$lien'";

    $infos = mysqli_query($link, $select) OR die (mysqli_error($link));

    $data = mysqli_fetch_assoc($infos);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Modifier <?php echo $data['Nom :'] ?></title>

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
		<!-- ******************************** SECTION.ajoutArme ******************************** -->
    	<!-- ******************************************************************************* -->
    	<section class="ajoutArme">
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
                                	<form action="modifierArme.php" method="post" accept-charset="utf-8">
                                		<div class="row">
                                			<div class="col-md-4">
                                				<label for="couleur">Couleur : </label><br/>
												<input type="text" name="couleur" value="<?php echo $data['Couleur :']; ?>" id="couleur"/>
                                			</div> <!-- ./end div.col-md-4 -->
                                			<div class="col-md-4">
                                				<label for="type">Type : </label><br/>
												<select name="type">
													<?php
														$sql = "SELECT * FROM `armes_type` ORDER BY `ID_Type :`";
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
                                		<div class="row">
                                			<div class="col-md-4">
                                				<label for="nom">Nom : </label><br/>
												<input type="text" name="nom" value="<?php echo $data['Nom :']; ?>" id="nom"/>
                                			</div> <!-- ./end div.col-md-4 -->
                                		</div> <!-- ./end div.row -->
                                		<div class="row">
                                			<div class="col-md-4">
                                				<label for="dmg">Dmg : </label><br/>
												<select name="dmg">
													<?php
														$sql = "SELECT * FROM `armes_dmg` ORDER BY `ID_Dmg :`";
														$Dmg = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Dmg)) {
                                                            $selected = ($data['ID_Dmg :'] == $menu['ID_Dmg :']) ? 'selected' : '';
                                                            ?>
                                                            <option value="<?php echo $menu['ID_Dmg :']; ?>"<?php echo $selected ?>>
                                                                <?php echo $menu['Dmg :']; ?>
                                                            </option>
                                                            <?php $i++;
                                                        }
													?>
												</select>
                                			</div> <!-- ./end div.col-md-4 -->
                                			<div class="col-md-4">
                                				<label for="por">Por : </label><br/>
												<select name="por">
													<?php
														$sql = "SELECT * FROM `armes_por` ORDER BY `ID_Por :`";
														$Por = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Por)) {
                                                            $selected = ($data['ID_Por :'] == $menu['ID_Por :']) ? 'selected' : '';
                                                            ?>
                                                            <option value="<?php echo $menu['ID_Por :']; ?>"<?php echo $selected ?>>
                                                                <?php echo $menu['Por :']; ?>
                                                            </option>
                                                            <?php $i++;
                                                        }
													?>
												</select>
											</div> <!-- ./end div.col-md-4 -->
                                		</div> <!-- ./end div.row -->
                                		<div class="row">
                                			<div class="col-md-4">
                                				<label for="effet">Effet : </label><br/>
												<select name="effet">
													<?php
														$sql = "SELECT * FROM `armes_effet` ORDER BY `ID_Effet :`";
														$Effet = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Effet)) {
                                                            $selected = ($data['ID_Effet :'] == $menu['ID_Effet :']) ? 'selected' : '';
                                                            ?>
                                                            <option value="<?php echo $menu['ID_Effet :']; ?>"<?php echo $selected ?>>
                                                                <?php echo $menu['Effet :']; ?>
                                                            </option>
                                                            <?php $i++;
                                                        }
													?>
												</select>
                                			</div> <!-- ./end div.col-md-4 -->
                                		</div> <!-- ./end div.row -->
                                		<div class="row">
                                			<div class="col-md-4">
                                				<label for="coutPA">Coût PA : </label><br/>
												<select name="coutPA">
													<?php
														$sql = "SELECT * FROM `armes_cout_pa` ORDER BY `ID_Coût_PA :`";
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
														$sql = "SELECT * FROM `armes_cout_transmission` ORDER BY `ID_Coût_Transmission :`";
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
												<textarea cols="40" rows="5" name="possesseur" id="possesseur"><?php echo $data['Possesseur :']; ?></textarea>
                                			</div> <!-- ./end div.col-md-4 -->
                                			<div class="col-md-4">
                                				<label for="exclusif">Exclusif : </label><br/>
												<select name="exclusif">
													<?php
														$sql = "SELECT * FROM `armes_exclusif` ORDER BY `ID_Exclusif :`";
														$Exclusif = mysqli_query($link, $sql);
														$i = 0;
														while ($menu = mysqli_fetch_assoc($Exclusif)) {
                                                            $selected = ($data['ID_Exclusif :'] == $menu['ID_Exclusif :']) ? 'selected' : '';
                                                            ?>
                                                            <option value="<?php echo $menu['ID_Exclusif :']; ?>"<?php echo $selected ?>>
                                                                <?php echo $menu['Exclusif :']; ?>
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
    	</section> <!-- ./end section.ajoutArme -->
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