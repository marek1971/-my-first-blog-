
<!DOCTYPE html>
<html lang="cs-cz">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="static/css/mrstyle.css">
	<title>MR účetní</title>
</head>
<body>
		<header>
			<div id="logo">
				<h1>Markéta<span>Rabová</span></h1>
				<small>účetní služby</small>
			</div>
			
			<nav>
				<ul>
					<li class="aktivní"><a href="index.php?stranka=domu" >Domů</a></li>
					<li><a href="index.php?stranka=omne">O mně</a></li>
					<li><a href="#">Reference</a></li>
					<li><a href="#">Ceník</a></li>
					<li><a href="index.php?stranka=kontakt">Kontakt</a></li>
				</ul>
			</nav>			
		</header>
	<article>
		
		
				<?php
					
					require('/' . $_GET['stranka'] . '.php');
					if(isset($GET['stranka']))
						$stranka = $_GET['stranka'];
					else
						require('templates/' . $_GET['stranka'] . '.php');
					
						

					if (preg_match('/^[a-z0-9]+$/', $stranka)) {
						$vlozeno = include('templates/' . $stranka . '.php');
						if (!$vlozeno)
							echo('Podstránka nenalezena');
					}
					else
						echo('Neplatný parametr');

					
				?>
			
	</article>
	<footer>
		Vytvořil &copy; M.H. 2024 pro <a href="#">MRúčetní</a>
	</footer>
</body>

</html>
