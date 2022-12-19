<?php

require('actions/pas/publierPasActions.php');
require('actions/users/securityAction.php');
include 'includes/head.php';
?>

<form class="container mt-3" method="POST">

<?php 
if(isset($errorMsg)){
  echo '<P>'.$errorMsg.'</p>';
}elseif(isset($successMsg)){
  echo '<P>'.$successMsg.'</p>';
}
?>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Pas</label>
  <input type="text" class="form-control" name="pas">
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Km</label>
  <input type="text" class="form-control" name="km">
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Jour</label>
  <input type="date" class="form-control" name="jour">
</div>

<button type="submit" class="btn btn-primary" name="validate">Valider</button>
</form>


<?php
include 'includes/footer.php';
?>