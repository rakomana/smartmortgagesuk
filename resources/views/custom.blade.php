@extends('layouts.custom')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50" id="implement">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">100% Secure</h2>
                </div>
                <div class="card-body">
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
                    <form @submit.prevent="sendQuoteEnquiry">
                        <section v-if="step == 1">
                        <div class="form-row m-b-55">
                            <div class="name">Your Mortgage</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" v-model="form.property_value" v-currency="{currency: 'EUR', locale: 'en'}" id="formattedNumberField">
                                            <label class="label--desc">Property Value</label>
                                        </div>
                                        <span v-if="allerrors.property_value" class="error">@{{allerrors.property_value}}</span>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" v-model="form.mortgage_value" v-currency="{currency: 'EUR', locale: 'en'}" id="formattedNumberFields">
                                            <label class="label--desc">Mortgage Value</label>
                                        </div>
                                        <span v-if="allerrors.mortgage_value" class="error">@{{allerrors.mortgage_value}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Mortgage Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <div>
                                        <select class="selects" v-model="form.mortgage_type">
                                            @foreach ($mortgage as $mortgage)
                                                <option value="{{$mortgage->name}}">{{$mortgage->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                        <span v-if="allerrors.name" class="error">@{{allerrors.name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Full name(s)</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" v-model="form.first_name">
                                            <label class="label--desc">First Name</label>
                                        </div>
                                        <span v-if="allerrors.first_name" class="error">@{{allerrors.first_name}}</span>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" v-model="form.last_name">
                                            <label class="label--desc">Last Name</label>
                                        </div>
                                        <span v-if="allerrors.last_name" class="error">@{{allerrors.last_name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <a @click.prevent="nextStep" class="btn btn--radius-2 btn--red">Next Step</a>
                        </div>
                    </section>
                    <section v-if="step == 2">
                        <div class="form-row">
                            <div class="name">Title</div>
                            <div class="value">
                                <div class="input-group">
                                    <div>
                                        <select class="selects" v-model="form.title">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                        <span v-if="allerrors.title" class="error">@{{allerrors.title}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date of Birth</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" v-model="form.date_Of_Birth">
                                </div>
                                <span v-if="allerrors.date_Of_Birth" class="error">@{{allerrors.date_Of_Birth}}</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" v-model="form.email">
                                </div>
                                <span v-if="allerrors.email" class="error">@{{allerrors.email}}</span>
                            </div>
                        </div>
                        <div class="row" style="justify-content: space-between;">
                            <div class="col-6">
                                <button @click.prevent="prevStep" class="btn btn--radius-2 btn--red">Previous Step</button>
                            </div>
                            <div class="col-6">
                                <button @click.prevent="nextStep" class="btn btn--radius-2 btn--red">Next Step</button>
                            </div>
                        </div>
                    </section>
                    <section v-if="step == 3">
                        <div class="form-row">
                            <div class="name">Phone number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" v-model="form.phone_number">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Physical Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="autocomplete" v-model="form.full_address">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="justify-content: space-between;">
                            <div class="col">
                                <button @click.prevent="prevStep" class="btn btn--radius-2 btn--red">Previous Step</button>
                            </div>


                            <div class="col">
                                <button class="btn btn--radius-2 btn--red" type="submit">
                                <span v-if="loading">
                                    <i class="fa fa-spinner fa-spin"></i> Submiting...
                                    </span>
                                <span v-else> Submit</span>
                                </button>
                            </div>
                        </div>
                    </section>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const App = new Vue({
            el: "#implement",
            data: {
                step: 1,
                totalsteps: 3,
                allerrors: false,
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
                    full_address: null
                }
            },

            mounted() {
                var fnf = document.getElementById("formattedNumberField");
                fnf.addEventListener('keyup', function(evt){
                    var n = parseInt(this.value.replace(/\D/g,''),10);
                    fnf.value = n.toLocaleString();
                }, false);

                var pnp = document.getElementById("formattedNumberFields");
                pnp.addEventListener('keyup', function(evt){
                    var n = parseInt(this.value.replace(/\D/g,''),10);
                    pnp.value = n.toLocaleString();
                }, false);
            },

            methods: {
                nextStep: function() {
                    if(this.step == 1)
                    {
                        this.step1 = true
                    }
    
                    if(this.step == 2)
                    {
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
                        this.allerrors = error.errors
                        swal("Oops!", "Something is wrong!, please check your inputs", "warning");
                    })
                }
            }
        })
    </script>
@endsection