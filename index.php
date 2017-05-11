<?php
  #1. Connexion à la base de donnée
  include("ConnexionFE.php");

  $heros = "SELECT * FROM `héros` ORDER BY `ID :`";

  $mesHeros = mysqli_query($link, $heros);

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
	    <link href="css/main.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<!-- ******************************** HEADER ******************************** -->
    	<!-- ************************************************************************ -->
    	<header>
    		<div class="container-fluid">
    			<div class="row 1">
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
    			<div class="row 2">
    				<div class="col-md-1">
    					<aside class="text-center">
    						<a href="#">TEST LIEN</a>
    						<a href="#">TEST LIEN</a>
    						<a href="#">TEST LIEN</a>
    						<a href="#">TEST LIEN</a>
    						<a href="#">TEST LIEN</a>
    					</aside>
    				</div> <!-- ./end div.col-md-1 -->
    				<div class="col-md-11">
    					<div class="row 3">
    						<div class="col-md-12">
    							<a href="#">---LIEN RAPIDE---</a>
    							<a href="#">---LIEN RAPIDE---</a>
    							<a href="#">---LIEN RAPIDE---</a>
    							<a href="#">---LIEN RAPIDE---</a>
    							<a href="#">---LIEN RAPIDE---</a>
    							<a href="#">---LIEN RAPIDE---</a>
    							<a href="#">---LIEN RAPIDE---</a>
    						</div> <!-- ./end div.col-md-12 -->
    					</div> <!-- ./end div.row 3-->
    					<div class="col-md-7 text-center">
    						<h1>Nouveaux Héros :</h1>
    						<div class="row 4">
	    						<div class="col-md-12">
	    							<?php
						                $LastHeros = "SELECT `Nom :`FROM `héros` ORDER BY `ID :` DESC LIMIT 0, 4";

						                $NvHeros = mysqli_query($link, $LastHeros);
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
	    						</div> <!-- ./end div.col-md-12 -->
	    						<div class="col-md-12">
	    							<h2>Les Héros :</h2>
	    							<?php
						                $i = 0;
						                while ($data = mysqli_fetch_assoc($mesHeros)) {
						                	echo '<div class="text-center" style="display:inline-block; width:8%;">
						                        	<p>
						                        		<a href="#">
						                            	<img src="images/icons/Icon_'.$data['Nom :'].'.png" style="border:1.5px solid rgba(175, 174, 174, 0.85); border-radius:100%; width:80%;"/>
						                            	</a>
						                        	</p>
						                        </div>';
						                	$i++;
						            	}
						            ?>
	    						</div> <!-- ./end div.col-md-12 -->
    						</div> <!-- ./end div.row 4 -->
    					</div> <!-- ./end div.col-md-7 -->
    					<div class="col-md-4 col-md-offset-1 text-center">
    						<h3>Actualités : </h3>
    						<div class="row 5">
    							<div class="col-md-12">
    								<div class="row 6">
    									<div class="col-md-12">
    										<h4>Dernière MàJ :</h4>
    									</div> <!-- ./end div.col-md-12	-->
    									<div class="col-md-12 text-left">
    										<ul>
    											<li>MàJ 1.3.0</li>
    											<li>MàJ 1.2.0</li>
    											<li>MàJ 1.1.0</li>
    										</ul>
    									</div> <!-- ./end div.col-md-12	-->
    								</div> <!-- ./end div.row 6 -->
    							</div> <!-- ./end div.col-md-12 -->
    							<div class="col-md-12">
    								<div class="row 7">
    									<div class="col-md-12">
    										<h5>Héros Bonus d'Arène :</h5>
    									</div> <!-- ./end div.col-md-12 -->
    									<div class="col-md-12">
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    									</div> <!-- ./end div.col-md-12 -->
    								</div> <!-- ./end div.row 7 -->
    							</div> <!-- ./end div.col-md-12 -->
    							<div class="col-md-12">
    								<div class="row 8">
    									<div class="col-md-12">
    										<h6>Focus Actuels :</h6>
    									</div> <!-- ./end div.col-md-12 -->
    									<div class="col-md-12">
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    										<img src="#" title="#" alt="#"/>
    									</div> <!-- ./end div.col-md-12 -->
    								</div> <!-- ./end div.row 8 -->
    							</div> <!-- ./end div.col-md-12 -->
    						</div> <!-- ./end div.row 5 -->
    					</div> <!-- ./end div.col-md-4 -->
    				</div> <!-- ./end div.col-md-11 -->
    			</div> <!-- ./end div.row 2-->
    		</div> <!-- ./end div.container-fluid -->
    	</section> <!-- ./end section.heros -->
	</body>
</html>