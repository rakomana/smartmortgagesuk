<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Smartmortgagesuk</title>

    <!-- Icons font CSS-->
    <link href="{{asset('scss/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('scss/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Vendor CSS-->
    <link href="{{asset('scss/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('scss/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/ideal-postcodes-autocomplete.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/optional-effects.css')}}" />


    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vee-validate@<3.0.0/dist/vee-validate.js"></script>
    <script src="https://unpkg.com/vue-currency-input"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Ujwv2tL82-tD3kOKQ7NfiN6NnMlWckA&libraries=places"></script>

    <script src="{{url('js/ideal-postcodes-autocomplete.js')}}"></script>
</head>

<body>
    <div style="text-align: center;">
        <a href="{{url('/')}}"><img id="comp-kb980ox52imgimage" style="object-position:50% 50%;width:300px;height:65px;object-fit:contain" alt="SMUK LOGO.PNG" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/83d864_92c810fd334b4db69306ab77f8cb987f~mv2.png/v1/fill/w_320,h_85,al_c,q_85,usm_0.66_1.00_0.01/SMUK%20LOGO_PNG.webp"></a>
    </div>
    @yield('content');


    <footer>
            <div class="footer-top-area footer-white gray-bg pt-110">
                <div class="container">
                    <div class="footer-border pb-45">
                        <div class="row" style="justify-content: space-between;">
                        <div class="col-6">
                            <div class="footer-wrapper mb-30">
                                <div class="footer-logo">
                                    <a href="{{url('/')}}"><img id="comp-kb980ox52imgimage" style="object-position:50% 50%;width:300px;height:65px;object-fit:contain" alt="SMUK LOGO.PNG" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/83d864_92c810fd334b4db69306ab77f8cb987f~mv2.png/v1/fill/w_320,h_85,al_c,q_85,usm_0.66_1.00_0.01/SMUK%20LOGO_PNG.webp"></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="copyright text-center">
                                <p>Copyright 2020 Smartmortgages</p>
                            </div>
                        </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->
    <!-- Jquery JS-->
    <script src="{{asset('scss/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('scss/select2/select2.min.js')}}"></script>
    <script src="{{asset('scss/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('scss/datepicker/daterangepicker.js')}}"></script>
    
    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>
</body>
</html>
<!-- end document-->