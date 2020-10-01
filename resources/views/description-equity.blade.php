@extends('layouts.app')

@section('content')

<!-- breadcrumb-area-start -->
			@if($equity->article_header_image)
			<div class="breadcrumb-area pt-245 pb-245" style="background-image:url({{asset('storage/app/public/'. $equity->article_header_image)}});">                                                  
			@else
			<div class="breadcrumb-area pt-245 pb-245" style="background-image:url('/img/bg/bg9.jpg');">
			@endif
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-wrapper text-center">
							<div class="breadcrumb-menu mt-20">
								<ul>
									<li><a href="#">{{$equity->name}}</a></li>
								</ul>
							</div>
							<div class="slider-button">
								<form method="post" action="{{url('/get-a-quote')}}">
									@csrf
									<input type="hidden" name="type" value="equity">
									<input type="hidden" name="id" value="{{$equity->id}}">
									<button class="btn btn-black" data-animation="fadeInLeft" data-delay="1.2s">get my quote
									<i class="fas fa-long-arrow-alt-right"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@if($equity->article_heading_1)
		<!-- latest-news-area-start -->
		<div class="latest-news-area pt-120 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-sm-12">
						<div class="blog-list">
							<div class="latest-news-wrapper blog-details mb-50">
								<div class="latest-news-text">
									<div class="blog-meta">
										<i style="color: #F7B944;" class="fas fa-user"></i>
										<span>By admin</span>
										<i style="color: #F7B944;" class="fa fa-calendar"></i>
										<span>{{$equity->updated_at}}</span>
									</div>
									
									{!! $equity->article_heading_1 !!}
									
									{!! $equity->article_paragraph_1_1 !!}
									{!! $equity->article_paragraph_1_2 !!}
									{!! $equity->article_paragraph_1_3 !!}
									{!! $equity->article_paragraph_1_4 !!}

									{!! $equity->article_heading_2 !!}

									{!! $equity->article_paragraph_2_1 !!}
									{!! $equity->article_paragraph_2_2 !!}
									{!! $equity->article_paragraph_2_3 !!}
									{!! $equity->article_paragraph_2_4 !!}

									{!! $equity->article_heading_3 !!}

									{!! $equity->article_paragraph_3_1 !!}
									{!! $equity->article_paragraph_3_2 !!}
									{!! $equity->article_paragraph_3_3 !!}
									{!! $equity->article_paragraph_3_4 !!}

									{!! $equity->article_heading_4 !!}

									{!! $equity->article_paragraph_4_1 !!}
									{!! $equity->article_paragraph_4_2 !!}
									{!! $equity->article_paragraph_4_3 !!}
									{!! $equity->article_paragraph_4_4 !!}

									{!! $equity->article_heading_5 !!}

									{!! $equity->article_paragraph_5_1 !!}
									{!! $equity->article_paragraph_5_2 !!}
									{!! $equity->article_paragraph_5_3 !!}
									{!! $equity->article_paragraph_5_4 !!}

									{!! $equity->conclusion_heading !!}
									{!! $equity->conclusion_explanation !!}

									{!! $equity->conclusion_title !!}

									{!! $equity->conclusion_paragraph_1 !!}
									{!! $equity->conclusion_paragraph_2 !!}
									{!! $equity->conclusion_paragraph_3 !!}
									{!! $equity->conclusion_paragraph_4 !!}
									{!! $equity->conclusion_paragraph_5 !!}
									{!! $equity->conclusion_footer_1 !!}
									{!! $equity->conclusion_footer_2 !!}
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4">
						<div class="sidebar-blog pl-30">
							<div class="widget">
								<h4 class="widget-title">Recent Posts</h4>
								<div class="sidebar-rc-post">
									<ul>
										<li>
											<div class="rc-post-content">
												<h4>
													<a href="{{url('mortgages/' .$url = 'debt-consolidation-mortgage')}}">Debt Consilidation Mortgage | Remortgage House To Pay Off Debt</a>
												</h4>
												<div class="widget-date"> 2020-09-10</div>
											</div>
										</li>
										<li>
											<div class="rc-post-content">
												<h4>
													<a href="{{url('secured-loan/' .$url = 'home-owner-loans')}}">
													Best Homeowner Loans | Get Equity Against Your Property</a>
												</h4>
												<div class="widget-date"> 2020-09-10</div>
											</div>
										</li>
										<li>
											<div class="rc-post-content">
												<h4>
													<a href="{{url('mortgages/' .$url = 'home-improvement-mortgage')}}">
													Business & Personal Drawdown Loans For Home Improvements Or Real Estate Investments</a>
												</h4>
												<div class="widget-date"> 2020-09-10</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- latest-news-area-end -->
		@endif
@endsection