@extends('layouts.app')

@section('content')
		<!-- header-end -->
		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-245 pb-245 " style="background-image:url(img/bg/bg9.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-wrapper text-center">
							<div class="breadcrumb-text">
								<h1>Resources</h1>
							</div>
							<div class="breadcrumb-menu mt-20">
								<ul>
									<li><a href="{{url('/')}}">home</a></li>
									<li><span>Resources</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area-start -->
		<!-- case-details-area-start -->
		<div class="case-details-area pt-110 pb-60">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8">
						<div class="case-details-wrapper">
							<div class="case-details-img">
								<img src="img/project/large/project5.jpg" alt="" />
							</div>
							<div class="case-details-text portfolio-desc">
								<h3>Consulting</h3>
								<p>Smart Mortgages UK where you'll find remortgage advice from a leading online mortgage and insurance broker. We compare the whole of the market to find you the right remortgage.</p>

								<p>Get in touch using the buttons below and let one of our mortgage specialist call you to discuss your remortgage options.</p>
								
								<div class="row">
									<div class="col-md-6">
										<div class="lg-port mb-30">
											<img src="img/project/large/project1.jpg" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="lg-port mb-30">
											<img src="img/project/large/project2.jpg" alt="">
										</div>
									</div>
								</div>
								<p>JMM Financial t/a Smart Mortgages UK is an appointed representative of HL Partnership Limited, which is authorised and regulated by the Financial Conduct Authority.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 mb-30">
						<div class="widget mb-60">
							<div class="widget-heading">
								<h2><i class="fas fa-chess-board"></i> Resources Catergory</h2>
							</div>
							<ul class="service-details-menu">
								@foreach($resource as $resource)
									<li><a href="{{url('resource/' .$resource->url)}}"><i class="fas fa-long-arrow-alt-right"></i>{{$resource->name}}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="widget theme-bg">
							<div class="service-details-left">
								<div class="service-left-text">
									<h3>Do you have any Question?</h3>
									<p>Get in touch with us now</p>
									<form method="post" action="{{url('/get-a-quote')}}">
									@csrf
									<input type="hidden" name="type" value="all">
									<button class="btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									</button>
							</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- case-details-area-end -->
		<!-- experience-area-start -->
		<div class="experience-area yellow-bg pt-50 pb-30">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-9 col-md-8">
						<div class="experience-text mb-20">
							<h2>Need to speak with experts?</h2>
						</div>
					</div>
					<div class="col-xl-4 col-lg-3 col-md-4">
						<div class="experience-button text-md-right mb-20">
							<form method="post" action="{{url('/get-a-quote')}}">
									@csrf
									<input type="hidden" name="type" value="all">
									<button class="btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- experience-area-end -->
		@endsection