<?php
  #1. Connexion à la base de donnée
  include("ConnexionFE.php");

  $sql = "SELECT `Nom :` FROM `héros` ORDER BY `ID :` DESC LIMIT 0, 4";

  $mesHeros = mysqli_query($link, $sql);

  if (mysqli_connect_errno($link)) {
    die("Erreur de connexion : ".mysqli_connect_error($link));
  }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Fire Emblem Heroes - Wiki</title>

    <!-- CSS Bootstrap -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <!-- CSS perso' -->
    <link href="css/general.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <!-- ******************************** HEADER ******************************** -->
    <!-- ************************************************************************ -->
    <header>
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-3">
            <img src="images/imgs/Logo.png" title="Logo" alt="Logo" class="logo"/>
          </div> <!-- ./end div.col-md-3 -->
        </div> <!-- ./end div.row -->
      </div> <!-- ./end div.container-fluid -->
      <div class="container-fluid">
    </header>
    <!-- ******************************** SECTION.info ******************************** -->
    <!-- ****************************************************************************** -->
    <section class="info">
        <div class="row">
          <div class="col-md-1">
            <aside>
              <nav>
                <a href="#">Informations</a>
                <a href="#">Héros</a>
                <a href="#">Techniques</a>
                <a href="#">Autre</a>
              </nav> <!-- ./end nav -->
            </aside> <!-- ./end aside -->
          </div> <!-- ./end div.col-md-1 -->
          <div class="col-md-11">
            <div class="row">
              <div class="col-md-8 text-center">
                <h1>Nouveaux Héros :</h1>
              </div> <!-- ./end div.col-md-8 -->
              <div class="col-md-8 NewHeros">
              <?php
                $i = 0;
                while ($data = mysqli_fetch_assoc($mesHeros)) {
                  echo '<div class="text-center" style="display:inline-block; width:24%;">
                          <p>
                            <img src="images/icons/Icon_'.$data['Nom :'].'.png" style="border:1.5px solid black ;"/>
                            <br/>
                            <a href="#">'.$data['Nom :'].'</a>
                          </p>
                        </div>';
                  $i++;
                }
              ?>
              </div> <!-- ./end div.col-md-8 & NewHeros -->
            </div> <!-- ./end div.row -->
          </div> <!-- ./end div.col-md-11 -->
        </div> <!-- ./end div.row -->
      </div> <!-- ./end div.container-fluid -->
    </section> <!-- ./end section.info -->
    <!-- Script Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>