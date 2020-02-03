@extends('authhome.layouts.master')

@section('title')
About
@endsection

@section('content')


	{{--  <!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(frontend/images/heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">
			About
		</h2>
	</section>  --}}

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="frontend/images/logo-4.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Our story
					</h3>

					<p class="p-b-28">
						Platinum Gadget is a our web marketplace project. We make this website to complete our internship at PT. OTAK KANAN. This website contains about gadget marketplace which sells a variety of gadgets such as: smartphones, laptops, tablets, headsets, consoles, camera, etc.
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
						</p>

						<span class="s-text7">
							- Steve Job’s
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
