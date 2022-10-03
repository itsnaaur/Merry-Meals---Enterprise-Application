@section('title')
    Welcome
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Partners</h3>
						<p>All the partners that registered to paticipate in MerryMeals charity</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					@foreach ($partnerData as $partner)
                    <div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-profile-male"></i></span>
							<h3>{{ $partner->partnership_restaurant }}</h3>
							<p>{{ DB::table('users')->where('id',$partner->user_id)->value('address')}}</p>
                            <p>{{ DB::table('users')->where('id',$partner->user_id)->value('phone')}}</p>
							<p>{{ DB::table('users')->where('id',$partner->user_id)->value('email')}}</p>
							<p>Duration: {{ $partner->partnership_duration }}</p>
                            <span><i class="icon-edit"> </i>
                                <i class="icon-trash"></i></span>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>

		<!-- END What we do -->

@endsection