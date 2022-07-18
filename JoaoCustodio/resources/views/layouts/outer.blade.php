<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>João Custódio</title>

	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">  -->
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="/assets/css/linearicons.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="/assets/css/nice-select.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.css">
	<link rel='stylesheet' href='/assets/css/simplelightbox.min.css'>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/main.css">

</head>

<body>
	<!-- Start Header Area -->
	<header class="default-header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center">
					<div class="logo vertical-center">
						<a href="#home"><img src="/assets/img/logo.png" alt=""></a>
					</div>
					<div class="main-menubar d-flex align-items-center">
						<nav class="hide">
							<a href="#home">Início</a>
							<a href="#about">Sobre Mim</a>
							<a href="#gallery">Projetos</a>
							<a href="#portfolio">Portfólio</a>
							{{-- <a href="#contact">Serviços</a>
							<a href="generic.html">Encomendas</a> --}}
							<a href="#contact">Contacto</a>

						</nav>
						<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
					</div>
				</div>
			</div>
		</div>
	</header>
    @yield("content")
	<!-- End Header Area -->
	<!-- start banner Area -->
	{{-- <section class="banner-area relative" id="home">
		<div class="slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<!-- Slide One - Set the background image for this slide in the line below -->
					<div class="carousel-item active" style="background-image: url('img/slider1.jpg')">
						<div class="carousel-caption d-md-block">
							<h2 class="text-uppercase">João Custódio</h2>
							<p>
								"Photography is to place head, heart and eye along the same line of sight" <br> Henri
								Cartier Bresson
							</p>
						</div>
					</div>
					<!-- Slide Two - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('img/slider2.jpg')">
						<div class="carousel-caption d-md-block">
							<h2 class="text-uppercase">João Custódio</h2>
							<p>
								"In photography there are no shadows that cannot be illuminated"<br> August Sander
							</p>
						</div>
					</div>
					<!-- Slide Three - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('img/slider3.jpg')">
						<div class="carousel-caption d-md-block">
							<h2 class="text-uppercase">João Custódio</h2>
							<p>
								"A photograph can be an instant of life captured for eternity" <br> Brigitte Bardot
							</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section> --}}
	<!-- End banner Area -->

	<!-- Start About Area -->
	{{-- <section class="About-area section-gap" id="about">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 about-left">
					<img class="img-fluid" src="img/about-img.jpg" alt="">
				</div>
				<div class="col-lg-6 about-right">
					<h1>
						João Custódio<br>

					</h1>
					<p>
						João Custódio é um jovem fotografo por paixão, proviniente das Caldas da Rainha, Leiria, João
						começou a tirar foto como Hobby, acabando por querer mudar de curso de universidade para
						fotografia.
						Com 23 anos já fez trabalhos para eventos, escolas, casamentos, etc...
					</p>
					<button href="/sobre.html" class="submit-btn primary-btn mt-20 text-uppercase ">Mais sobre mim!<span
							class="lnr lnr-arrow-right"></span></button>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End About Area -->

	<!-- Start gallery Area -->
	{{-- <section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1 class="text-white">Portfólio</h1>
					<!--tipo projeto, nome projeto... -->
					<!--www.nunoconceicao.com(Verificar)-->
				</div>
			</div>
			<div class="gal">
				<a href="/assets/img/p1.jpg"><img src="/assets/img/p1.jpg" alt=""></a>
				<a href="/assets/img/p2.jpg"><img src="/assets/img/p2.jpg" alt=""></a>
				<a href="/assets/img/p3.jpg"><img src="/assets/img/p3.jpg" alt=""></a>
				<a href="/assets/img/p4.jpg"><img src="/assets/img/p4.jpg" alt=""></a>
				<!-- <p>Carros</p> -->
				<a href="/assets/img/p5.jpg"><img src="/assets/img/p5.jpg" alt=""></a>
				<a href="/assets/img/p6.jpg"><img src="/assets/img/p6.jpg" alt=""></a>
				<a href="/assets/img/p7.jpg"><img src="/assets/img/p7.jpg" alt=""></a>
				<a href="/assets/img/p8.jpg"><img src="/assets/img/p8.jpg" alt=""></a>
				<!-- <p>Desporto</p>
				<a href="img/p9.jpg"><img src="img/p9.jpg" alt=""></a>
				<a href="img/p10.jpg"><img src="img/p10.jpg" alt=""></a>
				<a href="img/p11.jpg"><img src="img/p11.jpg" alt=""></a>
				<a href="img/p12.jpg"><img src="img/p12.jpg" alt=""></a>
				<h1>Natureza</h1>
				<a href="img/p13.jpg"><img src="img/p13.jpg" alt=""></a>
				<a href="img/p14.jpg"><img src="img/p14.jpg" alt=""></a>
				<a href="img/p15.jpg"><img src="img/p15.jpg" alt=""></a>
				<a href="img/p16.jpg"><img src="img/p16.jpg" alt=""></a> -->
				<button class="submit-btn primary-btn mt-20 text-uppercase">Ver Portfólio!<span
					class="lnr lnr-arrow-right" ></span></button>
			</div>
		</div>
	</section> --}}
	<!-- End Gallery Area -->

	<!-- Start blog Area -->
	{{-- <section class="blog-area section-gap" id="blog">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1>Portfólio</h1>
					<h3>Categorias</h3>
					<!--Categoria, Criar SubMenu para as categorias-->

				</div>
			</div>
			<div class="row">
				<div class="single-blog col-lg-4 col-md-4 align-items-center">

					<img class="f-img img-fluid mx-auto" src="/assets/img/b1.jpg" alt="">
					<h3>
						<a href="">Carros</a>
					</h3>


				</div>
				<div class="single-blog col-lg-4 col-md-4">
					<img class="f-img img-fluid mx-auto" src="/assets/img/b2.jpg" alt="">
					<h3>
						<a href="#">Motas</a>
					</h3>

				</div>
				<div class="single-blog col-lg-4 col-md-4">
					<img class="f-img img-fluid mx-auto" src="/assets/img/b3.jpg" alt="">
					<h3>
						<a href="#">Pessoas</a>
					</h3>

				</div>
			</div>
		</div>
	</section> --}}
	<!-- end blog Area -->

	<!-- Start contact Area -->
	{{-- <section class="contact-area" id="contact">
		<div class="container-fluid">
			<div class="row d-flex justify-content-end align-items-center">
				<div class="col-lg-5 col-md-12 contact-left no-padding">
					<img class="img-fluid" src="/assets/img/about2-img.jpg" alt="">
				</div>
				<div class="col-lg-7 col-md-12 contact-right no-padding">
					<h1>Contacte-me</h1>
					<p>
						Se tiver alguma questão não hesite em contactar!
					</p>
					<form class="booking-form" id="myForm" action="contact.php">
						<div class="row">
							<div class="col-lg-12 d-flex flex-column">
								<input name="name" placeholder="Digite o seu Nome" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your name'" class="form-control mt-20" required=""
									type="text" required>
							</div>
							<div class="col-lg-12 d-flex flex-column">
								<input name="email" placeholder="Digite o seu Email"
									pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
									class="common-input mt-10" required="" type="email">
							</div>
							<div class="col-lg-12 flex-column">
								<textarea class="form-control mt-20" name="message" placeholder="Mensagem"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
									required=""></textarea>
							</div>

							<div class="col-lg-12 d-flex justify-content-end send-btn">
								<button class="submit-btn primary-btn mt-20 text-uppercase ">Envie questão<span
										class="lnr lnr-arrow-right"></span></button>
							</div>

							<div class="alert-msg"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</section> --}}
	<!-- End contact Area -->

	<!-- start footer Area -->
	<footer class="footer-area">
		<div class="container">
			<div class="row footer-bottom d-flex justify-content-between">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
					made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
						target="_blank">Colorlib</a>
				</p>

				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="https://www.facebook.com/joao.custodio.9615"><i class="fa fa-facebook"></i></a>
					<a href="https://www.twitter.com/joaotcustodio"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/joaotcustodio/"><i class="fa fa-instagram"></i></a>
					<a href="mailto:jotamotoqueiro@gmail.com"><i class="fa fa-envelope-o"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="/assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
	<script src="/assets/js/vendor/bootstrap.min.js"></script>
	<script src="/assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/jquery.nice-select.min.js"></script>
	<script src="/assets/js/jquery.sticky.js"></script>
	<script src="/assets/js/parallax.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="/assets/js/simple-lightbox.min.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>
