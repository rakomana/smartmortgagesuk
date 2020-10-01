@extends('layouts.app')

@section('content')
		<div class="breadcrumb-area pt-200 pb-200 " style="background-image:url(img/bg/bg9.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-text text-center">
							<h1>Get Amazing <br> Deals</h1>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- project-area-start -->
	<div class="project-area gray-bg pt-115 pb-90">
			<div class="container">
				<div class="portfolio-menu text-center mb-45">
					<button class="active" data-filter="*">All</button>
					<button data-filter=".cat1">Mortgages</button>
					<button data-filter=".cat2">Secured Loans</button>
					<button data-filter=".cat3">Equity Release Mortgages</button>
					<button data-filter=".cat4">Remortgage Calculator</button>
					<button data-filter=".cat5">Insurance</button>
				</div>
				<div class="row grid">
				@foreach ($mortgages as $mortgage)
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 grid-item cat1">
							<div class="project-wrapper mb-30">
										<h4>
											<i class="fas fa-long-arrow-alt-right" style="color: #FBBA42;"></i>
											<a href="{{url('mortgages/' .$mortgage->url)}}">{{$mortgage->name}}</a>
										</h4>
							</div>
					</div>
					@endforeach
					@foreach ($loans as $loan)
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 grid-item cat2">
						<div class="project-wrapper mb-30">
									<h4>
										<i class="fas fa-long-arrow-alt-right" style="color: #FBBA42;"></i>
										<a href="{{url('secured-loan/' .$loan->url)}}">{{$loan->name}}</a>
									</h4>
						</div>
					</div>
					@endforeach
					@foreach ($equities as $equity)
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 grid-item cat3">
						<div class="project-wrapper mb-30">
									<h4>
										<i class="fas fa-long-arrow-alt-right" style="color: #FBBA42;"></i>
										<a href="{{url('equity/' .$equity->url)}}">{{$equity->name}}</a>
									</h4>
						</div>
					</div>
					@endforeach
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 grid-item cat4">
						<div class="project-wrapper mb-30">
									<h4>
										<i class="fas fa-long-arrow-alt-right" style="color: #FBBA42;"></i>
										<a href="{{url('remortgage-calculator')}}">Remortgage Calculator</a>
									</h4>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 grid-item cat5">
						<div class="project-wrapper mb-30">
									<h4>
										<i class="fas fa-long-arrow-alt-right" style="color: #FBBA42;"></i>
										<a href="#">Home Insurance</a>
									</h4>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 grid-item cat5">
						<div class="project-wrapper mb-30">
									<h4>
										<i class="fas fa-long-arrow-alt-right" style="color: #FBBA42;"></i>
										<a href="#">Life Insurance</a>
									</h4>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 grid-item cat5">
						<div class="project-wrapper mb-30">
									<h4>
										<i class="fas fa-long-arrow-alt-right" style="color: #FBBA42;"></i>
										<a href="#">Conveyancing</a>
									</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- project-area-end -->
@endsection