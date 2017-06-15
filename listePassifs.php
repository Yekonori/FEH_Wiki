<?php
    #1. Connexion à la base de donnée
    include("ConnexionFE.php");

    if (mysqli_connect_errno($link)) {
        die("Erreur de connexion : ".mysqli_connect_error($link));
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Liste Passifs</title>

		<!-- CSS Bootstrap -->
	    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	    <!-- CSS Perso' -->
	    <link href="css/general.css" type="text/css" rel="stylesheet">
        <link href="css/listePassifs.css" type="text/css" rel="stylesheet">
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
    	<!-- ******************************** SECTION.listePassifs ******************************** -->
    	<!-- *************************************************************************************** -->
    	<section class="listePassifs">
    		<div class="container-fluid">
    			<div class="row">
    				<!-- ******************************** ASIDE ******************************** -->
    				<div class="col-md-1" id="menu">
    					<aside class="nav">
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
    						</div> <!-- ./end div.col-md-12 #liensPrincipaux-->
    						<!-- ****************************** Liste des Passifs ****************************** -->
    						<div class="col-md-12">
    							<h1>Liste des Passifs :</h1>
    						</div> <!-- ./end div.col-md-12 -->
    						<div class="col-md-12 tableauPassifs">
    							<!-- GENERATION LISTE EN PHP -->
                                <h2>Modification de Statistiques :</h2>
                                <hr/>
                                <div class="row" id="ModStat">
                                    <div class="col-md-12">
                                        <div class="row text-center">
                                        	<div class="col-md-2 passifMenu">
                                                <p>Image :</p>
                                            </div> <!-- ./end div.col-md-2.passifMenu -->
                                            <div class="col-md-3 passifMenu">
                                                <p>Nom :</p>
                                            </div> <!-- ./end div.col-md-3.passifMenu -->
                                            <div class="col-md-4 passifMenu">
                                                <p>Effet :</p>
                                            </div> <!-- ./end div.col-md-4.passifMenu -->
                                            <div class="col-md-3 passifMenu">
                                                <p>Restriction :</p>
                                            </div> <!-- ./end div.col-md-3.passifMenu -->
                                        </div>
                                        <?php
                                            $passifs = "SELECT * FROM passifs 
                                            LEFT JOIN `passifs_restriction` ON `passifs_restriction`.`ID_Restriction :` = `passifs`.`Restriction :`
                                            WHERE `Type Effet :` = '1'
                                            ORDER BY `Nom :`";
                                            $listePassifs = mysqli_query($link, $passifs);
                                            $i = 0;

                                            while ($data = mysqli_fetch_assoc($listePassifs)) {?>
                                                <div class="row text-center ligneP">
                                                	<div class="col-md-2 passif ligne">
                                                        <img src="images/passifs/<?php echo $data['Chemin :']; ?>" alt="<?php echo $data['Nom :']; ?>" title="<?php echo $data['Nom :']; ?>" class="imgPassif"></a>
                                                    </div> <!-- ./end div.col-md-2.passif -->
                                                    <div class="col-md-3 passif ligne">
                                                        <a href="passif.php?lien=<?php echo $data['Lien :'];?>"><?php echo $data['Nom :']; ?></a>
                                                    </div> <!-- ./end div.col-md-3.passif -->
                                                    <div class="col-md-4 passif ligne">
                                                        <p><?php echo $data['Effet :']; ?></p>
                                                    </div> <!-- ./end div.col-md-4.passif -->
                                                    <div class="col-md-3 passif ligne">
                                                        <p><?php echo $data['Restriction :']; ?></p>
                                                    </div> <!-- ./end div.col-md-3.passif -->
                                                </div> <!-- ./end div.row -->
                                                <?php $i++;
                                            }
                                        ?>
                                    </div> <!-- ./end div.col-md-12 -->
                                </div> <!-- ./end div.row #ModStat -->
                                <h2>Bonus de Combar :</h2>
                                <hr/>
                                <div class="row" id="BoostCombat">
                                    <div class="col-md-12">
                                        <div class="row text-center">
                                            <div class="col-md-2 passifMenu">
                                                <p>Image :</p>
                                            </div> <!-- ./end div.col-md-2.passifMenu -->
                                            <div class="col-md-3 passifMenu">
                                                <p>Nom :</p>
                                            </div> <!-- ./end div.col-md-3.passifMenu -->
                                            <div class="col-md-4 passifMenu">
                                                <p>Effet :</p>
                                            </div> <!-- ./end div.col-md-4.passifMenu -->
                                            <div class="col-md-3 passifMenu">
                                                <p>Restriction :</p>
                                            </div> <!-- ./end div.col-md-3.passifMenu -->
                                        </div>
                                        <?php
                                            $passifs = "SELECT * FROM passifs 
                                            LEFT JOIN `passifs_restriction` ON `passifs_restriction`.`ID_Restriction :` = `passifs`.`Restriction :`
                                            WHERE `Type Effet :` = '2'
                                            ORDER BY `Nom :`";
                                            $listePassifs = mysqli_query($link, $passifs);
                                            $i = 0;

                                            while ($data = mysqli_fetch_assoc($listePassifs)) {?>
                                                <div class="row text-center ligneP">
                                                    <div class="col-md-2 passif ligne">
                                                        <img src="images/passifs/<?php echo $data['Chemin :']; ?>" alt="<?php echo $data['Nom :']; ?>" title="<?php echo $data['Nom :']; ?>" class="imgPassif"></a>
                                                    </div> <!-- ./end div.col-md-2.passif -->
                                                    <div class="col-md-3 passif ligne">
                                                        <a href="passif.php?lien=<?php echo $data['Lien :'];?>"><?php echo $data['Nom :']; ?></a>
                                                    </div> <!-- ./end div.col-md-3.passif -->
                                                    <div class="col-md-4 passif ligne">
                                                        <p><?php echo $data['Effet :']; ?></p>
                                                    </div> <!-- ./end div.col-md-4.passif -->
                                                    <div class="col-md-3 passif ligne">
                                                        <p><?php echo $data['Restriction :']; ?></p>
                                                    </div> <!-- ./end div.col-md-3.passif -->
                                                </div> <!-- ./end div.row -->
                                                <?php $i++;
                                            }
                                        ?>
                                    </div> <!-- ./end div.col-md-12 -->
                                </div> <!-- ./end div.row #BoostCombat -->
    						</div> <!-- ./end div.col-md-12 -->
    					</div> <!-- ./end div.row -->
    				</div> <!-- ./end div.col-md-11 #contenu -->
    			</div> <!-- ./end div.row -->
    		</div> <!-- ./end div.container-fluid -->
        </section> <!-- ./end section.listePassifs -->
		<footer class="text-right">
            <p>Développé par : HiroStar</p>
        </footer>
		<!-- SCRIPT BOOTSTRAP -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
	</body>
</html>