@section('title')
    Welcome
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Update Profile</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row display-flex justify-content">
					<div class="col-md-6 col-sm-6 col-md-offset-3">
						<div class=" animate-box">
							<div class="col-md-12 ">
                                <form action="">
                                    <label class="userManagement">Partner's Name</label><br>
                                    <input class="input-md col-md-12" type="text" value=""/><br><br>
                                    <label class="userManagement">Email</label><br>
                                    <input class="input-md col-md-12" type="email" value=""/><br><br>
                                    <label class="userManagement">Contact</label><br>
                                    <input class="input-md col-md-12" type="text" value=""/><br><br>
                                    <label class="userManagement">Address</label><br>
                                    <input class="input-md col-md-12" type="text" value=""/><br><br>
                                    <div class="text-center"> 
                                        <button class="btn-primary">Update</button> &nbsp;
                                        <a href="">Cancel</a>
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