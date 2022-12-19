<?php

require('actions/database.php');


if(isset($_POST['validate'])){

  if(!empty($_POST['pseudo']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password'])){

    $user_pseudo = htmlspecialchars($_POST['pseudo']);
    $user_firstname = htmlspecialchars($_POST['firstname']);
    $user_lastname = htmlspecialchars($_POST['lastname']);
    $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkUsesAlreadyExist = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
    $checkUsesAlreadyExist->execute(array($user_pseudo));

    if($checkUsesAlreadyExist->rowCount() == 0){

      $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, firstname, lastname, mdp) VALUES(?, ?, ?, ?)');
      $insertUserOnWebsite->execute(array($user_pseudo, $user_firstname, $user_lastname, $user_password));

      $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, lastname, firstname FROM users WHERE lastname= ? AND firstname = ? AND pseudo = ?');
      $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo));

      $usersInfos = $getInfosOfThisUserReq->fetch();

      $_SESSION['auth'] = true;
      $_SESSION['id'] = $usersInfos['id'];
      $_SESSION['lastname'] = $usersInfos['lastname'];
      $_SESSION['firstname'] = $usersInfos['firstanme'];
      $_SESSION['pseudo'] = $usersInfos['pseudo'];

      header('Location: ../index.php');

    }else{
      $errorMsg = "L'utilisateur existe déjà sur le site";
    }

  }else{
     $errorMsg="Veuillez remplir tous les champs...";
  }
}