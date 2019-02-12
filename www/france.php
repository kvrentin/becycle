<?php
$current = "france";
$title = "Le vélo en france";
$description = "Page de ".$title." de becycle";
?>
<?php include_once('_inc/header.php');  ?>
<div class="abt" id="france">
  <h2>Le vélo en France</h2>
  <?php echo file_get_contents("img/france.svg"); ?>
  <div id="stat">
    <div>
      <span class="counter">7600</span>
      <p> vélos vendus/jour</p>
    </div>
    <div>
      <span class="counter">1,278</span>
      <p>milliard de CA</p>
    </div>
    <div>
      <span class="counter">208</span>
      <p>kg de C02 économisé/an</p>
    </div>
    <p>
  </div>
</div>
<?php include_once('_inc/footer.php')  ?>
