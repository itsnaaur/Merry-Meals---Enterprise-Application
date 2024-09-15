@section('title')
    Welcome
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3><strong>Volunteers</strong></h3>
						<p style="color: #0e6655;"><strong>All the volunteers that registered to paticipate in MerryMeals charity.</strong></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					@foreach ($volunteerData as $volunteer)
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-profile-male"></i></span>
								@if (Session::has('voluunteerDeleted'))
								<h4 class="alert alert-warning animate-box" role="alert">
									{{ Session::get('volunteerDeleted') }}
								</h4>
							@endif
								<h3><strong>{{ DB::table('users')->where('id',$volunteer->user_id)->value('name')}}</strong></h3>
								<h4 style="color: red;"><strong>{{ $volunteer->volunteer_duration }}</strong></h4>
								<p>{{ DB::table('users')->where('id',$volunteer->user_id)->value('address')}}</p>
								<p>{{ DB::table('users')->where('id',$volunteer->user_id)->value('phone')}}</p>
								<p>{{ DB::table('users')->where('id',$volunteer->user_id)->value('email')}}</p>
								<p>{{ $volunteer->volunteer_available }}</p>
								<span>
									<a href="{{ route('admin#updateVolunteer', $volunteer->user_id) }}">
										<i class="icon-edit"> </i>
									</a>
									<a href="{{ route('admin#deleteVolunteer', $volunteer->user_id) }}">
										<i class="icon-trash"></i>
									</a>
								</span>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>

		<!-- END What we do -->

@endsection