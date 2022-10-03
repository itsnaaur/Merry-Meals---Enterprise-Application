@section('title')
    Welcome
@endsection

@extends('Users.Member.layouts.app')

@section('content')

<div class="container m4" >
    @if (Session::has('orderCreated'))
		<div class="alert alert-warning animate-box" role="alert">
			{{ Session::get('orderCreated') }}<a href="{{ route('order#showOrderDelivery', Auth()->user()->id) }}"> Click here to view your order delivery status</a>
		</div>
	@endif

    @if($memberData->member_meal_duration == 0)
    <div class="alert alert-warning animate-box" role="alert">
        Please Undergo Reassesment to continue with your 30 days meal plan<a href=""> Click here to apply for reassesment</a>
    </div>
    @endif
    <h1>Member Details</h1>
<table class="table table-bordered" >

    <thead>
        <tr>
        <th>No.</th>
        <th>Caregiver Name</th>
        <th>Caregiver Relation</th>
        <th>Member Medical Condition</th>
        <th>Meal Duration</th>
        {{-- <th>Action</th> --}}
        </tr>
    </thead>

    <tbody>
       
            <tr>
                <td>{{ $memberData->id }}</td>
                <td>{{ $memberData->member_caregiver_name }}</td>
                <td>{{ $memberData->member_caregiver_relation }}</td>
                <td>{{ $memberData->member_medical_condition }}</td>
                <td>{{ $memberData->member_meal_duration }} days left</td>
                
                
                <?php
                    // $string = $memberData->location ;
                    // echo $string;
                    // $str_arr = preg_split ("/\,/", $string); 
                    // print_r($str_arr);
                    // echo $str_arr[0]. "<br/>";
                    // echo $str_arr[1]. "<br/>";

                    // $Lat1 = $str_arr[0];
                    // $Long1 =  $str_arr[1];
                    // $Lat2 = '23.0016554';
                    // $Long2 = '72.631954';
                    // $DistanceKM = 0;
                    // $DistanceMeter = 0;

                    // if (isset($_POST['Lat1'])) {

                    // $Lat1 = $_POST['Lat1'];
                    // $Long1 = $_POST['Long1'];
                    // $Lat2 = $_POST['Lat2'];
                    // $Long2 = $_POST['Long2'];
                    // }

                    // $R = 6371;

                    // $Lat = $Lat2 - $Lat1;
                    // $Long = $Long2 - $Long1;

                    // $dLat1 = deg2rad($Lat);
                    // $dlong1 = deg2rad($Long);

                    // $a =
                    // sin($dLat1 / 2) * sin($dLat1 / 2) +
                    // cos(deg2rad($Lat1)) * cos(deg2rad($Lat2)) *
                    // sin($dlong1 / 2) * sin($dlong1 / 2);

                    // $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

                    // $DistanceKM = $R * $c;

                    // $DistanceMeter = $DistanceKM * 1000;

                    // $DistanceKM = round($DistanceKM, 3) . " KM";
                    // $DistanceMeter = round($DistanceMeter, 0) . " METER";

                    // // echo $DistanceKM;
                    // // echo $DistanceMeter;
                    // if ($DistanceKM > 10) {
                    //     $mealType = "Cold";
                    // }else{
                    //     $mealType = "Hot";
                    // }

                            ?>
                    {{-- <a href="#">
                        <form action="{{ route('member#saveMemberMealPlan', $memberData->id) }}" method="GET" >
                            
                    <input type="hidden" value=<?php echo $DistanceKM; ?> name="member_meal_distance" /> 
                    <input type="hidden" value=<?php echo $mealType; ?> name="member_meal_type" />
                    <button type="submit" class="btn btn-primary" id="edit">
                        Check Distance
                      </button>
                        </form>
    
                    </a> --}}
                
                
            </tr>
        
    </tbody>
</table>
</div>

@endsection