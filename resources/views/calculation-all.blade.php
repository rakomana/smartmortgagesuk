@extends('layouts.secure')

@section('content')
        <div class="contact-bg white-bg mt-20">
					<div class="section-title section3-title title-contact text-center mb-50">
					</div>
                    <div id="implement">
					<form class="contact-form" @submit.prevent="sendQuoteEnquiry">
                    <div id="stepProgressBar">
                        <div class="step">
                            <p class="step-text">Step1</p>
                            <div v-bind:class="{bullet:true, completed:step1}">1</div>
                        </div>
                        <div class="step">
                            <p class="step-text">Step2</p>
                            <div v-bind:class="{bullet:true, completed:step2}">2</div>
                        </div>
                        <div class="step">
                            <p class="step-text">Step3</p>
                            <div v-bind:class="{bullet:true, completed:step3}">3</div>
                        </div>
                    </div>

                        <span style="color: red; text-align: center;" v-for="e in error">@{{e}}</span>

                        <section v-if="step == 1">
						<div class="row">
                            <div class="col-lg-4 col-md-6 mb-20">
								<label style="font-weight: bold;">Your mortgage: </label>
							</div>
							<div class="col-lg-4 col-md-6 mb-20">
								<input type="text" v-model="form.property_value" name="property_value" class="form-group" placeholder="Property value...">
							</div>
							<div class="col-lg-4 col-md-6 mb-20">
								<input type="text" v-model="form.mortgage_value" name="mortgage_value" class="form-group" placeholder="Mortgage value...">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 mb-20">
								<div class="text-center mt-20">
									<button @click.prevent="nextStep" class="btn">Next Step</button>
                                </div>
							</div>
                        </div>
                        </section>

                        <section  v-if="step == 2">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-20">
                                    <label style="font-weight: bold;">Mortgage type: </label>
                                </div>
                                <div class="col-lg-8 col-md-6 mb-20">
                                    <select class="browser-default custom-select" v-model="form.mortgage_type" name="mortgage_type">
                                        @foreach ($mortgage as $mortgage)
                                            <option value="{{$mortgage->name}}">{{$mortgage->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-20">
                                    <div class="text-center mt-20">
                                        <button @click.prevent="prevStep" class="btn">Previous Step</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-20">
                                    <div class="text-center mt-20">
                                        <button @click.prevent="nextStep" class="btn">Next Step</button>
                                    </div>
                                </div>
                            </div>
                        </section>
					
                        <section v-if="step == 3">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-20">
								<label style="font-weight: bold;">Full Name(s): </label>
							</div>
							<div class="col-lg-4 col-md-6 mb-20">
								<input type="text" v-model="form.first_name" name="first_name"  placeholder="first name...">
							</div>
							<div class="col-lg-4 col-md-6 mb-20">
								<input type="text" v-model="form.last_name" name="last_name" placeholder="last name...">
                            </div>
                            <div class="col-lg-3 col-md-6 mb-20">
								<label style="font-weight: bold;">Title </label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-20">
								<select v-model="form.title" name="title">
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Other">Other</option>
								</select>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-20">
								<label style="font-weight: bold;">Date Of Birth </label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-20">
								<input type="date" v-model="form.date_Of_Birth" name="date_Of_Birth" placeholder="YYYY/MM/DD">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
								<label style="font-weight: bold;">Email Address </label>
                            </div>
                            <div class="col-lg-8 col-md-6 mb-20">
								<input type="email" v-model="form.email" name="email" placeholder="email address...">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
								<label style="font-weight: bold;">Telephone Number </label>
                            </div>
                            <div class="col-lg-8 col-md-6 mb-20">
								<input type="text" v-model="form.phone_number" name="phone_number" placeholder="telephone Number...">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
								<label style="font-weight: bold;">Full Address </label>
                            </div>
                            <div class="col-lg-8 col-md-6 mb-20">
								<input type="text" v-model="form.full_address" name="full_address" placeholder="physical address">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                                <input type="text" v-model="form.address_1" name="address_1" placeholder="Address Line 1">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                                <input type="text" v-model="form.address_2" name="address_2" placeholder="Address Line 2">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                                <input type="text" v-model="form.town" name="town" placeholder="Town">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                                <input type="text" v-model="form.city" name="city" placeholder="City">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                                <input type="text" v-model="form.postcode" name="postcode" placeholder="Postcode">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                                <input type="text" v-model="form.country" name="country" placeholder="Country">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-20">
                            </div>
                            <div class="col-lg-8 col-md-6 mb-20">
								<p>Please ensure your contact details are correct as we will keep you up to date with the progress of your application by phone, email and SMS.</p>
                                <p>For future marketing purposes we may contact you from time to time by post, email and SMS regarding our latest promotional offers, if you are in agreement please tick the relevant box below.</p>
                            </div>
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4">
                                <label for="sms">Communication Type:</label>
                            </div>
                            <div class="col-sm-4">
                                <select id="sms" v-model="form.communication_type" name="communication_type">
                                    <option value="email">EMAIL</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="text-center mt-20">
                                    <button @click.prevent="prevStep" class="btn">Previous Step</button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-20">
                                <div class="text-center mt-20">
                                    <button class="btn btn-primary" style="background-color: #CCE5FF;
                                        border: none;
                                        color: black;
                                        padding: 12px 24px;
                                        font-size: 16px;">
                                    <span v-if="loading">
                                      <i class="fa fa-spinner fa-spin"></i> Submiting...
                                      </span>
                                      <span v-else> Submit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </section>
                        </form>
                    </div>
				</div>
        		<!-- footer-start -->
<script>
    const App = new Vue({
        el: "#implement",
        data: {
            step: 1,
            totalsteps: 3,
            error: null,
            step1: false,
            step2: false,
            step3: false,
            loading: false,
            form: {
                property_value: null,
                mortgage_value: null,
                mortgage_type: null,
                remortgage_type: null,
                first_name: null,
                last_name: null,
                title: null,
                date_Of_Birth: null,
                email: null,
                phone_number: null,
                address_1: null,
                address_2: null,
                town: null,
                country: null,
                postcode: null,
                communication_type: null
            }
        },
        methods: {
            nextStep: function() {
                if(this.step == 1)
                {
                    this.error = null
                    if(!this.form.property_value && !this.form.mortgage_value)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                    this.step1 = true
                }

                if(this.step == 2)
                {
                    this.error = null
                    if(!this.form.mortgage_type)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                    this.step2 = true
                }

                this.step++;
            },
            prevStep: function() {
                this.step--;
                if(this.step == 1)
                {
                    this.step1 = false
                    this.step2 = false
                    this.step3 = false
                }

                if(this.step == 2)
                {
                    this.step2 = false
                    this.step3 = false
                }
            },
            sendQuoteEnquiry: function() {
                this.loading = true
                axios.post('/api/quotation', this.form)
                .then(response => {
                    this.loading = false
                    window.location.href = '/api/quote-submitted/thank-you';
                })
                .catch(error => {
                    this.loading = false
                    swal("Oops!", "Something is wrong!", "warning");
                })
            }
        }
    })
</script>

@endsection