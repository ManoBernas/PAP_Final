@extends('layouts.outer')

@section('content')
    <!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<!-- Slide One - Set the background image for this slide in the line below -->
					<div class="carousel-item active" style="background-image: url('assets/img/slider1.jpg')">
						<div class="carousel-caption d-md-block">
							<h2 class="text-uppercase">João Custódio</h2>
							<p>
								"Photography is to place head, heart and eye along the same line of sight" <br> Henri
								Cartier Bresson
							</p>
						</div>
					</div>
					<!-- Slide Two - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('assets/img/slider2.jpg')">
						<div class="carousel-caption d-md-block">
							<h2 class="text-uppercase">João Custódio</h2>
							<p>
								"In photography there are no shadows that cannot be illuminated"<br> August Sander
							</p>
						</div>
					</div>
					<!-- Slide Three - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('assets/img/slider3.jpg')">
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
	</section>
	<!-- End banner Area -->

	<!-- Start About Area -->
	<section class="About-area section-gap" id="about">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 about-left">
					<img class="img-fluid" src="assets/img/about-img.jpg" alt="">
				</div>
				<div class="col-lg-6 about-right">
					<h1>
						João Custódio<br>

					</h1>
					<p>
						João Custódio é um jovem fotografo por paixão, proviniente das Caldas da Rainha, Leiria, João
						começou a tirar fotos como Hobby, acabando por querer mudar de curso de universidade para
						fotografia.
						Com 23 anos já fez trabalhos para eventos, escolas, casamentos, etc...
					</p>
					{{-- <button href="/sobre.html" class="submit-btn primary-btn mt-20 text-uppercase ">Mais sobre mim!<span
							class="lnr lnr-arrow-right"></span></button> --}}
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start gallery Area -->
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1 class="text-white">Projetos</h1>
					<!--tipo projeto, nome projeto... -->
					<!--www.nunoconceicao.com(Verificar)-->
				</div>
			</div>
			<div class="gal">
                <a href="assets/img/p1.jpg"><img src="assets/img/p1.jpg" alt=""></a>
				<a href="assets/img/p2.jpg"><img src="assets/img/p2.jpg" alt=""></a>
				<a href="assets/img/p3.jpg"><img src="assets/img/p3.jpg" alt=""></a>
				<a href="assets/img/p4.jpg"><img src="assets/img/p4.jpg" alt=""></a>

				<a href="assets/img/p5.jpg"><img src="assets/img/p5.jpg" alt=""></a>
				<a href="assets/img/p6.jpg"><img src="assets/img/p6.jpg" alt=""></a>
				<a href="assets/img/p7.jpg"><img src="assets/img/p7.jpg" alt=""></a>
				<a href="assets/img/p8.jpg"><img src="assets/img/p8.jpg" alt=""></a>
                <a href="/f_projetos">
				<button class="submit-btn primary-btn mt-20 text-uppercase">Ver Portfólio!<span
					class="lnr lnr-arrow-right" ></span></button>
                </a>
                {{-- @foreach ($projetos as $projeto)
                <h1 style="color:#fff">{{ $projeto->designacao }}</h1>
                @foreach ($projeto->fotoProjetos as $foto)

				<a href="{{ asset('/uploads/fotos/projetos/'.$foto->designacao) }}">
                    <img src="{{ asset('/uploads/fotos/projetos/'.$foto->designacao) }}" alt="">
                </a>
                @endforeach
                @endforeach


			</div>
            <a href="/f_projetos">
				<button class="submit-btn primary-btn mt-20 text-uppercase">Ver Projetos!<span
					class="lnr lnr-arrow-right" ></span>
                </button>
                </a> --}}
		</div>
	</section>
	<!-- End Gallery Area -->

	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="portfolio">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1>Portfólio</h1>
					<h3>Categorias</h3>
					<!--Categoria, Criar SubMenu para as categorias-->

				</div>
			</div>
			<div class="row">

                @foreach ($categorias as $categoria)
                <div class="single-blog col-lg-4 col-md-4 align-items-center">
                    <a href="/show/{{ $categoria->id }}"><img class="f-img img-fluid mx-auto" src="{{ asset("uploads/fotos/". $categoria->fotos[0]->designacao) }}" alt="" ></a>
					<h3>
						{{ $categoria->designacao }}
					</h3>
				</div>
                @endforeach

			</div>
		</div>
	</section>
	<!-- end blog Area -->

	<!-- Start contact Area -->
	<section class="contact-area" id="contact">
		<div class="container-fluid">
			<div class="row d-flex justify-content-end align-items-center">
				<div class="col-lg-5 col-md-12 contact-left no-padding">
					<img class="img-fluid" src="assets/img/about2-img.jpg" alt="">
				</div>
				<div class="col-lg-7 col-md-12 contact-right no-padding">
					<h1>Contacte-me</h1>

                    <div class="row">
                        <div class="col-md-12">
                            @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endif
                        </div>
                    </div>

					<p>
						Se tiver alguma questão não hesite em contactar!
					</p>
					<form class="booking-form" id="myForm" method="POST" action="/contacto">
                        @csrf
						<div class="row">
							<div class="col-lg-12 d-flex flex-column">
								<input name="name" placeholder="Digite o seu Nome" style="color: black" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your name'" class="form-control mt-20" required=""
									type="text" required>
							</div>
							<div class="col-lg-12 d-flex flex-column">
								<input name="email" placeholder="Digite o seu Email" style="color: black"
									pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
									class="common-input mt-10" required="" type="email">
							</div>
							<div class="col-lg-12 flex-column">
								<textarea class="form-control mt-20" name="message" placeholder="Mensagem" style="color: black"
									required=""></textarea>
							</div>

							<div class="col-lg-12 d-flex justify-content-end send-btn">
								<button type="submit" class="submit-btn primary-btn mt-20 text-uppercase ">Envie questão<span
										class="lnr lnr-arrow-right"></span></button>
							</div>

							<div class="alert-msg"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- End contact Area -->

@endsection
