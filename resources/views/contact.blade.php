@extends('layouts.app')

@section('content')
		<!-- header-end -->
		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-245 pb-245 " style="background-image:url(img/bg/bg9.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-text text-center">
							<h1>Contact us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area-start -->

		<!-- contact area start -->
		<div class="contact-area gray-bg pt-120">
			<div class="container">
				<div id="implement" class="contact-bg white-bg mt-60">
					<div class="section-title section3-title title-contact text-center mb-50">
						<h1>Get in touch with us</h1>
					</div>
					<form class="contact-form" @submit.prevent="sendMessage">
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-20">
								<input v-model="form.first_name" name="first_name" type="text" placeholder="Your Name :">
							</div>
							<div class="col-lg-6 col-md-6 mb-20">
								<input v-model="form.email" name="email" type="text" placeholder="Your Email :">
							</div>
							<div class="col-lg-12 col-md-12 mb-20">
								<textarea v-model="form.message" name="message" cols="30" rows="10" placeholder="Your enquiry :"></textarea>
								<div class="text-center mt-20">
									<button type="submit" class="btn">send</button>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>

<script>
    const App = new Vue({
        el: "#implement",
        data: {
            error: null,
            form: {
                message: null,
                email: null,
                first_name: null
            }
        },
        methods: {
            sendMessage: function() {

            	if(!this.form.first_name && !this.form.message && !this.form.email)
            	{
            		swal('Oops!', 'Fill in the missing/correct values', 'warning');

            		return false;
            	}

                axios.post('/api/contact', this.form)
                .then(function (response) {
                    swal("Well done!", "We will be in touch!", "success");
                })
                .catch(function (error) {
                    swal("Oops!", "Something is wrong!", "warning");
                })
            }
        }
    })
</script>

@endsection