<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		{!! SEOMeta::generate() !!}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/default.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://unpkg.com/vue-currency-input"></script>
        
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55NLH5D"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-55NLH5D');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
		<!-- header-start -->
		<header>
			<div class="header-menu">
				<div class="container">
					<div class=" row">
						<div class="col-xl-3 col-lg-3">
							<div class="logo">
								<a href="{{url('/')}}"><img id="comp-kb980ox52imgimage" style="object-position:50% 50%;width:300px;height:65px;object-fit:contain" alt="SMUK LOGO.PNG" data-type="image" itemprop="image" src="https://static.wixstatic.com/media/83d864_92c810fd334b4db69306ab77f8cb987f~mv2.png/v1/fill/w_320,h_85,al_c,q_85,usm_0.66_1.00_0.01/SMUK%20LOGO_PNG.webp"></a>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9">
							<div class="header-button d-none d-sm-none d-md-none d-lg-block">
								<a class="btn btn-border" href="{{url('mortgages')}}">More <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>
                           <div class="main-menu text-center">
								<nav id="mobile-menu">
									<ul>
										<li class="active">
											<a href="{{url('/')}}">home</a>
											<ul class="submenu">
												<li>
													<a href="{{url('about')}}"> About Us</a>
												</li>
												<li>
													<a href="{{url('contact')}}"> Contact Us</a>
												</li>
												<li>
													<a href="{{url('resource')}}"> Resources</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Remortgages</a>
											<ul class="submenu">
												<li>
													<a href="{{url('mortgages/' .$url = 'debt-consolidation-mortgage')}}"> Debt Consolidation Mortgages</a>
												</li>
												<li>
													<a href="{{url('mortgages/' .$url = 'bad-credit-mortgage')}}"> Bad Credit Mortgages</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Secured Loans </a>
											<ul class="submenu">
												<li>
													<a href="{{url('secured-loan/' .$url = 'home-owner-loans')}}"> Home Owner Loans </a>
												</li>
												<li>
													<a href="{{url('secured-loan/' .$url = 'bad-credit-secured-loans')}}"> Bad Credit Secured Loans</a>
												</li>
											</ul>
										<li>
											<a href="#">Buy to Let</a>
											<ul class="submenu">
												<li>
													<a href="{{url('mortgages/' .$url = 'buy-to-let-mortgages')}}"> Buy to Let Mortgages </a>
												</li>
												<li>
													<a href="{{url('mortgages/' .$url = 'right-to-buy-mortgage')}}"> Right to Buy Mortgages</a>
												</li>
												<li>
													<a href="{{url('mortgages/' .$url = 'let-to-buy-mortgage')}}"> Let to Buy Mortgages</a>
												</li>
												<li>
													<a href="{{url('mortgages/' .$url = 'help-to-buy-mortgage')}}"> Help to Buy Mortgages</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">House Purchase</a>
											<ul class="submenu">
												<li>
													<a href="{{url('mortgages/' .$url = 'home-improvement-mortgage')}}"> Home Improvement</a>
												</li>
										</li>
									</ul>
								</nav>
						   </div>
							<div class="mobile-menu"></div>
                       </div>
					</div>
				</div>
			</div>
		</header>
		<style>
		    .bullets li::before {
        	content: "•"; /* Insert content that looks like bullets */
        	padding-right: 8px;
        	color: black; /* Or a color you prefer */
        	font-size: 14px;
        	font-weight: 400;
        	line-height: 28px;
        	color: #777777;
        	margin-bottom: 15px;
        }
		.show{
			color: black;
		}
		.fixed-btn{
			top: 190px;
			position: fixed;
			right: -100px;
			transform: rotate(270deg);
			padding: 10px 40px;
			text-align: center;
			z-index: 1000;
		}
		</style>
			@yield('content')

			<div class="fixed-btn">
				<a href="{{url('contact')}}" class="btn btn-primary">Get in Touch</a>
			</div>

		<!-- footer-start -->
		<footer>
			<div class="footer-top-area footer-white gray-bg pt-110">
				<div class="container">
					<div class="footer-border pb-45">
						<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
							<div class="footer-wrapper mb-30">
								<div class="footer-logo">
									<a href="{{url('/')}}"><img id="comp-kb980ox52imgimage" style="object-position:50% 50%;width:300px;height:65px;object-fit:contain" alt="SMUK LOGO.PNG" data-type="image" itemprop="image" src="{{asset('img/SMUK LOGO_PNG.png')}}"></a>
								</div>
								<div class="footer-text">
									<p>JMM Financial t/a Smart Mortgages UK is an appointed representative of HL Partnership Limited, which is authorised and regulated by the Financial Conduct Authority.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
							<div class="footer-wrapper mb-30">
								<h3 class="footer-title">Quick Links</h3>
								<ul class="footer-menu">
									<li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('contact')}}">Contact Us</a></li>
									<li><a href="{{url('remortgage-calculator')}}">Calculator</a></li>
									<li><a href="{{url('contact')}}">Get a Quote</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="{{url('resource')}}">Resources</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
							<div class="footer-wrapper mb-30">
								<h3 class="footer-title">Recent Post</h3>
								<ul class="recent-menu">
									<li>
										<div class="recent-text">
											<h6><a href="{{url('mortgages/' .$url = 'debt-consolidation-mortgage')}}">Debt Consilidation Mortgage | Remortgage House To Pay Off Debt</a></h6>
										</div>
										<div class="recent-icon">
											<i class="fas fa-calendar-alt"></i>
										</div>
										<div class="recent-info">
											<span>2020-09-10</span>
										</div>
									</li>
									<li>
										<div class="recent-text">
											<h6>
												<a href="{{url('secured-loan/' .$url = 'home-owner-loans')}}">Best Homeowner Loans | Get Equity Against Your Property</a>
											</h6>
										</div>
										<div class="recent-icon">
											<i class="fas fa-calendar-alt"></i>
										</div>
										<div class="recent-info">
											<span>2020-09-10</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
							<div class="footer-wrapper mb-30">
								<h3 class="footer-title">Subscribe</h3>
								<div class="subscribe-text">
									<p>Enter  your email and get latest updates and offers subscribe us</p>
								</div>
								<form id="footer-form" action="#">
									<input style="color: black" placeholder="Your Email ..." type="email">
									<button><i class="fas fa-long-arrow-alt-right"></i></button>
								</form>
							</div>
						</div>
					</div>
					</div>
					<div class="footer-bottom-area pt-20 pb-20">
						<div class="row">
							<div class="col-xl-12">
								<div class="copyright text-center">
									<p>Copyright <i class="far fa-copyright"></i> 2020 Smartmortgages</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer-end -->

		<!-- JS here -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/waypoints.min.js')}}"></script>
		<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/ajax-form.js')}}"></script>
        <script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>