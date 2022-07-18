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
							<a href="index.html"><img src="img/logo.png" alt=""></a>
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
					<h1 class="text-white">Projeto Rally</h1>
					<!--tipo projeto, nome projeto... -->
					<!--www.nunoconceicao.com(Verificar)-->
				</div>
			</div>
			<div class="gal">
				<a href="/assets/img/r1.jpg"><img src="/assets/img/r1.jpg" alt=""></a>
				<a href="/assets/img/r2.jpg"><img src="/assets/img/r2.jpg" alt=""></a>
				<a href="/assets/img/r3.jpg"><img src="/assets/img/r3.jpg" alt=""></a>
				<a href="/assets/img/r4.jpg"><img src="/assets/img/r4.jpg" alt=""></a>
				<!-- <p>Carros</p> -->
				<a href="/assets/img/r5.jpg"><img src="/assets/img/r5.jpg" alt=""></a>
				<a href="/assets/img/r6.jpg"><img src="/assets/img/r6.jpg" alt=""></a>
				<a href="/assets/img/r7.jpg"><img src="/assets/img/r7.jpg" alt=""></a>
				<a href="/assets/img/r8.jpg"><img src="/assets/img/r8.jpg" alt=""></a>
				<a href="/assets/img/r9.jpg"><img src="/assets/img/r9.jpg" alt=""></a>
			</div>
		</div>
	</section>
@endsection
