<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title>Comunidad online de gente pro y (no se que mas)</title>
	<link rel="stylesheet" href="normalize.css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="estilos.css" />
	<link rel="stylesheet" href="responsive.css" />
</head>
<body>
	<header>
		<figure id="logo">
			<img src="logo.png" />
		</figure>
		<h1 id="titulo_header">Puls3: Comunidad de gente cool, atractiva y millonaria</h1>
		<figure id="avatar">
			<img src="avatar.jpg" />
			<figcaption>
				
			</figcaption>
		</figure>
	</header>
	<nav>
		<ul>
			<li id="flechita_nav"><a href="#"></a></li>
			<li><a href="#">Python</a></li>
			<li><a href="#">HTML5</a></li>
			<li><a href="#">Javascript</a></li>
			<li><a href="#">CSS3</a></li>
			<li><a href="#">Django</a></li>
			<li id="publicar_nav"><a href="#">Publicar</a></li>
		</ul>
	</nav>
	<aside id="bienvenida">
		<h2>Hola, registrate</h2>
		<p>Es importante registrarte porque LOL!</p>
		<a href="#" id="registro">Registrate ac&aacute;</a>
		<p id="mensaje_registro">En serio , registrate por favor</p>
		<video width="200" controls>
			<source src="video.webm" type="video/webm"/>
			<source src="video.mp4" type="video/mp4"/>
			<p>Su navegador es obsoleto</p> 
		</video>
	</aside>
	<section id="contenido">
	<?for($x =1; $x<=5; $x++){?>
		<article class="item">
			<figure class="imagen_item">
				<img src="imagen.jpg" />
			</figure>
			<h2 class="titulo_item">
				 <a href="#">Una mirada a Leap Motion: El control Minority Report</a> 

			</h2>
			<p class="autor_item">
				Por <a href="#">Freddy Vega</a>
			</p>
			<p class="datos_item">
				<a class="tag_item" href="#">hardware</a>
				<span class="fecha_item">Hace 5 min</span>
				<a class="comentarios_item" href="#">455</a>
				<a class="guardar_item" href="#"></a>
			</p>
			<p class="votacion">
				<a class="up" href="#"></a> 
				3141
				<a class="down" href="#"></a> 
			</p>
		</article>
		<? }?>
	</section>
	
	<footer>
		<p>Powered by Platzi!</p>
		<p>Mejorando.la 2013 ®</p>
	</footer>
</body>
</html>