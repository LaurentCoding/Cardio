<?php
require('actions/pas/mesPasActions.php');
require('actions/users/securityAction.php');
include 'includes/head.php';
?>
<section class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">PAS</th>
      <th scope="col">KM</th>
      <th scope="col">JOUR</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimmer</th>
    </tr>
  </thead>
  <tbody>
    
<?php
while($pas = $getAllMyPas->fetch()){
  ?>
  <tr>
      <td><?php echo $pas['pas']; ?></td>
      <td><?php echo $pas['km']; ?></td>
      <td><?php echo $pas['jour']; ?></td>
    </tr>


  <?php
}
?>
  </tbody>
</table>
</section>
<?php
include 'includes/footer.php';
?>