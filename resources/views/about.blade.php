@extends('layouts.app')

@section('content')
		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-245 pb-245 " style="background-image:url(img/bg/bg9.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-wrapper text-center">
							<div class="breadcrumb-text">
							<h1>About Us</h1>
							</div>
							<div class="breadcrumb-menu mt-20">
								<ul>
									<li><a href="{{url('/')}}">home</a></li>
									<li><span>About Us</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- clients-say-area-end -->
		<!-- clients-area-start -->
		<div class="clients-area pt-110 pb-120">
			<div class="container">
				<div class="section-title text-center mb-50">
					<h1>Clients Say</h1>
					<p> We compare the whole of the market to find you the right remortgage.</p>
				</div>
				<div class="row">
					<div class="clients-active owl-carousel">
						
					</div>
				</div>
			</div>
		</div>
		<!-- clients-area-end -->		
		<!-- breadcrumb-area-start -->
		<!-- our-capabilities-area-start -->
		<div class="our-capabilities-area pt-120 pb-90">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 offset-xl-1 col-lg-5 col-md-12 mb-30">
						<div class="capabilities-img">
							<img src="img/bg/bg10.jpg" alt="">
							<div class="capabilities-icon">
								<a class="popup-video" href="#"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12">
						<div class="capabilities-wrapper">
							<div class="capabilities-text">
								<h3>Our Capabilities</h3>
									<p> Smart Mortgages UK where you'll find remortgage advice from a leading online mortgage and insurance broker. We compare the whole of the market to find you the right remortgage.</p>
									<p>Get in touch using the buttons below and let one of our mortgage specialist call you to discuss your remortgage options.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- our-capabilities-area-end -->
@endsection
	