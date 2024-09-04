
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
					<li class="aktivní"><a href="/" >Domů</a></li>
					<li><a href="index.php?stranka=omne">O mně</a></li>
					<li><a href="#">Reference</a></li>
					<li><a href="#">Ceník</a></li>
					<li><a href="index.php?stranka=kontakt">Kontakt</a></li>
				</ul>
			</nav>			
		</header>
	<article>
		
		
				<?php		
					
					if (isset($_GET['stranka'])) {
    				$stranka = $_GET['stranka'];
					} else {
   					$stranka = 'domu'; 
					}

					if (preg_match('/^[a-z0-9]+$/', $stranka)) {
   					$filepath = 'templates/' . $stranka . '.php';
    				if (file_exists($filepath)) {
       				$vlozeno = include($filepath);
    				} else {
       				 echo 'Podstránka nenalezena';
    				}
					} else {
    				echo 'Neplatný parametr';
					}


					
				?>
			
	</article>
	<footer>
		Vytvořil &copy; M.H. 2024 pro <a href="#">MRúčetní</a>
	</footer>
</body>

</html>
