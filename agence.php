<?php
  session_start();
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];
  $_SESSION['civilite'] = $_POST['civilite'];
  $_SESSION['voyageExcursion'] = $_POST['voyageExcursion'];

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="css/style.css" />
     <title>formulaire</title>
   </head>
   <body>
     <video autoplay loop poster="img/LosRoques.jpg" id="bgvid">
         <source src="video/LosRoques.webm" type="video/webm">
         <source src="video/LosRoques.mp4" type="video/mp4">
     </video>

     <div id="global">
       <h1>Bienvenue sur Fly</h1>
           <p>
             Veuillez remplir le formulaire afin de choisir le meilleur voyage pour vous.
           </p>
      <!-- choix voyage ou excursion -->

      <div class="titre">
          <h3>Etape 2 sur 3</h3><br>
      </div>
    <?php

      if ($_POST['voyageExcursion'] == "voyage") {
        echo '<form class="form2" action="recapitulatif.php" method="post">';
          echo 'Choix voyage ';
          echo '<select name="lesVoyages">';
            echo '<option value="1">Les Caraïbes - super - 2500 € par pers</option>';
            echo '<option value="2">L\'Asie du sud-est - génial - 3000 € par pers</option>';
            echo '<option value="3">Les Etats-Unis - trop fort - 3500 € par pers</option>';
          echo '</select><br>';
          echo 'Nombres de personnes :<input type="number" name="nombrePers" area-required="true" required="required" min="1" max="150" value="1"/><br>';
          echo '<input class="inpEstim" type="submit" value="Estimation"/>';
        echo '</form>';
      } else {
      echo '<form class="form2" action="recapitulatif.php" method="post">';
        echo 'Choix excursion ';
        echo'<select name="lesExcursions">';
          echo '<option value="4">Visite Acropole - 250 € par pers</option>';
          echo '<option value="5">Visite Vallée du Nil - 300 € par pers</option>';
          echo '<option value="6">Découverte Capadoce - 350 € par pers</option>';
        echo '</select><br>';
        echo 'Nombres de personnes :<input type="number" name="nombrePers" area-required="true" required="required" min="1" max="150" value="1"/><br>';
        echo '<input class="inpEstim" type="submit" value="Estimation"/>';
      echo '</form>';
      }


    ?>
      <!-- end choix voyage ou excursion -->
</div>
  </body>
</html>
