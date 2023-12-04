
@extends('tgcLayout')

@section('pageTitle', 'Gallery')

@section('mainLinks')
	@parent
	<link rel="stylesheet" href="{{ asset('css/salvattore.css') }}">
@endsection


@section('bodyContent')
	<!-- Breadcrumbs '/img/blockqoute-bg2.jpg' -->
	<div class="breadcrumbs overlay" style="background-image: url({{ asset('img/blockqoute-bg2.jpg') }});">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Unit Gallery</h2>
						<ul class="bread-list">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li><a href="{{ url('gallery') }}">Gallery</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Single Gallery Titile</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	
@endsection

