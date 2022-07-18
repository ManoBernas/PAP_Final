@extends('layouts.outerp')

@section('content')
<body>
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1 class="text-white">{{ $categoria->designacao }}</h1>
					<!--tipo projeto, nome projeto... -->
					<!--www.nunoconceicao.com(Verificar)-->
				</div>
			</div>
			<div class="gal">

                @foreach ($categoria->fotos as $foto)
                <a href="{{ asset('/uploads/fotos/'.$foto->designacao) }}">
                    <img src="{{ asset('/uploads/fotos/'.$foto->designacao) }}" alt="">
                </a>
                @endforeach



	{{--
				<a href="/assets/img/lo2.jpg"><img src="/assets/img/lo2.jpg" alt=""></a>
				<a href="/assets/img/lo3.jpg"><img src="/assets/img/lo3.jpg" alt=""></a>
				<a href="/assets/img/lo4.jpg"><img src="/assets/img/lo4.jpg" alt=""></a>
			<a href="/assets/img/mk1.jpg"><img src="/assets/img/mk1.jpg" alt=""></a>
				<a href="/assets/img/mk2.jpg"><img src="/assets/img/mk2.jpg" alt=""></a>
				<a href="/assets/img/mk3.jpg"><img src="/assets/img/mk3.jpg" alt=""></a>
				<a href="/assets/img/mk4.jpg"><img src="/assets/img/mk4.jpg" alt=""></a>
				<a href="/assets/img/df1.jpg"><img src="/assets/img/df1.jpg" alt=""></a>
				<a href="/assets/img/df2.jpg"><img src="/assets/img/df2.jpg" alt=""></a>
				<a href="/assets/img/df3.jpg"><img src="/assets/img/df3.jpg" alt=""></a>
				<a href="/assets/img/df4.jpg"><img src="/assets/img/df4.jpg" alt=""></a>
				<a href="/assets/img/df5.jpg"><img src="/assets/img/df5.jpg" alt=""></a>
				<a href="/assets/img/p8.jpg"><img src="/assets/img/p8.jpg" alt=""></a>
				<a href="/assets/img/glf3.jpg"><img src="/assets/img/glf3.jpg" alt=""></a>
				<a href="/assets/img/golf.jpg"><img src="/assets/img/golf.jpg" alt=""></a>
				<a href="/assets/img/gt1.jpg"><img src="/assets/img/gt1.jpg" alt=""></a>
				<a href="/assets/img/gt2.jpg"><img src="/assets/img/gt2.jpg" alt=""></a>
				<a href="/assets/img/r1.jpg"><img src="/assets/img/r1.jpg" alt=""></a>
				<a href="/assets/img/r2.jpg"><img src="/assets/img/r2.jpg" alt=""></a>
				<a href="/assets/img/r3.jpg"><img src="/assets/img/r3.jpg" alt=""></a>
				<a href="/assets/img/r4.jpg"><img src="/assets/img/r4.jpg" alt=""></a>
				<a href="/assets/img/r5.jpg"><img src="/assets/img/r5.jpg" alt=""></a>
				<a href="/assets/img/r6.jpg"><img src="/assets/img/r6.jpg" alt=""></a>
				<a href="/assets/img/r7.jpg"><img src="/assets/img/r7.jpg" alt=""></a>
				<a href="/assets/img/r8.jpg"><img src="/assets/img/r8.jpg" alt=""></a>
				<a href="/assets/img/r9.jpg"><img src="/assets/img/r9.jpg" alt=""></a>
				<a href="/assets/img/r10.jpg"><img src="/assets/img/r10.jpg" alt=""></a> --}}
			</div>
		</div>
	</section>

@endsection
