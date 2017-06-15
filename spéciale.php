<?php
    include("ConnexionFE.php");

    if (mysqli_connect_errno($link)) {
        die("Erreur de connexion : ".mysqli_connect_error($link));
    }

    $lien = $_GET['lien'];

    $select = "SELECT * FROM aptitudes_spéciales
    LEFT JOIN `aptitudes_spéciales_compteur` ON `aptitudes_spéciales_compteur`.`ID_Compteur :` = `aptitudes_spéciales`.`Compteur :`
    LEFT JOIN `aptitudes_spéciales_cout_pa` ON `aptitudes_spéciales_cout_pa`.`ID_Coût_PA :` = `aptitudes_spéciales`.`Coût_PA :`
    LEFT JOIN `aptitudes_spéciales_cout_transmission` ON `aptitudes_spéciales_cout_transmission`.`ID_Coût_Transmission :` = `aptitudes_spéciales`.`Coût_Transmission :`
    LEFT JOIN `aptitudes_spéciales_restriction` ON `aptitudes_spéciales_restriction`.`ID_Restriction :` = `aptitudes_spéciales`.`Restriction :`
    LEFT JOIN `aptitudes_spéciales_type` ON `aptitudes_spéciales_type`.`ID_Type :` = `aptitudes_spéciales`.`Type :`
    WHERE `Lien :`='$lien'";

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
        <link href="css/aptitudes.css" type="text/css" rel="stylesheet">
        <link href="css/spéciale.css" type="text/css" rel="stylesheet">
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
        <!-- ******************************** SECTION.arme ******************************** -->
        <!-- ******************************************************************************* -->
        <section class="spéciale">
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
                        <div class="col-md-12 nom">
                            <!-- *************** Nom Arme *************** -->
                            <h1><?php echo $data['Nom :'] ?></h1>
                            <p class="text-right modifier">
                                <a href="modifierSpéciale.php?lien=<?php echo $data['Lien :'];?>" class="text-right">
                                    [Modifier <?php echo $data['Nom :'] ?>]
                                </a>
                            </p>
                            <hr/>
                        </div> <!-- ./end div.col-md-12 -->
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Héros avec <?php echo $data['Nom :'] ?></h2>
                                </div> <!-- ./end div.col-md-12 -->
                                <hr/>
                            </div> <!-- ./end div.row -->
                            <div clas="row">
                                <div class="col-md-7">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nom :</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $Select = "SELECT `Possesseur :` FROM `aptitudes_spéciales` WHERE `Lien :`='$lien'";
                                                $Query = mysqli_query($link, $Select);
                                                while($assoc = mysqli_fetch_assoc($Query)) {
                                                    $Array = explode(', ', $assoc ['Possesseur :']);
                                                    for($a = 0 ; $a < count($Array) ; $a++) {?>
                                                        <tr>
                                                            <td>
                                                                <img src="images/icons/Icon_<?php echo $Array[$a] ?>.png" 
                                                                alt="<?php echo $Array[$a] ?>" title="<?php echo $Array[$a] ?>"/>
                                                                <hr/>
                                                                <p><?php echo $Array[$a] ?></p>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- ./end div.col-md-7 -->
                            </div> <!-- ./end div.row -->
                        </div> <!-- ./end div.col-md-7 -->
                        <div class="col-md-3 col-md-offset-1 text-center" id="spéciale">
                            <div class="row">
                                <!-- *************** NOM *************** -->
                                <div class="col-md-12 nomSpéciale">
                                    <h3><?php echo $data['Nom :'] ?></h3>
                                </div> <!-- ./end div.col-md-12 -->
                                <!-- *************** Compteur *************** -->
                                <div class="col-md-8 compteur">
                                    <p>Compteur :</p>
                                </div> <!-- ./end div.col-md-8 -->
                                <div class="col-md-4 compteurSpéciale">
                                    <p><?php echo $data['Compteur :'] ?></p>
                                </div> <!-- ./end div.col-md-4 -->
                            </div> <!-- ./end div.row -->
                            <div class="row">
                                <!-- *************** Effet *************** -->
                                <div class="col-md-12 effet">
                                    <p>Effet :</p>
                                </div> <!-- ./end div.col-md-12 -->
                                <div class="col-md-12 effetSpéciale">
                                    <p><?php echo $data['Effet :'] ?></p>
                                </div> <!-- ./end div.col-md-12 -->
                            </div> <!-- ./end div.row -->
                            <div class="row ligneP">
                                <!-- *************** Coût PA *************** -->
                                <div class="col-md-8 coutPA ligne">
                                    <p>Coût PA :</p>
                                </div> <!-- ./end div.col-md-8 -->
                                <div class="col-md-4 coutPAArme ligne">
                                    <p><?php echo $data['Coût_PA :'] ?></p>
                                </div> <!-- ./end div.col-md-4 -->
                            </div> <!-- ./end div.row -->
                            <div class="row ligneP">
                                <!-- *************** Coput Transmission *************** -->
                                <div class="col-md-8 coutTransmission ligne">
                                    <p>Coût Transmission :</p>
                                </div> <!-- ./end div.col-md-8 -->
                                <div class="col-md-4 coutTransmissionArme ligne">
                                    <p><?php echo $data['Coût_Transmission :'] ?></p>
                                </div> <!-- ./end div.col-md-4 -->
                            </div> <!-- ./end div.row -->
                            <div class="row ligneP">
                                <!-- *************** Restriction *************** -->
                                <div class="col-md-8 restriction ligne">
                                    <p>Restriction :</p> <!-- A GENERER EN PHP -->
                                </div> <!-- ./end div.col-md-8 -->
                                <div class="col-md-4 restrictionSpéciale ligne">
                                    <p><?php echo $data['Restriction :'] ?></p> <!-- A GENERER EN PHP -->
                                </div> <!-- ./end div.col-md-4 -->
                            </div> <!-- ./end div.row -->
                        </div> <!-- ./end div.col-md-3 #spéciale -->
                    </div> <!-- ./end div.col-md-11 #contenu -->
                </div> <!-- ./end div.row -->
            </div> <!-- ./end div.container-fluid -->
        </section> <!-- ./end section.spéciale -->
        <footer class="text-right">
            <p>Développé par : HiroStar</p>
        </footer>
        <!-- SCRIPT BOOTSTRAP -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>