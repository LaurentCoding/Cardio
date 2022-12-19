<?php
require('actions/database.php');

  $getAllMyPas = $bdd->prepare('SELECT id, pas, km, jour FROM pas WHERE user_id = ?');
  $getAllMyPas->execute(array($_SESSION['id']));