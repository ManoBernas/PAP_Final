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
	<!-- About Generic Start -->
	<div class="main-wrapper">

		<!-- Start blog Area -->
		<!-- Start blog Area -->
		<section class="blog-area section-gap" id="blog">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 pb-30 header-text">
						<h1>Projetos</h1>
					</div>
				</div>
				<div class="row">
                    @foreach ($projetos as $projeto)
                    <div class="single-blog col-lg-4 col-md-4 align-items-center">
                        <a href="/projetodt/{{ $projeto->id }}"><img class="f-img img-fluid mx-auto" src="/uploads/fotos/projetos/{{ $projeto->fotoProjetos[0]->designacao }}" alt=""></a>
						<h3>
                            {{  $projeto->designacao }}
						</h3>


					</div>
                    @endforeach


				</div>
			</div>
		</section>
@endsection
