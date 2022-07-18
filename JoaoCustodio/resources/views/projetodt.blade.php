@extends('layouts.outerp')

@section('content')
<body>
	<!-- Start banner Area -->
	{{-- <section class="generic-banner relative">
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
	</section> --}}
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1 class="text-white">{{ $projeto->designacao }}</h1>
					<!--tipo projeto, nome projeto... -->
					<!--www.nunoconceicao.com(Verificar)-->
				</div>
			</div>
			<div class="gal">
                @foreach ($projeto->fotoProjetos as $foto)
				<a href="/uploads/fotos/projetos/{{ $foto->designacao }}"><img src="/uploads/fotos/projetos/{{ $foto->designacao }}" alt=""></a>

                @endforeach
			</div>
		</div>
	</section>
@endsection
