<?php
    include("ConnexionFE.php");

    if (mysqli_connect_errno($link)) {
        die("Erreur de connexion : ".mysqli_connect_error($link));
    }

    $lien = $_GET['lien'];

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
        <meta charset="utf-8">
        <title><?php echo $data['Nom :'] ?></title>

        <!-- CSS Bootstrap -->
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <!-- CSS Perso' -->
        <link href="css/general.css" type="text/css" rel="stylesheet">
        <link href="css/héros.css" type="text/css" rel="stylesheet">
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
        <!-- ******************************* SECTION.heros ******************************* -->
        <!-- ******************************************************************************* -->
        <section class="heros">
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
                            </div> <!-- ./end div.col-md-12 -->
                        </div> <!-- ./end div.row -->
                        <div class="row">
                            <div class="col-md-12" id="nom">
                                <!-- *************** Nom Héros *************** -->
                                <h1><?php echo $data['Nom :'] ?></h1>
                                <p class="text-right modifier">
                                    <a href="modifierHéros.php?lien=<?php echo $data['Lien :'];?>">
                                        [Modifier <?php echo $data['Nom :'] ?>]
                                    </a>
                                </p>
                                <hr/>
                            </div> <!-- ./end div.col-md-12 -->
                        </div> <!-- ./end div.row -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- *************** Description Héros *************** -->
                                <div class="col-md-8">
                                    <div class="row">
                                        <blockquote>
                                            <h2>
                                                <?php echo $data['Description :'] ?>
                                            </h2>
                                        </blockquote>
                                    </div> <!-- ./end div.row -->
                                    <div class="row stats">
                                        <p>Statistique :</p>
                                        <hr/>
                                        <table class="table table-hover tableStats">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Rareté</th>
                                                    <th class="text-center">PV</th>
                                                    <th class="text-center">Atq</th>
                                                    <th class="text-center">Vit</th>
                                                    <th class="text-center">Déf</th>
                                                    <th class="text-center">Rés</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            <?php
                                                    $statsHéros1 = "SELECT * FROM `héros_statistiques_1_etoile` 
                                                    WHERE `héros_statistiques_1_etoile`.`Lien :` = '$lien'";
                                                    $stats1 = mysqli_query($link, $statsHéros1) OR die (mysqli_error($link));

                                                    $i = 0;
                                                    while($value = mysqli_fetch_assoc($stats1)) {?>
                                                        <tr>
                                                            <td>1 <img src="images/imgs/1_etoile.png" alt="1 etoile" title="1 etoile"/></td>
                                                            <td><?php echo $value ['PV_1_etoile :'] ?></td>
                                                            <td><?php echo $value ['Atq_1_etoile :'] ?></td>
                                                            <td><?php echo $value ['Vit_1_etoile :'] ?></td>
                                                            <td><?php echo $value ['Déf_1_etoile :'] ?></td>
                                                            <td><?php echo $value ['Rés_1_etoile :'] ?></td>
                                                        </tr>
                                                        <?php $i++;
                                                    }
                                                ?>
                                            <?php
                                                    $statsHéros2 = "SELECT * FROM `héros_statistiques_2_etoile` 
                                                    WHERE `héros_statistiques_2_etoile`.`Lien :` = '$lien'";
                                                    $stats2 = mysqli_query($link, $statsHéros2) OR die (mysqli_error($link));

                                                    $i = 0;
                                                    while($value = mysqli_fetch_assoc($stats2)) {?>
                                                        <tr>
                                                            <td>2 <img src="images/imgs/2_etoile.png" alt="2 etoile" title="2 etoile"/></td>
                                                            <td><?php echo $value ['PV_2_etoile :'] ?></td>
                                                            <td><?php echo $value ['Atq_2_etoile :'] ?></td>
                                                            <td><?php echo $value ['Vit_2_etoile :'] ?></td>
                                                            <td><?php echo $value ['Déf_2_etoile :'] ?></td>
                                                            <td><?php echo $value ['Rés_2_etoile :'] ?></td>
                                                        </tr>
                                                        <?php $i++;
                                                    }
                                                ?>
                                            <?php
                                                    $statsHéros3 = "SELECT * FROM `héros_statistiques_3_etoile` 
                                                    WHERE `héros_statistiques_3_etoile`.`Lien :` = '$lien'";
                                                    $stats3 = mysqli_query($link, $statsHéros3) OR die (mysqli_error($link));

                                                    $i = 0;
                                                    while($value = mysqli_fetch_assoc($stats3)) {?>
                                                        <tr>
                                                            <td>3 <img src="images/imgs/3_etoile.png" alt="3 etoile" title="3 etoile"/></td>
                                                            <td><?php echo $value ['PV_3_etoile :'] ?></td>
                                                            <td><?php echo $value ['Atq_3_etoile :'] ?></td>
                                                            <td><?php echo $value ['Vit_3_etoile :'] ?></td>
                                                            <td><?php echo $value ['Déf_3_etoile :'] ?></td>
                                                            <td><?php echo $value ['Rés_3_etoile :'] ?></td>
                                                        </tr>
                                                        <?php $i++;
                                                    }
                                                ?>
                                                <?php
                                                    $statsHéros4 = "SELECT * FROM `héros_statistiques_4_etoile` 
                                                    WHERE `héros_statistiques_4_etoile`.`Lien :` = '$lien'";
                                                    $stats4 = mysqli_query($link, $statsHéros4) OR die (mysqli_error($link));

                                                    $i = 0;
                                                    while($value = mysqli_fetch_assoc($stats4)) {?>
                                                        <tr>
                                                            <td>4 <img src="images/imgs/4_etoile.png" alt="4 etoile" title="4 etoile"/></td>
                                                            <td><?php echo $value ['PV_4_etoile :'] ?></td>
                                                            <td><?php echo $value ['Atq_4_etoile :'] ?></td>
                                                            <td><?php echo $value ['Vit_4_etoile :'] ?></td>
                                                            <td><?php echo $value ['Déf_4_etoile :'] ?></td>
                                                            <td><?php echo $value ['Rés_4_etoile :'] ?></td>
                                                        </tr>
                                                        <?php $i++;
                                                    }
                                                ?>
                                                <?php
                                                    $statsHéros5 = "SELECT * FROM `héros_statistiques_5_etoile` 
                                                    WHERE `héros_statistiques_5_etoile`.`Lien :` = '$lien'";
                                                    $stats5 = mysqli_query($link, $statsHéros5) OR die (mysqli_error($link));

                                                    $i = 0;
                                                    while($value = mysqli_fetch_assoc($stats5)) {?>
                                                        <tr>
                                                            <td>5 <img src="images/imgs/5_etoile.png" alt="5 etoile" title="5 etoile"/></td>
                                                            <td><?php echo $value ['PV_5_etoile :'] ?></td>
                                                            <td><?php echo $value ['Atq_5_etoile :'] ?></td>
                                                            <td><?php echo $value ['Vit_5_etoile :'] ?></td>
                                                            <td><?php echo $value ['Déf_5_etoile :'] ?></td>
                                                            <td><?php echo $value ['Rés_5_etoile :'] ?></td>
                                                        </tr>
                                                        <?php $i++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- ./end div.row -->
                                </div> <!-- ./end div.col-md-8 -->
                                <div class="col-md-3 col-md-offset-1 text-center" id="heros">
                                    <div class="row">
                                        <div class="col-md-12 text-center nomTitre">
                                            <!-- ********** Nom & Titre ********** -->
                                            <p><?php echo $data['Nom :'] ?></p>
                                            <hr/>
                                            <p><?php echo $data['Titre :'] ?></p>
                                        </div> <!-- ./end div.col-md-12 -->
                                        <div class="col-md-12">
                                            <!-- ********** Image ********** -->
                                            <img src="images/portrait/Portrait_<?php echo $data['Nom :']; ?>.png" alt="<?php echo $data['Nom :']; ?>" title="<?php echo $data['Nom :']; ?>"/>
                                            <!-- ********** Dessinateur ********** -->
                                            <p>Dessiné par : <i><?php echo $data['Dessinateur :'] ?></i></p>
                                        </div> <!-- ./end div.col-md-12 -->
                                    </div> <!-- ./end div.row -->
                                    <div class="row ligneP">
                                        <!-- ********** Arme & Couleur ********** -->
                                        <div class="col-md-5 armeCouleur ligne">
                                            <p>Arme :</p>
                                        </div> <!-- ./end div.col-md-5 -->
                                        <div class="col-md-7 armeCouleurHeros ligne">
                                            <img 
                                                src="images/logo_armes/<?php echo $data['Arme :']; ?>_<?php echo $data['Couleur :']; ?>.png" 7
                                                alt="<?php echo $data['Arme :']; ?>_<?php echo $data['Couleur :']; ?>" 
                                                title="<?php echo $data['Arme :']; ?>_<?php echo $data['Couleur :']; ?>"
                                            />
                                            <p><?php echo $data['Arme :']; ?> <?php echo $data['Couleur :']; ?><p>
                                        </div> <!-- ./end div.col-md-7 -->
                                    </div> <!-- ./end div.row -->
                                    <div class="row ligneP">
                                        <!-- ********** Déplacement ********** -->
                                        <div class="col-md-5 deplacement ligne">
                                            <p>Déplacement :</p>
                                        </div> <!-- ./end div.col-md-5 -->
                                        <div class="col-md-7 deplacementHeros ligne">
                                            <img 
                                                src="images/logo_déplacement/<?php echo $data['Déplacement :']; ?>.png" 7
                                                alt="<?php echo $data['Déplacement :']; ?>" 
                                                title="<?php echo $data['Déplacement :']; ?>"
                                            />
                                            <p><?php echo $data['Déplacement :']; ?><p>
                                        </div> <!-- ./end div.col-md-7 -->
                                    </div> <!-- ./end div.row -->
                                    <div class="row ligneP">
                                        <div class="col-md-5 obtention ligne">
                                            <p>Obtention :</p>
                                        </div> <!-- ./end div.col-md-5 -->
                                        <div class="col-md-7 obtentionHeros ligne">
                                            <p><?php echo $data['Obtention :']; ?></p>
                                        </div> <!-- ./end div.col-md-7 -->
                                    </div> <!-- ./end div.row -->
                                    <div class="row ligneP">
                                        <!-- ********** Origine ********** -->
                                        <div class="col-md-5 origine ligne">
                                            <p>Origine :</p>
                                        </div> <!-- ./end div.col-md-5 -->
                                        <div class="col-md-7 origineHeros ligne">
                                            <p><?php echo $data['Origine :']; ?></p>
                                        </div> <!-- ./end div.col-md-7 -->
                                    </div> <!-- ./end div.row -->
                                    <div class="row ligneP">
                                        <!-- ********** Doubleur ********** -->
                                        <div class="col-md-5 doubleur ligne">
                                            <p>Doubleur Anglais :</p>
                                        </div> <!-- ./end div.col-md-5 -->
                                        <div class="col-md-7 doubleurHeros ligne">
                                            <p><?php echo $data['Voix :']; ?></p>
                                        </div> <!-- ./end div.col-md-7 -->
                                    </div> <!-- ./end div.row -->
                                </div> <!-- ./end div.col-md-3 -->
                            </div> <!-- ./end div.col-md-12 -->
                        </div> <!-- ./end div.row -->
                        <div class="row">
                            <div class="col-md-12" id="aptitudes">
                                <h3>Aptitudes :</h3>
                                <hr/>
                            </div> <!-- ./end div.col-md-12 #aptitudes -->
                            <!-- ******************** ARMES ******************** -->
                            <div class="col-md-12" id="armes">
                                <div class="col-md-8">
                                    <img src="images/imgs/Armes.png" alt="Armes" title="Armes"/>
                                    <p>Armes :</p>
                                        <table class="table table-hover tableApt">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nom</th>
                                                <th class="text-center">Dmg</th>
                                                <th class="text-center">Por</th>
                                                <th class="text-center">Effet</th>
                                                <th class="text-center">Coût PA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                                $ArmesHeros = "SELECT * FROM `armes`
                                                    LEFT JOIN `armes_effet` ON `armes_effet`.`ID_Effet :` = `armes`.`Effet :`
                                                    LEFT JOIN `armes_cout_pa` ON `armes_cout_pa`.`ID_Coût_PA :` = `armes`.`Coût_PA :`
                                                    WHERE `armes`.`Possesseur :` LIKE '%".$lien."%'";
                                                $Armes = mysqli_query($link, $ArmesHeros);
                                                $i = 0;
                                                while($data = mysqli_fetch_assoc($Armes)) {?>
                                                    <tr>
                                                        <td><a href="arme.php?lien=<?php echo $data['Lien :'];?>"><?php echo $data ['Nom :'] ?></a></td>
                                                        <td><?php echo $data ['Dmg :'] ?></td>
                                                        <td><?php echo $data ['Por :'] ?></td>
                                                        <td><?php echo $data ['Effet :'] ?></td>
                                                        <td><?php echo $data ['Coût_PA :'] ?></td> 
                                                    </tr>
                                                <?php $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- ./end div.col-md-8 -->
                            </div> <!-- ./end div.col-md-12 #armes -->
                            <!-- ******************** SOUTIENS ******************** -->
                            <div class="col-md-12" id="soutiens">
                                <div class="col-md-8">
                                    <img src="images/imgs/Soutiens.png" alt="Soutiens" title="Soutiens"/>
                                    <p>Soutiens :</p>
                                    <table class="table table-hover tableApt">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nom</th>
                                                <th class="text-center">Effet</th>
                                                <th class="text-center">Coût PA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                                $SoutiensHeros = "SELECT * FROM `soutiens`
                                                    LEFT JOIN `soutiens_cout_pa` ON `soutiens_cout_pa`.`ID_Coût_PA :` = `soutiens`.`Coût_PA :`
                                                    WHERE `soutiens`.`Possesseur :` LIKE '%".$lien."%'";
                                                $Soutiens = mysqli_query($link, $SoutiensHeros);
                                                $i = 0;
                                                while($data = mysqli_fetch_assoc($Soutiens)) {?>
                                                    <tr>
                                                        <td><a href="soutien.php?nom=<?php echo $data['Nom :'];?>"><?php echo $data ['Nom :'] ?></a></td>
                                                        <td><?php echo $data ['Effet :'] ?></td>
                                                        <td><?php echo $data ['Coût_PA :'] ?></td> 
                                                    </tr>
                                                <?php $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- ./end div.col-md-8 -->
                            </div> <!-- ./end div.col-md-12 #soutiens -->
                            <!-- ******************** SPECIALES ******************** -->
                            <div class="col-md-12" id="speciales">
                                <div class="col-md-8">
                                    <img src="images/imgs/Spéciales.png" alt="Spéciales" title="Spéciales"/>
                                    <p>Spéciales :</p>
                                    <table class="table table-hover tableApt">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nom</th>
                                                <th class="text-center">Compteur</th>
                                                <th class="text-center">Effet</th>
                                                <th class="text-center">Coût PA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                                $SpécialesHeros = "SELECT * FROM `aptitudes_spéciales`
                                                    LEFT JOIN `aptitudes_spéciales_compteur` ON `aptitudes_spéciales_compteur`.`ID_Compteur :` = `aptitudes_spéciales`.`Compteur :`
                                                    LEFT JOIN `aptitudes_spéciales_cout_pa` ON `aptitudes_spéciales_cout_pa`.`ID_Coût_PA :` = `aptitudes_spéciales`.`Coût_PA :`
                                                    WHERE `aptitudes_spéciales`.`Possesseur :` LIKE '%".$lien."%'";
                                                $Spéciales = mysqli_query($link, $SpécialesHeros);
                                                $i = 0;
                                                while($data = mysqli_fetch_assoc($Spéciales)) {?>
                                                    <tr>
                                                        <td><a href="spéciale.php?lien=<?php echo $data['Lien :'];?>"><?php echo $data ['Nom :'] ?></a></td>
                                                        <td><?php echo $data ['Compteur :'] ?></td>
                                                        <td><?php echo $data ['Effet :'] ?></td>
                                                        <td><?php echo $data ['Coût_PA :'] ?></td> 
                                                    </tr>
                                                <?php $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- ./end div.col-md-8 -->
                            </div> <!-- ./end div.col-md-12 #speciales -->
                            <!-- ******************** PASSIFS ******************** -->
                            <div class="col-md-12" id="passifs">
                                <div class="col-md-8">
                                    <img src="images/imgs/Passifs.png" alt="Passifs" title="Passifs"/>
                                    <p>Passifs :</p>
                                    <table class="table table-hover tableApt">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nom</th>
                                                <th class="text-center">Effet</th>
                                                <th class="text-center">Coût PA</th>
                                                <th class="text-center">Type</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                                $PassifsHeros = "SELECT * FROM `passifs`
                                                    LEFT JOIN `passifs_cout_pa` ON `passifs_cout_pa`.`ID_Coût_PA :` = `passifs`.`Coût_PA :`
                                                    WHERE `passifs`.`Possesseur :` LIKE '%".$lien."%'";
                                                $Passifs = mysqli_query($link, $PassifsHeros);
                                                $i = 0;
                                                while($data = mysqli_fetch_assoc($Passifs)) {?>
                                                    <tr>
                                                        <td><a href="passif.php?lien=<?php echo $data['Lien :'];?>"><?php echo $data ['Nom :'] ?></a></td>
                                                        <td><?php echo $data ['Effet :'] ?></td>
                                                        <td><?php echo $data ['Coût_PA :'] ?></td> 
                                                        <td><?php echo $data ['Type :'] ?></td>
                                                    </tr>
                                                <?php $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- ./end div.col-md-8 -->
                            </div> <!-- ./end div.col-md-12 #passifs -->
                        </div> <!-- ./end div.row -->
                    </div> <!-- ? ./end div.col-md-11 #contenu -->
                </div> <!-- ./end div.row -->
            </div> <!-- ./end div.container-fluid -->
        </section> <!-- ./end section.heros -->
        <footer class="text-right">
            <p>Développé par : HiroStar</p>
        </footer>
        <!-- SCRIPT BOOTSTRAP -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>