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
		<title>Fire Emblem Heros Wiki - Accueil</title>

		<!-- CSS Bootstrap -->
	    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	    <!-- CSS Perso' -->
	    <link href="css/general.css" type="text/css" rel="stylesheet">
	    <link href="css/index.css" type="text/css" rel="stylesheet">
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
    	<!-- ******************************** SECTION.contenu ******************************** -->
    	<!-- ******************************************************************************* -->
    	<section class="contenu">
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
                        <div class="col-md-7 text-center">
                            <div class="row">
                                <div class="col-md-12 etat">
                                    <div class="row avance">
                                        <p>Wiki en cours de construction...</p>
                                    </div> <!-- ./end div.row -->
                                    <div class="row">
                                        <br/>
                                        <p>
                                            Totalement conçu par un fan et pour les fans, ce Wiki de Fire Emblem Heroes proposera un concentré d'information sur les diffèrents points du jeu, que ce soit des informations sur les Héros, les Armes, les Passifs ou n'importe quel autre élément du jeu, en plus de Guides pour les débutants.
                                        </p>
                                        <br/>
                                        <p>
                                            Ce Wiki vous intéresse ? Vous souhaitez aider à sa construction ?
                                            <ul>
                                                <li><a href="ajouterHéros.php">Ajouter un Héros</a></li>
                                                <li><a href="ajouterArme.php">Ajouter une Arme</a></li>
                                                <li><a href="ajouterSoutien.php">Ajouter un Soutien</a></li
    >                                            <li><a href="ajouterSpéciale.php">Ajouter une Aptitude Spéciale </a></li>
                                                <li><a href="ajouterPassif.php">Ajouter un Passif</a></li>
                                            </ul>
                                        </p>
                                    </div> <!-- ./end div.row -->
                                </div> <!-- ./end div.col-md-12 -->
                            </div> <!-- ./end div.row -->
                            <div class="row" id="nvHeros">
                                <h1>Nouveaux Héros :</h1>
                            </div> <!-- ./end div.row -->
    						<div class="row" id="heros">
    						<!-- ******************************** Derniers Héros ******************************** -->
	    						<div class="col-md-12 derniersHeros">
                                    <?php
                                        $LastHeros = "SELECT `Nom :`, `Lien :` FROM `héros` ORDER BY `ID :` DESC LIMIT 0, 4";
                                        $NvHeros = mysqli_query($link, $LastHeros);
                                        $i = 0;
                                        while ($data = mysqli_fetch_assoc($NvHeros)) {?>

                                            <div class="text-center listeDerniersHeros">
					                           <img src="images/icons/Icon_<?php echo $data['Nom :']?>.png" alt="<?php echo $data['Nom :']?>" title="<?php echo $data['Nom :']?>" class="imgDerniersHeros"/>
					                           <br/>
                                                <p>
                                                    <a href="héros.php?lien=<?php echo $data['Lien :'];?>"><?php echo $data['Nom :']?></a>
			                                    </p>
                                            </div>

                                            <?php $i++;
                                        }
                                    ?>
                                    <hr/>
	    						</div> <!-- ./end div.col-md-12 -->
	    						<div class="col-md-12">
	    						<!-- ******************************** Tous les Héros ******************************** -->
                                    <h2>Les Héros :</h2>
                                    <?php
                                        $heros = "SELECT `Nom :`, `Lien :` FROM `héros` ORDER BY `Nom :`";
                                        $mesHeros = mysqli_query($link, $heros);
                                        $i = 0;
                                        while ($data = mysqli_fetch_assoc($mesHeros)) {?>

                                            <div class="text-center listeHeros">
                                                <a href="héros.php?lien=<?php echo $data['Lien :'];?>">
                                                    <img src="images/icons/Icon_<?php echo $data['Nom :']?>.png" alt="<?php echo $data['Nom :']?>" title="<?php echo $data['Nom :']?>" class="imgListeHeros" />
                                                </a>
                                            </div>

                                            <?php $i++;
                                        }
                                    ?>
	    						</div> <!-- ./end div.col-md-12 -->
    						</div> <!-- ./end div.row -->
    					</div> <!-- ./end div.col-md-7 -->
    					<div class="col-md-4 col-md-offset-1 text-center">
    						<div class="row" id="infos">
    							<div class="col-md-12">
    								<div class="row">
    									<div class="col-md-12">
                                            <div class="row actu" id="one">
        									   <h3>Dernière MàJ et annonces :</h3>
                                            </div> <!-- ./end div.row -->
    									</div> <!-- ./end div.col-md-12	-->
    									<div class="col-md-12 text-left" id="maj">
    									<!-- ************************* Dernieres Annonces ************************* -->
    									<ul>
        									<?php
                                                $annonces = "SELECT * FROM `annonces` ORDER BY `ID :` DESC LIMIT 0, 3";
                                                $dernieresAnnonces = mysqli_query($link, $annonces);
    							                $i = 0;
    							                while ($data = mysqli_fetch_assoc($dernieresAnnonces)) {
                                                    $mysqldate = $data['Date :'];
                                                    $phpdate = strtotime( $mysqldate );
                                                    $mysqldate = date('d-m-Y', $phpdate);
                                                    ?>

    							                	<li>[<?php echo $mysqldate ?>]</li>
    							                	<p><?php echo $data['Titre :']?></p>

    							                	<?php $i++;
    							            	}
    							            ?>
							            </ul>
                                        <!--
                                        <div class="col-md-12 text-right plusAnnonces">
                                            <a href="#">Plus d'annonces</a>
                                        </div>
                                        -->
    									</div> <!-- ./end div.col-md-12	-->
    								</div> <!-- ./end div.row -->
    							</div> <!-- ./end div.col-md-12 -->
    							<div class="col-md-12">
    								<div class="row 7">
    									<div class="col-md-12">
                                            <div class="row actu">
    										  <h4>Héros Bonus d'Arène :</h4>
                                            </div> <!-- ./end div.row -->
    									</div> <!-- ./end div.col-md-12 -->
    									<div class="col-md-12" id="arene">
                                        <!-- ************************* Héros Bonus d'Arène ************************* -->
                                        <!-- Héros Bonus d'Arene -->
                                            <?php
                                                $persoArene = "SELECT `Héros Bonus :` FROM `appel_aux_armes` ORDER BY `ID :`";
                                                $bonusArene = mysqli_query($link, $persoArene);
                                                $i = 0;
                                                while ($data = mysqli_fetch_assoc($bonusArene)) {?>

                                                    <img src="images/icons/Icon_<?php echo $data['Héros Bonus :']?>.png" alt="<?php echo $data['Héros Bonus :']?>" title="<?php echo $data['Héros Bonus :']?>" class="imgHerosArene"/>
                                                    
                                                    <?php if ($i == 4) {
                                                        echo '<br/>';
                                                    }
                                                    $i++;
                                                }
                                            ?>
    									</div> <!-- ./end div.col-md-12 -->
    								</div> <!-- ./end div.row 7 -->
    							</div> <!-- ./end div.col-md-12 -->
    							<div class="col-md-12">
    								<div class="row 8">
    									<div class="col-md-12">
                                            <div class="row actu">
                                                <h5>Focus Actuels :</h5>   
                                            </div> <!-- ./end div.row -->
    									</div> <!-- ./end div.col-md-12 -->
    									<div class="col-md-12" id="focus">
                                        <!-- ************************* Bannières Actuelles ************************* -->
    										<?php
                                                $bannieres = "SELECT * FROM `bannieres` ORDER BY `ID :`";
                                                $bannieresActuelle = mysqli_query($link, $bannieres);
                                                $i = 0;
                                                $dateajd = date('Y-m-d H:i:s');
                                                while ($data = mysqli_fetch_assoc($bannieresActuelle)) {
                                                    $mysqldate = $data['Fin :'];
                                                    $phpdate = strtotime( $mysqldate );
                                                    $mysqldate = date('d-m-Y', $phpdate);
                                                    if ($data['Fin :'] > $dateajd) {?>

                                                        <div class="text-center" style="display:inline-block; width:70%;">
                                                            <img src="images/bannieres/<?php echo $data['Chemin :']?>" title="<?php echo $mysqldate;?>" class="imgBannieres"/>
                                                            <br/>
                                                            <p><?php echo $data['Nom :']?></p>
                                                        </div>

                                                    <?php }
                                                    $i++;
                                                }
                                            ?>
    									</div> <!-- ./end div.col-md-12 -->
    								</div> <!-- ./end div.row 8 -->
    							</div> <!-- ./end div.col-md-12 -->
    						</div> <!-- ./end div.row -->
    					</div> <!-- ./end div.col-md-4 -->
    				</div> <!-- ./end div.col-md-11 #contenu -->
    			</div> <!-- ./end div.row -->
    		</div> <!-- ./end div.container-fluid -->
    	</section> <!-- ./end section.contenu -->
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