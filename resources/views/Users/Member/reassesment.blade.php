@section('title')
    Welcome
@endsection

@extends('Users.Member.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
			{{-- <div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Update Profile</h3>
					</div>
				</div>
			</div> --}}
            @if (Session::has('dataInform'))
                <h4 class="alert alert-warning animate-box text-center" role="alert">
                    {{ Session::get('dataInform') }}
                </h4>
            @endif
			<div class="container">
				<div class="row display-flex justify-content">
					<div class="col-md-6 col-sm-6 col-md-offset-3">
						<div class=" animate-box">
							<div class="col-md-12 ">
                                <h3>Reassesment</h3>
                                <form action="{{ route('member#newReassesment', Auth()->user()->id) }}) }}" method="POST">
                                    @csrf
                                    
                                    {{-- REASSESMNET DATA --}}
                                        <label class="userManagement">Why you want to extend the time of receiving this charity?</label><br>
                                        <textarea name="member_extends_reason" class="input-md col-md-12" type="text">{{ old('member_extends_reason', $memberData->member_extends_reason) }}</textarea><br><br><br>

                                        <label class="userManagement">Duration (in days)</label><br>
                                        <input name="member_meal_duration" class="input-md col-md-12" type="number" value="{{ old('member_meal_duration', $memberData->member_meal_duration) }}"/><br><br>
                                    {{-- END OF REASSESMENT DATA --}}
                                    <div class="text-center"> 
                                        <button class="btn-primary">Update</button> &nbsp;
                                        <a href="{{ route('member#index') }}">Cancel</a>
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END What we do -->

@endsection