@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="main-video-container">
			<video autoplay muted loop id="myVideo">
				<source src="video/video_interia.mp4" type="video/mp4">
			</video>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<h2 class="title first-title">
				<span> "DISEÑAMOS ESPACIOS NOVEDOSOS E INTELIGENTES CON EL PROPÓSITO DE SOLUCIONAR TAREAS COTIDIANAS "</span>
			</h2>
		</div>

		<div class="col-xs-12 col-md-6">
			<div class="about-us-carousel">
				<div class="item"><img src="images/nosotros01.png" alt="imagen 01"> </div>
				<div class="item"><img src="images/nosotros02.png" alt="imagen 02"> </div>
			</div>
		</div>

		<div class="col-xs-12 col-md-6">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil necessitatibus, dolore nesciunt non sit minus sint! Nisi vero necessitatibus minus reiciendis ad corrupti, voluptatum nesciunt officia ut quos laudantium nam!
			</p>
		</div>

		<div class="col-xs-12 col-md-12">
			
			<h2 class="title">
				<span> PROYECTOS </span>
			</h2>

		</div>

		<div class="col-xs-12 col-md-12">
			
			<h2 class="title">
				<span> INTEGRACIÓN DE TECNOLOGÍAS EN ALIANZA CON: </span>
			</h2>

			<ul class="brands">
				<li><a href="#samsung"><img src="images/samsung.svg" alt="samsung"></a></li>
				<li><a href="#google"><img src="images/google.svg" alt="google"></a></li>
				<li><a href="#phillips"><img src="images/phillips.svg" alt="phillips"></a></li>
			</ul>

		</div>



		<div class="col-xs-12 col-md-12">
			
			<h2 class="title">
				<span> CONTACTO </span>
			</h2>

		</div>

		<div class="col-xs-12 col-md-6">
			<img class="cien" src="images/ubicacion.png" alt="ubicacion interia studio">
		</div>
		<div class="col-xs-12 col-md-6">
			<form action="" id="contactForm" method="post">
				<div class="form-group">
					<input type="text" name="" placeholder="Nombre" class="form-control" data-validate="required">
				</div>
				<div class="form-group">
					<input type="text" name="" placeholder="Correo" class="form-control" data-validate="required">
				</div>
				<div class="form-group">
					<input type="text" name="" placeholder="Teléfono" class="form-control" data-validate="required">
				</div>
				<div class="form-group">
					<textarea name="mensaje" class="form-control" placeholder="Mensaje" id="" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary submit-btn" value="Enviar">
				</div>

			</form>
		</div>

	</div>
</div>
@stop