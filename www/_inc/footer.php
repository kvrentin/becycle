	</main>
		<footer>
			<div id="footer-top">
				<div id="newsletter">
					<p>Inscrivez-vous à la newsletter</p>
					<form>
			      <input placeholder="Adresse email" type="email" tabindex="1" required >
						<?php echo file_get_contents("img/right-arrow.svg"); ?>
				  </form>
				</div>
				<ul class="footer-list">
					<li class="list">Actualité
						<ul class="sublist">
							<li><a href="<?php echo $route['france']; ?>">France</a></li>
							<li><a href="<?php echo $route['monde']; ?>">Monde</a></li>
							<li><a href="<?php echo $route['decret']; ?>">Décrets</a></li>
						</ul>
					</li>
					<li class="list">Sécurité
						<ul class="sublist">
							<li><a href="<?php echo $route['securite']; ?>">Rouler en sécurité</a></li>
							<li><a href="<?php echo $route['choix']; ?>">Bien choisir son vélo</a></li>
						</ul>
					</li>
					<li class="list list-abt"><a href="<?php echo $route['home']; ?>"><img src="img/logob.png"></a>
						<ul class="sublist">
							<li><a href="<?php echo $route['about']; ?>#about">A propos de nous</a></li>
							<li><a href="<?php echo $route['about']; ?>#service">Le service</a></li>
							<li><a href="<?php echo $route['about']; ?>#help">Et si on aidait la planète ?</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<hr>
			<div id="footer-bot">
				<p>© BeCycle - 2019</p>
				<ul>
					<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
					<li><a href="#"><span class="fab fa-twitter"></span></a></li>
					<li><a href="#"><span class="fab fa-instagram"></span></a></li>
				</ul>
			</div>
		</footer>
		<script src="script.js"></script>
	</body>
</html>
