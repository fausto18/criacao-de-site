<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title" align="center">Bem Vindo a Comunidade Girassol
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo '';
								}
							?>
							</h1>
							<div class="entry">
								<p> 
								</p>		
								
								<object width="550" height="400">
								<!--<param name="movie" value="somefilename.swf">-->
								<embed src="../Book_store/IMG.jpg" width="550" height="400">
								</embed>
								</object>
								<br>A comunidade Girassol é uma associação de jovens que apostam na filantropia, visando o bem estar social a empatia, a compaixão Principalmente o amor ao próximo e  desenvolvimento pessoal e intelectual dos jovens
A comunidade Girassol foi criada essencialmente para ajudar a sociedade, pessoas carentes de bens de primeira necessidade e não só, vamos além, estamos aqui também para pessoas com necessidades de aprendizado e carência de informação e formação, somos uma associação aberta para todos que têm interesse em aprender, ensinar e ajudar.
 Acreditamos que a educação é a chave do progresso, se educarmos e instruirmos a nossa população poderemos combater a fome…
<br>
								
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
