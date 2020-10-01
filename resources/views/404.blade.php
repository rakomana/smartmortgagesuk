@extends('layouts.app')

@section('content')
<div class="breadcrumb-area pt-245 pb-245 " style="background-image:url(/img/bg/bg9.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-wrapper text-center">
							<div class="breadcrumb-text">
							<h1>404 | Oops, we cannot find the page you are looking for</h1>
							</div>
							<div class="breadcrumb-menu mt-20">
								<ul>
									<li><a href="{{url('/')}}">Go to Home</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection