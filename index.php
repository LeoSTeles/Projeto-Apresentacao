<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Leonardo M. A. S. Teles</title>
	<meta charset="utf-8">
	<link href="<?php echo INCLUDE_PATH; ?>Style/css/all.css" rel="stylesheet"> <!--load all styles -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>Style/style.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
</head>
<body>
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] :  'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre"/>';
				break;

			case 'servicos':
				echo '<target target="servicos"/>';
				break;
			
		}
	?>
	<header>
		<div class="center">
			<div class="logo left"><a href="">Logomarca</a></div><!--Logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav> 
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--Clear-->
		</div><!-- Center-->
		<div class="clear"></div>
	</header>
	<?php
		if(file_exists('Pages/'.$url.'.php')){
			include('Pages/'.$url.'.php');
		}else{
			//Pode fazer o que quiser pois a página não existe.//
			if ($url != 'sobre' && $url != 'servicos') {
				$pagina404 = true;
				include('Pages/404.php');
			}else{
				include('Pages/home.php');
			}

		}
	?>
	<footer <?php if(isset($pagina404) && $pagina404 == true){echo 'class = "fixed"';}?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--Center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<?php
		if($url == 'contato'){
	?>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<?php }?>
</body>
</html>