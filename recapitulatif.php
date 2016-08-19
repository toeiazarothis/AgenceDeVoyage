<?php
  session_start();
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
          <div class="titre">
              <h3>Etape Finale</h3><br>
          </div>
    <?php
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $civ = $_SESSION['civilite'];
    $voyageExc = $_SESSION['voyageExcursion'];
    //$lesVoyages = $_POST['lesVoyages'];
    if(empty($_POST['lesVoyages'])){
      $lesVoyages = "";
    } else {
      $lesVoyages = $_POST['lesVoyages'];
    }
    //$lesExcursions = $_POST['lesExcursions'];
    if(empty($_POST['lesExcursions'])){
      $lesExcursions = "";
    } else {
      $lesExcursions = $_POST['lesExcursions'];
    }
    $nombrePers =$_POST['nombrePers'];

    if ($lesVoyages == 1) {
      $voyageExc = 'aux Caraïbes';
      $prix = '2500 €';
      $total = $nombrePers * $prix;
      $genre = 'un voyage';
    } else if ($lesVoyages == 2) {
      $voyageExc = 'en Asie du sud-est';
      $prix = '3000 €';
      $total = $nombrePers * $prix;
      $genre = 'un voyage';
    } else if ($lesVoyages == 3){
      $voyageExc = 'aux Etats-unis';
      $prix = '3500 €';
      $total = $nombrePers * $prix;
      $genre = 'un voyage';
    } else if ($lesExcursions == 4){
      $voyageExc = 'L\'Acropole';
      $prix = '250 €';
      $total = $nombrePers * $prix;
      $genre = 'une excursion';
    } else if ($lesExcursions == 5) {
      $voyageExc = 'La Vallée du Nil';
      $prix = '300 €';
      $total = $nombrePers * $prix;
      $genre = 'une excursion';
    } else if ($lesExcursions == 6){
      $voyageExc = 'La Capadoce';
      $prix = '350 €';
      $total = $nombrePers * $prix;
      $genre = 'une excursion';
    } else {
      $prix = 0;
    }

    echo '<div class="titreRecap">';
    echo '<h3>Résumé de votre demande</h3>';
    echo '</div>';
    echo '<div class="recap">';
    echo '<br>Bonjour, '.$civ.' '.$prenom.' '.$nom.'<br>';
    echo 'Vous avez choisi '.$genre.' <strong>'.$voyageExc.'</strong><br>';
    echo 'au prix de <strong>'.$prix.'</strong> par personne<br>';
    echo 'Vous nous avez indiqué '.$nombrePers.' personne(s)<br>';
    echo 'Le montant total est de <strong>'.$total.' €</strong><br>';
    echo '<p><a href="formulaire.php">Retour au formulaire</a></p>';
    echo '</div>';

    ?>

</div>
  </body>
</html>
