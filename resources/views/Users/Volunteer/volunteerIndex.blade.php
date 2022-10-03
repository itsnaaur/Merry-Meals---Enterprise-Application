@section('title')
    Welcome
@endsection

@extends('Users.Volunteer.layouts.app')

@section('content')
<div class="container m4" >
  
  <h1>Volunteer Details</h1>
<table class="table table-bordered" >

  <thead>
      <tr>
      <th>No.</th>
      <th>Vaccination Status</th>
      <th>Volunteer Duration</th>
      <th>Available Days</th>
      
      </tr>
  </thead>

  <tbody>
     
          <tr>
              <td>1</td>
              <?php 
                $vacc =  $volunteerData-> volunteer_vaccination;
                if ($vacc == 0 ) {
                  $vacc_status = "yes";
                }else{
                  $vacc_status = "no";
                }
              ?>
              <td><?php echo $vacc_status; ?></td>
              <td>{{ $volunteerData-> volunteer_duration }}</td>
              <td>{{ $volunteerData-> volunteer_available  }}</td>
          </tr>
      
  </tbody>
</table>
</div>

@endsection