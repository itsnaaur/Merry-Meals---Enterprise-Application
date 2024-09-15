@section('title')
    Welcome
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3><strong>Current Total Donation:</strong><strong style="color: #FCC74F;"> ${{ $totalDonate }}</strong></h3>
						<p style="color: #0e6655;"><strong>All the donors information that give donation to MerryMeals</strong></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					@foreach ($donorData as $donor)
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-profile-male"></i></span>
								<h3><strong>{{ $donor->donor_first_name	}} {{ $donor->donor_last_name }}</strong></h3>
								<h4>Donation: ${{ DB::table('donor_fees')->where('id',$donor->id)->value('donor_fee')}}</h4>
								<p>Address: {{ $donor->donor_address }}</p>
								<p>Contact: {{ $donor->donor_phone }}</p>
								<p>Email: {{ $donor->donor_email }}</p>
								<p>Date: {{ $donor->updated_at }}</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>

		<!-- END What we do -->

@endsection