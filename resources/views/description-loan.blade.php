@extends('layouts.app')

@section('content')
<!-- breadcrumb-area-start -->
		@if($loan->article_header_image)
		<div class="breadcrumb-area pt-245 pb-245" style="background-image:url({{asset('storage/app/public/'. $loan->article_header_image)}});">                                                  
		@else
		<div class="breadcrumb-area pt-245 pb-245" style="background-image:url('/img/bg/bg9.jpg');">
		@endif
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-wrapper text-center">
							<div class="breadcrumb-menu mt-20">
								<ul>
									<li><a href="#">{{$loan->name}}</a></li>
								</ul>
							</div>

							<div class="slider-button">
								<form method="post" action="{{url('/get-a-quote')}}">
									@csrf
									<input type="hidden" name="type" value="loan">
									<input type="hidden" name="id" value="{{$loan->id}}">
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

		@if($loan->article_heading_1)
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
										<span>{{$loan->updated_at}}</span>
									</div>
									
									{!! $loan->article_heading_1 !!}
									
									{!! $loan->article_paragraph_1_1 !!}
									{!! $loan->article_paragraph_1_2 !!}
									{!! $loan->article_paragraph_1_3 !!}
									{!! $loan->article_paragraph_1_4 !!}

									{!! $loan->article_heading_2 !!}

									{!! $loan->article_paragraph_2_1 !!}
									{!! $loan->article_paragraph_2_2 !!}
									{!! $loan->article_paragraph_2_3 !!}
									{!! $loan->article_paragraph_2_4 !!}

									{!! $loan->article_heading_3 !!}

									{!! $loan->article_paragraph_3_1 !!}
									{!! $loan->article_paragraph_3_2 !!}
									{!! $loan->article_paragraph_3_3 !!}
									{!! $loan->article_paragraph_3_4 !!}

									{!! $loan->article_heading_4 !!}

									{!! $loan->article_paragraph_4_1 !!}
									{!! $loan->article_paragraph_4_2 !!}
									{!! $loan->article_paragraph_4_3 !!}
									{!! $loan->article_paragraph_4_4 !!}

									{!! $loan->article_heading_5 !!}

									{!! $loan->article_paragraph_5_1 !!}
									{!! $loan->article_paragraph_5_2 !!}
									{!! $loan->article_paragraph_5_3 !!}
									{!! $loan->article_paragraph_5_4 !!}

									{!! $loan->conclusion_heading !!}
									{!! $loan->conclusion_explanation !!}

									{!! $loan->conclusion_title !!}

									{!! $loan->conclusion_paragraph_1 !!}
									{!! $loan->conclusion_paragraph_2 !!}
									{!! $loan->conclusion_paragraph_3 !!}
									{!! $loan->conclusion_paragraph_4 !!}
									{!! $loan->conclusion_paragraph_5 !!}
									{!! $loan->conclusion_footer_1 !!}
									{!! $loan->conclusion_footer_2 !!}
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