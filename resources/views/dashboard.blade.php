<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
@livewireStyles
</head>
<body>
		<x-slot name="header">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('CEO: Jahir Celorio Malavé.') }}
			</h2>
		</x-slot>
<div class="super_container">

	<!-- Header -->
	
	<header class="header d-flex flex-row" style="position: relative; top: 0; width: 100%">
		
		<div class="header_content d-flex flex-row align-items-center">

			<!-- Logo -->
			<div class="logo_container">
				
				<div class="logo">
					<img src="#" alt="">
					<span>Sistema de Ventas</span>
				</div>
			</div>
			<span style="font-family: 'Staatliches', cursive; position: relative; top: 30px;left: -200px; font-size: 20px; color: rgb(255, 145, 0)">Restaurante</span>
			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
						<ul class="main_nav_list">
							<li class="main_nav_item"><a  href="{{url('Inicio')}}">Inicio</a></li>
							<li class="main_nav_item"><a target="_blank" href="{{url('DatosDueño')}}">Usuario</a></li>
							<li class="main_nav_item"><a target="_blank" href="{{url('DatosLocal')}}">Local</a></li>
							<li class="main_nav_item"><a target="_blank" href="{{url('Menu')}}">Menu</a></li>
							<li class="main_nav_item"><a target="_blank" href="{{url('Pedido')}}">Pedido</a></li>
						</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="{{asset('images/phone-call.svg')}}" alt="">
			<span>+593 0993854928</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background2.jpeg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">1 <span>2</span> Años Sirviendo</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background2.jpeg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Los Mejores <span>Platos</span> Aquí!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background2.jpeg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Gracias por <span>Preferirnos</span></h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{asset('images/earth-globe.svg')}}" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Somos Top 1</h2>
								<a href="courses.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{asset('images/books.svg')}}" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Comida Gourmet</h2>
								<a href="courses.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="{{asset('images/professor.svg')}}" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Chef</h2>
								<a href="teachers.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Platos Típicos</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="{{asset('images/course_1.jpg')}}" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Ceviche</a></div>
							<div class="card-text">El ceviche, también llamado cebiche o seviche, es un plato típico de la costa de Ecuador. Obviamente es muy popular en casi todos los países latinos y hay muchas versiones diferentes de ceviche.</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_name">Precio, <span>USD</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$10</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="{{asset('images/course_2.jpg')}}" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Bolón de Chicharron o Queso</a></div>
							<div class="card-text">Los primeros indicios del bolón de verde surgieron en Cuba, según historiadores internacionales. Allí es denominado como fufú de plátano, que es un riquísimo plato hecho básicamente de plátano machacado y mezclado con chicharrones de puerco.</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_name">Precio, <span>USD</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$5</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Encebollado</a></div>
							<div class="card-text">El encebollado es un caldo de pescado que contiene albacora, yuca, tomate, cebolla colorada, cilantro, ají en polvo, comino y otras especias. ​ Se acompaña con chifles, que se le añaden al momento de degustarlo. Es común que sea aderezado con gotas de limón verde y con ají.</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_name">Precio, <span>USD</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$6</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Datos del Local</h1>
							<p class="register_text">Estamos Ubicados en Manta, San Miguel Frente de la Ciudadela Universitaria tenemos franquicias en Quito, Ambato, Chone, Bahía de Caraquez, Proximamente Más. Nuestro Objetivo es Llegar muy Lejos.</p>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title" style="color: lightcoral">Datos del Dueño Local</h1>
							<p style="color: dimgrey" class="register_text">Nací en la Hermosa Ciudad de Manta, Mi Nombre es Milton José Arroyo Paredes, Tengo 25 Años, Casado con 2 Hijos Nunca pensé que mi sazón le gustara a medio Ecuador.</p>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Dominios</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('images/earth-globe.svg')}}" alt="">
					</div>
					<h3>Ranking</h3>
					<p>Actualmente somos el top 10 en el mundo.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('images/exam.svg')}}" alt="">
					</div>
					<h3>Atención Rápida</h3>
					<p>Recibiras una atención de calidad nuestro equipo esta capacitado para que tengas la mejor experiencia.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('images/books.svg')}}" alt="">
					</div>
					<h3>Comida Gourmet</h3>
					<p>Somos clasificados en Italia aparte de la comida manaba, tenemos platos de otros países el diseño y el arte es el talento de nosotros.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('images/professor.svg')}}" alt="">
					</div>
					<h3>Chef's Professionales</h3>
					<p>Tenemos a los mejores cocineros que harás que repitas tres veces.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('images/blackboard.svg')}}"" alt="">
					</div>
					<h3>Higiene</h3>
					<p>Tu salud es muy importante para nosotros, por eso contamos con una limpienza de punta usando formulas especiales.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('images/mortarboard.svg')}}" alt="">
					</div>
					<h3>Certificados</h3>
					<p>Tenemos certificados otorgados de Italia por ser platos únicos y deliciosos</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Testimonios</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">No lo pude creer lo recomiendo en lo personal quede facinado con los platos que nos brindan, mis hijos quedaron con ganas de volver a repetir otros platos, la atención es de punta.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="{{asset('images/testimonials_user.jpg')}}" alt="">
										</div>
										<div class="testimonial_name">Tómas Alfonso Loor Vera</div>
										<div class="testimonial_title">Cliente</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Sin palabras quede probé unos de los mejores platos de mi vida la sazón es muy buena lo recomiendo al 10 sin duda alguna.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="{{asset('images/testimonials_user2.jpeg')}}" alt="">
										</div>
										<div class="testimonial_name">Jahir Alexander Celorio Malavé</div>
										<div class="testimonial_title">Cliente</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Lo recomiendo tienen platos ecónomicos y muy ricos volvería de nuevo.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="{{asset('images/testimonials_user3.jpg')}}" alt="">
										</div>
										<div class="testimonial_name">Maria Madaglena Moreira Loor</div>
										<div class="testimonial_title">Cliente</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Calendario Festivo</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">24</div>
									<div class="event_month">Diciembre</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Combo Navideño</a></div>
									<div class="event_location">Costo: 100 USD (Hospedaje por Tres Días + Bebidas Especiales)</div>
									<p>Contamos con Pierna de Cerdo al Horno, Mixiote Navideño,Tamales,Lomo de Cerdo al Horno Navideño, Tradición Navideña: Romeritos con Camarón, Queso Relleno, Pozole Navideño, Pavo navideño ahumado de uva, Pavo glaseado con mandarina, Pierna Navideña Enchilada.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="{{asset('images/event_1.jpg')}}" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">31</div>
									<div class="event_month">Diciembre</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Combo Fin de Año</a></div>
									<div class="event_location">USD 200 (Hospedaje por 5 Días + Artista Exclusivos + Bebidas Especiales)</div>
									<p>Contamos con los siguientes platos Cabrito Guisado, Solomillo Wellington, Gambones a la Plancha, Ostras Naturales, Bacalao con pisto de verduras, Ceviche de caballa, Mejillones en salsa picante, Mousse de chocolate.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="{{asset('images/event_2.jpg')}}" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">28</div>
									<div class="event_month">Febrero</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Combo Carnavalero</a></div>
									<div class="event_location">USD 80 (Hospedaje por 2 Días con Piscina para Grandes y Pequeños + Eventos + Bebidas )</div>
									<p>Ceviche Mixto, Plato Arrecho, Plato Picante, Ceviche de Pescado, Ceviche Camarón, Plancha de Mariscos, Cócteles.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="{{asset('images/event_3.jpg')}}" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>	
					</div>
				</div>

			</div>
				
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Deja tu Duda, Recomendación o Queja.</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<textarea cols="35" rows="5" style="position: relative; left: 100px;"></textarea>
									<!--<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">-->
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" style="position: relative; left: 105px;" value="Submit">Enviar</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<span>Sistema de Ventas de Restaurante</span>
							</div>
						</div>

						<p class="footer_about_text">Será un Placer Atenderles con el Buen Ambiente de Nuestro Equipo de Trabajos y con las Mejores Ofertas para Ustedes.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="main_nav_item"><a href="{{url('Inicio')}}">Inicio</a></li>
								<li class="main_nav_item"><a target="_blank" href="{{url('DatosDueño')}}">Usuario</a></li>
								<li class="main_nav_item"><a target="_blank" href="{{url('DatosLocal')}}">Local</a></li>
								<li class="main_nav_item"><a target="_blank" href="{{url('Menu')}}">Menu</a></li>
								<li class="main_nav_item"><a target="_blank" href="{{url('Pedido')}}">Pedido</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Ayuda</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
								<li class="footer_list_item"><a href="#">Tuitions</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{asset('images/placeholder.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Manta, San Miguel 
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{asset('images/smartphone.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+593 0993854928
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{asset('images/envelope.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
									</div>mr1@outlook.hotmail.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rincón del Manaba <i class="fa fa-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
@livewireScripts
</body>
</html>
    
</x-app-layout>
