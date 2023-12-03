
@extends('tgcLayout')

@section('pageTitle', 'Gallery')

@section('mainLinks')
	@parent
	<link rel="stylesheet" href="{{ asset('css/salvattore.css') }}">
@endsection


@section('bodyContent')
	<div class="container-fluid mt-2 mb-4">
        <div class="d-flex justify-content-center">
            <form action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by Title, Date or Year">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">Search</span>
                    </div>
                  </div>
            </form>
        </div>
		<div class="row">
			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-4 col-sm-6 col-xs-1 mt-3 d-flex">
				<div class="card">
					<a href="" class="">
						<img class="card-img-top img-thumbnail" src="{{ asset('img/gallery_img/img_4.jpg') }}" alt="Card image" style="width:100%">
					</a>
					<div class="card-body" style="background: #83C8F2">
						<p class="card-text text-dark"><strong>Title: </strong>Some ohn Doe is an architect and ome ohn Doe is  </p>
						<p class="card-text text-dark"><strong>Date: </strong> 29 June, 1999</p>
						<p class="card-text text-dark"><strong>Total Img: </strong> 27</p>
					</div>
				</div>
			</div>













		</div>
	</div>
@endsection

