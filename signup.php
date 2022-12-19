<?php
  require('actions/users/signupAction.php');
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
  <label for="exampleInputEmail1" class="form-label">Nom</label>
  <input type="text" class="form-control" name="lastname">
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Prénom</label>
  <input type="text" class="form-control" name="firstname">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
  <input type="password" class="form-control" name="password">
</div>


<button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
<a href="login.php"><p class="mt-3">J'ai déja un compte, je me connecte</p></a>
</form>


<?php
include 'includes/footer.php';
?>