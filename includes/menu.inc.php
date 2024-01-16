<ul>
			<li class="current_page_item"><a href="index.php">Inicio</a></li>
			<!--<li><a href="register.php">Register</a></li>-->
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Terminar Sessão</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Registo</a></li>';
					}
			?>
			
			
			<li class="last"><a href="contact.php">Contacto</a></li>
			<li class="last"><a href="aboutus.php">Sobre Nós</a></li>
			
			
</ul>