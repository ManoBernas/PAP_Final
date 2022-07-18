@extends('layouts.outer')

@section('content')
<body>
	<!-- Start banner Area -->
	<section class="generic-banner relative">
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="/"><img src="img/logo.png" alt=""></a>
						</div>
						<div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="/">Home</a>
                                <a href="/#contact">Contact</a>
							</nav>
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</section>
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1 class="text-white">Passeio de Motas</h1>
					<!--tipo projeto, nome projeto... -->
					<!--www.nunoconceicao.com(Verificar)-->
				</div>
			</div>
			<div class="gal">
				<a href="/assets/img/b2.jpg"><img src="/assets/img/b2.jpg" alt=""></a>
				<a href="/assets/img/rz.jpg"><img src="/assets/img/rz.jpg" alt=""></a>
				<a href="/assets/img/pm1.jpg"><img src="/assets/img/pm1.jpg" alt=""></a>
				<a href="/assets/img/pm2.jpg"><img src="/assets/img/pm2.jpg" alt=""></a>
				<a href="/assets/img/m1.jpg"><img src="/assets/img/m1.jpg" alt=""></a>
				<a href="/assets/img/m2.jpg"><img src="/assets/img/m2.jpg" alt=""></a>
				<a href="/assets/img/m3.jpg"><img src="/assets/img/m3.jpg" alt=""></a>
				<a href="/assets/img/m4.jpg"><img src="/assets/img/m4.jpg" alt=""></a>
			</div>
		</div>
	</section>
@endsection
