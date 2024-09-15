@section('title')
    All Menu
@endsection

@extends('Users.Member.layouts.app')

@section('content')		
<style>
	.mini-left-container {
  position: relative;
}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}

.topleft {
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 18px;
}

	</style>
		<div class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3> <strong style="margin-top: 50px;">Menus </strong> </h3>
					</div>
				</div>
				<div class="alert alert-warning animate-box" role="alert">
					<p>Based on your location, menu is available according to the day you are ordering and if your distance is within 
						10 km from our food service partner provider
					</p>
				</div>
			</div>
			<div class="container">
				
				@foreach ($menuData as $menu)
				<a href="{{ route('member#viewMenu', $menu->id) }}">
				<div class="col-md-4" style="padding-top:50px" >
					<div class="fh5co-team text-center animate-box" style="padding: 20px 0;">
						<div class="mini-left-container" >
							 <?php $partner_id = DB::table('menus')->where('id',$menu->id)->value('partner_id');
											
											$partner_user_id = DB::table('partners')->where('id',$partner_id)->value('user_id');
											
											$partner_geolocation = DB::table('users')->where('id',$partner_user_id)->value('geolocation');
											
											$user_geolocation = DB::table('users')->where('id',Auth()->user()->id)->value('geolocation');
											
                    $user_arr = preg_split ("/\,/", $user_geolocation); 
										$partner_arr = preg_split ("/\,/", $partner_geolocation);
                   
                    $Lat1 = $user_arr[0];
                    $Long1 =  $user_arr[1];
                    $Lat2 = $partner_arr[0] ;
                    $Long2 = $partner_arr[1];
                    $DistanceKM = 0;
                    $DistanceMeter = 0;

                    if (isset($_POST['Lat1'])) {
                    $Lat1 = $_POST['Lat1'];
                    $Long1 = $_POST['Long1'];
                    $Lat2 = $_POST['Lat2'];
                    $Long2 = $_POST['Long2'];
                    }

                    $R = 6371;

                    $Lat = $Lat2 - $Lat1;
                    $Long = $Long2 - $Long1;

                    $dLat1 = deg2rad($Lat);
                    $dlong1 = deg2rad($Long);

                    $a =
                    sin($dLat1 / 2) * sin($dLat1 / 2) +
                    cos(deg2rad($Lat1)) * cos(deg2rad($Lat2)) *
                    sin($dlong1 / 2) * sin($dlong1 / 2);

                    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

                    $DistanceKM = $R * $c;

                    $DistanceMeter = $DistanceKM * 1000;

                    $DistanceKM = round($DistanceKM, 3);

										$weekday=date("w");
										
										if ($weekday == 0 ||$weekday == 6 ) {
											if ($DistanceKM > 10) {
												$meal_type = "Cold";
												$message = "This Meal is available today";
											}else{
												// sat or sun and distance less than 10 km
												$meal_type = "Hot";
												$message = "This Meal available only from Monday through Friday";
											}
										}else{
											if ($DistanceKM > 10) {
												$meal_type = "Cold";
												$message = "Support over weekend only";
											}else{
												$meal_type = "Hot";
												$message = "This Meal is available today";
											}
										}
							 ?>
							<div class="topright">{{ $meal_type }}</div>
							<div class="topleft"><?php echo $DistanceKM; ?>Km&nbsp;near you</div>
						</div>
						<img class="img-thumbnail" src="{{ asset('uploads/meal/' . $menu->menu_image) }}" style="width:300px; height:200px;" alt="menu images">
						<div>
							<h2 style="margin-bottom: 20px;">{{ $menu->menu_title }}</h2>
							<p>{{ $menu->menu_description }}</p>
							<p style="margin-top: 10px; color:red; text-align:center;" ><?php echo $message; ?></p>
							{{-- <p><a href="{{ route('member#viewMenu', $menu->id) }}">View Menu >>></a></p> --}}
						</div>
					</div>
				</div>
				</a>
				@endforeach
			</div>
		</div>
		<!-- fh5co-blog-section -->
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

