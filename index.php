<?include_once("config.php");?>
<html>
<head lang="es">
<meta charset="UTF-8">
  <title>Esneyder-Desarrollo MongoDB</title>
  <link rel="stylesheet" href="css/pragma.min.css">
  <nav class="navbar" data-pragma-navbar>
	<section class="brand">
		<a href="#">Esneyder</a>
	</section>

	<section class="text right">
	 
		Bienvenido <a href="#"> Esneyder</a>
	</section>
	<section class="divider right"></section>
	<section class="right">
		<ul class="nav">
		<?if(!loggedIn()):?>
			<li class="active"><a href="#">Inicio</a></li>
			<li class="divider"></li>
			<li><a href="join.php">Registrarme</a></li>
			<li class="divider"></li>
			<li><a href="login.php">Login</a></li>
     
			  <?else:?>
			  <li><a href="logout.php">Logout</a></li>
			  <?endif;?>
		</ul>
	</section>
</nav>
</head>
<body> 
<div class="row cols">
	<div class="xs-12 sm-6">
		<div class="thumbnail">
			<img src="img/office365.png" alt="thumb1"/>
			<div class="content">
				<h3>Contenido</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua. Ut enim ad minim veniam, 
					quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. 
				</p>
				<p class="text-right">
					<a href="#" class="button danger">Cancelar</a>
					<a href="#" class="button success">Aceptar</a> 
				</p>
			</div>
		</div>
	</div>
	<div class="xs-12 sm-6">
		<div class="thumbnail">
			<img src="img/css.png" alt="thumb1"/>
			<div class="content">
				<h3>Contenido</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua. Ut enim ad minim veniam, 
					quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. 
				</p>
				<p class="text-right">
					<a href="#" class="button danger">Cancelar</a>
					<a href="#" class="button success">Aceptar</a> 
				</p>
			</div>
		</div>
	</div>
</div>







<div class="carousel" data-pragma-lightbox data-pragma-carousel >
	<a href="img/css.png" class="thumbnail">
		<img src="img/css.png" alt="thumb"/>
	</a>
	<a href="img/mongodb.png" class="thumbnail">
		<img src="img/mongodb.png"  alt="thumb"/>
	</a>
	<a href="img/office3665.png" class="thumbnail">
		<img src="img/office3665.png" alt="thumb"/>
	</a>
	 
</div>
</body>
<script>
	$(selector).pragma("carousel").
</script>
<script src="js/pragma.min.js"></script>
<script src="js/carousel.min.js"></script>
</html>
