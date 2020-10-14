@extends('layouts.app')

@section('content')
		<!-- header-end -->
		<!-- slider-area-start -->
		<div class="slider-area">
			<div class="slider-active">
				<div class="slider-wrapper single-slider height-800 d-flex align-items-center" style="background-image:url(img/slider/02.webp)">
					<div class="container">
						<div class="slider-content slide-text-black">
							<h1 data-animation="fadeInUp" data-delay=".4s">Unlock your mortgage and <br> compare the best deals</h1>
							<div class="slider-button">
								<form method="post" action="{{url('/get-a-quote')}}">
									@csrf
									<input type="hidden" name="type" value="all">
									<button class="btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
										<i class="fas fa-long-arrow-alt-right"></i>
									</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider-area-end -->
		<!-- experience-area-start -->
		<div class="experience-area gray-bg pt-50 pb-30">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-9 col-md-8">
						<div class="experience-text mb-20">
							<h2>Need to speak with the experts?</h2>
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
		<!-- featured-area-start -->
		<div class="featured-area pt-110 pb-90">
			<div class="container">
				<div class="section-title text-center mb-50">
					<h1>The hardwork we do</h1>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="featured-wrapper text-center mb-30">
							<div class="featured-text">
								<div class="featured-tag">
									<span>01</span>
								</div>
								<h4><a href="#">Insurance</a></h4>
								<p> Life insurance protect family, home insurance to protects home and valuables, conveyancing expert help</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="featured-wrapper text-center mb-30">
							<div class="featured-text">
								<div class="featured-tag">
									<span>02</span>
								</div>
								<h4><a href="#">Mortgages</a></h4>
								<p> Remortgage your house to free up capital to make those home improvements. You could also reduce your monthly payments through a lower rate.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="featured-wrapper text-center mb-30">
							<div class="featured-text">
								<div class="featured-tag">
									<span>03</span>
								</div>
								<h4><a href="#">Secured Loans</a></h4>
								<p>  Loan is a highly popular and secure way to finance your home and by ‘secured’ it means you need to keep up with your repayments.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- featured-area-end -->
		
		<!-- services-area-start -->
		<div class="services-area pt-200 pb-90 gray-bg">
			<div class="container">
				<div class="section-title text-center mb-50">
					<h1>Our services provided with very competitve rates</h1>
					<p>We compare the whole of the market to find you the right remortgage.</p>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="services-wrapper text-center mb-30">
							<div class="services-img">
								<img src="img/service/1.png" alt="">
							</div>
							<div class="services-text">
								<h4>Remortgage</h4>
								<p>Remortgage your house to free up capital to make those home improvements. You could also reduce your monthly payments through a lower rate.</p>
							</div>
							<form method="post" action="{{url('/get-a-quote')}}">
								@csrf
								<input type="hidden" name="type" value="all">
								<button class="custom btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</form>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="services-wrapper text-center mb-30">
							<div class="services-img">
								<img src="img/service/2.png" alt="">
							</div>
							<div class="services-text">
								<h4>Debt Consolidation</h4>
								<p>By consolidating your debts into one repayment plan by remortgaging your property, you may be able to reduce your monthly outgoings.</p>
							</div>
							<form method="post" action="{{url('/get-a-quote')}}">
								@csrf
								<input type="hidden" name="type" value="all">
								<button class="custom btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</form>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="services-wrapper text-center mb-30">
							<div class="services-img">
								<img src="img/service/3.png" alt="">
							</div>
							<div class="services-text">
								<h4>Bad Credit</h4>
								<p>Getting a remortgage can be difficult when you have a bad credit rating, county court judgements (CCJs), payment defaults, mortgage arrears. </p>
							</div>
							<form method="post" action="{{url('/get-a-quote')}}">
								@csrf
								<input type="hidden" name="type" value="all">
								<button class="custom btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</form>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="services-wrapper text-center mb-30">
							<div class="services-img">
								<img src="img/service/4.png" alt="">
							</div>
							<div class="services-text">
								<h4>Buy To Let</h4>
								<p>We specialise in buy to let mortgages and can match you to the right lenders.  </p>
							</div>
							<form method="post" action="{{url('/get-a-quote')}}">
								@csrf
								<input type="hidden" name="type" value="all">
								<button class="custom btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</form>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="services-wrapper text-center mb-30">
							<div class="services-img">
								<img src="img/service/5.png" alt="">
							</div>
							<div class="services-text">
								<h4>Home Owner Loans</h4>
								<p>facilitate the purchase of a house or to finance the construction of one.</p>
							</div>
							<form method="post" action="{{url('/get-a-quote')}}">
								@csrf
								<input type="hidden" name="type" value="all">
								<button class="custom btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</form>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="services-wrapper text-center mb-30">
							<div class="services-img">
								<img src="img/service/6.png" alt="">
							</div>
							<div class="services-text">
								<h4>Compare Mortgages</h4>
								<p> We compare the whole of the market to find you the right remortgage. </p>
							</div>
							<form method="post" action="{{url('/get-a-quote')}}">
								@csrf
								<input type="hidden" name="type" value="all">
								<button class="custom btn btn-black" type="submit" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- services-area-end -->
		
		<!-- team-area-start -->
		<div class="team-area gray-bg pt-120 pb-60">
			<div class="container">
				<div class="section-title text-center mb-50">
					<h1>Meet the team</h1>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="team-wrapper team2-wrapper mb-55">
							<div class="team2-img">
								<img src="img/user.jpg" alt="" />
								<div class="team2-text">
									<ul class="team3-icon">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team3-text">
								<h4>Emma S. Shin</h4>
								<span>Financial Advisor</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="team-wrapper team2-wrapper mb-55">
							<div class="team2-img">
								<img src="img/user.jpg" alt="" />
								<div class="team2-text">
									<ul class="team3-icon">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team3-text">
								<h4>Louis B. Thomas</h4>
								<span>Banking Advisor</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="team-wrapper team2-wrapper mb-55">
							<div class="team2-img">
								<img src="img/user.jpg" alt="" />
								<div class="team2-text">
									<ul class="team3-icon">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team3-text">
								<h4>Cassidy T. Ingham</h4>
								<span>Business Advisor</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<div class="team-wrapper team2-wrapper mb-55">
							<div class="team2-img">
								<img src="img/user.jpg" alt="" />
								<div class="team2-text">
									<ul class="team3-icon">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team3-text">
								<h4>Jerome J. Kondo</h4>
								<span>Financial Advisor</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- team-area-end -->	


	<script>
    const App = new Vue({
        el: "#implement",
        data: {
            principal: null,
            interest: null,
            years: null,
            newConvertedFloat: null,

        },

        mounted () {
        	var fnf = document.getElementById("formattedNumberField");
                fnf.addEventListener('keyup', function(evt){
                    var n = parseInt(this.value.replace(/\D/g,''),10);
                    fnf.value = n.toLocaleString();
                }, false);
        },

        computed: {
        	remortgageCalculator() {
        		this.newConvertedFloat = this.principal.substring(1);
        		return Math.round(parseFloat(this.newConvertedFloat.replace(/,/g, '')) * (((this.interest/100)/12) * Math.pow((1 + ((this.interest/100)/12)), (this.years * 12)) / (Math.pow((1 + ((this.interest/100)/12)), (this.years * 12)) -1)));
        	},
        	totalAmount() {
        		return (this.remortgageCalculator * (this.years * 12)).toLocaleString();
        	}
        }
    })
</script>	

@endsection
