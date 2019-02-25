<?php
$current = "contact";
$title = "Contact";
?>
<?php include_once('_inc/header.php');  ?>
<div id="content_form">
  <div>
    <h2>Contact</h2>
    <h3>Détails</h3>
    <a href="#">contact@becycle.fr</a>
    <p>02 32 00 00 99</p>
    <h3>Suivez-nous</h3>
    <ul>
      <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
      <li><a href="#"><span class="fab fa-twitter"></span></a></li>
      <li><a href="#"><span class="fab fa-instagram"></span></a></li>
    </ul>
  </div>
  <form id="form" action="" method="post">
    <h2>Une question ?</h2>
    <fieldset>
      <input placeholder="Nom" type="text" tabindex="1" required >
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Sujet" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Message" tabindex="4" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>

</div>
<?php include_once('_inc/footer.php')  ?>
