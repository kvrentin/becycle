<?php
$current = "monde";
$title = "Le vélo dans le monde";
$description = "Page de ".$title." de becycle";
?>
<?php include_once('_inc/header.php');  ?>

<div class="abt" id="france">
  <h2>Le vélo dans le monde</h2>
  <?php echo file_get_contents("img/world.svg"); ?>
</div>
<?php include_once('_inc/footer.php')  ?>
