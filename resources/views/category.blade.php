@extends('layouts.app')

@section('content')
		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-245 pb-245 " style="background-image:url(/img/bg/bg9.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-text text-center">
							<h1>{{$category->name}}</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		
@endsection