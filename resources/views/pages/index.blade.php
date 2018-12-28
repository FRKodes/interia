@extends('app')

@section('content')
<div class="container-fluid" id="inicio">
	<div class="row">
		<div class="main-video-container">
			<video playsinline autoplay muted loop id="myVideo">
				<source src="video/video_interia.mp4" type="video/mp4">
			</video>
		</div>
	</div>
	<div class="row"><div id="acerca-de"></div></div>
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
			<p class="about-us-text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil necessitatibus, dolore nesciunt non sit minus sint! Nisi vero necessitatibus minus reiciendis ad corrupti, voluptatum nesciunt officia ut quos laudantium nam!
			</p>
		</div>

		<div class="col-xs-12 col-md-12" id="proyectos">
			
			<h2 class="title">
				<span> PROYECTOS </span>
			</h2>

			<div class="tabs">
			  <div class="tab-button-outer">
			    <ul id="tab-button">
			      <li><a href="#tab01">COYOACÁN, CDMX</a></li>
			      <li><a href="#tab02">EL MADRIGAL, JAL.</a></li>
			      <li><a href="#tab03">EL PALOMAR, JAL.</a></li>
			      <li><a href="#tab04">SAN NICOLÁS, NL.</a></li>
			      <li><a href="#tab05">VALLE IMPERIAL, JAL.</a></li>
			      <li><a href="#tab06">VALLE REAL, JAL.</a></li>
			    </ul>
			  </div>
			  <div class="tab-select-outer">
			    <select id="tab-select">
			      <option value="#tab01">COYOACÁN, CDMX</option>
			      <option value="#tab02">EL MADRIGAL, JAL.</option>
			      <option value="#tab03">EL PALOMAR, JAL.</option>
			      <option value="#tab04">SAN NICOLÁS, NL.</option>
			      <option value="#tab05">VALLE IMPERIAL, JAL.</option>
			      <option value="#tab06">VALLE REAL, JAL.</option>
			    </select>
			  </div>

			  <div id="tab01" class="tab-contents">
			    <div class="coyoacan-container">
			    	<div class="item"><img src="images/coyoacan/coyoacan01.png" alt="proyecto interia coyoacan imagen 01"></div>
			    	<div class="item"><img src="images/coyoacan/coyoacan02.png" alt="proyecto interia coyoacan imagen 02"></div>
			    	<div class="item"><img src="images/coyoacan/coyoacan03.png" alt="proyecto interia coyoacan imagen 03"></div>
			    	<div class="item"><img src="images/coyoacan/coyoacan04.png" alt="proyecto interia coyoacan imagen 04"></div>
			    	<div class="item"><img src="images/coyoacan/coyoacan05.png" alt="proyecto interia coyoacan imagen 05"></div>
			    	<div class="item"><img src="images/coyoacan/coyoacan06.png" alt="proyecto interia coyoacan imagen 06"></div>
			    </div>	
			  </div>
			  
			  <div id="tab02" class="tab-contents">
				<div class="el-madrigal-container">
			    	<div class="item"><img src="images/el_madrigal/elmadrigal01.png" alt="proyecto interia el madrigal imagen 01"></div>
			    	<div class="item"><img src="images/el_madrigal/elmadrigal02.png" alt="proyecto interia el madrigal imagen 02"></div>
			    	<div class="item"><img src="images/el_madrigal/elmadrigal03.png" alt="proyecto interia el madrigal imagen 03"></div>
			    	<div class="item"><img src="images/el_madrigal/elmadrigal04.png" alt="proyecto interia el madrigal imagen 04"></div>
			    	<div class="item"><img src="images/el_madrigal/elmadrigal05.png" alt="proyecto interia el madrigal imagen 05"></div>
			    	<div class="item"><img src="images/el_madrigal/elmadrigal06.png" alt="proyecto interia el madrigal imagen 06"></div>
			    </div>
			  </div>
			  
			  <div id="tab03" class="tab-contents">
			    <div class="el-palomar-container">
			    	<div class="item"><img src="images/el_palomar/elpalomar01.png" alt="proyecto interia el palomar imagen 01"></div>
			    	<div class="item"><img src="images/el_palomar/elpalomar02.png" alt="proyecto interia el palomar imagen 02"></div>
			    	<div class="item"><img src="images/el_palomar/elpalomar03.png" alt="proyecto interia el palomar imagen 03"></div>
			    	<div class="item"><img src="images/el_palomar/elpalomar04.png" alt="proyecto interia el palomar imagen 04"></div>
			    	<div class="item"><img src="images/el_palomar/elpalomar05.png" alt="proyecto interia el palomar imagen 05"></div>
			    	<div class="item"><img src="images/el_palomar/elpalomar06.png" alt="proyecto interia el palomar imagen 06"></div>
			    </div>
			  </div>

			  <div id="tab04" class="tab-contents">
			    <div class="san-nicolas-container">
			    	<div class="item"><img src="images/san_nicolas/sannicolas01.png" alt="proyecto interia san nicolas imagen 01"></div>
			    	<div class="item"><img src="images/san_nicolas/sannicolas02.png" alt="proyecto interia san nicolas imagen 02"></div>
			    	<div class="item"><img src="images/san_nicolas/sannicolas03.png" alt="proyecto interia san nicolas imagen 03"></div>
			    	<div class="item"><img src="images/san_nicolas/sannicolas04.png" alt="proyecto interia san nicolas imagen 04"></div>
			    	<div class="item"><img src="images/san_nicolas/sannicolas05.png" alt="proyecto interia san nicolas imagen 05"></div>
			    	<div class="item"><img src="images/san_nicolas/sannicolas06.png" alt="proyecto interia san nicolas imagen 06"></div>
			    	<div class="item"><img src="images/san_nicolas/sannicolas07.png" alt="proyecto interia san nicolas imagen 07"></div>
			    	<div class="item"><img src="images/san_nicolas/sannicolas08.png" alt="proyecto interia san nicolas imagen 08"></div>
			    </div>
			  </div>

			  <div id="tab05" class="tab-contents">
			  	<div class="valle-imperial-container">
					<div class="item"><img src="images/valle_imperial/valleimperial01.png" alt="proyecto interia valle_imperial imagen 01"></div>
					<div class="item"><img src="images/valle_imperial/valleimperial02.png" alt="proyecto interia valle_imperial imagen 02"></div>
					<div class="item"><img src="images/valle_imperial/valleimperial03.png" alt="proyecto interia valle_imperial imagen 03"></div>
			  	</div>
			  </div>

			  <div id="tab06" class="tab-contents">
			  	<div class="valle-real-container">
					<div class="item"><img src="images/valle_real/vallereal01.png" alt="proyecto interia valle real imagen 01"></div>
					<div class="item"><img src="images/valle_real/vallereal02.png" alt="proyecto interia valle real imagen 02"></div>
					<div class="item"><img src="images/valle_real/vallereal03.png" alt="proyecto interia valle real imagen 03"></div>
					<div class="item"><img src="images/valle_real/vallereal04.png" alt="proyecto interia valle real imagen 04"></div>
					<div class="item"><img src="images/valle_real/vallereal05.png" alt="proyecto interia valle real imagen 05"></div>
					<div class="item"><img src="images/valle_real/vallereal06.png" alt="proyecto interia valle real imagen 06"></div>
			  	</div>
			  </div>
			</div>

		</div>

		<div class="col-xs-12 col-md-12">
			
			<h2 class="title">
				<span> INTEGRACIÓN DE TECNOLOGÍAS EN ALIANZA CON: </span>
			</h2>

			<ul class="brands" id="contacto">
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
			<form action="/sendmail" id="contactForm" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group"><input type="text" name="nombre" placeholder="Nombre" class="form-control" data-validate="required"></div>
				<div class="form-group"><input type="text" name="email" placeholder="Correo" class="form-control" data-validate="required|email"></div>
				<div class="form-group"><input type="text" name="telefono" placeholder="Teléfono" class="form-control" data-validate="required"></div>
				<div class="form-group"><textarea name="mensaje" class="form-control" placeholder="Mensaje" id="mensaje" cols="30" rows="10"></textarea></div>
				<div class="form-group"><input type="submit" class="btn btn-primary submit-btn" value="Enviar"></div>
				<div class="sent_mail_alert">Tu mensaje se ha enviado con éxito, nos pondremos en contacto contigo a la brevedad.</div>
			</form>
		</div>

	</div>
</div>
@stop