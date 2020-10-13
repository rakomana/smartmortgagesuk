@extends('layouts.app')

@section('content')

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
					<div v-if="interest && principal && years" class="clients-say-title">
						<h1 style="color: white;">Results</h1>
						<p>Your monthly payment will be: <span style="font-size: 18px; color: white;"><b>£ @{{remortgageCalculator}}</b></span></p>
						<p>The total amount you will pay over the term is: <span style="font-size: 18px; color: white;"><b>£ @{{totalAmount}}</b></span></p>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6">
				<div class="clients-say-wrapper" style="text-align: center;">
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
