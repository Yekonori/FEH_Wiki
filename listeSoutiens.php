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
		<title>Liste Soutiens</title>

		<!-- CSS Bootstrap -->
	    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	    <!-- CSS Perso' -->
	    <link href="css/general.css" type="text/css" rel="stylesheet">
        <link href="css/listeSoutiens.css" type="text/css" rel="stylesheet">
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
    	<!-- ******************************** SECTION.listeSoutiens ******************************** -->
    	<!-- *************************************************************************************** -->
    	<section class="listeSoutiens">
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
    						<!-- ****************************** Liste des Soutiens ****************************** -->
    						<div class="col-md-12">
    							<h1>Liste des Soutiens :</h1>
    						</div> <!-- ./end div.col-md-12 -->
    						<div class="col-md-12 tableauSoutiens">
    							<!-- GENERATION LISTE EN PHP -->
                                <h2>Positionnement :</h2>
                                <hr/>
                                <div class="row" id="positionnement">
                                    <div class="col-md-12">
                                        <div class="row text-center">
                                            <div class="col-md-3 soutienMenu">
                                                <p>Nom :</p>
                                            </div> <!-- ./end div.col-md-3.soutienMenu -->
                                            <div class="col-md-5 soutienMenu">
                                                <p>Effet :</p>
                                            </div> <!-- ./end div.col-md-5.soutienMenu -->
                                            <div class="col-md-4 soutienMenu">
                                                <p>Restriction :</p>
                                            </div> <!-- ./end div.col-md-4.soutienMenu -->
                                        </div>
                                        <?php
                                            $soutiens = "SELECT * FROM soutiens 
                                            LEFT JOIN `soutiens_restriction` ON `soutiens_restriction`.`ID_Restriction :` = `soutiens`.`Restriction :`
                                            WHERE `Type :` = '1'
                                            ORDER BY `Nom :`";
                                            $listeSoutiens = mysqli_query($link, $soutiens);
                                            $i = 0;

                                            while ($data = mysqli_fetch_assoc($listeSoutiens)) {?>
                                                <div class="row text-center ligneP">
                                                    <div class="col-md-3 soutien ligne">
                                                        <a href="soutien.php?nom=<?php echo $data['Nom :'];?>"><?php echo $data['Nom :']; ?></a>
                                                    </div> <!-- ./end div.col-md-3.soutien -->
                                                    <div class="col-md-5 soutien ligne">
                                                        <p><?php echo $data['Effet :']; ?></p>
                                                    </div> <!-- ./end div.col-md-5.soutien -->
                                                    <div class="col-md-4 soutien ligne">
                                                        <p><?php echo $data['Restriction :']; ?></p>
                                                    </div> <!-- ./end div.col-md-4.soutien -->
                                                </div> <!-- ./end div.row -->
                                                <?php $i++;
                                            }
                                        ?>
                                    </div> <!-- ./end div.col-md-12 -->
                                </div> <!-- ./end div.row #positionnement -->
    						</div> <!-- ./end div.col-md-12 -->
    					</div> <!-- ./end div.row -->
    				</div> <!-- ./end div.col-md-11 #contenu -->
    			</div> <!-- ./end div.row -->
    		</div> <!-- ./end div.container-fluid -->
    	</section> <!-- ./end div.listeSoutiens -->
    	<footer class="text-right">
            <p>Développé par : HiroStar</p>
        </footer>
		<!-- SCRIPT BOOTSTRAP -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
	</body>
</html>