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
					<h1>We Provides Best Services</h1>
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
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="services-wrapper text-center mb-30">
							<div class="services-img">
								<img src="img/service/3.png" alt="">
							</div>
							<div class="services-text">
								<h4>Bad Credit Remortgage</h4>
								<p>Getting a remortgage can be difficult when you have a bad credit rating, county court judgements (CCJs), payment defaults, mortgage arrears. </p>
							</div>
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
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="services-wrapper text-center mb-30">
							<div class="services-img">
								<img src="img/service/6.png" alt="">
							</div>
							<div class="services-text">
								<h4>Compare Morgages</h4>
								<p> We compare the whole of the market to find you the right remortgage. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- services-area-end -->
		
		<!-- clients-say-area-start -->
		<div id="implement" style="padding-top: 50px;" class="clients-say-area  gray-bg">
			<div class="row no-gutters">
				<div class="col-xl-6 col-lg-6">
					<div class="request-wrapper requests-wrapper bg-black">
						<div class="request-text">
							<h1>Take advantage of our mortgage calculator and unlock a better deal today!</h1>
						</div>

						<form @submit.prevent="sendMessage" id="request-form">
							<div class="row">
								<div class="col-xl-12 mb-15">
									<input v-model="principal" name="principal" placeholder="How much do you want to borrow?" v-currency="{currency: 'EUR', locale: 'en'}" id="formattedNumberField"  type="text">
								</div>
								<div class="col-xl-12 mb-15">
									<input v-model="years" name="years" placeholder="How many years" type="text">
								</div>
								<div class="col-xl-12 mb-15">
									<input v-model="interest" name="interest" placeholder="Interest rate" type="number" step="1.0" min="0.1">
								</div>
							</div>
						</form>

					</div>
				</div>
				
				<div class="col-xl-6 col-lg-6">
					<div class="clients-say-wrapper" style="text-align: center;">
						<h1>Results</h1>
						<div v-if="interest && principal && years" class="clients-say-title">
							<p>Your monthly payment will be: €<span style="font-size: 18px;"><b>@{{remortgageCalculator}}</b></span></p>
							<p>The total amount you will pay over the term is:  €<span style="font-size: 18px;"><b>@{{totalAmount}}</b></span></p>
						</div>
						<br>
						<div class="clienyts-say-active owl-carousel">
							<div class="single-clients">
								<div class="clients-say-text">
									<h4>Mortgages</h4>
									<p>Remortgage your house to free up capital to make those home improvements. You could also reduce your monthly payments through a lower rate. </p>
								</div>
							</div>
							<div class="single-clients">
								<div class="clients-say-text">
									<h4>Secured Loans</h4>
									<p>Loan is a highly popular and secure way to finance your home and by ‘secured’ it means you need to keep up with your repayments. </p>
								</div>
							</div>
							<div class="single-clients">
								<div class="clients-say-text">
									<h4>Insurance</h4>
									<p>Life insurance protect family, home insurance to protects home and valuables, conveyancing expert help </p>
								</div>
							</div>
						</div><br>
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
		<!-- clients-say-area-end -->		

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
