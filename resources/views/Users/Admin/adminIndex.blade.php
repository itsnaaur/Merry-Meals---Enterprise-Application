@section('title')
    Welcome Admin
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Hello The Administrator</h3>
						<p>Please manage this website!!!</p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-page">
        
			<div class="fh5co-hero">
					<div class="fh5co-overlay"></div>
					<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
							<div class="desc animate-box">
									<h2><strong>Aim to</strong> Give Meals <strong> To Those in Need</strong></h2>
									{{-- <span>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></span> --}}
									{{-- <span><a class="btn btn-primary btn-lg" href="{{ route('member#viewAllMenu') }}">View Menu</a></span> --}}
							</div>
					</div>
	
			</div>
	</div>

		<!-- END What we do -->

@endsection