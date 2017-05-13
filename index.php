<?php
    #1. Connexion à la base de donnée
    include("ConnexionFE.php");

    $heros = "SELECT `Nom :` FROM `héros` ORDER BY `ID :`";
    $mesHeros = mysqli_query($link, $heros);

    $LastHeros = "SELECT `Nom :`FROM `héros` ORDER BY `ID :` DESC LIMIT 0, 4";
    $NvHeros = mysqli_query($link, $LastHeros);

    $annonces = "SELECT * FROM `annonces` ORDER BY `ID :` DESC LIMIT 0, 3";
    $dernieresAnnonces = mysqli_query($link, $annonces);

    $persoArene = "SELECT `Nom :` FROM `bonus_arene` ORDER BY `ID :`";
    $bonusArene = mysqli_query($link, $persoArene);

    $bannieres = "SELECT * FROM `bannieres` ORDER BY `ID :`";
    $bannieresActuelle = mysqli_query($link, $bannieres);

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
	    <!-- CSS perso' -->
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
    		</div> <!-- ./end div.container-flui -->
    	</header>
    	<!-- ******************************** SECTION.heros ******************************** -->
    	<!-- ******************************************************************************* -->
    	<section class="heros">
    		<div class="container-fluid">
    			<div class="row">
    			<!-- ******************************** ASIDE ******************************** -->
    				<div class="col-md-1">
    					<aside class="Nav">
                        <!-- ******************************** Collapse Nav ******************************** -->
                            <a href="#">
                                <div data-toggle="collapse" href="#heros" aria-expanded="false">
                                    <span class="glyphicon glyphicon-menu-down" aria-hidden="true" aria-controls="heros"></span>Héros
                                </div>
                            </a>
                            <div class="collapse text-center" id="heros">
                              <div>
                                <a href="#">Lien 1</a><br/>
                                <a href="#">Lien 2</a><br/>
                                <a href="#">Lien 3</a>
                              </div>
                            </div>
                            <hr/>
                            <a href="#">
                                <div data-toggle="collapse" href="#techniques" aria-expanded="false" aria-controls="techniques">
                                    <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>Techniques
                                </div>
                            </a>
                            <div class="collapse text-center" id="techniques">
                              <div>
                                <a href="#">Lien 1</a><br/>
                                <a href="#">Lien 2</a><br/>
                                <a href="#">Lien 3</a>
                              </div>
                            </div>
                            <hr/>
                            <a href="#">
                                <div data-toggle="collapse" href="#autre" aria-expanded="false">
                                    <span class="glyphicon glyphicon-menu-down" aria-hidden="true" aria-controls="autre"></span>Autre
                                </div>
                            </a>
                            <div class="collapse text-center" id="autre">
                              <div>
                                <a href="#">Lien 1</a><br/>
                                <a href="#">Lien 2</a><br/>
                                <a href="#">Lien 3</a>
                              </div>
                            </div>
    					</aside>
    				</div> <!-- ./end div.col-md-1 -->
    				<div class="col-md-11">
    					<div class="row">
    					<!-- ******************************** Liens Rapides ******************************** -->
    						<div class="col-md-12 text-center">
                                <div class="col-md-4 liensRapides">
                                    <img src="images/menu/Icon_Cercle_Alfonse.png" alt="#" title="#">
                                    <a href="#">Héros</a>
                                </div> <!-- ./end div.col-md-4 -->
                                <div class="col-md-4 liensRapides">
                                    <img src="images/menu/Icon_Cercle_Sharena.png" alt="#" title="#">
                                    <a href="#">Technique</a>
                                </div> <!-- ./end div.col-md-4 -->
                                <div class="col-md-4 liensRapides">
                                    <img src="images/menu/Icon_Cercle_Lucina.png" alt="#" title="#">
                                    <a href="#">Autre</a>
                                </div> <!-- ./end div.col-md-4 -->
    						</div> <!-- ./end div.col-md-12 -->
    					</div> <!-- ./end div.row -->
                        <div class="col-md-7 text-center">
    						<h1>Nouveaux Héros :</h1>
    						<div class="row">
    						<!-- ******************************** Derniers Héros ******************************** -->
	    						<div class="col-md-12 derniersHeros">
                                    <?php
					                   $i = 0;
					                   while ($data = mysqli_fetch_assoc($NvHeros)) {
                                            echo '<div class="text-center" style="display:inline-block; width:24%;">
				                                    <p>
					                                   <img src="images/icons/Icon_'.$data['Nom :'].'.png" style="border:1.5px solid rgba(175, 174, 174, 0.85); width:40%"/>
					                                   <br/>
					                                   <a href="#">'.$data['Nom :'].'</a>
				                                    </p>
                                                </div>';
                                            $i++;
                                        }
                                    ?>
						            <hr/>
	    						</div> <!-- ./end div.col-md-12 -->
	    						<div class="col-md-12">
	    						<!-- ******************************** Tous les Héros ******************************** -->
	    							<h2>Les Héros :</h2>
                                    <?php
                                        $i = 0;
                                        while ($data = mysqli_fetch_assoc($mesHeros)) {
                                        echo '<div class="text-center" style="display:inline-block; width:8%; margin:5px;">
                                                <p>
                                                    <a href="#">
                                                        <img src="images/icons/Icon_'.$data['Nom :'].'.png" style="border:1.5px solid rgba(175, 174, 174, 0.85); border-radius:100%; width:100%;"/>
                                                    </a>
                                                </p>
                                            </div>';
                                            $i++;
                                        }
                                    ?>
	    						</div> <!-- ./end div.col-md-12 -->
    						</div> <!-- ./end div.row -->
    					</div> <!-- ./end div.col-md-7 -->
    					<div class="col-md-4 col-md-offset-1 text-center">
    						<h3>Actualités : </h3>
    						<div class="row">
    							<div class="col-md-12">
    								<div class="row">
    									<div class="col-md-12">
    										<h4>Dernière MàJ et annonces :</h4>
    									</div> <!-- ./end div.col-md-12	-->
    									<div class="col-md-12 text-left">
    									<!-- ************************* Dernieres Annonces ************************* -->
    									<ul>
        									<?php
    							                $i = 0;
    							                while ($data = mysqli_fetch_assoc($dernieresAnnonces)) {
    							                	echo '<li>'.$data['Titre :'].'</li>';
    							                	echo '<p>'.$data['Description :'].'</p>';
    							                	$i++;
    							            	}
    							            ?>
							            </ul>
    									</div> <!-- ./end div.col-md-12	-->
    								</div> <!-- ./end div.row -->
    							</div> <!-- ./end div.col-md-12 -->
    							<div class="col-md-12">
    								<div class="row 7">
    									<div class="col-md-12">
    										<h5>Héros Bonus d'Arène :</h5>
    									</div> <!-- ./end div.col-md-12 -->
    									<div class="col-md-12">
                                        <!-- ************************* Héros Bonus d'Arène ************************* -->
                                        <!-- Héros Bonus d'Arene -->
                                            <?php
                                                $i = 0;
                                                while ($data = mysqli_fetch_assoc($bonusArene)) {
                                                    echo '<img src="images/icons/Icon_'.$data['Nom :'].'.png" style="border:1.5px solid rgba(175, 174, 174, 0.85); border-radius:100%; width:12%;"/>';
                                                    if ($i == 4) {
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
    										<h6>Focus Actuels :</h6>
    									</div> <!-- ./end div.col-md-12 -->
    									<div class="col-md-12">
                                        <!-- ************************* Bannières Actuelles ************************* -->
    										<?php
                                                $i = 0;
                                                $disparition = $data['Timestamp :'];
                                                $dateajd = date('Y-m-d');
                                                while ($data = mysqli_fetch_assoc($bannieresActuelle)) {
                                                    if ($data['Timestamp :'] > $dateajd) {
                                                        echo '<div class="text-center" style="display:inline-block; width:70%;">
                                                                <p>
                                                                    <img src="images/bannieres/'.$data['Fichier :'].'.png" style=" width:75%" title="'.$data['Timestamp :'].'"/>
                                                                    <br/>
                                                                    '.$data['Nom :'].'
                                                                </p>
                                                            </div>';
                                                    }
                                                    $i++;
                                                }
                                            ?>
    									</div> <!-- ./end div.col-md-12 -->
    								</div> <!-- ./end div.row 8 -->
    							</div> <!-- ./end div.col-md-12 -->
    						</div> <!-- ./end div.row -->
    					</div> <!-- ./end div.col-md-4 -->
    				</div> <!-- ./end div.col-md-11 -->
    			</div> <!-- ./end div.row -->
    		</div> <!-- ./end div.container-fluid -->
    	</section> <!-- ./end section.heros -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
	</body>
</html>