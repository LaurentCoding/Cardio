<?php
require('actions/database.php');

if(isset($_POST['validate'])){

  if(!empty($_POST['pas']) && !empty($_POST['km']) && !empty($_POST['jour'])){

    $walk_pas = htmlspecialchars($_POST['pas']);
    $walk_km = htmlspecialchars($_POST['km']);
    $walk_jour = htmlspecialchars($_POST['jour']);
    $walk_id_author = $_SESSION['id'];
    $walk_pseudo_author = $_SESSION['pseudo'];

    $insertPasOnWebsite = $bdd->prepare('INSERT INTO pas(user_id, pseudo_user, pas, km, jour)VALUES(?,?,?,?,?)');
    $insertPasOnWebsite->execute(
      array(
          $walk_id_author, 
        $walk_pseudo_author, 
        $walk_pas, 
        $walk_km, 
        $walk_jour
      )
    );
    
    header('Location: index.php');

    $successMsg = "Publication réussi";
  }else{
    $errorMsg = "Veuillez compléter tous les champs";
  }
}