<?php
  require('actions/users/loginAction.php');
?>
<?php
include 'includes/head.php';
?>


<form class="container mt-3" method="POST">

<?php 
if(isset($errorMsg)){
  echo '<P>'.$errorMsg.'</p>';
}
?>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Pseudo</label>
  <input type="text" class="form-control" name="pseudo">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
  <input type="password" class="form-control" name="password">
</div>

<button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
<a href="signup.php"><p class="mt-3">Je n'ai pas de compte, je m'inscris</p></a>

</form>
<?php
include 'includes/footer.php';
?>