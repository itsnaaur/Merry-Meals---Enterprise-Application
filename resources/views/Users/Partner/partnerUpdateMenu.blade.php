@section('title')
    Update {{ $updateMenu->menu_title }}
@endsection

@extends('Users.Partner.layouts.app')

@section('content')	
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<!-- Superfish -->
<link rel="stylesheet" href="{{ asset('css/superfish.css') }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<!-- Modernizr JS -->
<script src="{{ asset('js/modernizr-2.6.2.min.js') }}" defer></script>

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3><h1>Update {{ $updateMenu->menu_title }}</h1></h3>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
                    <div class="container">
                        <div class="row">
							<form action="{{ route('partner#saveUpdate', $updateMenu->id) }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="col-lg-6 animate-box">									
									@if ($updateMenu->menu_image)
										<img src="{{ asset('uploads/meal/'. $updateMenu->menu_image) }}" class="img-thumbnail" alt="category image ">
										<br>
									@endif
									<div>
										<div class="form-group animate-box" style="padding-top: 10px">
											<label for="basic-url">Menu Picture</label>
											<input type="file" class="form-control" name="menu_image" value="{{ $updateMenu->menu_image }}" required>
										</div>
									</div>
								</div>
								<div class="col-lg-6" style="padding-left: 60px">
									<div class="row">
										<div>
											<div class="form-group animate-box">
												<label for="basic-url">Menu Title</label>
												<input type="text" class="form-control" placeholder="Put your menu title here" name="menu_title" value="{{ old('menu_title', $updateMenu->menu_title) }}" required>
											</div>
										</div>
										<div>
											<div class="form-group animate-box">
												<label for="basic-url">Menu Description</label>
												<textarea class="form-control" id="" cols="30" rows="7" placeholder="Put your menu description here" name="menu_description" required>{{ old('menu_description', $updateMenu->menu_description) }}</textarea>
											</div>
										</div>
										<div>
											<div class="form-group animate-box">
												<label for="basic-url">Time Availability</label>
												<input type="text" class="form-control" placeholder="Put your menu time availability here" name="menu_time_availability" value="{{ old('menu_time_availability', $updateMenu->menu_time_availability) }}" required>
											</div>
										</div>
										<div>
											<div class="form-group animate-box">
												<label for="basic-url">Partner Organization</label>
												<select name="partner" class="form-control" required>
													<option value="" disabled selected hidden>Please Select One Below</option>
													@foreach ($partnerData as $partner)
                        								<option value="{{ $partner->id }}">{{ $partner->partnership_restaurant }}</option>
                    								@endforeach
												</select>
											</div>
										</div>
										<div>
											<div class="form-group animate-box">
												<label for="basic-url">Menu Type</label>
												<select name="menu_type" class="form-control" required>
													<option value="" disabled selected hidden>Please Select One Below</option>
													<option>Hot</option>
													<option>Cold</option>
												</select>
											</div>
										</div>
										<div>
											<div class="form-group animate-box">
												<input type="submit" value="Update" class="btn btn-primary">
											</div>
										</div>
									</div>
								</div>
							</form>   
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<!-- fh5co-blog-section -->

	<!-- jQuery -->


	<script src="{{ asset('js/jquery.min.js') }}" defer></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
	<script src="{{ asset('js/sticky.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}" defer></script>
	<!-- Superfish -->
	<script src="{{ asset('js/hoverIntent.js') }}" defer></script>
	<script src="{{ asset('js/superfish.js') }}" defer></script>
	
	<!-- Main JS -->
	<script src="{{ asset('js/main.js') }}" defer></script>

@endsection